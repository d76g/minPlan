<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Emergencyroom;
use App\Exports\ContactsExport;
use App\Imports\ContactsImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Livewire\WithFileUploads;

class EmergencyContacts extends Component
{
    use WithFileUploads;

    public string $name = '';
    public string $address = '';
    public string $postCode = '';
    public string $city = '';
    public string $country = '';
    public string $phone = '';
    public string $email = '';
    public string $website = '';
    public string $latitude = '';
    public string $longitude = '';
    public $contactId;
    public $updateMode = false;
    public $importMode = false;
    public $file;

    protected $rules = [
        'name' => 'required|min:6|max:255',
        'address' => 'required|min:6',
        'postCode' => 'required|min:3',
        'latitude' => 'required|min:6',
        'longitude' => 'required|min:6',
        'city' => 'required|min:3',
        'country' => 'required|min:3',
        'email' => 'email',
        'phone' => 'min:6',
    ];
    protected $listeners = ['destroy', 'truncate'];

    public function updated($propertyName)
    {
        $this->validateOnly(
            $propertyName,
            [
                'name' => ['required'],
                'address' => ['required'],
                'postCode' => ['required'],
                'latitude' => ['required'],
                'longitude' => ['required'],
                'city' => ['required'],
                'country' => ['required'],
                'file' => ['required']
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
        $this->latitude = '';
        $this->longitude = '';
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
                'latitude' => $this->latitude,
                'longitude' => $this->longitude,
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
        $this->contactId = $id;
        $this->name = $contacts->name;
        $this->address = $contacts->address;
        $this->postCode = $contacts->post_code;
        $this->city = $contacts->city;
        $this->country = $contacts->country;
        $this->phone = $contacts->phone;
        $this->email = $contacts->email;
        $this->website = $contacts->website;
        $this->latitude = $contacts->latitude;
        $this->longitude = $contacts->longitude;
        $this->updateMode = true;
    }
    public function update()
    {
        $this->validate();
        try {
            Emergencyroom::find($this->contactId)->fill([
                'name' => $this->name,
                'address' => $this->address,
                'post_code' => $this->postCode,
                'city' => $this->city,
                'country' => $this->country,
                'phone' => $this->phone,
                'email' => $this->email,
                'website' => $this->website,
                'latitude' => $this->latitude,
                'longitude' => $this->longitude,

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
        $this->dispatchBrowserEvent('deleted', [
            'type' => 'success',
            'title' => 'Record Deleted.',
            'icon' => 'success',
            'iconColor' => 'green',
        ]);
    }
    // Delete All Records
    public function deleteAllConfirm()
    {
        $this->dispatchBrowserEvent('truncate', [
            'title' => 'Are you sure?',
            'text' => "You won't be able to revert this!",
            'icon' => 'warning',
        ]);
    }
    public function truncate()
    {
        Emergencyroom::truncate();
    }
    // Import Excel File
    public function importMode()
    {
        $this->importMode = true;
    }
    public function fileImport()
    {
        $this->validate(
            [
                'file' => 'required|file|mimes:csv|max:1028'
            ]
        );
        try {
            Excel::import(new ContactsImport, $this->file->storeAs('public/file', 'emergency_rooms.csv'));

            $this->dispatchBrowserEvent('store', [
                'type' => 'success',
                'title' => 'Data Saved.',
                'icon' => 'success',
                'iconColor' => 'green',
            ]);
            $this->file  = '';
            return back();
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('error', [
                'title' => 'Something went wrong, try again',
                'text' => 'Upload the right file',
                'icon' => 'error',
                'iconColor' => 'red',
            ]);
        }
    }
    public function fileExport()
    {
        return Excel::download(new ContactsExport, 'emergency_contacts_onboarding.csv');
    }
    public function render()
    {
        return view('livewire.emergency-contacts', [
            'contacts' =>  Emergencyroom::paginate(9),
        ]);
    }
}
