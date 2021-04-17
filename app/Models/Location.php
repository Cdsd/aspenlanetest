<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Location extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'locations';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'location_latitud',
        'location_longitude',
        'user_id'
    ];

    /**
     * Get the location associated with the user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
