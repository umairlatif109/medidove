<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $fillable=['name','description','size','price','category_id','image'];

    public function category()
    {
        $this->belongsTo(category::class);
    }
}
