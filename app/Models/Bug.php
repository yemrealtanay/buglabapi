<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bug extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'bug_name',
        'status',
        'priority',
        'is_archived'
    ];

    public function user()
    {
        $this->hasOne(User::class);
    }

    public function category()
    {
        $this->hasOne(Category::class);
    }

}
