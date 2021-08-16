<?php

namespace App\Http\Controllers;

use App\Models\UserRoles;
use Illuminate\Http\Request;

class UserRolesController extends Controller
{
    public function get()
    {
        $userRoles = UserRoles::all();
        $response = new \stdClass();
        $response->data = $userRoles;
        return response()->json($response);
    }
}
