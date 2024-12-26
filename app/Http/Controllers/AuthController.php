<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
// use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            // 'username' => 'required|string|max:255|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|confirmed',
            // 'phone_number' => 'required|string|max:15'
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            // 'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            // 'phone_number' => $validatedData['phone_number'],
            'role' => 'user',
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;
        return redirect()->route('login')->with('message', 'Register successful');

        return response()->json([
            'message' => 'User registered successfully!',
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => $user,
        ], 201);
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $validatedData['email'])->first();

        if (!$user || !Hash::check($validatedData['password'], $user->password)) {
            return response()->json([
                'message' => 'Invalid credentials',
            ], 401);
        }

        $token = $user->createToken('auth_token', ['*'])->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => $user,
        ], 200);

        return redirect()->route('home');
    }


    public function logout(Request $request)
    {
        $request->user()->tokens->each(function ($token) {
            $token->delete();
        });

        return response()->json([
            'message' => 'Logout successful',
        ], 200);

        return redirect('/')->with('message', 'Logout successful');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }


    public function rememberPassword(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $validatedData['email'])->first();

        if (!$user) {
            return response()->json([
                'message' => 'User not found',
            ], 404);
        }

        $token = $user->createToken('remember_token')->plainTextToken;

        return response()->json([
            'remember_token' => $token,
        ]);
    }
}