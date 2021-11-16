<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Segment;
use Maatwebsite\Excel\Facades\Excel;
use App\Ecografia;
use App\Diagnostico;
use App\User;
use App\Persona;
use App\Cita;
use App\Historial_Clinico;
use App\Prestacion;
use App\Paciente;
use Barryvdh\DomPDF\Facade as PDF;


class MainController extends Controller
{
    public function __construct()
    {
    }

    //INICIO
    public function home()
    {

        if (auth()->check()) {
            date_default_timezone_set('America/Virgin');
            $a = date('h:i:s', time());
            $dt = date("Y-m-d");
            //por atender
            $cita = Cita::where('estado', 'Por Atender')->where('fecha', $dt)->orderBy('id', 'ASC')->get();
            //cancelados
            $citas = Cita::where('estado', 'cancelado')->where('fecha', $dt)->orderBy('id', 'ASC')->get();
            // diagnisticos por una ecografia
            $diag = Diagnostico::all();
            return view('medical-center.home', ['items' => $cita, 'items2' => $citas, 'items5' => $diag]);
        } else {
            return redirect('/');
        }
    }
    //REPORTES
    public function report()
    {
        return view('medical-center.report');
    }

    //CITA MEDICA
    public function medical_appointment()
    {
        if (auth()->check()) {
            $ecografia = Ecografia::all();
            $prestacion = Prestacion::all();
            date_default_timezone_set('America/Virgin');
            $dt = date("Y-m-d");
            $cita = Cita::where('estado', 'Por Atender')->where('fecha', $dt)->orderBy('id', 'ASC')->get();
            return view('medical-center.medical_appointment', ['items' => $cita, 'items3' => $ecografia, 'items6' => $prestacion]);
        } else {
            return redirect('/');
        }
    }
    //LOGIN

    //CONTROL MEDICO
    public function medical_control()
    {
        if (auth()->check()) {
            date_default_timezone_set('America/Virgin');
            $dt = date("Y-m-d");
            $historial_clinico = Historial_Clinico::where('fecha', $dt)->orderBy('id', 'ASC')->paginate(5);
            return view('medical-center.medical_control', ['items' => $historial_clinico]);
        } else {
            return redirect('/');
        }
    }
    //Usuario
    public function user()
    {
        if (auth()->check()) {
            $user = User::where('tipo', 'medico')->orWhere('tipo', 'secretaria')->get();
            return view('medical-center.user', ['items' => $user]);
        } else {
            return redirect('/');
        }
    }
    //Diagnostico
    public function diagnosis()
    {
        if (auth()->check()) {
            $ecografia = Ecografia::all();
            $diagnostico = Diagnostico::paginate(5);
            return view('medical-center.diagnosis', ['items' => $ecografia, 'items2' => $diagnostico]);
        } else {
            return redirect('/');
        }
    }
    //ECOGRAFIA
    public function ultrasound()
    {
        if (auth()->check()) {
            $ecografia = Ecografia::paginate(5);
            return view('medical-center.ultrasound', ['items' => $ecografia]);
        } else {
            return redirect('/');
        }
    }

    //PRESTACION
    public function benefit()
    {
        if (auth()->check()) {
            $prestacion = Prestacion::paginate(5);
            return view('medical-center.benefit', ['items' => $prestacion]);
        } else {
            return redirect('/');
        }
    }
    public function create_medical_appointment($id)
    {
        $cita = Cita::find($id);
        $paciente = Paciente::where('id', $cita->paciente_id)->first();
        $persona = Persona::where('id', $paciente->persona_id)->first();
        $ecografia = Ecografia::whereIn('id', json_decode($cita->ecografias))->get();
        $prestacion = Prestacion::where('id', $cita->prestacion_id)->first();
        $causas = Diagnostico::whereIn('ecografia_id', json_decode($cita->ecografias))->get();


        return view('medical-center.create_medical', ['items' => $persona, 'items1' => $cita, 'items2' => $ecografia, 'items3' => $prestacion, 'items4' => $causas]);
    }
    public function reportpdf($id)
    {

        $file=Persona::find($id);
       
        //$persona= Persona::all();
        $pdf= PDF::loadView('medical-center/pdf',compact('file'));
        
        return $pdf->stream('file');
        
       
    }
}
