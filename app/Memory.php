<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memory extends Model
{
  public function user()
  {
      return $this->belongsto('App\User');
  }
}
