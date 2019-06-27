<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Songs extends Model
{
    use Searchable;
      
}
