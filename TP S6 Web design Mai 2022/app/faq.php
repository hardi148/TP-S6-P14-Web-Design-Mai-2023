<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class faq extends Model
{
    protected $fillable = [
        'question',
        'reponse',
    ];

    public $timestamps = false;
    protected $primaryKey = "idfaq";
    public $incrementing = false;
}

?>