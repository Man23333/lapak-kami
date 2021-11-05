<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use App\Transaction;

class DashboardController extends Controller
{
    public function index()
    {
        $pelanggan = User::count();
        $pendapatan = Transaction::sum('total_price');
        $transaksi = Transaction::count();

        return view('pages.admin.dashboard', [
            'pelanggan' => $pelanggan,
            'pendapatan' => $pendapatan,
            'transaksi' => $transaksi
        ]);
    }
}
