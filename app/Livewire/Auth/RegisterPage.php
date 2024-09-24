<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Register Page - Online Shop')]

class RegisterPage extends Component
{
    public $name;
    public $email;
    public $password;

    // Register user
    public function save()
    {
        $this->validate([
            'name' => 'required|max:255|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:6|max:255',
        ]);

        // Save user to DB
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        // Login user
        auth()->login($user);

        // Redirect to home page
        return redirect()->intended();
    }

    public function render()
    {
        return view('livewire.auth.register-page');
    }
}
