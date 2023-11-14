<?php

namespace App\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public string $email;

    public string $name;

    public string $subject;

    public string $message;

    protected $rules = [
        'email' => 'required|email|max:255',
        'name' => 'required|min:3|max:255',
        'subject' => 'required|min:3|max:255',
        'message' => 'required|min:3|max:255',
    ];
    public function render()
    {
        return view('livewire.contact');
    }

    public function submit()
    {
        $this->validate();

        $this->reset();

        session()->flash('message', 'Your Have Submitted Successfully!');
    }




}
