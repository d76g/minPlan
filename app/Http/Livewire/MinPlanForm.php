<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MinPlanForm extends Component
{
    public string $priority = 'help';
    public string $age = '';
    public string $email = '';
    public string $confirmSMS = '';
    public string $confirmEmail = '';
    public string $phoneNumber = '';
    public string $confirmSaftyplan = '';
    public function render()
    {
        return view('livewire.min-plan-form');
    }
    protected $rules = [
        'age' => ['required_if:priority,invited,lookingAround'],
        'email' => ['required_if:confirmEmail,confirmSaftyplan,yes', 'email'],
        'phoneNumber' => ['required_if:confirmSMS,yes'],
        'confirmSMS' => ['required_if:priority,invited'],
    ];

    public function submit()
    {
        $this->validate();


        $this->priority = 'help';
        $this->email = '';
        $this->age = '';
        $this->phoneNumber = '';
        $this->confirmSMS = '';
        $this->confirmEmail = '';
        $this->confirmSaftyplan = '';

        session()->flash('message', 'Form Submitted'); // Will add redirect to a page or pop up a message.
    }
    public function update($property)
    {
        $this->validateOnly($property);
    }
}
