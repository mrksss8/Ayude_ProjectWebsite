<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $daily = Donation::whereDate('created_at', Carbon::today())->sum('amount');
        $weekly = Donation::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->sum('amount');
        $monthly = Donation::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->sum('amount');
        $total = Donation::sum('amount');

        return view('backend.dashboard_pages.home', compact('daily','weekly', 'monthly', 'total'));
    }
}
