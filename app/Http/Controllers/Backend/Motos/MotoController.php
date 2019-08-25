<?php

namespace App\Http\Controllers\Backend\Motos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Repositories\Backend\Motos\MotoRepository; 

class MotoController extends Controller
{

    protected $motoRepository;

    public function __construct(MotoRepository $motoRepository)
    {
        $this->motoRepository = $motoRepository;
    }

    public function getAllMotos()
    {
        $motos = $this->motoRepository->getAll();
        return $motos->toJson();
    }

    public function getSearchMoto(Request $request)
    {
        $motos = $this->motoRepository->getSearch($request);
        return $motos->toJson();
    }

    public function getAnio()
    {
        $anio = $this->motoRepository->getAnio();

        return $anio->toJson();
    }

    public function getModelo()
    {
        $modelos = $this->motoRepository->getModelo();

        return $modelos->toJson();
    }

    public function getSubmodelo()
    {
        $submodelos = $this->motoRepository->getSubmodelo();

        return $submodelos->toJson();
    }

    public function getTipo()
    {
        $tipos = $this->motoRepository->getTipo();

        return $tipos->toJson();
    }
}
