<?php

namespace App\Repositories\Backend\CitaReparacion;

use App\Models\CitaReparacion\CitaReparacion;
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
        return CitaReparacion::class;
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

    public function getCita($request)
    {
        $cita = $this->model;

        $citas = $cita->select('fecha','hora', 'U.first_name')
                    ->join('users AS U', 'U.id', '=', 'id_cliente')
                    ->where('U.id',1)
                    ->get();
        
        return $citas;
    }


    public function create($request)
    {
        $cita = $this->model;
        $cita->create($request);

        return $cita;
    }

}
