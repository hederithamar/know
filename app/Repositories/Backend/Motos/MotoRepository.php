<?php

namespace App\Repositories\Backend\Motos;

use App\Models\Motos\Moto;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Hash;

/**
 * Class MotoRepository.
 */
class MotoRepository extends BaseRepository
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

}
