<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use App\Models\Api\User;
use App\Models\Comment;

class CommentPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct() { }

    public function create(User $user) {
    	return $user -> role === User::CLIENT_ROLE;
    }

    public function update(User $user, Comment $comment) {
    	return $user -> id === $comment -> client_id;
    }

    public function delete(User $user, Comment $comment) {
    	return $user -> id === $comment -> client_id;
    }
}
