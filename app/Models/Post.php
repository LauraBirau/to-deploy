<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    /**
     * @return HasMany foos
     */
    public function foos()
    {
        return $this->hasMany(Foo::class);
    }

    protected $fillable = ['title', 'excerpt', 'body'];
}
