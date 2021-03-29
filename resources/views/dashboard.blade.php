@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <div class="list-group list-group-flush">
                        <a href="{{ url('/') }}" class="list-group-item">Dashboard</a>
                        <a href="{{ route('request') }}" class="list-group-item">Request</a>
                        <a href="{{ route('employee') }}" class="list-group-item">Employee</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
