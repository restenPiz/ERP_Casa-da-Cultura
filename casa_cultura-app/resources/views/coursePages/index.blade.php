@extends('layouts.layout')
@section('content')
    {{-- Inicio da minha pagina --}}
    <div class="row g-lg-3 font-sans-serif">
        <div class="col-lg-8">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Informacao do Curso</h5>
                </div>
                <div class="card-body bg-body-tertiary">
                    <form class="row gx-2">
                        <div class="col-12 mb-3"><label class="form-label" for="course-name">Nome do Curso<span
                                    class="text-danger">*</span></label><input class="form-control" id="course-name"
                                type="text" placeholder="Nome do Curso" required="required" /></div>
                        <div class="col-sm-6 mb-3"><label class="form-label" for="course-category">Category<span
                                    class="text-danger">*</span></label><select class="form-select" id="course-category"
                                name="course-category">
                                <option>Select a category</option>
                                <option>Academia</option>
                                <option>Arts & Crafts</option>
                            </select></div>
                        <div class="col-sm-6 mb-3"><label class="form-label" for="course-subcategory">Sub-category<span
                                    class="text-danger">*</span></label><select class="form-select" id="course-subcategory"
                                name="course-sub-category">
                                <option>Select a sub-category</option>
                                <option>3D & Animation</option>
                                <option>Architectural Design</option>
                            </select></div>
                        <div class="col-12 mb-3"><label class="form-label" for="course-tags">Tags<span
                                    class="text-danger">*</span></label><input class="form-control js-choice"
                                id="course-tags" type="text" name="tags" required="required" size="1"
                                data-placeholder="Select upto 4 tags"
                                data-options='{"removeItemButton":true,"placeholder":true}' /></div>
                        <div class="col-12"><label class="form-label" for="course-description">Course Description<span
                                    class="text-danger">*</span></label>
                            <div class="create-course-description-textarea">
                                <textarea class="tinymce d-none" data-tinymce="data-tinymce" name="course-description" id="course-description"
                                    required="required"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card mb-3 mb-lg-0">
                <div class="card-header bg-body-tertiary">
                    <h5 class="mb-0">Course Goals and Key features</h5>
                </div>
                <div class="card-body"> <label class="mb-3 form-label lh-1" for="course-goal">Course Goals <span
                            class="text-danger">*</span></label>
                    <ul class="list-unstyled mb-0">
                        <li>
                            <div class="d-flex py-3 hover-actions-trigger align-items-center border-top border-300"><span
                                    class="fas fa-grip-lines fs-11 text-secondary me-3"></span>
                                <p class="mb-0 fs-10 me-6">Which tool is preferred for what kind of work.</p>
                                <div class="hover-actions end-0 top-50 translate-middle-y"><button
                                        class="btn btn-link me-3 fs-11 p-0 text-700" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Edit"><span
                                            class="fas fa-pencil-alt"></span></button><button
                                        class="btn btn-tertiary icon-item rounded-3 fs-11 icon-item-sm"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span
                                            class="fas fa-times"></span></button></div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex py-3 hover-actions-trigger align-items-center border-top border-300"><span
                                    class="fas fa-grip-lines fs-11 text-secondary me-3"></span>
                                <p class="mb-0 fs-10 me-6">How to take criticism and make best use of them.</p>
                                <div class="hover-actions end-0 top-50 translate-middle-y"><button
                                        class="btn btn-link me-3 fs-11 p-0 text-700" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Edit"><span
                                            class="fas fa-pencil-alt"></span></button><button
                                        class="btn btn-tertiary icon-item rounded-3 fs-11 icon-item-sm"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><span
                                            class="fas fa-times"></span></button></div>
                            </div>
                        </li>
                    </ul>
                    <div class="position-relative mb-4 focus-actions-trigger"><input class="form-control"
                            id="course-goal" type="text" placeholder="Add another goal..." />
                        <div class="position-absolute end-0 top-50 translate-middle focus-actions"><button
                                class="btn btn-link btn-sm p-0 text-700 me-2"><span
                                    class="fas fa-arrow-right"></span></button></div>
                    </div>
                    <div class="d-flex flex-between-center mb-2"><label class="mb-0 lh-1" for="course-features">Key
                            features<span class="text-danger">*</span></label><button
                            class="btn btn-link btn-sm fw-medium p-0" type="button">Add New</button></div><select
                        class="form-select js-choice" id="course-features" multiple="multiple" size="1"
                        name="features" data-options='{"removeItemButton":true,"placeholder":true}'>
                        <option value="">Select multiple features...</option>
                        <option>Total 13 hours of video lectures</option>
                        <option>12 premium article access</option>
                        <option>11 downloadable resources</option>
                        <option>Mobile, Tab or TV friendly content </option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="sticky-sidebar top-navbar-height d-flex flex-column">
                <div class="card mb-lg-3 order-lg-0 order-1">
                    <div class="card-header py-2 d-flex flex-between-center">
                        <h5 class="mb-0">Publish your Course</h5>
                    </div>
                    <div class="card-footer py-2" id="course-publish-btn">
                        <div class="row flex-between-center g-0">
                            <div class="col-auto"><a class="btn btn-link btn-sm text-secondary fw-medium px-0"
                                    href="#!">Save as Draft</a></div>
                            <div class="col-auto"><button class="btn btn-primary btn-md px-xxl-5 px-4 fw-medium"
                                    type="submit">Publish</button></div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="mb-0">Upload Cover Photo <span data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Add cover photo"><span
                                    class="fas fa-info-circle text-primary fs-9 ms-2"></span></span></h5>
                    </div>
                    <div class="card-body bg-body-tertiary">
                        <form class="dropzone dropzone-single p-0" data-dropzone="data-dropzone"
                            data-options='{"maxFiles":1,"acceptedFiles":"image/*"}'>
                            <div class="fallback"><input type="file" name="file" /></div>
                            <div class="dz-preview dz-preview-single">
                                <div class="dz-preview-cover dz-complete"><img class="dz-preview-img"
                                        src="../../../assets/img/generic/image-file-2.png" alt=""
                                        data-dz-thumbnail="" /><a class="dz-remove text-danger" href="#!"
                                        data-dz-remove="data-dz-remove"><span class="fas fa-times"></span></a>
                                    <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span>
                                    </div>
                                    <div class="dz-errormessage m-1"><span
                                            data-dz-errormessage="data-dz-errormessage"></span></div>
                                </div>
                                <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                            </div>
                            <div class="dz-message fs-10" data-dz-message="data-dz-message"><img class="me-2"
                                    src="../../../assets/img/icons/cloud-upload.svg" width="20"
                                    alt="" /><span class="d-none d-lg-inline">Drag your image here<br />or,
                                </span><span class="btn btn-link p-0 fs-10">Browse</span></div>
                        </form>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="mb-0">Upload Preview Video<span data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Upload preview video"><span
                                    class="fas fa-info-circle text-primary fs-9 ms-2"></span></span></h5>
                    </div>
                    <div class="card-body bg-body-tertiary">
                        <form class="dropzone dropzone-single p-0" data-dropzone="data-dropzone"
                            data-options='{"maxFiles":1,"acceptedFiles":".mp4,.mkv,.avi"}'>
                            <div class="fallback"><input type="file" accept="video/*" /></div>
                            <div class="dz-preview dz-preview-single">
                                <div class="dz-preview-cover dz-complete"><video class="dz-preview-img"
                                        controls="controls" data-dz-thumbnail=""></video><a class="dz-remove text-danger"
                                        href="#!" data-dz-remove="data-dz-remove"><span
                                            class="fas fa-times"></span></a>
                                    <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span>
                                    </div>
                                    <div class="dz-errormessage m-1 text-center"><span
                                            data-dz-errormessage="data-dz-errormessage"></span></div>
                                </div>
                                <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                            </div>
                            <div class="dz-message fs-10" data-dz-message="data-dz-message"><img class="me-2"
                                    src="../../../assets/img/icons/cloud-upload.svg" width="20"
                                    alt="" /><span class="d-none d-lg-inline">Drag your .mp4 or .mkv file
                                    here<br />or, </span><span class="btn btn-link p-0 fs-10">Browse</span></div>
                        </form><label class="form-label mt-3" for="video-link">or, paste youtube link here</label>
                        <div class="position-relative"><input class="form-control" id="video-link" type="url"
                                placeholder="youtu.be/xXxxXxXXxxX" />
                            <div class="position-absolute top-50 end-0 translate-middle-y lh-1 me-2"><span
                                    class="fas fa-link text-400 me-1"></span></div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 mb-lg-0">
                    <div class="card-header">
                        <h5 class="mb-0">Set Pricing</h5>
                    </div>
                    <div class="card-body bg-body-tertiary">
                        <div class="row gx-2">
                            <div class="col-12 mb-3"><label class="form-label" for="base-price">Base Price <span
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Course regular price"><span
                                            class="fas fa-question-circle text-primary fs-10 ms-1"></span></span></label><input
                                    class="form-control" id="base-price" type="text" placeholder="" /></div>
                            <div class="col-12"><label class="form-label" for="discounted-price">Discounted Price <span
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Course discounted price"><span
                                            class="fas fa-question-circle text-primary fs-10 ms-1"></span></span></label><input
                                    class="form-control" id="discounted-price" type="text" placeholder="" /></div>
                            <div class="text-end"> <a class="fs-10 fw-medium" href="#schedule-discount-modal"
                                    data-bs-toggle="modal">Schedule Discount</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card rounded-0 bottom-bar d-lg-none" data-bottom-bar='{"target":"course-publish-btn","breakPoint":"lg"}'>
        <div class="card-body py-2 px-0">
            <div class="container">
                <div class="row flex-between-center g-0">
                    <div class="col-auto"><a class="btn btn-link btn-sm text-secondary fw-medium px-0"
                            href="#!">Save as Draft</a></div>
                    <div class="col-auto"><button class="btn btn-primary btn-md px-5 fw-medium"
                            type="submit">Publish</button></div>
                </div>
            </div>
        </div>
    </div>

    {{-- Fim da minha pagina --}}
@endsection
