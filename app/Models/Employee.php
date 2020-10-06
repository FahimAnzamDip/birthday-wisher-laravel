<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'birth_date'];

    public function message() {
        return $this->hasOne(Message::class, 'id', 'message_id');
    }
}
