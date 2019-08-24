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
}
