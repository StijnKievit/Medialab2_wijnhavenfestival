<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Repositories\BeverageRepository;
use App\Repositories\HorecaRepository;
use App\Repositories\BevHorRepository;
use App\Repositories\ZeebonkRepository;
use App\Repositories\QuestionsRepository;
use Jenssegers\Agent\Agent;

class ZeeController extends Controller
{
    //
    protected $horeca;
    protected $beverage;
    protected $bevhor;
    protected $zeebonk;
    protected $question;
    protected $questionArray;
    protected $beverageArray;
    protected $agent;
    protected $view;

    public function __construct(HorecaRepository $horeca, BeverageRepository $beverage, BevHorRepository $BevHor, ZeebonkRepository $zeebonk, QuestionsRepository $question)
    {
        $this->horeca = $horeca;
        $this->beverage = $beverage;
        $this->bevhor = $BevHor;
        $this->zeebonk = $zeebonk;
        $this->question = $question;
        $this->questionArray = array();
        $this->beverageArray = array();
        $this->agent = new Agent();
        if ($this->agent->isDesktop()) {
            $this->view = 'desktop.';
        } else {
            $this->view = 'mobile.';
        }
    }

    /**
     * returns a array with a restaurant based on the id given
     * @param Request $request
     * @param $id
     * Array horeca by $id
     */
    public function getRestaurants(Request $request, $id)
    {
        return $this->horeca->getHoreca($id);
    }

    /**
     * returns a array with all the restaurants available
     * @param Request $request
     * @return mixed
     */
    public function getAllRestaurants(Request $request)
    {
        return $this->horeca->getAllHoreca();
    }

    /**
     * return a array with all consumtions available
     * @param Request $request
     * @param $id
     * @return mixed
     */
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

    public function getAllZeebonkTypes(Request $request)
    {
        return $this->zeebonk->getAllZeebonks();
    }

    public function getZeebonk(Request $request, $id)
    {
        return $this->zeebonk->getZeebonkById($id);
    }

    public function getZeebonkBeverages(Request $request, $id)
    {
        return $this->beverage->getZeebonkBeverages($id);
    }
    //returns a jsonArray with all the questions and the answers for it
    public function getQuestions()
    {
        $questions = $this->question->getQuestions();
//        var_dump($questions);
        foreach ($questions as $item) {
//            echo $item['question'];
            $answers = $this->question->getAnswers($item['id']);
            array_push($this->questionArray, array('vraag' => $item['question'], 'antwoorden' => $answers));
        }
        return json_encode($this->questionArray);
    }

    //asks for the questions and sends it to the view
    public function getQuestion()
    {
        return view($this->view . 'questions.index', [
            'questions' => $this->getQuestions(),
        ]);
    }
    //this processes the score of the user, and gives the corosponding data to the view
    public function getZeebonkByValue($value)
    {
        $values = $this->zeebonk->getZeebonkValues();
        $temp = $this->zeebonk->maxValue();
        if($value >$temp[0]['max_value'] ){
            $value = $temp[0]['max_value'];
        }
        foreach ($values as $item) {
            if ($value <= $item['max_value'] && $value >= $item['min_value']) {
                return view($this->view . 'questions.result',
                    [
                        'zeebonk' => $this->zeebonk->getZeebonkById($item['id']),
                        'horeca' => $this->horeca->getHorecaByZeebonkId($item['id'])
                    ]
                );
            }
        }
    }
    //returns a jsonarray with all the food for the restaurant given to it
    protected function getFoodByHorId($id)
    {
        $BeveragesIds = $this->bevhor->beverageByHorecaId($id);

        foreach ($BeveragesIds as $item) {
            array_push($this->beverageArray, $this->beverage->getBeverage($item['beverage_id']));
        }
        return json_encode($this->beverageArray);
    }

    //gathers all the data needed for the map view. and pushes that with the view
    public function mapInfo($id)
    {
        $temp = $this->horeca->getHoreca($id);
        return view($this->view . 'map.index', [
            'horeca' => $temp,
            'gerechten' => $this->getFoodByHorId($id),
            'zeebonk' => $this->zeebonk->getZeebonkById($temp[0]['zeebonk'])
        ]);
    }

    //pulls horeca data from the repository and returns the desktop welcome view
    public function getDesktopIndex()
    {
        return view('desktop.welcome', [
            'horeca' => $this->horeca->getAllHoreca(),
        ]);
    }
}
