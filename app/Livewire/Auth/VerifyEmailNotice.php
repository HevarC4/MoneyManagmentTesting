<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("components.layouts.app")]
class VerifyEmailNotice extends Component
{
    // app/Livewire/Auth/VerifyEmailNotice.php
    public $email;

    public function mount()
    {
        $this->email = request()->query('email');

        // If email not in URL, try to get from session user
        if (!$this->email && session('unverified_user_id')) {
            $user = User::find(session('unverified_user_id'));
            $this->email = $user ? $user->email : null;
        }
    }

    // ... rest of the component

    public function resend()
    {
        $this->dispatch('verification.send');
    }

    public function render()
    {
        return view('livewire.auth.verify-email-notice');
    }
}
