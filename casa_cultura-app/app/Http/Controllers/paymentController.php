<?php

namespace App\Http\Controllers;

use Mpesa;
use Illuminate\Http\Request;
use Paymentsds\MPesa\Client;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class paymentController extends Controller
{
    public function startPayment(Request $request)
    {
        $transaction = Str::random(8);
        $reference = random_int(1800, 9999);
        $client = new Client([
            'apiKey' => 'ky0q9k4nqr78ske3r9h0ak6vx1mhm5z7',
            //*Api publica(Chave de activacao)
            'publicKey' => 'MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEAmptSWqV7cGUUJJhUBxsMLonux24u+FoTlrb+4Kgc6092JIszmI1QUoMohaDDXSVueXx6IXwYGsjjWY32HGXj1iQhkALXfObJ4DqXn5h6E8y5/xQYNAyd5bpN5Z8r892B6toGzZQVB7qtebH4apDjmvTi5FGZVjVYxalyyQkj4uQbbRQjgCkubSi45Xl4CGtLqZztsKssWz3mcKncgTnq3DHGYYEYiKq0xIj100LGbnvNz20Sgqmw/cH+Bua4GJsWYLEqf/h/yiMgiBbxFxsnwZl0im5vXDlwKPw+QnO2fscDhxZFAwV06bgG0oEoWm9FnjMsfvwm0rUNYFlZ+TOtCEhmhtFp+Tsx9jPCuOd5h2emGdSKD8A6jtwhNa7oQ8RtLEEqwAn44orENa1ibOkxMiiiFpmmJkwgZPOG/zMCjXIrrhDWTDUOZaPx/lEQoInJoE2i43VN/HTGCCw8dKQAwg0jsEXau5ixD0GUothqvuX3B9taoeoFAIvUPEq35YulprMM7ThdKodSHvhnwKG82dCsodRwY428kg2xM/UjiTENog4B6zzZfPhMxFlOSFX4MnrqkAS+8Jamhy1GgoHkEMrsT5+/ofjCx0HjKbT5NuA2V/lmzgJLl3jIERadLzuTYnKGWxVJcGLkWXlEPYLbiaKzbJb2sYxt+Kt5OxQqC1MCAwEAAQ==',

            'serviceProviderCode' => '171717',
        ]);

        $paymentData = [
            'from' => '258' . $request->numero,
            'reference' => $reference,
            'transaction' => $transaction,
            'amount' => $request->valor,           // Amount
        ];

        $result = $client->receive($paymentData);

        if ($result->success) {
            
            $user = auth()->user();
            $user->status = 'Activo';
            $user->save();

            $user->courses()->attach($request->id_course);

            Alert::success('Pagamento Concluído', 'O pagamento foi realizado com sucesso e você foi vinculado ao curso.');

            return back();
        } else {
            Alert::error('Falha!', 'Erro ao concretizar o pagamento');
            return back();
        }
    }
}
