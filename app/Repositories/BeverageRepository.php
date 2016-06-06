<?php
/**
 * Created by PhpStorm.
 * User: Justin
 * Date: 1-6-2016
 * Time: 23:08
 */

namespace App\Repositories;

use App\Beverage;

class BeverageRepository
{
    public function getAllBeverage()
    {
        return Beverage::select('id', 'naam', 'type')->get();
    }

    public function getBeverage($id)
    {
        return Beverage::where('id', $id)->get();
    }

    public function getZeebonkBeverages($id)
    {
        return Beverage::where('zeebonk_id', $id)->get();
    }
}
