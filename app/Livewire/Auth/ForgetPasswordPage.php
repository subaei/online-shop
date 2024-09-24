<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Password;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Forget Password Page - Online Shop')]

class ForgetPasswordPage extends Component
{
    public $email;

    // forget password
    public function forget()
    {
        $this->validate([
            'email' => 'required|email|max:255|exists:users,email',
        ]);

        $status = Password::sendResetLink(['email' => $this->email]);

        if ($status === Password::RESET_LINK_SENT) {
            session()->flash('success', 'Password reset link has been sent to your email addres');
            $this->email = '';
        }
    }
    public function render()
    {
        return view('livewire.auth.forget-password-page');
    }
}
