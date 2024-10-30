<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id', 'date_order', 'status', 'total'];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
