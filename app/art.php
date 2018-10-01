<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class art extends Model
{
// Table name 
protected $table = 'arts';
// Primary key
public $primaryKey = 'id';

//required fields
protected $fillable = ['picture', 'name'];
}
