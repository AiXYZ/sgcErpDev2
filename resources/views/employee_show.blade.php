@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Employee</div>
                <div class="card-body">
                    <form method="HEAD" action="{{ route('employees.index') }}">
                        @csrf

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="employeeId" class="form-plain-label">Employee ID</label>
                                <input id="employeeId" type="text" class="form-control-plaintext form-plain-input" name="employeeId" value="{{ $employee->employee_id }}" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-plain-label">Name</label>
                                <input id="name" type="text" class="form-control-plaintext form-plain-input" name="name" value="{{ $employee->name }}" readonly>
                            </div>
                        </div>

                        <div class="btn-group" role="group">
                            <a class="btn btn-secondary" href="{{ route('employees.index') }}" role="button">Back</a>
                            <a class="btn btn-primary" href="{{ route('employees.edit', $employee->id) }}" role="button">Edit</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
