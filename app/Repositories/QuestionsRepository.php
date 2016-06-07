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
use App\QuestAns;
class QuestionsRepository
{
//    /**
//     * Get all of the tasks for a given user.
//     *
//     * @param  User  $user
//     * @return Collection
//     */
//    public function forUser(User $user)
//    {
//        return Task::where('user_id', $user->id)
//            ->orderBy('created_at', 'asc')
//            ->get();
//    }
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
        return Answer::select('answer')->where('question_id', $id)->get();
    }
}
