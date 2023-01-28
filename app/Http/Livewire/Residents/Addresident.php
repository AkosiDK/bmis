<?php

namespace App\Http\Livewire\Residents;

use Livewire\Component;
use App\Models\Residents;
use Illuminate\Http\Request;


class Addresident extends Component
{
    // public function render()
    // {
    //     $region= DB::select('select * from regions');
    //     return view('livewire.residents.addresident',['region'=> $region]);
    // }

    public $firstname,$middlename,$lastname,$suffix,$alias,$gender,$birthplace,$birthdate,$email,$contact,$citizenship,$civilstatus,
           $alivedordeceased,$voterstatus,$bloodtype,$pwd,$street,$nationalid,$remarks,$occupation,$officeaddress,$employer,$employercontact;

    public function store(Request $request)
    {
        
            Residents::create([
                'firstname' => $this->firstname,
                'middlename' => $this->middlename,
                'lastname' => $this->lastname,
                'suffix' => $this->suffix,
                'alias' => $this->alias,
                'gender' => $this->gender,
                'birthdate' => $this->birthdate,
                'birthplace' => $this->birthplace,
                'email' => $this->email,
                'contact' => $this->contact,
                'citizenship' => $this->citizenship,
                'civilstatus' => $this->civilstatus,
                'alivedordeceased' => $this->alivedordeceased,
                'voterstatus' => $this->voterstatus,
                'bloodtype' => $this->bloodtype,
                'pwd' => $this->pwd,
                'street' => $this->street,
                'nationalid' => $this->nationalid,
                'remarks' => $this->remarks,
                'occupation' => $this->occupation,
                'officeaddress' => $this->officeaddress,
                'employer' => $this->employer,
                'employercontact' => $this->employercontact,]);
                
    }
}
