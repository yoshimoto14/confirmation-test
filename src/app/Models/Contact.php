<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'last-name',
        'first-name', 
        'gender', 
        'email', 
        'postcode', 
        'address', 
        'building_name', 
        'opinion',
    ];

    public function scopeLastNameSearch($query, $last_name) {
        if (!empty($last_name)) {
            $query->where('last-name', 'like', '% ' . $last_name . '%');
        }
    }

    public function scopeGenderSearch($query, $gender) {
        if (!empty($gender)) {
            $query->where('gender', $gender);
        }
    }

    public function scopeCreatedSearch($query, $created_at) {
        if (!empty($created_at)) {
            $query->where('created_at', 'like', '%' . $created_at . '%');
        }
    }

    public function scopeEmailSearch($query, $email) {
        if (!empty($email)) {
            $query->where('email', 'like', '%' . $email . '%');
        }
    }
}
