<?php
  
namespace App\Http\Controllers;
  
use App\Models\Etude;
use App\Models\Demande;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF($demande_id)
    {
        $demande = Demande::where('id','=',$demande_id)->first();
        $etude = Etude::where('id','=',$demande->etude_id)->first();
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y'),
            'demande' => $demande,
            'etude' => $etude
        ];
          
        $pdf = PDF::loadView('/demande/decisionPDF', $data);
    
        return $pdf->download('itsolutionstuff.pdf');
    }
}