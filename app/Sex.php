<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sex extends Model
{
    protected $table = 'lib_sex';

    protected $primaryKey = 'sex_id';

    protected $fillable = [
      'name'
    ];
}
