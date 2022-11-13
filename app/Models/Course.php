<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'course';
    protected $fillable = ['nama','deskripsi'];

    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }
}
