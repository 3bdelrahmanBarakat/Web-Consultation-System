<?php

namespace App\Http\Controllers\Auth\Mentee;

use App\Http\Controllers\Controller;
use App\Models\Mentee\Mentee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;

class MenteeLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.Mentee.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(Mentee::where('email', $request->email)->value('is_activated') == 0)
        {
            return back()->with('message', 'Your account is disactivated, please contact the administrator');
        }
        if(Auth::guard('mentee')->attempt(['email' => $request->email , 'password' => $request->password], $request->remember))
        {
            return redirect()->intended(route('mentee.dashboard'));
        }

        return back()->withInput($request->only('email', 'remember'));

    }

    public function logout()
    {
        Auth::guard('mentee')->logout();
        return redirect()->route('mentee.login');
    }
}
