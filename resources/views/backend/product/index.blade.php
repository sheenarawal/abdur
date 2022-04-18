@extends('layouts.backend')

@section('','')
@section('backend_content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Product /</span> List</h4>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="float-start">
                            <h5 class="mb-0">Products</h5>
                        </div>
                        <div class="float-end">
                            <a href="{{route('backend.product.create')}}" class="btn btn-primary">Add Product</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="product_table" class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>Sr.No.</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>status</th>
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
    <!-- / Content -->

@stop
@push('backend_css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.css"/>

@endpush
@push('backend_script')
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#product_table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('backend.product.index') }}",
                buttons: [
                    {
                        extend: 'collection',
                        text: 'Export',
                        buttons: [
                            'copy',
                            'excel',
                            'csv',
                            'pdf',
                            'print'
                        ]
                    }
                ],
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'title', name: 'title'},
                    {data: 'price', name: 'price'},
                    {data: 'category', name: 'category'},
                    {data: 'status', name: 'status'},
                    {data: 'action', name: 'action'},
                ]
            });
        } );
    </script>
@endpush
