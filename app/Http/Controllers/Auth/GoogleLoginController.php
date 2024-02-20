<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Exception;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;


class GoogleLoginController extends Controller
{
    public function redirectToGoogle() {
        return Socialite::driver('google')->redirect();
    }

    public function handleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();

            
            $existingUser = User::where('email', $googleUser->email)->first();

            if ($existingUser) {
                // Found existing user:
                Auth::login($existingUser);
                dd($existingUser);
                return redirect('/'); 
            }

            $user = User::create([
                'social_id' => $googleUser->id,
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                // Set a more secure password:
                'password' => Hash::make(Str::random(60))
            ]);

            Auth::login($user);
            return redirect('/'); 

        } catch (Exception $e) {
            dd($e->getMessage()); 
            return redirect('/login')->withErrors(['error' => 'An error occurred during social login. Please try again later.']); 
        }
    }

}
