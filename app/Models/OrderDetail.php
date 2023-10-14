<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderDetail extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'order_details';
    protected $fillable = [
        'id_order',
        'id_book',
        'soLuong',
        'price'
    ];
}
