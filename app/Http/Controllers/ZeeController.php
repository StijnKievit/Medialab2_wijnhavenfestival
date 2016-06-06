<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Repositories\BeverageRepository;
use App\Repositories\HorecaRepository;
use App\Repositories\BevHorRepository;
use App\Repositories\ZeebonkRepository;

class ZeeController extends Controller
{
    //
    protected $horeca;
    protected $beverage;
    protected $bevhor;
    protected $zeebonk;


    public function __construct(HorecaRepository $horeca, BeverageRepository $beverage, BevHorRepository $BevHor, ZeebonkRepository $zeebonk)
    {
        $this->horeca = $horeca;
        $this->beverage = $beverage;
        $this->bevhor = $BevHor;
        $this->zeebonk = $zeebonk;
    }

    public function getRestaurants(Request $request, $id)
    {
        return $this->horeca->getHoreca($id);
    }

    public function getAllRestaurants(Request $request)
    {
        return $this->horeca->getAllHoreca();
    }

    public function getBeverages(Request $request, $id)
    {
        return $this->beverage->getBeverage($id);
    }

    public function getAllBeverages(Request $request)
    {
        return $this->beverage->getAllBeverage();
    }

    public function getHoreca(Request $request, $id)
    {
        return $this->bevhor->horecaByBeverageId($id);
    }

    public function getAllZeebonkTypes(Request $request){
        return $this->zeebonk->getAllZeebonks();
    }

    public function getZeebonk(Request $request, $id){
        return $this->zeebonk->getZeebonkById($id);
    }
    public function getZeebonkBeverages(Request $request, $id){
        return $this->beverage->getZeebonkBeverages($id);
    }
}
