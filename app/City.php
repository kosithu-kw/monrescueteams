<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function rescueteams(){
        return $this->hasMany("App\Rescueteam");
    }
}
