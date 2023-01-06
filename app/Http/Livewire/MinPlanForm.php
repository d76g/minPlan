<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\minPlanFormModel;

class MinPlanForm extends Component
{
    public string $priority = '';
    public string $age = '';
    public string $email = '';
    public string $confirmSMS = '';
    public string $confirmEmail = '';
    public string $phoneNumber = '';
    public string $confirmSaftyplan = '';
    public $currentStep = 1;
    public string $country = '';
    protected $listeners = ['translate'];

    protected $rules = [
        'age' => ['required_if:priority,invited,lookingAround'],
        'email' => ['required_if:confirmEmail,yes', 'required_if:confirmSaftyplan,yes', 'email'],
        'phoneNumber' => ['required_if:confirmSMS,yes'],
        'confirmSMS' => ['required_if:priority,invited'],
        'confirmEmail' => ['required_if:priority,invited'],
        'confirmSaftyplan' => ['required_if:priority,lookingAround,'],
        'country' => ['required']
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
                'country' => ['required']
            ],
            [
                'phoneNumber.required_if' => 'The :attribute cannot be empty.',
                'email.required_if' => 'The :attribute cannot be empty.',
                'email.email' => 'The :attribute is invalid',

            ],
        );
    }


    public function welcomePage()
    {
        $this->currentStep = 2;
    }
    public function infoPage()
    {
        $this->currentStep = 3;
    }
    public function getCountry()
    {

        $this->validate([
            'country' => ['required'],
        ]);
        $this->currentStep = 4;
    }
    public function stepOne()
    {
        $this->validate(
            [
                'priority' => ['required'],
            ],
        );
        $this->currentStep = 5;
    }
    public function stepTwo()
    {
        $this->validate(
            [
                'age' => ['required'],
            ],
            [
                'age.required' => 'Please Select your age range...'
            ]
        );
        $this->currentStep = 6;
    }
    public function stepThree()
    {
        $this->validate(
            [
                'phoneNumber' => ['required_if:confirmSMS,yes'],
                'confirmSMS' => ['required_if:priority,invited,'],
                'confirmSaftyplan' => ['required_if:priority,lookingAround,'],
                'email' => ['required_if:confirmEmail|confirmSaftyplan,yes', 'email'],

            ],
        );
        $this->currentStep = 7;
    }
    public function stepFour()
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

        minPlanFormModel::create([
            'country' => $this->country,
            'priority' => $this->priority,
            'age' => $this->age,
            'email' => $this->email,
            'phone_number' => $this->phoneNumber,
            'receive_sms' => $this->confirmSMS,
            'receive_email' => $this->confirmEmail,
            'needs_safty_plan' => $this->confirmSaftyplan,
        ]);

        $this->dispatchBrowserEvent('submit', [
            'type' => 'success',
            'title' => 'Form Submitted, stay toned.',
            'icon' => 'success',
            'iconColor' => 'green',
        ]);

        $this->priority = 'invited';
        $this->email = '';
        $this->age = '';
        $this->phoneNumber = '';
        $this->confirmSMS = '';
        $this->confirmEmail = '';
        $this->confirmSaftyplan = '';
        $this->currentStep = 1;
        $this->country = '';
    }
    public function update($property)
    {
        $this->validateOnly($property);
    }
    public function goBack()
    {
        if ($this->currentStep == 1) {
            $this->currentStep = 1;
        } else {
            $this->currentStep--;
        }
    }
    public function clearForm()
    {
        $this->priority = '';
        $this->email = '';
        $this->age = '';
        $this->phoneNumber = '';
        $this->confirmSMS = '';
        $this->confirmEmail = '';
        $this->confirmSaftyplan = '';
        $this->currentStep = 1;
        $this->country = '';
    }

    public string $language = '';

    public function translate()
    {
        Session()->get('locale');
        return back();
    }

    public function render()
    {
        return view('livewire.min-plan-form')->layout('layouts.guest');
    }
}
