<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'suffix',
        'alias',
        'gender',
        'birthdate',
        'birthplace',
        'email',
        'contact',
        'citizenship',
        'civilstatus',
        'alivedordeceased',
        'voterstatus',
        'bloodtype',
        'pwd',
        'region',
        'province',
        'citymun',
        'brgy',
        'street',
        'nationalid',
        'remarks',
        'occupation',
        'officeaddress',
        'employer',
        'employercontact',
    ];
}
