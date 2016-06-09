<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Repositories\BeverageRepository;
use App\Repositories\HorecaRepository;
use App\Repositories\BevHorRepository;
use App\Repositories\ZeebonkRepository;
use App\Repositories\QuestionsRepository;

class ZeeController extends Controller
{
    //
    protected $horeca;
    protected $beverage;
    protected $bevhor;
    protected $zeebonk;
    protected $question;
    protected $questionArray;

    public function __construct(HorecaRepository $horeca, BeverageRepository $beverage, BevHorRepository $BevHor, ZeebonkRepository $zeebonk, QuestionsRepository $question)
    {
        $this->horeca = $horeca;
        $this->beverage = $beverage;
        $this->bevhor = $BevHor;
        $this->zeebonk = $zeebonk;
        $this->question = $question;
        $this->questionArray = array();
    }

    /**
     * @param Request $request
     * @param $id
     * @return Array horeca by $id
     */
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

    public function getAllZeebonkTypes(Request $request)
    {
        return $this->zeebonk->getAllZeebonks();

        $zeebonken = $this->zeebonk->getAllZeebonks();

        foreach ($zeebonken as $item) {
            var_dump($item['id']);
            return $this->bevhor->horecaByBeverageId($item['id']);
        }
    }

    public function getZeebonk(Request $request, $id)
    {
        return $this->zeebonk->getZeebonkById($id);

    }

    public function getZeebonkBeverages(Request $request, $id)
    {
        return $this->beverage->getZeebonkBeverages($id);
    }

    public function getQuestions()
    {
        $questions = $this->question->getQuestions();
//        var_dump($questions);
        foreach ($questions as $item) {
//            echo $item['question'];
            $answers = $this->question->getAnswers($item['id']);
//            $answerArray = array();
//            foreach ($answers as $answer){
//                array_push($answerArray, $answer['answer']);
//            }

            array_push($this->questionArray, array('vraag' => $item['question'], 'antwoorden' => $answers));
        }
        return json_encode($this->questionArray);
    }

    public function getQuestion()
    {
        return view('questions.index', [
            'questions' => $this->getQuestions(),
        ]);
    }

    public function getZeebonkByValue($value)
    {
        $values = $this->zeebonk->getZeebonkValues();

        foreach ($values as $item) {
            if ($value <= $item['max_value'] && $value >= $item['min_value']) {
                return view('questions.result',
                    [
                        'zeebonk' => $this->zeebonk->getZeebonkById($item['id']),
                        'gerechten' => $this->beverage->getZeebonkBeverages($item['id'])
                    ]
                );
            }
        }
    }
}
