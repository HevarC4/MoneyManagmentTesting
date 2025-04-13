<?php

namespace App\Livewire\Auth;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout("components.layouts.app")]

class Register extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $avatar;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|confirmed|min:8',
        'avatar' => 'nullable|image|max:5120',
    ];

    public function register()
{
    $this->validate();

    $avatarPath = null;
    if ($this->avatar) {
        $avatarPath = $this->avatar->store('avatars', 'public');
    }

    $user = User::create([
        'name' => $this->name,
        'email' => $this->email,
        'password' => Hash::make($this->password),
        'avatar' => $avatarPath,
    ]);

    event(new Registered($user));

    // Redirect to login instead of verification notice
    return redirect()->route('login')
        ->with('status', 'Registration successful! Please check your email for verification link.');
}

    public function render()
    {
        // return view('livewire.auth.register');
        return view('components.auth.index');

    }
}
