<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;


class FollowController extends Controller
{
    /**
     * Ajoute l’utilisateur donné à la liste des personnes que je suis, si ce n’est pas déjà fait, puis revient à la page précédente.
     */
    public function follow(User $user)
    {
        
    }

    /**
     * Retire l’utilisateur donné de la liste des personnes que je suis, si présent, puis revient à la page précédente.
     */
    public function unfollow(User $user)
    {

    }
}
