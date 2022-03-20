<?php

namespace laraMar\Laramar\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyModel extends Model
{
    use HasFactory;
    public $guarded = [];

    public function getUppercaseName(): string
    {
        return ucfirst($this->name) ;
    }
}
