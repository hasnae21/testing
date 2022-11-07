<?php
 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
 
use Illuminate\Database\Eloquent\Model;



class Carte extends Model
{
    /**
     * Defining The Inverse Of The Relationship
     * Get the user that owns the phone using the methode (belongsTo())
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}