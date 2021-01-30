<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderNav extends Model
{
    use HasFactory;

    protected $table = 'header_nav';

    protected $guarded = [];

//    protected $fillable = 'name, link_url, show, edit, delete';
}
