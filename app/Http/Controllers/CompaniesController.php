<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use DB;

class CompaniesController extends Controller
{
    public function index(){
        return view('dashboard', [
            'found' => 0,
        ]);
    }
    
    public function search($id){
        $azienda = DB::table('companies')->where('id', $id)->first();
        return view('dashboard', [
            'found' => 1,
            'azienda' => $azienda,
        ]);
    }
}