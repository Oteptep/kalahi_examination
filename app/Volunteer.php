<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Region;
use App\Sex;

class Volunteer extends Model
{
    //
    protected $table = 'volunteer_list';

    protected $primaryKey = 'volunteer_id';

    protected $fillable = [
      'sex_id',
      'region_id',
      'first_name',
      'last_name',
      'age',
      'birth_date'
    ];

    protected $appends = [
      'birth_date_formatted'
    ];

    public function getBirthDateAttribute($value) 
    {
        return Carbon::parse($value)->timezone(session('timezone'))->format('Y-m-d');
    }

    public function getBirthDateFormattedAttribute($value) 
    {
        return Carbon::parse($value)->timezone(session('timezone'))->format('l, F j, Y');
    }

    public function setBirthDateAttribute($value) 
    {
        return $this->attributes['birth_date'] = Carbon::createFromFormat('Y-m-d', $value);
    }

    public function region() 
    {
        return $this->belongsTo(Region::class, 'region_id');
    }

    public function sex() 
    {
        return $this->belongsTo(Sex::class, 'sex_id');
    }
}
