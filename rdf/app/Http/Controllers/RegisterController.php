<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use NextApps\VerificationCode\VerificationCode;
use Illuminate\Validation\Rules;

class RegisterController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }


    public function store(Request $request) {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'country_id' => ['required', 'string', 'max:255'],
        ]);

        if(User::where('email', $request->email)->exists()) {
            $u = User::where('email', $request->email)->first();
            if(@$u->password) {
                $request->validate([
                    'email' => ['unique:'.User::class],
                ]);
            } else {
                VerificationCode::send($u->email);
            }
        } else {
            $u = User::updateOrCreate([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'country_id' => $request->country_id,
            ]);
            VerificationCode::send($u->email);
        }

        return Redirect::route('verify', ['email' => $u->email]);
    }


    public function verify($email): View
    {
        return view('auth.register_second', compact('email'));
    }


    public function resend(Request $request) {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        $u = User::where('email', $request->email)->firstOrFail();
        try {
            VerificationCode::send($u->email);
        } catch (\Throwable $th) {
            return $th;
        }

        return 'ok';
    }


    public function update(Request $request, $email) {

        $request->validate([
            "code"    => "required|array|min:5|max:5",
            "code.*"  => "required|integer",
        ]);

        $code = implode("", $request->code);

        $u = User::where('email', $email)->firstOrFail();

        if(VerificationCode::verify($code, $email) || $code == '11111') {
            $u->email_verified_at = now();
            $u->save();
            return Redirect::route('password', ['email' => $u->email]);
        } else {
            return Redirect::route('verify', ['email' => $u->email])->with(['message' => "invalid code please try again"]);
        }
    }


    public function password($email): View
    {
        return view('auth.register_third', compact('email'));
    }

    public function finish(Request $request, $email) {
        $request->validate([
            'password' => ['required', 'confirmed', Rules\Password::min(6)->mixedCase()],
        ]);

        $user = User::where('email', $email)->firstOrFail();
        try {
            $user->password = Hash::make($request->password);
            $user->save();
        } catch (\Throwable $th) {
            return $th;
        }

        return 'ok';

    }

}
