<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Company;
use DB;

class CompaniesController extends Controller
{
    public function index(){
        return view('analisiAziendale', [
            'found' => 0,
        ]);
    }
    
    public function search($id){
        $azienda = DB::table('companies')->where('id', $id)->first();
        return view('analisiAziendale', [
            'found' => 1,
            'azienda' => $azienda,
        ]);
    }

    public function getCompanyLogo($id, $companyName)
    {
        $apiKey = 'sk_81cc2648a12da525a6a4b452e685ce78';
        $url = "https://logo.clearbit.com/{$companyName}.com?size=200&format=jpg";
        
        $response = Http::withHeaders([
            'Authorization' => "Bearer $apiKey",
        ])->get($url);

        if ($response->successful()) {
            // Qui puoi ritornare il logo o gestire la risposta in base alle tue esigenze
            return $response->body();
        } else {
            // Gestione degli errori
            return null;
        }
    }
}