<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sondage extends Model
{
    protected $table= 'Sondages';
    protected $primayKey= 'id';
    protected $fillable= ['question','SoftDeletes','options'];
    use HasFactory;
}
