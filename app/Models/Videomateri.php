<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videomateri extends Model
{
    use HasFactory;
    protected $table = 'videomateri';
    protected $fillable = ['video','modul_id'];

    public function videomateri()
    {
        return $this->belongsTo(Videomateri::class);
    }
}
