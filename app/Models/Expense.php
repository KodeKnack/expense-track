<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'amount',
        'category_id',
        'payment_method_id',
        'date'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function payment_method()
    {
        return $this->belongsTo(PaymentMethod::class);
    }
}
