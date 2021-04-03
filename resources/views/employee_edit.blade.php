@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Employee</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('employees.update', $employee->id) }}">
                        @method('PUT')

                        @csrf

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="employeeId">Employee ID</label>
                                <input id="employeeId" type="text" class="form-control @error('employeeId') is-invalid @enderror" name="employeeId" value="{{ $employee->employee_id }}" required readonly>
                                @error('employeeId')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="name">name</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $employee->name }}" required autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="btn-group" role="group">
                            <a class="btn btn-secondary" href="{{ route('employees.index') }}" role="button">Back</a>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
