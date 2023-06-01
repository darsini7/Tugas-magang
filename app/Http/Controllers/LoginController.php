<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('login');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function check_login(Request $request)
    {
        $email      = $request->input('email');
        $password   = $request->input('password');

        if(\Illuminate\Support\Facades\Auth::guard('web')->attempt(['email' => $email, 'password' => $password])) {
            return response()->json([
                'success' => true
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Login Gagal!'
            ], 401);
        }

    }
}
