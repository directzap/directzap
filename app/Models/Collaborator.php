<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Collaborator extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'message',
        'count',
        'active',
        'users_id',
        'qtd_link'
    ];

    public function links()
    {
        return $this->BelongsToMany(Link::class);
    }
}
