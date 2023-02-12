<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Report extends Model
{

    protected $table = 'reports';
    protected $fillable = [ 'pname','maker','model','equipment','leadtime','storage','qty','unit','remarks','photos','pnumber','in','out','safety_stock'];
    use HasFactory;
    
}
