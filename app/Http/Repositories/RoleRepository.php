<?php


namespace App\Http\Repositories;

use App\Http\Repositories\RoleRepository;
use App\Models\Role;
use Illuminate\Testing\Fluent\Concerns\Has;

class RoleRepository
{
    protected $roleRepo;

    public function __construct(RoleRepository $roleRepository)
    {
        $this->roleRepo= $roleRepository;

    }

    public function getAll()
    {
        return $this->roleRepo->getAll();
    }

    public function findById($id)
    {
        return $this->roleRepo->findById($id);
    }

    public function store($request)
    {
        $role = new Role();
        $role->fill($request->all());
        $this->roleRepo->store($role);
    }

}
