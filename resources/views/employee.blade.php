@extends('layouts.app')

@section('assets')
    <!-- DataTables -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

    {!! $dataTable->scripts() !!}

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Employee</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('employees.store') }}">
                        @csrf

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="employeeId">Employee ID</label>
                                <input id="employeeId" type="text" class="form-control @error('employeeId') is-invalid @enderror" name="employeeId" value="{{ old('employeeId') }}" required autofocus>
                                @error('employeeId')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="name">name</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>

                    <div class="row pt-4">
                        <div class="col-md-12">
                            {!! $dataTable->table() !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
