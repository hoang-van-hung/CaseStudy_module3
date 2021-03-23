<?php


namespace App\Http\Repositories;

use App\Models\Group;
use Illuminate\Support\Facades\DB;

class GroupRepository extends Repository
{
    public function getAll()
    {
        return Group::all();
    }

    function findById($id)
    {
        return Group::findOrFail($id);
    }

    public function store()
    {
        DB::beginTransaction();
        try {
//            $user->save();
//            $user->group()->sync($group);

        }catch (\Exception $exception) {
            DB::rollBack();
        }
    }



}
