<?php

namespace App\Policies;

use App\Models\Admin\Admin;
use App\Models\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the Admin can view the post.
     *
     * @param  \App\Models\Admin\Admin  $admin
     * @return mixed
     */
    public function view(Admin $admin) {
        return $this->getPermission($admin, 4);
    }

    /**
     * Determine whether the Admin can create posts.
     *
     * @param  \App\Models\Admin\Admin  $admin
     * @return mixed
     */
    public function create(Admin $admin)
    {
        //
    }

    /**
     * Determine whether the Admin can update the post.
     *
     * @param  \App\Models\Admin\Admin  $admin
     * @return mixed
     */
    public function update(Admin $admin)
    {
        //
    }

    /**
     * Determine whether the Admin can delete the post.
     *
     * @param  \App\Models\Admin\Admin  $admin
     * @return mixed
     */
    public function delete(Admin $admin)
    {
        //
    }

    /**
     * Determine whether the Admin can restore the post.
     *
     * @param  \App\Models\Admin\Admin  $admin
     * @return mixed
     */
    public function restore(Admin $admin)
    {
        //
    }

    /**
     * Determine whether the Admin can permanently delete the post.
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
