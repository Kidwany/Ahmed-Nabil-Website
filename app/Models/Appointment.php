<?php

namespace App\Models;

use App\File;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model  {


    protected $connection = 'mysql';

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'appointment';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'phone', 'birth_date', 'service_id', 'gender', 'file_id', 'message'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['birth_date'];


    public function file()
    {
        return $this->belongsTo(File::class, 'file_id', 'id');
    }

}
