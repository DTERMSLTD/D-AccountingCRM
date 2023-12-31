<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;
    protected $guarded = [];

    //Loan Type Relation with Loan
    public function LoanTypes(){

        return $this->belongsTo(LoanType::class,'loan_type_id','id');
    }

    //Authorities Relation with Loan
    public function Authorities()
    {
        return $this->hasMany(Authorities::class, 'Authorities_name_id', 'id');
    }

    //Manage Account Relation with Loan
    public function AccountName()
    {
        return $this->hasMany(ManageAccount::class, 'Account_name_id', 'id');
    }

}
