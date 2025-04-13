<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "type",
    ];

    /**
     * Relationships.
     */
    
    public function incomes()
    {
        return $this->hasMany(Income::class);
    }
    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }
    public function transactions(){
        return $this->hasMany(Transaction::class);
    }
    public function budgets()
    {
        return $this->hasMany(Budget::class); 
    }
}
