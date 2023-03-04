<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceRequest extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded=['id'];

    public function getService()
    {
        return $this->hasOne('App\Models\Service','id','services_id');
    }
    public function user()
    {
        return $this->hasOne('App\Models\User','id','user_id');
    }
}
