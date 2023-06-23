<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Foo extends Model
{
    use HasFactory;


    /**
     * @return float value of kazaam as specified in Apendix 1
     */
    public function kazaam()
    {
        if ($this->wombat) {
            return $this->thud * 3.1415927;
        }

        return $this->thud;
    }

    /**
     * @return BelongsTo post
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    protected $fillable = ['name', 'email', 'thud', 'wombat'];
}
