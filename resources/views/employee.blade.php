@extends('layouts.app')

@section('assets')
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    
    {!! $dataTable->scripts() !!}

    <script type = "text/javascript">
        $(function() {
            $('#employee-table tbody').on( 'click', '.ai-col-clickable', function () {
                var id = $(this).closest("tr").find(".employee-id").data("id");
                window.location.href = "employees/"+id;
            });
        });
    </script>

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        Employee
                        <a class="btn btn-primary btn-sm" href="{{ route('employees.create') }}" role="button">Add New Employee</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row pt-4">
                        <div class="col-md-12">
                            {!! $dataTable->table(['class' => 'table table-bordered table-hover']) !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
