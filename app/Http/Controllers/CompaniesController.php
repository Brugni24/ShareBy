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
        $cont_ebitda = $this->calculating_ebitda($id, $azienda);
        $cont_ebitdaDebiti = $this->calculating_ebitdaDebiti($id, $azienda);
        $cont_ebitdaVendite = $this->calculating_ebitdaVendite($id, $azienda);

        return view('analisiAziendale', [
            'found' => 1,
            'azienda' => $azienda,
            'cont_ebitda' => $cont_ebitda,
            'cont_ebitdaDebiti' => $cont_ebitdaDebiti,
            'cont_ebitdaVendite' => $cont_ebitdaVendite,
        ]);
    }

    private function calculating_ebitda($id, $azienda) {
        // $storicoroe = json_decode($azienda->roe);

        $media_ebitda = array(555587.6, 351268.4, 61178.4 ,396859.4, 239786.4);
        $varianza_ebitda = array(387415.03, 275317.76, 491233.37, 414224.62, 338561.37);
        $storicoEbitda = array(377.141, 309.499, -1396216, 2028548, 6604546);
        $cont = 0;

        // Calcolare cont
        for ($i = 0; $i < 4; $i++) {
            if ($storicoEbitda[$i] > ($media_ebitda[$i] + 2*$varianza_ebitda[$i])) {
                $cont = $cont + 3;
            }else if (($media_ebitda[$i] + $varianza_ebitda[$i])<$storicoEbitda[$i] && $storico_ebitda[$i]<($media_ebitda[$i] + 2*$varianza_ebitda[$i])) {
                $cont = $cont + 2;
            }else if (($media_ebitda[$i] - 2*$varianza_ebitda[$i])<$storicoEbitda[$i] && $storicoEbitda[$i]<($media_ebitda[$i]-$varianza_ebitda[$i])){
                $cont = $cont + 1;
            }else if (($media_ebitda[$i] - 2*$varianza_ebitda[$i])<$storicoEbitda[$i] && $storicoEbitda[$i]<($media_ebitda[$i]-$varianza_ebitda[$i])) {
                $cont = $cont + 0.75;
            }else if ($storicoEbitda[$i] < ($media_ebitda[$i] - 2*$varianza_ebitda[$i])){
                $cont = $cont + 0.5;
            }
        }
        return $cont;
    }

    private function calculating_ebitdaDebiti($id, $azienda) {
        // $storicoroe = json_decode($azienda->roe);

        $storicoEbitdaDebiti = array(572.71 ,-230.87 ,202.72 ,139.02 ,279.15);
        $media_EbitdaDebiti = array(235.04, -84.83, 90.74 , 58.56 ,115.29);
        $varianza_EbitdaDebiti = array(279.04 , 125.37 , 90.40 , 65.85 , 135.46);
        $media_EbitdaVendite = array(11.14 , 9.308 , 6.74, 11.28 , 9.064);
        $cont = 0;

        // Calcolare cont
        for($i = 0; $i < 4; $i++) {
            if ($storicoEbitdaDebiti[$i] > ($media_EbitdaDebiti[$i] + 2*$varianza_EbitdaDebiti[$i])){
                $cont = $cont+ 3;
            }else if (($media_EbitdaDebiti[$i] + $varianza_EbitdaDebiti[$i])<$storicoEbitdaDebiti[$i] && $storicoEbitdaDebiti[$i]<($media_EbitdaDebiti[$i] + 2*$varianza_EbitdaDebiti[$i])) {
                $cont = $cont + 2;
            }else if (($media_EbitdaDebiti[$i]-$varianza_EbitdaDebiti[$i])<$storicoEbitdaDebiti[$i] &&  $storicoEbitdaDebiti[$i]<($media_EbitdaDebiti[$i] + 2*$varianza_EbitdaDebiti[$i]))
            {
                $cont = $cont + 1 ;
            }else if (($media_EbitdaDebiti[$i] - 2*$varianza_EbitdaDebiti[$i])<$storicoEbitdaDebiti[$i] && $storicoEbitdaDebiti[$i]<($media_EbitdaDebiti[$i]-$varianza_EbitdaDebiti[$i])) {
                $cont = $cont + 0.75;
            } else if ($storicoEbitdaDebiti[$i] < ($media_EbitdaDebiti[$i] - 2*$varianza_EbitdaDebiti[$i])){
                $cont = $cont + 0.5;
            }
        }
        return $cont;
    }

    private function calculating_ebitdaVendite($id, $azienda) {
        // $storicoroe = json_decode($azienda->roe);

        $storicoEbitdaVendite = array(1.17, 1.07, -7.58, 5.24, 8.78);
        $media_EbitdaVendite = array(11.14 , 9.308 , 6.74, 11.28 , 9.064);
        $varianza_EbitdaVendite = array(8.95 , 8.05 , 6.99 , 8.78, 8.74);
        $cont = 0;

        // Calcolare cont
        for($i = 0; $i < 4; $i++) {
            if ($storicoEbitdaVendite[$i] > ($media_EbitdaVendite[$i] + 2*$varianza_EbitdaVendite[$i])){
                $cont = $cont+ 3;
            }else if (($media_EbitdaVendite[$i] + $varianza_EbitdaVendite[$i])<$storicoEbitdaVendite[$i] && $storicoEbitdaVendite[$i]<($media_EbitdaVendite[$i] + 2*$varianza_EbitdaVendite[$i])) {
                $cont = $cont + 2;
            }else if (($media_EbitdaVendite[$i]-$varianza_EbitdaVendite[$i])<$storicoEbitdaVendite[$i] &&  $storicoEbitdaVendite[$i]<($media_EbitdaVendite[$i] + 2*$varianza_EbitdaVendite[$i]))
            {
                $cont = $cont + 1 ;
            }else if (($media_EbitdaVendite[$i] - 2*$varianza_EbitdaVendite[$i])<$storicoEbitdaVendite[$i] && $storicoEbitdaVendite[$i]<($media_EbitdaVendite[$i]-$varianza_EbitdaVendite[$i])) {
                $cont = $cont + 0.75;
            } else if ($storicoEbitdaVendite[$i] < ($media_EbitdaVendite[$i] - 2*$varianza_EbitdaVendite[$i])){
                $cont = $cont + 0.5;
            }
        }
        return $cont;
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