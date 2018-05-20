<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $connection = 'mysql';

    protected $fillable = ['content', 'user_id', 'characters_id'];

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function characters() {
        return $this->belongsTo(Characters::class, 'characters_id', 'guid');
    }
}
