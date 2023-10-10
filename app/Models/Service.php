<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable =['vehicle_name','user_id','service_date','service_type','status'];
    public function user() {
        return $this->belongsTo(User::class);
    }
}
