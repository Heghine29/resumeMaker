<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with = ['author'];


    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

}