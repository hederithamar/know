<?php

namespace App\Repositories\Backend\CitaReparacion;

use App\Models\Motos\Moto;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Hash;

/**
 * Class MotoRepository.
 */
class CitaReparacionRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return Moto::class;
    }

    /**
     * @return mixed
     */
    public function getCount() : int
    {
        return $this->model
            ->count();
    }

    /**
     * @param int    $paged
     * @param string $orderBy
     * @param string $sort
     *
     * @return mixed
     */
    public function getActivePaginated($paged = 25, $orderBy = 'created_at', $sort = 'desc') : LengthAwarePaginator
    {
        return $this->model
            ->orderBy($orderBy, $sort)
            ->paginate($paged);
    }

    public function getAll() 
    {
        return $this->model->get();
    }

    public function getSearch($request)
    {
        $motos = $this->model;

        if($request->anio != NULL){
            $motos->where('anio',$request->anio);
        }
        if($request->modelo != NULL){
            $motos->where('modelo',$request->modelo);
        }
        if($request->submodelo != NULL){
            $motos->where('submodelo',$request->submodelo);
        }
        if($request->tipo != NULL){
            $motos->where('tipo',$request->tipo);
        }

        return $motos->get();
    }

    public function getAnio()
    {
        $anio = $this->model->groupBy('anio')->pluck('anio','anio');

        return $anio;
    }

    public function getModelo()
    {
        $modelos = $this->model->groupBy('modelo')->pluck('modelo','modelo');

        return $modelos;
    }

    public function getSubmodelo()
    {
        $submodelos = $this->model->groupBy('submodelo')->pluck('submodelo','submodelo');

        return $submodelos;
    }

    public function getTipo()
    {
        $tipos = $this->model->groupBy('tipo')->pluck('tipo','tipo');

        return $tipos;
    }

}
