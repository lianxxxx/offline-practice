<?php

namespace App\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public string $name = '';
    public string $email = '';
    public string $message = '';

    protected array $rules = [
        'name'    => 'required|min:2|max:100',
        'email'   => 'required|email|max:150',
        'message' => 'required|min:10|max:1000',
    ];

    protected array $messages = [
        'name.required'    => 'What should we call you?',
        'name.min'         => 'Name should be at least 2 characters.',
        'email.required'   => 'We need your email to get back to you.',
        'email.email'      => 'That doesn\'t look like a valid email.',
        'message.required' => 'Don\'t leave the message blank!',
        'message.min'      => 'Say a bit more — at least 10 characters.',
    ];

    public function submit(): void
    {
        $this->validate();

        // TODO: Wire up mail here
        // Mail::to('hello@grindcoffee.ph')->send(new ContactMail($this->all()));

        session()->flash('success', 'Message received! We\'ll get back to you soon. ☕');

        $this->reset(['name', 'email', 'message']);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}