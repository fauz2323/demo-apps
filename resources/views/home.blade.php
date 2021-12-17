@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <a href="{{ route('adds') }}" class="btn btn-primary">Create Wallet</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <div class="row">
                <div class="col">
                    <strong>Wallet Address : {{ $message->data->address }} </strong>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <strong>Privat Key : {{ $message->data->privateKey }} </strong>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <strong class="text-danger">Tolong Disimpan Di tempat yang aman</strong>
                </div>
            </div>
        </div>
    @endif
@endsection
