<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    public $fillable = ['name', 'desk_list_id'];

    public function deskList()
    {
        return $this->belongsTo(DeskList::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
