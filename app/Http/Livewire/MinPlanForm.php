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
        'confirmEmail' => ['required_if:priority,invited'],
        'confirmSaftyplan' => ['required_if:priority,lookingAround'],
    ];
    protected $messages = [
        'phoneNumber.required_if' => 'The Phone Number cannot be empty.',
        'email.email' => 'The Email Address format is not valid.',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly(
            $propertyName,
            [
                'age' => ['required_if:priority,invited,lookingAround'],
                'email' => ['required', 'email'],
                'phoneNumber' => ['required_if:confirmSMS,yes'],
                'confirmSMS' => ['required_if:priority,invited'],
                'confirmEmail' => ['required_if:priority,invited'],
            ],
            [
                'phoneNumber.required_if' => 'The :attribute cannot be empty.',
                'email.required' => 'The :attribute cannot be empty.',
                'email.email' => 'The :attribute is invalid',
                'confirmEmail.required_if' => 'Please select one choose.',
            ],
        );
    }
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
