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

    use HasFactory;

//    public mixed $name;
//    public mixed $surname;
//    public mixed $email;
//    public mixed $position;
//    public mixed $address;
//
//    /**
//     * The attributes that are mass assignable.
//     *
//     * @var array
//     */
//    protected $fillable = [
//        'name',
//        'surname',
//        'email',
//        'position',
//        'address'
//    ];

}
