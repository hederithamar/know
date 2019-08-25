<?php

namespace App\Http\Controllers\Backend\CitaReparaciones;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Repositories\Backend\CitaReparacion\CitaReparacionRepository; 

class CitaReparacionController extends Controller
{

    protected $citaReparacionRepository;

    public function __construct(CitaReparacionRepository $citaReparacionRepository)
    {
        $this->citaReparacionRepository = $citaReparacionRepository;
    }

    public function getCitaCliente(Request $request)
    {
        $citas = $this->citaReparacionRepository
                    ->getCita($request);
        
        return $citas->toJson();
    }

    public function create(Request $request)
    {
        $cita = $this->citaReparacionRepository
            ->create($request->all());

        if($cita):
            $data = [
                "success" => "ok", 
                "msg" => "Cita registrada exitosamente!"
            ];
        else:
            $data = [
                "success" => "error", 
                "msg" => "Ocurrio un error al registrar la cita!"
            ];
        endif;

        return json_encode($data);
    }
}
