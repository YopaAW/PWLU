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

                    <p>{{ __('You are logged in!') }}</p>
                    <p>{{ __('Selamat Datang di Aplikasi Booking Hotel Indah') }}</p>
                    <p>{{ __('Silakan Cari Kamar Hotel yang Anda Inginkan') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
