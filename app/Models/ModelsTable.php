<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelsTable extends Model
{
    use HasFactory;

    protected $table = 'models';

    protected $fillable = [
        'product_id',
         'name'
    ];

    function get_product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
