<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function showDashboard(){
        $seo=DB::table('seoproperties')->where('pageName','=','dashboard')->first();
        return view('pages.dashboard',['seo'=>$seo]);
    }
}
