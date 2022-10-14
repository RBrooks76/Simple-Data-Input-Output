@extends('index')
@section('content')

    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header Mobile-->
                @include('topbar')
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
                                                    <input class="form-control" type="text" placeholder="Search ..." id="kt_datatable_search_query" name="make">
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
                                            <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded" id="kt_datatable">

                                                <table class="datatable-table">
                                                    <thead class="datatable-head">
                                                        <tr class="datatable-row" style="left: 0px;">
                                                            <th data-field="make" class="datatable-cell datatable-cell-sort datatable-cell-sorted">
                                                                <span style="width: 359px;">Make</span>
                                                            </th>
                                                            <th data-field="model" class="datatable-cell datatable-cell-sort">
                                                                <span style="width: 359px;">Model</span></th>
                                                            <th data-field="problem" class="datatable-cell datatable-cell-sort">
                                                                <span style="width: 359px;">Problem</span>
                                                            </th>
                                                            <th data-field="Actions" data-autohide-disabled="false" class="datatable-cell datatable-cell-sort">
                                                                <span style="width: 125px;">Actions</span>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="datatable-body" id="tbl_tbody">

                                                    </tbody>
                                                </table>

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

    <script src="{{asset('assets_metronic/js/pages/crud/ktdatatable/child/data-ajax.js')}}"></script>

    <script>
        var get     = "{{ route('onGetMMP') }}";
        var search  = "{{ route('onSearch') }}";
        var remove  = "{{ route('onDelete') }}";

        // var url_get     = get.replace('http:', 'https:');
        // var url_search  = search.replace('http:', 'https:');
        // var url_delete  = remove.replace('http:', 'https:');

        var url_get = get;
        var url_search = search;
        var url_remove = remove;

        $(document).ready(function(){
            KTDatatableChildRemoteDataDemo.init();
            onGetMMP();
        });

        function onGetMMP(){
            $.ajax({
                type : "POST",
                url : url_get,
                data : {
                    _token  : "{{ csrf_token() }}",
                },
                success:function(response){
                    var html = '';
                    for(var i = 0; i < response.length; i++){
                        html += `<tr class="datatable-row" style="left: 0px;">
                                    <td class="datatable-cell-sorted datatable-cell" data-field="make" aria-label="Make - 2">
                                        <span style="width: 359px;">`+ response[i]['make'] +`</span>
                                    </td>
                                    <td data-field="model" aria-label="Make -2" class="datatable-cell">
                                        <span style="width: 359px;">`+ response[i]['model'] +`</span>
                                    </td>
                                    <td data-field="problem" aria-label="Make - 3" class="datatable-cell">
                                        <span style="width: 359px;">`+ response[i]['problem'] +`</span>
                                    </td>
                                    <td data-field="Actions" data-autohide-disabled="false" aria-label="null" class="datatable-cell">
                                        <span style="overflow: visible; position: relative; width: 125px;">
                                            <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete" onclick="onDelete(`+ response[i]['id'] +`, this)">
                                                <span class="svg-icon svg-icon-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                                                    </g>
                                                    </svg>
                                                </span>
                                            </a>
                                        </span>
                                    </td>
                                </tr>`;
                    }

                    $('#tbl_tbody').html(html);
                }
            });
        }

        function onDelete(id, caller){
            $(caller).parent().parent().parent().hide();
            $.ajax({
                type : "POST",
                url : url_delete,
                data : {
                    _token  : "{{ csrf_token() }}",
                    id : id
                },
                success:function(response){

                }
            });
        }

        function onSearchData(){
            var key = $('#kt_datatable_search_query').val();
            $.ajax({
                type : "POST",
                url : url_search,
                data : {
                    _token  : "{{ csrf_token() }}",
                    key : key
                },
                success:function(response){
                    var html = '';
                    for(var i = 0; i < response.length; i++){
                        html += `<tr class="datatable-row" style="left: 0px;">
                                    <td class="datatable-cell-sorted datatable-cell" data-field="make" aria-label="Make - 2">
                                        <span style="width: 359px;">`+ response[i]['make'] +`</span>
                                    </td>
                                    <td data-field="model" aria-label="Make -2" class="datatable-cell">
                                        <span style="width: 359px;">`+ response[i]['model'] +`</span>
                                    </td>
                                    <td data-field="problem" aria-label="Make - 3" class="datatable-cell">
                                        <span style="width: 359px;">`+ response[i]['problem'] +`</span>
                                    </td>
                                    <td data-field="Actions" data-autohide-disabled="false" aria-label="null" class="datatable-cell">
                                        <span style="overflow: visible; position: relative; width: 125px;">
                                            <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete" onclick="onDelete(`+ response[i]['id'] +`, this)">
                                                <span class="svg-icon svg-icon-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                                                    </g>
                                                    </svg>
                                                </span>
                                            </a>
                                        </span>
                                    </td>
                                </tr>`;
                    }

                    $('#tbl_tbody').html(html);

                }
            });
        }


    </script>


@endsection('content')
