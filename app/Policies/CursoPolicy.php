<?php

namespace App\Policies;

use App\Models\Curso;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CursoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Curso $curso)
    {
        return $user -> usuario_av != null;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Curso $curso)
    {
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Curso $curso)
    {
        return true;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Curso $curso)
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Curso $curso)
    {
        return true;
    }
}