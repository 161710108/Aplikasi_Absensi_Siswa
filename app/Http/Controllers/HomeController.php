<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laratrust\LaratrustFacade as Laratrust; 
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
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        if (Laratrust::hasRole('Admin')) return $this->adminDashboard();
        if (Laratrust::hasRole('Member')) return $this->memberDashboard();

        return view('home');
    }

protected function adminDashboard()
{
return view('admin.home');
}
 protected function memberDashboard()
    {
       return view('user.home');
    }
}
