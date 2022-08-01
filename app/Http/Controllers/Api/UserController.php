<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use ApiResponder;

    public function index()
    {
        // return "holas";
        $users=User::All();
        return $this->success("Lista de Usuarios",$users->toArray());
    }
}
