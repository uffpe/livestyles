<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\Auth\UserRequestedActivationEmail;

class ActivationResendController extends Controller
{
    public function showResendForm()
    {
        return view('auth.activate.resend');
    }

    public function resend(Request $request)
    {
        $this->validateResendRequest($request);

        $user = User::byEmail($request->email)->first();

        event(new UserRequestedActivationEmail($user));

        return redirect()->route('login')->withSuccess('Account activation has been resend. Please check your email.');
    }

    protected function validateResendRequest(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|exists:users,email'
        ], [
            'email.exists' => 'Could not find that account.'
        ]);
    }
}
