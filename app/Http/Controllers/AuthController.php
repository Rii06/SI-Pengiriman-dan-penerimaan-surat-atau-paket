<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Exception;

class AuthController extends Controller
{
    public function show()
    {
        return view('adduser', [
            "active" => " User"
        ]);
    }
    public function index()
    {
        $data = User::all();

        return view('showuser', compact('data'), [
            "active" => " User"
        ]);
    }
    public function showLoginForm()
    {
        return view('Login/login');
    }
    public function showRegForm()
    {
        return view('Login/reg');
    }
    public function register(Request $request)
    {

        $validatedData = $request->validate([
            'username' => 'required|unique:users',
            'level_user' => 'required',
            'password' => 'required',
        ]);

        $validatedData['password'] = bcrypt($request->password);

        try {
            $user = User::create($validatedData);
            Session::flash('success', 'Registrasi berhasil');
            return view('Login/login');

            // return response()->json(['user' => $user], 201);
        } catch (Exception $e) {
            Session::flash('error', 'Registrasi gagal');
            // return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function create(Request $request)
    {

        $validatedData = $request->validate([
            'username' => 'required|unique:users',
            'level_user' => 'required',
            'password' => 'required',
        ]);

        $validatedData['password'] = bcrypt($request->password);

        try {
            $user = User::create($validatedData);
            Session::flash('success', 'Registrasi berhasil');
            return view('adduser', [
                "active" => " User"
            ]);

            // return response()->json(['user' => $user], 201);
        } catch (Exception $e) {
            Session::flash('error', 'Registrasi gagal');
            // return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->level_user == 'administrator') {
                // Pengguna adalah administrator
                Session::put('level_user', 'administrator');
                return redirect()->route('home');
            } elseif ($user->level_user == 'operator') {
                // Pengguna adalah operator
                Session::put('level_user', 'operator');
                return redirect()->route('home');
            }
        } else {
            Session::flash('error', 'Username atau password salah');
            return view('Login/login');
        }
    }
    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
