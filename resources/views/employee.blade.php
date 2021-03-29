@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Employee</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('employee') }}">
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

                    @if($employees->count())
                        <ul class="list-group list-group-flush">
                            @foreach ($employees as $employee)
                                <li class="list-group-item">{{ $employee->employee_id }} - {{ $employee->name }}</li>
                            @endforeach
                        </ul>
                    @else
                        <p class="d-flex justify-content-center"> There are no employees </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
