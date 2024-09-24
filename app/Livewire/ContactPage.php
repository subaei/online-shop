<?php

namespace App\Livewire;

use App\Models\ContactMessage;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Conatct us Page - Online Shop')]

class ContactPage extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;

    public function contactMessage()
    {
        $this->validate([
            'name' => 'required|max:255|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|email',
            'subject' => 'required|max:255|regex:/^[\pL\s\-]+$/u',
            'message' => 'required',
        ]);

        $sent_message = new ContactMessage();
        $sent_message->name = $this->name;
        $sent_message->email = $this->email;
        $sent_message->subject = $this->subject;
        $sent_message->message = $this->message;
        $sent_message->save();

        if (!$sent_message) {
            session()->flash('error', 'Somthing went wrong');
        } else {
            session()->flash('success', 'Your message has been sent successfully!');
            $this->name = '';
            $this->email = '';
            $this->subject = '';
            $this->message = '';
        }

    }

    public function render()
    {
        return view('livewire.contact-page');
    }
}
