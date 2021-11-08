@extends('backend.layouts.app')

@section('title', 'Student Shift')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('student.fee.amount') }}">Fee Amount</a></li>
    <li class="breadcrumb-item active" aria-current="page"><span>view</span></li>
    <li class="breadcrumb-item active" aria-current="page">
        <span>{{ $stu_fee_cat_amount_details[0]['fee_cat']['name'] }}</span>
    </li>
@endsection
@section('style')
    <style>
        .tabelbox {
            border-radius: 5px;
            background: #0e1726;
        }

    </style>
@endsection
@section('content')


    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing ">

            <div class="row mt-5">
                <div class="col-lg-12 ">
                    <div class=" d-flex justify-content-between p-3 statbox tabelbox box box-shadow">
                        <h4>Student Fee Amount Details</h4>

                        <div class="dt-buttons"> <a href="{{ route('student.fee.amount.create') }}"
                                class="dt-button btn btn-primary btn-sm toggle-vis mb-1" tabindex="0"
                                aria-controls="show-hide-col"><span>Add New</span></a>
                        </div>
                    </div>

                </div>


            </div>
            <div class="row layout-top-spacing" id="cancel-row">


                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <table id="zero-config" class="table dt-table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th width="20%">SL</th>
                                    <th width="60%">Class Name</th>
                                    <th width="20%" class="no-content">Fee</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($stu_fee_cat_amount_details as $key => $detail)

                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $detail['student_class']['name'] }}</td>
                                        <td> {{ $detail->amount }}</td>

                                    </tr>
                                @endforeach

                            </tbody>

                        </table>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!--  END CONTENT AREA  -->

@endsection
@section('script')
    <script src="{{ asset('admin') }}/plugins/table/datatable/datatables.js"></script>
    <script>
        $('#zero-config').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                "<'table-responsive'tr>" +
                "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7
        });

    </script>
@endsection
