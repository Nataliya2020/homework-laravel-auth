<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowUserDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     // * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $userData = $user->getData();

        return view('user', compact('userData'));
    }
}
