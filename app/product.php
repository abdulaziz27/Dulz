<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'name','merk','harga_beli','harga_jual','stock','disc', 'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(category::class);
    }
}
