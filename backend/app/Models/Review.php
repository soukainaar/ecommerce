<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jewelry;
use App\Models\Customer;

class Review extends Model
{
    use HasFactory;
    protected $fillable =
        [
            'jewelry_id',
            'customer_id',
            'note',
            'comment',
            'date',
        ];

        public function jewelry(){
            return $this->belongsTo(Jewelry::class);
        }

        public function customer(){
            return $this->belongsTo(Customer::class);
        }
}
