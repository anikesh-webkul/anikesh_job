<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpDetail extends Model
{
    use HasFactory;
    protected $table= "emp_detail";

    protected $fillable= ['title', 'name', 'email', 'contact', 'curr_ctc', 'exp_ctc'];
    public $timestamps= false;
}
