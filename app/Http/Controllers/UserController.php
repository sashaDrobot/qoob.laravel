<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;

class UserController extends Controller
{
    protected $title;

    public function __construct()
    {
        $this->middleware('auth');
        $this->title = Lang::get('admin.users');
    }

    public function index()
    {
        $users = User::orderBy('name')->get();
        return view('admin.users', ['title' => $this->title, 'users' => $users]);
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ];

        $this->create($data);

        return back();
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        if($user->name !== 'Admin') {
            $user->delete();
        }
        return back();
    }
}
