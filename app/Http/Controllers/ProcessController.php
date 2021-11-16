<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Segment;
use Maatwebsite\Excel\Facades\Excel;
use Persona;

class ProcessController extends Controller
{
  public function __construct()
    {
    }
  
  // create user
  public function addUser(Request $request)
  {

    if ($request->input('password') == $request->input('password_confirmation')) {


      if ($request->has('ci') && $request->has('name') && $request->has('ape_pat') && $request->has('ape_mat') && $request->has('type') && $request->has('rol')) {

        $persona = new \App\Persona;
        $persona->ci = $request->input('ci');
        $persona->nombre = $request->input('name');
        $persona->apellido_paterno = $request->input('ape_pat');
        $persona->apellido_materno = $request->input('ape_mat');
        $persona->save();
        $user = new \App\User;
        $per = \App\Persona::select('id')->where('ci', $request->input('ci'))->first();
        $user->persona_id = $per->id;
        $user->tipo = $request->input('type');
        $user->rol = $request->input('rol');
        $user->email=$request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return redirect('medical-center/user')->with('message_success', 'Se registró el usuario correctamente.');
      } else {
        return redirect('medical-center/user')->with('message_error', 'Debe llenar todos los campos.')->withInput();
      }
    }else{
      return redirect('medical-center/user')->with('message_error', 'Contraseña No Coincide.')->withInput();
    }
  }


  //create ecografia
  public function addEcografia(Request $request)
  {
    if ($request->has('name')) {
      $ecografia = new \App\Ecografia;
      $ecografia->tipo = $request->input('name');
      $ecografia->save();
      return redirect('medical-center/ultrasound')->with('message_success', 'Se registró la ecografia correctamente.');
    } else {
      return redirect('medical-center/ultrasound')->with('message_error', 'Debe llenar todos los campos.')->withInput();
    }
  }
  //create prestacion
  public function addPrestacion(Request $request)
  {
    if ($request->has('name')) {
      $prestacion = new \App\Prestacion;
      $prestacion->tipo = $request->input('name');
      $prestacion->save();
      return redirect('medical-center/benefit')->with('message_success', 'Se registró la prestacion correctamente.');
    } else {
      return redirect('medical-center/benefit')->with('message_error', 'Debe llenar todos los campos.')->withInput();
    }
  }
  //create diagnostico
  public function addDiagnostico(Request $request)
  {
    if ($request->has('name')) {
      $diagnostico = new \App\Diagnostico;
      $diagnostico->tipo = $request->input('name');
      $diagnostico->ecografia_id = $request->input('ecografia_id');
      $diagnostico->save();
      return redirect('medical-center/diagnosis')->with('message_success', 'Se registró el diagnostico correctamente.');
    } else {
      return redirect('medical-center/diagnosis')->with('message_error', 'Debe llenar todos los campos.')->withInput();
    }
  }

  //crea cita
  public function addCitaMedica(Request $request)
  {
    if ($request->has('ci') && $request->has('name') && $request->has('ape_pat') && $request->has('ape_mat') && $request->has('edad')) {
      $persona = new \App\Persona;
      $persona->ci = $request->input('ci');
      $persona->nombre = $request->input('name');
      $persona->apellido_paterno = $request->input('ape_pat');
      $persona->apellido_materno = $request->input('ape_mat');
      $persona->save();
      $paciente = new \App\Paciente;
      $per = \App\Persona::select('id')->where('ci', $request->input('ci'))->first();
      $paciente->persona_id = $per->id;
      $paciente->edad = $request->input('edad');
      $paciente->save();
      $cita = new \App\Cita;
      $pac = \App\Paciente::select('id')->where('persona_id', $per->id)->first();
      $cita->paciente_id = $pac->id;
      $cita->ecografia_id = $request->input('ecografia_id');
      $cita->ecografias = json_encode($request->input('ecografia'));
      $cita->prestacion_id = $request->input('prestacion_id');
      $cita->fecha = $request->input('fecha');
      $cita->hora = $request->input('hora');
      $cita->estado = "Por Atender";
      $cita->save();
      return redirect('medical-center/medical-appointment')->with('message_success', 'Se registró la cita medica correctamente.');
    } else {
      return redirect('medical-center/medical-appointment')->with('message_error', 'Debe llenar todos los campos.')->withInput();
    }
  }
  //crea historial clinico
  public function addHistorialClinico(Request $request)
  {
    if ($request->has('id')) {
      date_default_timezone_set('America/Virgin');
      $dt = date("Y-m-d");
      $cita = \App\Cita::where('id',$request->input('id'))->first();
      $historial_clinico = new \App\Historial_Clinico;
      $historial_clinico->paciente_id = $cita->paciente_id;
      $historial_clinico->fecha=$dt;
      $historial_clinico->observacion = $request->input('observacion');
      $historial_clinico->causas = json_encode($request->input('causa'));
      $historial_clinico->save();
    
      return redirect('medical-center/home')->with('message_success', 'Se registró el historial clinico correctamente.');
    } else {
      return redirect('medical-center/home')->with('message_error', 'Debe llenar todos los campos.')->withInput();
    }
  }
  //edit
  public function postEditEcografia(Request $request)
  {

    if ($request->has('name')) {
      $ecografia = \App\Ecografia::find($request->input('id'));
      if (!$ecografia) {
        return redirect('medical-center/ultrasound')->with('message_error', 'No se pudo encontrar el ID, actualice la página e intente nuevamente.')->withInput();
      }
      $ecografia->tipo = trim($request->input('name'));
      $ecografia->save();
      return redirect('medical-center/ultrasound')->with('message_success', 'Se actualizó la ecografia correctamente.');
    } else {
      return redirect('medical-center/ultrasound')->with('message_error', 'Debe llenar todos los campos.')->withInput();
    }
  }

  public function postEditPrestacion(Request $request)
  {

    if ($request->has('name')) {
      $prestacion = \App\Prestacion::find($request->input('id'));
      if (!$prestacion) {
        return redirect('medical-center/benefit')->with('message_error', 'No se pudo encontrar el ID, actualice la página e intente nuevamente.')->withInput();
      }
      $prestacion->tipo = trim($request->input('name'));
      $prestacion->save();
      return redirect('medical-center/benefit')->with('message_success', 'Se actualizó la prestacion correctamente.');
    } else {
      return redirect('medical-center/benefit')->with('message_error', 'Debe llenar todos los campos.')->withInput();
    }
  }

  public function postEditDiagnosis(Request $request)
  {

    if ($request->has('name')) {
      $diagnosis = \App\Diagnostico::find($request->input('id'));
      if (!$diagnosis) {
        return redirect('medical-center/diagnosis')->with('message_error', 'No se pudo encontrar el ID, actualice la página e intente nuevamente.')->withInput();
      }
      $ecografia = \App\Ecografia::find($request->input('ecografia_id'));
      if (!$ecografia) {
        return redirect('medical-center/diagnosis')->with('message_error', 'No se pudo encontrar el ID, actualice la página e intente nuevamente.')->withInput();
      }
      $diagnosis->ecografia_id = $request->input('ecografia_id');
      $diagnosis->tipo = trim($request->input('name'));
      $diagnosis->save();
      return redirect('medical-center/diagnosis')->with('message_success', 'Se actualizó el diagnostico correctamente.');
    } else {
      return redirect('medical-center/diagnosis')->with('message_error', 'Debe llenar todos los campos.')->withInput();
    }
  }
  public function cancelappointment(Request $request)
  {
    $cita = \App\Cita::find($request->input('id'));
    if (!$cita) {
      return redirect('medical-center/home')->with('message_error', 'No se pudo encontrar el ID, actualice la página e intente nuevamente.')->withInput();
    }
    $cita->estado = "Cancelado";
    $cita->save();
    return redirect('medical-center/home')->with('message_success', 'Cita Medica Cancelada.')->withInput();
  }

  public function attendedappointment(Request $request)
  {
    $cita = \App\Cita::find($request->input('id'));
    if (!$cita) {
      return redirect('medical-center/home')->with('message_error', 'No se pudo encontrar el ID, actualice la página e intente nuevamente.')->withInput();
    }
    $cita->estado = "Atendido";
    $cita->save();
    return redirect('medical-center/home')->with('message_success', 'Cita Terminada.')->withInput();
  }
  public function postEditMedicalAppointment(Request $request)
  {
    $cita = \App\Cita::find($request->input('id'));
    if (!$cita) {
      return redirect('medical-center/medical-appointment')->with('message_error', 'No se pudo encontrar el ID, actualice la página e intente nuevamente.')->withInput();
    }

    $persona = \App\Persona::select('id')->where('ci', $request->input('ci'))->first();
    $paciente = \App\Paciente::select('id')->where('persona_id', $persona->id)->first();
    $paciente->edad = $request->input('edad');
    $paciente->save();
    $persona->ci = $request->input('ci');
    $persona->nombre = $request->input('name');
    $persona->apellido_paterno = $request->input('ape_pat');
    $persona->apellido_materno = $request->input('ape_mat');
    $persona->save();
    return redirect('medical-center/medical-appointment')->with('message_success', 'Se actualizó la cita medica correctamente.')->withInput();
  }
  public function postEditUser(Request $request)
  {
    $user = \App\User::find($request->input('id'));
    if (!$user) {
      return redirect('medical-center/medical-appointment')->with('message_error', 'No se pudo encontrar el ID, actualice la página e intente nuevamente.')->withInput();
    }
    $persona = \App\Persona::select('id')->where('id', $user->persona_id)->first();
    $persona->ci = $request->input('ci');
    $persona->nombre = $request->input('name');
    $persona->apellido_paterno = $request->input('ape_pat');
    $persona->apellido_materno = $request->input('ape_mat');
    $persona->save();
    return redirect('medical-center/user')->with('message_success', 'Se actualizó el usuario correctamente.')->withInput();
  }
 
}
