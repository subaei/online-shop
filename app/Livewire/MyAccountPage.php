<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('My Account Page - Online Shop')]

class MyAccountPage extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $old_password;
    public $password;
    public $password_confirmation;

    public function updateInfo()
    {
        $this->validate([
            'first_name' => 'required|max:255|regex:/^[\pL\s\-]+$/u',
            'last_name' => 'required|max:255|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|email',
        ]);

        $upadte_account = User::where('id', auth()->user()->id)->first();

        $upadte_account->update([
            $upadte_account->name = $this->first_name .' '. $this->last_name,
            $upadte_account->email = $this->email,
        ]);

        if (!$upadte_account) {
            session()->flash('error', 'Somthing went wrong');
        } else {
            session()->flash('success', 'Your Info has been updated successfully!');
            $this->first_name = '';
            $this->last_name = '';
            $this->email = '';
        }

    }

    public function updatePassword()
    {
        $this->validate([
            'old_password' => 'required|min:6|max:255',
            'password' => 'required|min:6|max:255|confirmed',
            'password_confirmation' => 'required|min:6|max:255',
        ]);

        // dd(Hash::check($this->old_password));

        $upadte_account = User::where('id', auth()->user()->id)->first();

        if ($upadte_account) {

            if (Hash::check($this->old_password, $upadte_account->password)) {

                $upadte_account->update([
                    $upadte_account->password = Hash::make($this->password),
                ]);

                auth()->login($upadte_account);
    
                session()->flash('success2', 'Your password has been updated successfully!');
                $this->old_password = '';
                $this->password = '';
                $this->password_confirmation = '';
            } else {
                session()->flash('error2', 'Invalid old password');
                $this->old_password = '';
                $this->password = '';
                $this->password_confirmation = '';
            }
    
        } else {
            session()->flash('error2', 'Somthing went wrong!');
            $this->old_password = '';
            $this->password = '';
            $this->password_confirmation = '';
        }

    }

    public function render()
    {
        return view('livewire.my-account-page');
    }
}
