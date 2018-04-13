<?php

use App\Question;

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
  public function surveys()
  {
    return $this->belongsToMany(Question::class);
  }
}
