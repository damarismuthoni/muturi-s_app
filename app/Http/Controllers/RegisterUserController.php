<?php

namespace App\Http\Controllers;

use app\Models\RegisterUser;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\User;


class RegisterUserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}




class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('home', ['users' => $users]);
    }
}
