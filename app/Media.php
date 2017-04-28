<?php

namespace anihowdb;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    //
    public $fillable = ['title','description','start_date','end_date'];
}
