<?php
/**
 * Created by PhpStorm.
 * User: Justin
 * Date: 1-6-2016
 * Time: 23:08
 */

namespace App\Repositories;

use App\Beverage;
use App\Horeca;
use App\BevHor;

class BevHorRepository
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

    public function horecaByBeverageId($id){
        return BevHor::where('beverage_id', $id)->get();
    }
    public function beverageByHorecaId($id){
        return BevHor::where('horeca_id', $id)->get();
    }
}
