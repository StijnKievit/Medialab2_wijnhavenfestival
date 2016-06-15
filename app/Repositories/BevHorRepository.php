<?php
/**
 * Created by PhpStorm.
 * User: Justin
 * Date: 1-6-2016
 * Time: 23:08
 */

namespace App\Repositories;

use App\BevHor;

class BevHorRepository
{
    /**
     *
     * handel's all the database interactions for the bev_hor table
     *
     */

    public function horecaByBeverageId($id){
        return BevHor::where('beverage_id', $id)->get();
    }
    public function beverageByHorecaId($id){
        return BevHor::where('horeca_id', $id)->get();
    }
}
