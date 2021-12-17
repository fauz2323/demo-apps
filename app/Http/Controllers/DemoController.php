<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DemoController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function CreateWallet()
    {
        $ress = Http::get('https://paseo.live/ak12/New');
        $jsonData = json_decode($ress);
        return redirect()->route('home')->with(['success' => $jsonData]);
    }

    public function transferView()
    {
        return view('transfer');
    }

    public function transfer(Request $request)
    {
        $ress = Http::asForm()->post('https://paseo.live/ak12/SendTron', [
            'senderAddress' => $request->wallet,
            'senderPrivateKey' => $request->key,
            'receiverAddress' => $request->tujuan,
            'amount' => $request->jumlah,
        ]);

        $jsonData = json_decode($ress);

        return redirect()->route('transfer')->with(['success' => $jsonData]);
    }

    public function saldo()
    {
        return view('saldo');
    }

    public function CekSaldo(Request $request)
    {
        $ress = Http::asForm()->post('https://paseo.live/ak12/CekSaldo', [
            'walletAddress' => $request->wallet
        ]);

        $jsonData = json_decode($ress);
        $ballance = $jsonData->data->trxbalance / 1000000;

        return redirect()->route('cek')->with(['success' => $ballance]);
    }
}
