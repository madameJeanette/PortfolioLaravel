<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Favorite;
use Illuminate\Support\Facades\Auth;

class art extends Model
{
// Table name 
protected $table = 'arts';
// Primary key
public $primaryKey = 'id';

//required fields
//protected $fillable = ['picture', 'name'];

public function user(){
 return $this->belongsTo('App\User');
  }

/**
 * Determine whether a post has been marked as favorite by a user.
 *
 * @return boolean
 */
public function favorited()
{
    return (bool) Favorite::where('customer_id', Auth::id())
                        ->where('art_id', $this->id)
                        ->first();
}

}

