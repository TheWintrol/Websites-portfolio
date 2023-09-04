<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'artist',
        'title',
        'file',
        'image',
    ];

    public function users()
{
    return $this->belongsToMany(User::class);
}

}
