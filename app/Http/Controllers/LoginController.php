<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Http\Requests\RequestRegistration;
class LoginController extends Controller
{
    public function PostLogin(Request $request) {
        $authResult = Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ], true);
        if ($authResult) {
           return redirect('/');
        } else {
            return redirect('/login')
                ->with('authError', 'Неправильный логин или пароль!');
        }
    }

    public function PostRegistration(RequestRegistration $request) {
        DB::table('users')->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'created_at' => Carbon::createFromTimestamp(time())
                ->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::createFromTimestamp(time())
                ->format('Y-m-d H:i:s'),
        ]);

        return redirect('/');
    }
    public function logout() {
        Auth::logout();
        return redirect('/login');
    }

}
