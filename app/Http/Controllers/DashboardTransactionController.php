<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardTransactionController extends Controller
{
    public function index()
    {
        return view('pages.seller.dashboard-transactions');
    }

    public function details()
    {
        return view('pages.seller.dashboard-transactions-details');
    }
}
