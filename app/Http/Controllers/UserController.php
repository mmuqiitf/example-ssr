<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index()
    {
        return view('users');
    }

    public function index2()
    {
        $users = User::all();
        return view('users-no-ssr', compact('users'));
    }

    public function list(Request $request)
    {
        return DataTables::of(User::query())->make(true);
    }
}
