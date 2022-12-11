<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    //

    public function index()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }

    public function logout()
    {
        return view('login');
    }

    /**
     * Register User
     * 
     * @param Request $request
     * @return response
     */
    public function register(Request $request)
    {
        $data = $request->all();

        User::create([
            'name' => $data['name'],
            'no_hp' => $data['no_hp'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        return redirect('/login')->with('success', 'Register Success');
    }

    /**
     * Login User
     * 
     * @param Request $request
     * @return response
     */
    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);


        // login user with email and password
        $credentials = request(['email', 'password']);
        if (!auth()->attempt($credentials))
            return redirect()->route('login')->with('error', 'Login Failed');

        return redirect('/')->with('success', 'Login Success');
    }

    /**
     * Logout User
     * 
     */
    public function logoutUser()
    {
        Session::flush();
        auth()->logout();

        return redirect('/')->with('success', 'Logout Success');
    }

    /**
     * Edit User
     * 
     * @param Request $request
     * @return response
     */
    public function edit(Request $request, $id)
    {
        $data = $request->all();

        $user = User::find($id);
        $user->name = $data['name'];
        $user->no_hp = $data['no_hp'];
        $user->password = bcrypt($data['password']);
        $user->save();

        return redirect('/')->with('success', 'Edit Success');
    }

    public function userDetail(Request $request, $id)
    {
        $user = User::find($id);
        // dd($car);

        return view('profile', compact('user'));
    }
}