<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Absensi;

class FrontendController extends Controller
{
  public function index()
    {
         $b = Absensi::with('Siswa')->get();
        return view('layouts.frontend',compact('b'));
    }
     public function bacalengkap($id)
    {
        $b=Absensi::find($id);
        return view('frontend.baca',compact('b'));
    }
}
