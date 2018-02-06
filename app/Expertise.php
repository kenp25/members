<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    protected $fillable = ['name', 'member_id'];
    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
