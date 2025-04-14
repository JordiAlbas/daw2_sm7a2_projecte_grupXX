<?php
  
namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;
use App\Models\User;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use PDF;
    
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $users = User::get();
    
        $data = [
            'title' => 'Welcome to liga.com',
            'date' => date('m/d/Y'),
            'users' => $users
        ]; 
              
        $pdf = PDF::loadView('myPDF', $data);
       
        return $pdf->download('users.pdf');
    }
}
