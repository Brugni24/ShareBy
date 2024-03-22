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
        $cont_roe = $this->calculating_roe($id, $azienda);
        $cont_roi = $this->calculating_roi($id, $azienda);
        $cont_ros = $this->calculating_ros($id, $azienda);
        $cont_roa = $this->calculating_roa($id, $azienda);
        $cont_rod = $this->calculating_rod($id, $azienda);

        return view('analisiAziendale', [
            'found' => 1,
            'azienda' => $azienda,
            'cont_ebitda' => $cont_ebitda,
            'cont_ebitdaDebiti' => $cont_ebitdaDebiti,
            'cont_ebitdaVendite' => $cont_ebitdaVendite,
            'cont_roe' => $cont_roe, 
            'cont_roi'=> $cont_roi,
            'cont_ros' => $cont_ros, 
            'cont_roa' => $cont_roa,
            'cont_rod' => $cont_rod,
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

    // INDICI REDDITIVITA' (2 parte algortimo)
    private function calculating_roe($id, $azienda) {
        // $storicoroe = json_decode($azienda->roe);

        $media_roe = array(5.8 , -2.04, -1.30 , 6.98 , 7.95);
        $varianza_roe = array(5.43, 11.78 ,	17.24 ,9.80 , 15.02);
        $storicoroe = array(7.45 , 7.15 , 3.59 , 15.04 , 10.29) ; 
        $cont = 0;
    
        for($i=0;$i<4;$i++) {
            if ($storicoroe[$i] > ($media_roe[$i] + 2*$varianza_roe[$i])) {
                $cont = $cont + 3;
            }else if (($media_roe[$i] + $varianza_roe[$i])<$storicoroe[$i] && $storicoroe[$i] <($media_roe[$i] + 2*$varianza_roe[$i])) {
                $cont = $cont + 2;
            }else if (($media_roe[$i] - 2*$varianza_roe[$i])<$storicoroe[$i] && $storicoroe[$i] <($media_roe[$i]-$varianza_roe[$i])){
                $cont = $cont + 1;
            }else if (($media_roe[$i] - $varianza_roe[$i])<$storicoroe[$i] && $storicoroe[$i] <($media_roe[$i]+$varianza_roe[$i])){
                $cont = $cont + 0.75;
            }else if ($storicoroe[$i] < ($media_roe[$i] - 2*$varianza_roe[$i])){
                $cont = $cont + 0.5;
            }
        }
        return $cont;
   }

    private function calculating_roi($id, $azienda) {
        // $storicoroe = json_decode($azienda->roi);
        
        $media_roi = array(5.8 , -2.04, -1.30 , 6.98 , 7.95);
        $varianza_roi = array(5.43, 11.78 ,	17.24 ,9.80 , 15.02);
        $storicoroi = array(7.45 , 7.15 , 3.59 , 15.04 , 10.29) ; 
        $cont = 0;

        for($i=0;$i<4;$i++) {
            if ($storicoroi[$i] > ($media_roi[$i] + 2*$varianza_roi[$i])) {
                $cont = $cont + 3;
            }else if (($media_roi[$i] + $varianza_roi[$i])<$storicoroi[$i] && $storicoroi[$i] <($media_roi[$i] + 2*$varianza_roi[$i])) {
                $cont = $cont + 2;
            }else if (($media_roi[$i] - 2*$varianza_roi[$i])<$storicoroi[$i] && $storicoroi[$i] <($media_roi[$i]-$varianza_roi[$i])){
                $cont = $cont + 1;
            }else if (($media_roi[$i] - $varianza_roi[$i])<$storicoroi[$i] && $storicoroi[$i] <($media_roi[$i]+$varianza_roi[$i])){
                $cont = $cont + 0.75;
            }else if ($storicoroi[$i] < ($media_roi[$i] - 2*$varianza_roe[$i])){
                $cont = $cont + 0.5;
            }
        }
        return $cont;
    }

    private function calculating_ros($id, $azienda) {
        // $storicoroe = json_decode($azienda->ros);
    
        $media_ros = array(5.8 , -2.04, -1.30 , 6.98 , 7.95);
        $varianza_ros = array(5.43, 11.78 ,	17.24 ,9.80 , 15.02);
        $storicoros = array(7.45 , 7.15 , 3.59 , 15.04 , 10.29) ; 
        $cont = 0;
    
        for($i=0;$i<4;$i++) {
            if ($storicoros[$i] > ($media_ros[$i] + 2*$varianza_ros[$i])) {
                $cont = $cont + 3;
            }else if (($media_ros[$i] + $varianza_ros[$i])<$storicoros[$i] && $storicoros[$i] <($media_ros[$i] + 2*$varianza_ros[$i])) {
                $cont = $cont + 2;
            }else if (($media_ros[$i] - 2*$varianza_ros[$i])<$storicoros[$i] && $storicoros[$i] <($media_ros[$i]-$varianza_ros[$i])){
                $cont = $cont + 1;
            }else if (($media_ros[$i] - $varianza_ros[$i])<$storicoros[$i] && $storicoros[$i] <($media_ros[$i]+$varianza_ros[$i])){
                $cont = $cont + 0.75;
            }else if ($storicoros[$i] < ($media_ros[$i] - 2*$varianza_ros[$i])){
                $cont = $cont + 0.5;
            }
        }
        return $cont;
    }

    private function calculating_roa($id, $azienda) {
        // $storicoroe = json_decode($azienda->roa);
    
        $media_roa = array(5.8 , -2.04, -1.30 , 6.98 , 7.95);
        $varianza_roa = array(5.43, 11.78 ,	17.24 ,9.80 , 15.02);
        $storicoroa = array(7.45 , 7.15 , 3.59 , 15.04 , 10.29) ; 
        $cont = 0;
    
        for($i=0;$i<4;$i++) {
            if ($storicoroa[$i] > ($media_roa[$i] + 2*$varianza_roa[$i])) {
                $cont = $cont + 3;
            }else if (($media_roa[$i] + $varianza_roa[$i])<$storicoroa[$i] && $storicoroa[$i] <($media_roa[$i] + 2*$varianza_roa[$i])) {
                $cont = $cont + 2;
            }else if (($media_roa[$i] - 2*$varianza_roa[$i])<$storicoroa[$i] && $storicoroa[$i] <($media_roa[$i]-$varianza_roa[$i])){
                $cont = $cont + 1;
            }else if (($media_roa[$i] - $varianza_roa[$i])<$storicoroa[$i] && $storicoroa[$i] <($media_roa[$i]+$varianza_roa[$i])){
                $cont = $cont + 0.75;
            }else if ($storicoroa[$i] < ($media_roa[$i] - 2*$varianza_roa[$i])){
                $cont = $cont + 0.5;
            }
        }
        return $cont;
    }
    
    private function calculating_rod($id, $azienda) {
        // $storicoroe = json_decode($azienda->rod);
    
        $media_rod = array(5.8 , -2.04, -1.30 , 6.98 , 7.95);
        $varianza_rod = array(5.43, 11.78 ,	17.24 ,9.80 , 15.02);
        $storicorod = array(7.45 , 7.15 , 3.59 , 15.04 , 10.29) ; 
        $cont = 0;
    
        for($i=0;$i<4;$i++) {
            if ($storicorod[$i] > ($media_rod[$i] + 2*$varianza_rod[$i])) {
                $cont = $cont + 3;
            }else if (($media_rod[$i] + $varianza_rod[$i])<$storicorod[$i] && $storicorod[$i] <($media_rod[$i] + 2*$varianza_rod[$i])) {
                $cont = $cont + 2;
            }else if (($media_rod[$i] - 2*$varianza_rod[$i])<$storicorod[$i] && $storicorod[$i] <($media_rod[$i]-$varianza_rod[$i])){
               $cont = $cont + 1;
            }else if (($media_rod[$i] - $varianza_rod[$i])<$storicorod[$i] && $storicorod[$i] <($media_rod[$i]+$varianza_rod[$i])){
                $cont = $cont + 0.75;
            }else if ($storicorod[$i] < ($media_rod[$i] - 2*$varianza_rod[$i])){
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

    public function confronto(Request $request)
    {
        $azienda1 = $request->post('azienda1');
        $azienda2 = $request->post('azienda2');
        $dati1 = DB::table('companies')->where('name', $azienda1)->get();
        $dati2 = DB::table('companies')->where('name', $azienda2)->get();;
        $prompt = "Sei un consulente finanziario virtuale, hai come obiettivo quello di aiutare l'utente a comprendere al meglio il mercato finanziario e 
        le performance delle aziende. In particolare, la tua funzionalità è quella di ricevere in input i dati finanziari di due aziende ed 
        eseguire un'analisi di confronto approfondita dove esplori diversi indicatori finanziari per confrontare le due aziende ed eseguire 
        un'analisi che sia sempre impostata nello stesso modo così che sia facilmente confrontabile.\n
        I dati delle due aziende su 5 anni:\n
        Azienda 1:\n".$dati1.
        "Azienda 2:\n".$dati2.
        "Segui il seguente schema logico per l'analisi di confronto tra le due aziende:\n
        1.	Ricavi delle vendite e redditività\n
        -	I ricavi delle vendite ('totale_ricavi') rappresentano l'entità delle entrate derivanti dalle vendite di prodotti o servizi.\n
        -	Correla i ricavi delle vendite ('totale_ricavi') con l'ebitda vendite ('ebitda_vendite') (%), che indica la percentuale di ricavi trasformati in utile lordo operativo.\n
        -	Una correlazione positiva tra questi due indici potrebbe indicare una maggiore efficienza operativa nell'ottenere profitti dai ricavi generati.\n
        2. EBITDA e redditività operativa:\n
        -	L'ebitda rappresenta l'utile prima degli interessi, delle imposte, dell'ammortamento e degli accantonamenti.\n
        -	Correla l'ebitda ('ebitda') con la redditività delle vendite ('ros') (%), che misura la percentuale di utile netto generato rispetto alle vendite.\n
        -	Una correlazione positiva potrebbe indicare una maggiore efficienza nell'utilizzo dell'utile operativo lordo per generare profitti rispetto alle vendite.\n
        3. Utile Netto e redditività del capitale:\n
        -	L'utile netto ('utile_netto') rappresenta l'utile totale dopo tutte le spese e le imposte.\n
        -	Correla l'utile netto ('utile_netto') con la redditività del capitale proprio ('roe') (%), che misura il rendimento generato dal capitale degli azionisti.\n
        -	Una correlazione positiva suggerisce che un maggiore utile netto si traduce in un maggiore ritorno sugli investimenti degli azionisti.\n
        4. Totale Attività e redditività del totale attivo:\n
        -	Il totale attività ('totale_attivita') rappresenta il valore totale degli asset detenuti dall'azienda.\n
        -	Correla il totale attività ('totale_attivita') con la redditività del totale attivo ('roa') (%), che misura la redditività generata da tutti gli asset dell'azienda.\n
        -	Una correlazione positiva può indicare un utilizzo efficiente degli asset per generare profitti.\n
        5. Patrimonio Netto e indebitamento:\n
        -	Il patrimonio netto ('patrimonio_netto') rappresenta il valore residuo degli attivi aziendali dopo aver detratto i debiti.\n
        -	Correla il patrimonio netto ('patrimonio_netto') con il rapporto di indebitamento ('debt_equity') che indica il rapporto tra il debito e il capitale proprio dell'azienda.\n
        -	Una correlazione negativa potrebbe indicare che un aumento del debito è associato a una diminuzione del capitale proprio.\n
        6. Posizione finanziaria netta e capacità di rimborso:\n
        -	La posizione finanaziaria ('posizione_finanziaria') indica la differenza tra le attività finanziarie e i debiti finanziari dell'azienda.\n
        -	Correla la posizione finanaziaria ('posizione_finanziaria') con il ebitda debiti ('ebitda_debiti') ratio che misura il numero di anni necessari per ripagare il debito utilizzando l'ebitda.\n
        -	Una correlazione negativa può suggerire che un aumento del debito rispetto all'ebitda potrebbe aumentare il rischio di insolvenza.\n
        7. Rotazione del capitale investito e redditività degli investimenti:\n
        -	La rotazione del capitale investito ('rotazione_capitale_investito') misura l'efficienza con cui l'azienda utilizza il proprio capitale investito per generare entrate.\n
        -	Correla la rotazione del capitale investito ('rotazione_capitale_investito') con la redditività del totale attivo ('roa') (%), che misura la redditività generata da tutti gli asset dell'azienda.\n
        -	Una correlazione positiva indica che una maggiore efficienza nell'utilizzo del capitale investito si traduce in una maggiore redditività degli asset.\n
        8. Considerazioni qualitative:\n
        -	Integrare l'analisi degli indici finanziari con altri fattori qualitativi che possono influenzare le performance aziendali, come la posizione nel mercato, la strategia aziendale, la qualità del prodotto, la reputazione del marchio, ecc.\n
        9. Conclusioni e raccomandazioni:\n
        -	Trarre conclusioni sull'analisi condotta e formulare eventuali raccomandazioni o suggerimenti per migliorare le prestazioni finanziarie e la solidità aziendale delle due aziende.\n
        ########\n
        Di seguito è fornito un esempio di come dev'essere condotta l'analisi, seguilo sia per i contenuti presenti sia per il modo in cui sono disposti. Inoltre, restituisci una risposta in formato HTML seguendo la formattazione dell'esempio qui di seguito, cerca di fare in modo che il testo sia leggibile, mandando a capo il testo quando serve.\n
        ESEMPIO:\n
        <h4>1. Ricavi delle vendite e redditività:</h4>
        <p>I ricavi delle vendite riflettono l'entità delle entrate generatrici di reddito di un'azienda, mentre l'EBITDA/Vendite (%) fornisce un'indicazione della capacità dell'azienda di convertire i ricavi in utile lordo operativo. Una correlazione positiva potrebbe suggerire una maggiore efficienza operativa nell'ottenere profitti dai ricavi. ENI ha ricavi più elevati rispetto ad A2A, ma la redditività delle vendite (ROS) negativa in alcuni periodi per ENI indica una minore efficienza nell'uso dei ricavi rispetto ad A2A, che mantiene una ROS generalmente positiva.</p>
        <h4>2. EBITDA e redditività operativa:</h4>
        <p>L'EBITDA rappresenta l'utile operativo lordo prima di interessi, imposte, ammortamenti e accantonamenti. Correlando l'EBITDA con la redditività delle vendite (ROS), possiamo valutare l'efficienza nell'utilizzo dell'utile operativo lordo per generare profitti dalle vendite. Sebbene ENI mostri valori EBITDA più elevati, A2A dimostra una maggiore efficienza nella trasformazione dei ricavi in utile operativo, come indicato da una percentuale di EBITDA/Vendite (%) più alta.</p>
        <h4>3. Utile netto e redditività del capitale:</h4>
        <p>L'Utile netto rappresenta l'utile totale dopo spese e imposte, mentre la Redditività del capitale proprio (ROE) misura il rendimento generato dal capitale degli azionisti. Sebbene ENI mostri un utile netto superiore, A2A ha una ROE generalmente più costante e spesso più alta, suggerendo una gestione più efficiente del capitale proprio.</p>
        <h4>4. Totale Attività e redditività del totale attivo:</h4>
        <p>Il Totale Attività rappresenta il valore totale degli asset dell'azienda, mentre la Redditività del totale attivo (ROA) misura la redditività generata da tali asset. ENI mostra un totale attività più elevato, ma una ROA inferiore rispetto ad A2A, suggerendo una minore efficienza nell'utilizzo degli asset per generare profitti.</p>
        <h4>5. Patrimonio Netto e indebitamento:</h4>
        <p>Il patrimonio netto rappresenta il valore residuo degli attivi dopo aver detratto i debiti. ENI ha un rapporto debito/patrimonio inferiore rispetto ad A2A in tutti i periodi, indicando una maggiore stabilità finanziaria e una minore dipendenza dal finanziamento esterno.</p>
        <h4>6. Posizione finanziaria netta e capacità di rimborso:</h4>
        <p>La posizione finanziaria netta indica la differenza tra le attività finanziarie e i debiti finanziari dell'azienda. ENI mostra una posizione finanziaria netta generalmente negativa, indicando una minore capacità di rimborso dei debiti rispetto ad A2A, che ha spesso una posizione finanziaria netta positiva.</p>
        <h4>7. Rotazione del capitale investito e redditività degli investimenti:</h4>
        <p>La rotazione del capitale investito misura l'efficienza con cui l'azienda utilizza il proprio capitale investito per generare entrate. ENI mostra una maggiore rotazione del capitale investito, ma una ROA inferiore rispetto ad A2A, suggerendo una maggiore efficienza negli investimenti da parte di A2A.</p>
        <h4>8. Considerazioni qualitative:</h4>
        <p>È importante considerare altri fattori qualitativi che possono influenzare le performance aziendali oltre agli indici finanziari analizzati. La posizione nel mercato, la strategia aziendale, la qualità del prodotto e la reputazione del marchio sono tutti elementi che possono avere un impatto significativo sulle prestazioni e sulla solidità aziendale. Ad esempio, un'azienda con una forte reputazione del marchio potrebbe godere di maggiore fiducia da parte dei clienti e degli investitori, mentre una strategia aziendale ben definita potrebbe portare a una maggiore crescita e stabilità nel lungo periodo.</p>
        <h4>9. Conclusioni e raccomandazioni:</h4>
        <p>Dall'analisi condotta, emerge che entrambe le aziende presentano punti di forza e aree di miglioramento. ENI mostra una maggiore efficienza nell'utilizzo del proprio capitale e una minore dipendenza dal finanziamento esterno, mentre A2A dimostra una maggiore efficienza nella trasformazione dei ricavi in utile operativo e una posizione finanziaria netta più solida. Tuttavia, entrambe le aziende dovrebbero prestare attenzione a migliorare la redditività delle vendite e la redditività del totale attivo, poiché sono indicatori cruciali della performance aziendale. Inoltre, è consigliabile monitorare da vicino il rapporto debito/patrimonio e il rapporto debito/EBITDA per garantire una sostenibilità finanziaria a lungo termine. Dal confronto tra SARAS e Telecom, emerge che SARAS mostra una maggiore stabilità finanziaria rispetto a Telecom. Questa conclusione si basa su diversi fattori finanziari rilevanti. Innanzitutto, SARAS presenta un rapporto debito/patrimonio generalmente più basso rispetto a Telecom in tutti i periodi analizzati. Questo indica una minore dipendenza da finanziamenti esterni e una maggiore solidità finanziaria per SARAS, che potrebbe offrire una maggiore tranquillità agli investitori. Inoltre, SARAS ha mostrato una posizione finanziaria netta più variabile rispetto a Telecom, ma con tendenza a una posizione netta meno negativa, suggerendo una maggiore capacità di rimborso dei debiti nel lungo periodo. Questi indicatori finanziari combinati indicano che SARAS potrebbe essere una scelta più solida per gli investitori che cercano stabilità finanziaria e una gestione prudente del debito.</p>
        ";

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' .env('CHAT_GPT_KEY'),
            'Content-Type' => 'application/json',
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => "gpt-3.5-turbo",
            'messages' => [
                [
                    'role' => 'user', 
                    'content' => $prompt,
                ]
            ],
            'max_tokens' => 2500,
        ]);

        $responseObj = json_decode($response->getBody(), true);
        $botResponse = isset($responseObj['choices'][0]['message']['content']) ? $responseObj['choices'][0]['message']['content'] : 'Errore, risposta non valida.';

        return $botResponse;
    }

}