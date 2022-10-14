@extends('Layout.detail_layout')
@section('content')

    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header Mobile-->
                @include('Admin.Layout.topbar')
                <!--end::Header-->

                <!--begin::Container-->
                <div class="d-flex flex-row flex-column-fluid container">
                    <!--begin::Content Wrapper-->
                    <div class="main d-flex flex-column flex-row-fluid">
                        <div class="content flex-column-fluid" id="kt_content">
                            <!--begin::Teachers-->
                            <div class="d-flex flex-row">
                                <!--begin::Content-->
                                <div class="flex-row-fluid ml-lg-8">
                                    <!--begin::Card-->
                                    <div class="card card-custom">
                                        <!--begin::Header-->
                                        <div class="card-header flex-wrap border-0 pt-6 pb-0">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label font-weight-bolder text-dark">Make-Model-Problem</span>
                                            </h3>
                                            <div class="card-toolbar">
                                                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                                                    <!--begin::Trigger Modal-->
                                                    <a href="{{ route('toAdd') }}" class="btn btn-success font-weight-bolder font-size-sm">New One</a>
                                                    <!--end::Trigger Modal-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <div class="row">
                                            <div class="form-group col-lg-3"></div>
                                            <div class="form-group col-lg-6 flex">
                                                <div class="col-8">
                                                    <input class="form-control" type="text" placeholder="Search ..." id="search_key" name="make">
                                                </div>
                                                <div class="col-4">
                                                    <button class="btn btn-success font-weight-bolder font-size-sm" onclick="onSearchData()">Search</button>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-3"></div>
                                        </div>
                                        <!--begin::Body-->
                                        <div class="card-body">
                                            <!--begin::Datatable-->
                                            <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">

                                            </div>
                                            <!--end::Datatable-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Teachers-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--begin::Content Wrapper-->
                </div>
                <!--end::Container-->
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
            <!--end::Svg Icon-->
        </span>
    </div>
    <!--end::Scrolltop-->

    <script src="assets_metronic/js/pages/custom/education/school/data-mmp.js"></script>
    <script src="assets_metronic/js/pages/custom/education/school/data-mmp-search.js"></script>
    <script src="assets_metronic/js/pages/custom/education/school/ajax-server-side.js"></script>


    <script>
        $(document).ready(function(){
           KTDatatableRemoteAjaxDemo.init();
            // KTDatatablesDataSourceAjaxServer.init();
        });

        function onDelete(id, caller){
            $(caller).parent().parent().parent().hide();
            $.ajax({
                type : "POST",
                url : "{{ route('onDelete')}}",
                data : {
                    _token  : "{{ csrf_token() }}",
                    id : id
                },
                success:function(response){

                }
            });
        }

        function onSearchData(){
            // var key = $('#search_key').val();
            // $.ajax({
            //     type : "POST",
            //     url : "{{ route('onSearch')}}",
            //     data : {
            //         _token  : "{{ csrf_token() }}",
            //         key : key
            //     },
            //     success:function(response){

            //     }
            // });

        }
    </script>


@endsection('content')
