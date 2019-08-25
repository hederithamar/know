<?php

namespace App\Repositories\Backend\CentroServicio;

use App\Models\CentroServicio\CentroServicio;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Hash;

/**
 * Class CentroServicioRepository.
 */
class CentroServicioRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return CentroServicio::class;
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

    

}
