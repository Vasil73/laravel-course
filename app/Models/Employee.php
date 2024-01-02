<?php

namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Employee extends Model
    {
        public $timestamps = false;

//        public mixed $name;
//        public mixed $surname;
//        public mixed $email;
//        public mixed $position;
//        public mixed $address;
        protected $fillable = [
            'name',
            'surname',
            'position',
            'address',
            'json_data',
        ];

        public function processJsonData($json_data): void
        {
            $this->json_data = json_encode($json_data);
        }
    }
