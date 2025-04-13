<?php

namespace App\Models;

use Illuminate\Auth\MustVerifyEmail; // <-- This is the TRAIT
use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmailContract
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, MustVerifyEmail;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

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
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
    public function budgets()
    {
        return $this->hasMany(Budget::class);
    }
    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }
}
