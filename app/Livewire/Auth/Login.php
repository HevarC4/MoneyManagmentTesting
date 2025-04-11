<?php

namespace App\Livewire\Auth;

use App\Models\User; // Add this import
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("components.layouts.app")]

class Login extends Component
{
    public $email;
    public $password;
    public $remember = false;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    // app/Livewire/Auth/Login.php
    public function login()
    {
        $this->validate();

        // First attempt to authenticate
        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            $this->addError('email', 'These credentials do not match our records.');
            return;
        }

        // Check if email is verified
        if (!Auth::user()->hasVerifiedEmail()) {
            // Store the user ID in session
            session(['unverified_user_id' => Auth::user()->id]);

            // Log them out immediately
            Auth::logout();

            // Redirect to verification notice
            return redirect()->route('verification.notice', ['email' => $this->email]);
        }

        return redirect()->intended('/dashboard');
    }

    public function render()
    {
        // return view('livewire.auth.login');
        return view('components.auth.index');
    }
}
