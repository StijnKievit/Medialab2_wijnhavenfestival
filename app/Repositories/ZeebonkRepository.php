<?php
/**
 * Created by PhpStorm.
 * User: Justin
 * Date: 1-6-2016
 * Time: 23:08
 */

namespace App\Repositories;

use App\Zeebonk;

class ZeebonkRepository
{
    /**
     *
     * handel's all the database interactions for zeebonk
     *
     */

    public function getZeebonkById($id)
    {
        return Zeebonk::where('id', $id)->get();
    }

    public function getAllZeebonks()
    {
        return Zeebonk::select('id', 'naam', 'max_value', 'min_value')->get();
    }

    public function getZeebonkValues()
    {
        return Zeebonk::select('id', 'max_value', 'min_value')->get();
    }
    public function maxValue(){
        return Zeebonk::whereRaw('max_value = (select max(`max_value`) from zeebonks)')->get();
    }
}
