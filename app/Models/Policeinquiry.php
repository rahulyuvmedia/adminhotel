<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policeinquiry extends Model
{
    protected $table = 'policeinquiry';

    protected $fillable = [
        'guest_id',
        'address',
        'state',
        'city',
        'zipCode',
        'arrivedFrom',
        'arrivalDate',
        'passportNo',
        'placeOfIssue',
        'issueDate',
        'expiryDate',
        'visaNo',
        'visaType',
        'visaPlaceOfIssue',
        'visaIssueDate',
        'visaExpiryDate',
        'employed',
        'guardianName',
        'age',
        'purposeOfVisit',
        'destinationPlace',
        'destinationState',
        'destinationCity',
        'contactNo',
        'residentContact',
        'mobileNo',
        'description',
        // Add other fields here
    ];
    use HasFactory;
}
