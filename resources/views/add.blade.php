@extends('index')
@section('content')

<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <!--begin::Container-->
            <div class="d-flex flex-row flex-column-fluid container">
                <!--begin::Content Wrapper-->
                <div class="main d-flex flex-column flex-row-fluid" style="margin-top: 200px">

                    <form method ="POST" action="{{ route('onAddData') }}">
                        @csrf
                        <div class="row" style="justify-content: center">
                            <div class="col-lg-9">
                                <div class="card card-custom example example-compact">
                                    <div class="card-header">
                                        <h3 class="card-title">Add New Data</h3>
                                        <div class="card-toolbar">
                                            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                                                <a href="{{ route('toList') }}" class="btn btn-success font-weight-bolder font-size-sm">To List</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 my-2 customer-info">
                                        <div class="row">
                                            <div class="form-group col-lg-3"></div>
                                            <div class="form-group col-lg-6">
                                                <label class="col-6 col-form-label">Make?=</label>

                                                <div class="col-10">
                                                    <input class="form-control" type="text" id="example-text-input" name="make">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-3"></div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-3"></div>
                                            <div class="form-group col-lg-6">
                                                <label class="col-6 col-form-label">Model?=</label>
                                                <div class="col-10">
                                                    <input class="form-control" type="text" id="example-text-input" name="model">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-3"></div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-3"></div>
                                            <div class="form-group col-lg-6">
                                                <label class="col-6 col-form-label">Problem?=</label>
                                                <div class="col-10">
                                                    <input class="form-control" type="text" id="example-text-input" name="problem">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-3"></div>
                                        </div>
                                    </div>
                                    <div class="order-submit-button">
                                        <button type="submit" class="btn btn-primary mr-2">Add</button>
                                        <a href="{{route('toHome')}}" class="btn mr-2 order-cancel-btn">Cancel</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                    <!--end::Content-->
                </div>
                <!--begin::Content Wrapper-->
            </div>
            <!--end::Container-->
            <!--begin::Footer-->
            <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                <!--begin::Container-->
                <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <!--begin::Copyright-->
                    <div class="text-dark order-2 order-md-1">
                        <span class="text-muted font-weight-bold mr-2"></span>
                        <a class="text-white text-hover-primary"></a>
                    </div>
                    <!--end::Copyright-->
                    <!--begin::Nav-->
                    <div class="nav nav-dark order-1 order-md-2">
                        <a class="nav-link pr-3 pl-0 text-muted text-hover-primary"></a>
                        <a class="nav-link px-3 text-muted text-hover-primary"></a>
                        <a class="nav-link pl-3 pr-0 text-muted text-hover-primary"></a>
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop">
    <span class="svg-icon">
        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <polygon points="0 0 24 0 24 24 0 24" />
                <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
            </g>
        </svg>
    </span>
</div>


    <script src="{{ asset('assets_metronic/js/pages/crud/ktdatatable/base/data-ajax.js')}}"></script>
    <script src="{{ asset('assets_metronic/plugins/custom/ckeditor/ckeditor-classic.bundle.js')}}"></script>
    <script src="{{ asset('assets_metronic/js/pages/crud/forms/editors/ckeditor-classic.js')}}"></script>
    <script>
        $(document).ready(function(){
            setTimeout(noneDisplayAlert, 500);
        })

        function noneDisplayAlert(){
            $('#alertDanger').css('display', 'none');
        }


    </script>
@endsection('content')
