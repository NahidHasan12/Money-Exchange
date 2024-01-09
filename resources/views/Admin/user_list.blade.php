@extends('layouts.Admin')
@section('title','Super Admin')
@section('admin_content')
 <!-- BREADCRUMB-->
 <section class="au-breadcrumb m-t-75">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-breadcrumb-content">
                        <div class="au-breadcrumb-left">
                            <span class="au-breadcrumb-span">You are here:</span>
                            <ul class="list-unstyled list-inline au-breadcrumb__list">
                                <li class="list-inline-item active">
                                    <a href="#">Home</a>
                                </li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item">Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END BREADCRUMB-->

<!-- STATISTIC-->
<section class="statistic">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="product_alert"></div>
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4 class="card-title">User List</h4>
                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#user">Add User</button>
                        </div>

                        <div class="row p-2">
                            <div class="form-group col-3">
                                <label for="">Category</label>
                                <select name="category_id" class="form-control submitable" id="category_id">
                                    <option value="">All</option>
                                </select>
                            </div>
                            <div class="form-group col-3">
                                <label for="brand_id" class="form-label">Brand</label>
                                <select name="brand_id" class="form-control submitable" id="brand_id">
                                    <option value="">All</option>
                                </select>
                            </div>
                            <div class="form-group col-3">
                                <label for="warehouse_id" class="form-label">Warehouse</label>
                                <select name="warehouse_id" class="form-control submitable" id="warehouse_id">
                                    <option value="">All</option>
                                </select>
                            </div>
                            <div class="form-group col-3">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" class="form-control submitable" id="status">
                                    <option value="">All</option>
                                    <option value="1" selected>Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>

                        </div>

                        <div class="card-body">
                            <table class="table table-sm" id="user_list">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>User Name</th>
                                        <th>Image</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Is_Admin</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 <!-- Store Modal -->
 @include('Admin.UserModal.create')

 <!-- Edit Modal -->
 @include('Admin.UserModal.edit')

@endsection

@push('scripts')
<script>

let _token = "{{ csrf_token() }}";
        let table = $('#user_list').DataTable({
        processing: true,
        serverSide: true,
        order: [], //Initial no order
        bInfo: true, //TO show the total number of data
        bFilter: false, //For datatable default search box show/hide
        responsive: true,
        ordering: false,
        lengthMenu: [
            [5, 10, 15, 25, 50, 100, 1000, 10000, -1],
            [5, 10, 15, 25, 50, 100, 1000, 10000, "All"]
        ],
        pageLength: 25, //number of data show per page
        ajax: {
            url: "{{ route('admin.user.getData') }}",
            type: "POST",
            dataType: "JSON",
            data: function(d) {
                d._token = _token
            }
        },
        columns: [
            {data: 'id'},
            {data: 'name'},
            {data: 'image'},
            {data: 'email'},
            {data: 'show_password'},
            {data: 'is_admin'},
            {data: 'phone'},
            {data: 'action'}
        ],
        language: {
            processing: '<img src="{{ asset('/table_loader.gif') }}">',
            emptyTable: '<strong class="text-danger">No Data Found</strong>',
            infoEmpty: '',
            zeroRecords: '<strong class="text-danger">No Data Found</strong>',
            oPaginate: {
                sPrevious: "Previous", // This is the link to the previous page
                sNext: "Next", // This is the link to the next page
            },
            lengthMenu: "_MENU_"
        },
        dom: "<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6' <'float-right pr-15'B>>>" +
        "<'row'<'col-sm-12'tr>>" +
        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'<'float-right pr-15'p>>>",
        buttons: {
            buttons: [
                {
                    text: '<i class="fa fa-refresh" aria-hidden="true"></i> Reload',
                    className: 'btn btn-sm btn-primary',
                    action: function (e, dt, node, config) {
                        dt.ajax.reload(null, false);
                    }
                },
                {
                    extend: 'pdf',
                    title: 'Role List',
                    filename: 'roles_{{ date("d-m-Y") }}',
                    text: '<i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF',
                    className: 'pdfButton btn btn-sm btn-primary',
                    orientation: "landscape",
                    pageSize: "A3",
                    exportOptions: {
                        columns: '0,1,2,3,4'
                    },
                    customize: function(doc) {
                        doc.defaultStyle.alignment = 'center';
                    }
                },
                {
                    extend: 'excel',
                    title: 'Role List',
                    filename: 'roles_{{ date("d-m-Y") }}',
                    text: '<i class="fa fa-file-excel-o" aria-hidden="true"></i> Excel',
                    className: 'excelButton btn btn-sm btn-primary',
                    exportOptions: {
                        columns: '0,1,2,3,4'
                    },
                },
                {
                    extend: 'print',
                    text: '<i class="fa fa-print" aria-hidden="true"></i> Print',
                    className: 'printButton btn btn-sm btn-primary',
                    orientation: "landscape",
                    pageSize: "A3",
                    exportOptions: {
                        columns: '0,1,2,3,4'
                    }
                }
            ]
        }
    });

</script>
@endpush
