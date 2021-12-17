@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('Cek Saldo') }}</div>

                    <div class="card-body">
                        <form action="{{ route('pcek') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Wallet address</label>
                                <input type="text" class="form-control" name="wallet" placeholder="TRX Address">
                            </div>

                            <button type="submit" class="btn btn-primary">Cek Saldo</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <div class="row">
                <div class="col">
                    <strong>Saldo Anda : {{ $message }} TRX </strong>
                </div>
            </div>
        </div>
    @endif
@endsection
