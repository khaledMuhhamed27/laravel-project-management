<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag_task extends Model
{
    use HasFactory;
    public function tasks(){
        return $this->belongsTo(Task::class);
    }
    public function tags(){
        return $this->belongsTo(Tag::class);
    }
}
