<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /** 
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'user' => ['required', 'string', 'max:10', 'min:4', 'unique:users'],
            'phone' => [
                'required',
                'regex:/^([0-9\s\-\+\(\)]*)$/',
                'min:10',
                function ($attribute, $value, $fail) {
                    $forbiddenPatterns = [
                        '/^\+25078/',
                        '/^\+25072/',
                        '/^\+25073/',
                        '/^078/',
                        '/^072/',
                        '/^073/',
                    ];

                    foreach ($forbiddenPatterns as $pattern) {
                        if (preg_match($pattern, $value)) {
                            $fail('The phone number used is in ineligible country.');
                        }
                    }
                },
            ],
            'country' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $referedBy = $request->referee_id;
        global $father;
        $exist = User::where('user', $request->user)->exists();
        if ($exist) {
            return view('auth.register')->with('exist', 'username has been taken, choose another');
        }

        if ((!empty($request->referee_id) && $request->referee_id != '') && isset($request->referee_id)) {
            $ref = User::where('activation', $request->referee_id)->exists();
            if (!$ref) {
                return Redirect::back()->withErrors(['ref' => 'Invalid referee_id, retry with another one']);
            }
            else {
                $indirect = User::where('activation', $referedBy)->first();
                $father = $indirect->father;
            }
        }
     
      else {
            $father = null;
        } 
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'user' => $request->user,
            'country' => $request->country,
            'activation' => rand(1111111, 9999999),
            'referee_id' => $request->referee_id,
            'father' => $father,
            'has_request' => 'registed',
        ]);

        // $mailServer = '192.168.254.59:'; // Replace with the actual IP address
        // $port = 1025;

        event(new Registered($user));
        // event(new Registered($user,$mailServer,$port));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
