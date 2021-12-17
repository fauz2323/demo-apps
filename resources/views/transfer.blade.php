@extends('layouts.app')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <div class="row">
                <div class="col">
                    <strong>Success</strong>
                </div>
            </div>
        </div>
    @endif

    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('Transfer Tron') }}</div>

                    <div class="card-body">
                        <form action="{{ route('ptransfer') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Wallet address</label>
                                <input type="text" class="form-control" name="wallet" placeholder="TRX Address">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Private Key</label>
                                <input type="text" class="form-control" name="key" placeholder="Private Key">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Wallet Tujuan</label>
                                <input type="text" class="form-control" name="tujuan" placeholder="Wallet Tujuan">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Jumlah Transfer</label>
                                <input type="text" class="form-control" name="jumlah" placeholder="Amount TRX">
                            </div>

                            <button type="submit" class="btn btn-primary">Cek Saldo</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
