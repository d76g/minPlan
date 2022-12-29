<?php

namespace App\Http\Livewire;

use App\Models\Emergencyroom;
use Livewire\Component;

class EmergencyContacts extends Component
{
    public string $name = '';
    public string $address = '';
    public string $postCode = '';
    public string $city = '';
    public string $country = '';
    public string $phone = '';
    public string $email = '';
    public string $website = '';
    public $contact_id;
    public $updateMode = false;

    protected $rules = [
        'name' => 'required|min:6|max:255',
        'address' => 'required|min:6',
        'postCode' => 'required|min:3',
        'city' => 'required|min:3',
        'country' => 'required|min:3',
        'email' => 'email',
        'phone' => 'min:6',
        'website' => 'min:6|url',
    ];
    protected $listeners = ['destroy'];

    public function updated($propertyName)
    {
        $this->validateOnly(
            $propertyName,
            [
                'name' => ['required'],
                'address' => ['required'],
                'postCode' => ['required'],
                'city' => ['required'],
                'country' => ['required'],
            ],
        );
    }
    public function resetFields()
    {
        $this->name = '';
        $this->email = '';
        $this->address = '';
        $this->postCode = '';
        $this->city = '';
        $this->country = '';
        $this->phone = '';
        $this->website = '';
    }
    public function store()
    {

        $this->validate();
        try {
            Emergencyroom::create([
                'name' => $this->name,
                'address' => $this->address,
                'post_code' => $this->postCode,
                'city' => $this->city,
                'country' => $this->country,
                'phone' => $this->phone,
                'email' => $this->email,
                'website' => $this->website,
            ]);
            $this->dispatchBrowserEvent('store', [
                'type' => 'success',
                'title' => 'Data Saved.',
                'icon' => 'success',
                'iconColor' => 'green',
            ]);
            session()->flash('success');
            $this->resetFields();
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('error', [
                'title' => 'Something Went Wrong.',
                'icon' => 'error',
                'iconColor' => 'red',
            ]);
        }
    }
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetFields();
    }
    public function edit($id)
    {
        $contacts = Emergencyroom::findOrFail($id);
        $this->contact_id = $id;
        $this->name = $contacts->name;
        $this->address = $contacts->address;
        $this->postCode = $contacts->post_code;
        $this->city = $contacts->city;
        $this->country = $contacts->country;
        $this->phone = $contacts->phone;
        $this->email = $contacts->email;
        $this->website = $contacts->website;
        $this->updateMode = true;
    }
    public function update()
    {
        $this->validate();

        try {
            Emergencyroom::find($this->contact_id)->fill([
                'name' => $this->name,
                'address' => $this->address,
                'post_code' => $this->postCode,
                'city' => $this->city,
                'country' => $this->country,
                'phone' => $this->phone,
                'email' => $this->email,
                'website' => $this->website,

            ])->save();
            $this->dispatchBrowserEvent('update', [
                'type' => 'success',
                'title' => 'Data Updated.',
                'icon' => 'success',
                'iconColor' => 'green',
            ]);
            $this->cancel();
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('error', [
                'title' => 'Something Went Wrong.',
                'icon' => 'error',
                'iconColor' => 'red',
            ]);
            $this->cancel();
        }
    }
    public function deleteConfirm($id)
    {
        $this->dispatchBrowserEvent('delete', [
            'title' => 'Are you sure?',
            'text' => "You won't be able to revert this!",
            'icon' => 'warning',
            'id' => $id,
        ]);
    }
    public function destroy($id)
    {
        Emergencyroom::find($id)->delete();
    }
    public function render()
    {
        return view('livewire.emergency-contacts', [
            'contacts' =>  Emergencyroom::paginate(10),
        ]);
    }
}
