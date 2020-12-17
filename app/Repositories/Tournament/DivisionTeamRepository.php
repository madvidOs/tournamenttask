<?php

namespace App\Repositories\Tournament;
use App\Models\Tournament\DivisionTeam as Model;
use App\Repositories\Tournament\Contracts\RepositoryInterface;

class DivisionTeamRepository implements RepositoryInterface
{
    /**
     * @return string
     */
    public function getModelClass()
    {
        return Model::class;
    }

    /**
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return Model::all();
    }

    public static function truncate()
    {
        Model::truncate();
    }

    public static function insert(array $arr)
    {
        Model::insert($arr);
    }
    
}