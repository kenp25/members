<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TechCamp extends Model
{
    protected $fillable = ['year', 'member_id'];
    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
