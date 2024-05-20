<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Profile extends Model
{
    use SearchableTrait;

    protected $fillable = ['name', 'last_name'];

    protected $searchable = [
        'columns' => [
            'name' => 8,
            'last_name' => 10,
        ],
    ];
}

