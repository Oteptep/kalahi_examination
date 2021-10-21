<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'lib_regions';

    protected $primaryKey = 'region_id';

    protected $fillable = [
      'region_code',
      'region_name'
    ];
}
