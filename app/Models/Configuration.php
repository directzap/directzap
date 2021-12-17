<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    use HasFactory;

    protected $fillable = [
        'link_facebook',
        'link_partnership',
        'distribution',
        'max_collaborator',
        'collaborators',
        'user_id',
        'pixel_gtm',
        'pixel_facebook'
    ];
}
