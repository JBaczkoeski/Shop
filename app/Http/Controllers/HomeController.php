<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\UrlGenerator|\Illuminate\Foundation\Application|string
     */
    public function index()
    {
        return url('/');
    }

    public function adminHome(): View
    {
        return view('admin.dashboard');
    }

    public function warehouseHome(): View
    {
        return view('warehouse.dashboard');
    }
}
