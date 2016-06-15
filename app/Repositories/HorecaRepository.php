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
    public function getAllHoreca()
    {
        return Horeca::get();
    }

    public function getHoreca($id)
    {
        return Horeca::where('id', $id)->get();
    }
    public function getHorecaByZeebonkId($id){
        return Horeca::select('id', 'naam', 'beschrijving', 'afbeelding')->where('zeebonk', $id)->get();
    }
}

