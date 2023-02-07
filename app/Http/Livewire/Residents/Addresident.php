<?php

namespace App\Http\Livewire\Residents;

use Livewire\Component;
use App\Models\Residents;
use Illuminate\Http\Request;
use GuzzleHttp\Client;


class Addresident extends Component
{
    // public function render()
    // {
    //     $region= DB::select('select * from regions');
    //     return view('livewire.residents.addresident',['region'=> $region]);
    // }

    public $firstname,$middlename,$lastname,$suffix,$alias,$gender,$birthplace,$birthdate,$email,$contact,$citizenship,$civilstatus,
           $alivedordeceased,$voterstatus,$bloodtype,$pwd,$street,$nationalid,$remarks,$occupation,$officeaddress,$employer,$employercontact;
    public $residentmodal = false;

    public $selectedRegion;
    public $selectedProvince;
    public $selectedCity;
    public $selectedBarangay;
    public $region;
    public $provinces;
    public $cities;
    public $barangays;
    
    protected $rules = [

            
                'firstname' => 'required|string',
                'middlename' => 'required',
                'lastname' => 'required',
                'suffix' => 'required',
                'alias' => 'required',
                'gender' => 'required',
                'birthdate' => 'required',
                'birthplace' => 'required',
                'email' => 'required|email',
                'contact' => 'required',
                'citizenship' => 'required',
                'civilstatus' => 'required',
                'alivedordeceased' => 'required',
                'voterstatus' => 'required',
                'bloodtype' => 'required',
                'pwd' => 'required',
                'region' => 'required',
                'selectedRegion' => 'required',
                'selectedProvince'=>'required',
                'selectedCity' => 'required',
                'selectedBarangay' => 'required',
                'street' => 'required',
                'nationalid' => 'required',
                'remarks' => 'required',
                'occupation' => 'required',
                'officeaddress' => 'required',
                'employer' => 'required',
                'employercontact' => 'required',
        ];

    protected $messages = [
            'email.required' => 'The Email Address cannot be empty.',
            'email.email' => 'The Email Address format is not valid.',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }


    public function showModal()
    {
        $this->modal = true;
    }

   

    public function closeModal()
    {
        $this->modal = false;
    }

    public function store(Request $request)
    {
        $validatedData = $this->validate();

    
        Residents::create($validatedData);

        $this->closeModal();
        
              
    }

}
