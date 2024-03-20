<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Exception;

class LoginController extends Controller
{

    /**
     * @param Request $request
     * @return JsonResponse|void
     */
    public function login(Request $request)
    {
        try {
            $credentials = [
                'email' => $request->email,
                'password' => $request->password,
            ];

            if (Auth::attempt($credentials)) {
                $user = Auth::user();

                if ($user->user_type == 1) {
                    return response()->json(['success' => true, 'message' => 'Login successful. Welcome Back!'], 200);
                } elseif ($user->user_type == 2) {
                    Auth::logout();
                    return response()->json(['success' => false, 'message' => 'You do not have permission to access the admin site.'], 200);
                }
            } else {
                return response()->json(['success' => false, 'message' => 'Incorrect username or password. Please try again.'], 200);
            }
        }
        catch (Exception $e) {
            return response()->json($e->getMessage(),500);
        }
    }

    /**
     * @return Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application
     */
    public function logout(): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        Auth::logout();
        return redirect('/');
    }
}
