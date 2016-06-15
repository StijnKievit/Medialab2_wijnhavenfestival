<?php
/**
 * Created by PhpStorm.
 * User: Justin
 * Date: 1-6-2016
 * Time: 23:08
 */

namespace App\Repositories;

use App\Horeca;

class HorecaRepository
{
    /**
     * 
     * handel's all the database interactions for horeca
     * 
     */
    public function getAllHoreca()
    {
        return Horeca::where('show_index' , 0)->get();
    }

    public function getHoreca($id)
    {
        return Horeca::where('id', $id)->get();
    }
    public function getHorecaByZeebonkId($id){
        return Horeca::select('id', 'naam', 'beschrijving', 'afbeelding')->where('zeebonk', $id)->get();
    }
}

