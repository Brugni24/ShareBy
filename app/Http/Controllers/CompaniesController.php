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
        $cont_roe = $this->calculating_roe($id, $azienda);
        $cont_ros = $this->calculating_ros($id, $azienda);
        // $cont_roi = $this->calculating_roe($id, $azienda);
        // $cont_rod = $this->calculating_roe($id, $azienda);
        // $cont_roa = $this->calculating_roe($id, $azienda);
        // $cont_ebtda = $this->calculating_roe($id, $azienda);
        // $cont_ebtda_vendite = $this->calculating_roe($id, $azienda);
        // $cont_ebtda_debiti = $this->calculating_roe($id, $azienda);

        return view('analisiAziendale', [
            'found' => 1,
            'azienda' => $azienda,
            'cont_roe' => $cont_roe,
            'cont_ros' => $cont_ros,
            // 'cont_roi' => $cont_roi,
            // 'cont_rod' => $cont_rod,
            // 'cont_roa' => $cont_roa,
            // 'cont_ebtda' => $cont_ebtda,
            // 'cont_ebtda_vendite' => $cont_ebtda_vendite,
            // 'cont_ebdta_debiti' => $cont_ebtda_debiti,
        ]);
    }

    private function calculating_roe($id, $azienda) {
        $storicoroe = json_decode($azienda->roe);
        $diffstoricoroe = array(0, 0, 0, 0, 0);
    
        // Calcolo del Delta ROE
        for ($i = 3; $i >= 0; $i--) {
            $diffstoricoroe[$i] = $storicoroe[$i] - $storicoroe[$i + 1]; // Calcolo l'incremento medio annuo
        }
    
        $cont = 0; // Lo usiamo come contatore per capire la variazione;

        // Serve per capire per quanto la variazione del Delta è positiva tramite dei valori indicativi;
        for ($i = 0; $i < 4; $i++) {
            if ($diffstoricoroe[$i] > 3) {
                $cont = $cont + 3;
            } elseif ($diffstoricoroe[$i] > 2 && $diffstoricoroe[$i] <= 3) {
                $cont = $cont + 2;
            } elseif ($diffstoricoroe[$i] > 1 && $diffstoricoroe[$i] <= 2) {
                $cont = $cont + 1;
            } elseif ($diffstoricoroe[$i] > 0 && $diffstoricoroe[$i] <= 1) {
                $cont = $cont + 0.5;
            } elseif ($diffstoricoroe[$i] < 0 && $diffstoricoroe[$i] >= -1) {
                $cont = $cont - 0.5;
            } elseif ($diffstoricoroe[$i] < -1 && $diffstoricoroe[$i] >= -2) {
                $cont = $cont - 1;
            } elseif ($diffstoricoroe[$i] < -2 && $diffstoricoroe[$i] >= -3) {
                $cont = $cont - 2;
            } elseif ($diffstoricoroe[$i] < -3) {
                $cont = $cont - 3;
            }
        }
    
        return $cont;
    }

    private function calculating_ros($id, $azienda) {
        $storicoroe = json_decode($azienda->ros);
        $diffstoricoroe = array(0, 0, 0, 0, 0, 0);
    
        // Calcolo del Delta ROE
        for ($i = 4; $i > 0; $i--) {
            $diffstoricoroe[$i] = $storicoroe[$i] - $storicoroe[$i - 1]; // Calcolo l'incremento medio annuo
        }
    
        $cont = 0; // Lo usiamo come contatore per capire la variazione;

        // Serve per capire per quanto la variazione del Delta è positiva tramite dei valori indicativi;
        for ($i = 0; $i < 4; $i++) {
            if ($diffstoricoroe[$i] > 3) {
                $cont = $cont + 3;
            } elseif ($diffstoricoroe[$i] > 2 && $diffstoricoroe[$i] <= 3) {
                $cont = $cont + 2;
            } elseif ($diffstoricoroe[$i] > 1 && $diffstoricoroe[$i] <= 2) {
                $cont = $cont + 1;
            } elseif ($diffstoricoroe[$i] > 0 && $diffstoricoroe[$i] <= 1) {
                $cont = $cont + 0.5;
            } elseif ($diffstoricoroe[$i] < 0 && $diffstoricoroe[$i] >= -1) {
                $cont = $cont - 0.5;
            } elseif ($diffstoricoroe[$i] < -1 && $diffstoricoroe[$i] >= -2) {
                $cont = $cont - 1;
            } elseif ($diffstoricoroe[$i] < -2 && $diffstoricoroe[$i] >= -3) {
                $cont = $cont - 2;
            } elseif ($diffstoricoroe[$i] < -3) {
                $cont = $cont - 3;
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