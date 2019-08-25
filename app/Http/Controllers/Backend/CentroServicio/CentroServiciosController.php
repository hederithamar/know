<?php

namespace App\Http\Controllers\Backend\CentroServicio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Repositories\Backend\CentroServicio\CentroServicioRepository; 


class CentroServiciosController extends Controller
{
    protected $centroServicioRepository;

    public function __construct(CentroServicioRepository $centroServicioRepository)
    {
        $this->centroServicioRepository = $centroServicioRepository;
    }

    public function getCentros()
    {
        $citas = $this->centroServicioRepository
                    ->getAll();
        
        return $citas->toJson();
    }
}
