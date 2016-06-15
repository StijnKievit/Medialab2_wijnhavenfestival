<?php
/**
 * Created by PhpStorm.
 * User: Justin
 * Date: 1-6-2016
 * Time: 23:08
 */

namespace App\Repositories;

use App\Question;
use App\Answer;
class QuestionsRepository
{
    /**
     *
     * handel's all the database interactions for the questions and answers
     *
     */
    public function getQuestions()
    {
        return Question::get();
    }

    public function getQuestion($id)
    {
        return Question::where('id', $id)->get();
    }

    public function getAnswers($id)
    {
        return Answer::select('answer', 'value')->where('question_id', $id)->get();
    }
}
