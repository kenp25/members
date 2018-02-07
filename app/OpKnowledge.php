<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpKnowledge extends Model
{
    protected $fillable = ['channel_id', 'member_id'];

    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }
}
