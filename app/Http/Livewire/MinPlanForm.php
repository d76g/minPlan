<?php

namespace App\Http\Livewire;

use App\Models\minPlanFormModel;
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
    public $currentStep = 1;

    public function render()
    {
        return view('livewire.min-plan-form');
    }
    protected $rules = [
        'age' => ['required_if:priority,invited,lookingAround'],
        'email' => ['required_if:confirmEmail,yes', 'required_if:confirmSaftyplan,yes', 'email'],
        'phoneNumber' => ['required_if:confirmSMS,yes'],
        'confirmSMS' => ['required_if:priority,invited'],
        'confirmEmail' => ['required_if:priority,invited'],
        'confirmSaftyplan' => ['required_if:priority,lookingAround,'],
    ];
    protected $messages = [
        'confirmEmail.required_if' => 'Please Select One Choose..',
        'confirmSMS.required_if' => 'Please Select One Choose..',
        'confirmSaftyplan.required_if' => 'Please Select One Choose..',
        'phoneNumber.required_if' => 'The Phone Number cannot be empty.',
        'email.email' => 'The Email Address format is not valid.',
        'email.required_if' => 'The :attribute cannot be empty.',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly(
            $propertyName,
            [
                'age' => ['required_if:priority,invited,lookingAround'],
                'email' => ['required_if:confirmEmail,yes', 'email'],
                'phoneNumber' => ['required_if:confirmSMS,yes'],
                'confirmSMS' => ['required_if:priority,invited,'],
                'confirmSaftyplan' => ['required_if:priority,lookingAround'],
            ],
            [
                'phoneNumber.required_if' => 'The :attribute cannot be empty.',
                'email.required_if' => 'The :attribute cannot be empty.',
                'email.email' => 'The :attribute is invalid',

            ],
        );
    }
    public function stepOne()
    {
        $this->validate(
            [
                'age' => ['required_if:priority,invited,lookingAround'],
            ],
            [
                'age.required_if' => 'Please Select your age range...'
            ]
        );
        $this->currentStep = 2;
    }
    public function stepTwo()
    {
        $this->validate(
            [
                'phoneNumber' => ['required_if:confirmSMS,yes'],
                'confirmSMS' => ['required_if:priority,invited,'],
                'confirmSaftyplan' => ['required_if:priority,lookingAround,'],
                'email' => ['required_if:confirmEmail|confirmSaftyplan,yes', 'email'],

            ],
        );
        $this->currentStep = 3;
    }
    public function stepThree()
    {
        $this->validate(
            [
                'email' => ['required_if:confirmEmail,yes', 'email'],
            ],
        );
    }

    public function submit()
    {
        $this->validate();

        $saveInput = minPlanFormModel::create([
            'priority' => $this->priority,
            'age' => $this->age,
            'email' => $this->email,
            'phone_number' => $this->phoneNumber,
            'receive_sms' => $this->confirmSMS,
            'receive_email' => $this->confirmEmail,
            'needs_safty_plan' => $this->confirmSaftyplan,
        ]);

        $this->priority = 'help';
        $this->email = '';
        $this->age = '';
        $this->phoneNumber = '';
        $this->confirmSMS = '';
        $this->confirmEmail = '';
        $this->confirmSaftyplan = '';
        $this->currentStep = 1;

        session()->flash('message', 'Form Submitted'); // Will add redirect to a page or pop up a message.
    }
    public function update($property)
    {
        $this->validateOnly($property);
    }
    public function clearForm()
    {
        $this->priority = 'help';
        $this->email = '';
        $this->age = '';
        $this->phoneNumber = '';
        $this->confirmSMS = '';
        $this->confirmEmail = '';
        $this->confirmSaftyplan = '';
        $this->currentStep = 1;
    }
}
