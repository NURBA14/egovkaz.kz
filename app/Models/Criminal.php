<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criminal extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'fio',
        'crime',
        'image'
    ];


    public function getImage()
    {
        return "storage/" . $this->image;
    }
}
