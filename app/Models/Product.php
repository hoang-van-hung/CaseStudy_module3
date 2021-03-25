<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * @property mixed img
 */
class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'description',
        'content',
        'price',
        'img',
        'category_id',
    ];
    /**
     * @var mixed
     */


    function category()
    {
        return $this->belongsTo(Category::class, 'id','category_id');
    }
}
