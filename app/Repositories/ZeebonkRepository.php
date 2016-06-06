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

    public function getZeebonkById($id){
        return Zeebonk::where('id', $id)->get();
    }
    public function getAllZeebonks(){
        return Zeebonk::select('id', 'naam', 'max_value', 'min_value')->get();
    }
}
