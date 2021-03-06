<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public $fillable = ['name', 'card_id'];

    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
