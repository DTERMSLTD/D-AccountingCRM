<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;
    protected $guarded = [];


     public function ExpenseType(){

    return $this->belongsTo(Categories::class,'expense_id','id');
}
}
