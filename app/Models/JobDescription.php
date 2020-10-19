<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobDescription extends Model
{
    use HasFactory;

    protected $table= "job_description";

    protected $fillable= ['title', 'ex_from', 'ex_to', 'opening', 'ctc'];
    public $timestamps= false;
}
