<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($id)
 */
class Employee extends Model
{
    public $timestamps = false;

//    protected $casts = [
//        'json_data' => 'array'
//    ];

    use HasFactory;


    public mixed $name;
    public mixed $surname;
    public mixed $email;
    public mixed $position;
    public mixed $address;
    /**
     * @var false|mixed|string
     */
    public mixed $json_data;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'surname',
        'email',
        'position',
        'address',
        'json_data'
    ];
}
