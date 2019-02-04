<?php

namespace App\Policies;

use App\Models\Admin\Admin;
use App\Admin\Term;
use Illuminate\Auth\Access\HandlesAuthorization;

class TagPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the Admin can view the terms.
     *
     * @param  \App\Models\Admin\Admin  $admin
     * @return mixed
     */
    public function view(Admin $admin) {
        return $this->getPermission($admin, 4);
    }

    /**
     * Determine whether the Admin can create terms.
     *
     * @param  \App\Models\Admin\Admin  $admin
     * @return mixed
     */
    public function create(Admin $admin) {
        return $this->getPermission($admin, 1);
    }

    /**
     * Determine whether the Admin can update the terms.
     *
     * @param  \App\Models\Admin\Admin  $admin
     * @return mixed
     */
    public function update(Admin $admin) {
        return $this->getPermission($admin, 2);
    }

    /**
     * Determine whether the Admin can delete the terms.
     *
     * @param  \App\Models\Admin\Admin  $admin
     * @return mixed
     */
    public function delete(Admin $admin) {
        return $this->getPermission($admin, 3);
    }

    /**
     * Determine whether the Admin can restore the terms.
     *
     * @param  \App\Models\Admin\Admin  $admin
     * @return mixed
     */
    public function restore(Admin $admin)
    {
        //
    }

    /**
     * Determine whether the Admin can permanently delete the terms.
     *
     * @param  \App\Models\Admin\Admin  $admin
     * @return mixed
     */
    public function forceDelete(Admin $admin)
    {
        //
    }

    private function getPermission($admin, $id) {
        foreach ($admin->roles as $role) {
            foreach ($role->permissions as $permission) {
                if($permission->id  == $id) {
                    return true;
                }
            }
        }

        return false;
    }
}
