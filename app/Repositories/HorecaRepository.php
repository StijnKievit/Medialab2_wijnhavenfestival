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
        return Horeca::select('id', 'location_lang', 'location_long')->get();
    }

    public function getHoreca($id)
    {
        return Horeca::where('id', $id)->get();
    }
}