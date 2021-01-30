<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HeaderNav extends Model
{

    protected $table = 'header_nav';

    protected $guarded = ['id'];

    protected $fillable = ['name', 'link_url', 'is_dropdown', 'parent_id', 'show', 'edit', 'delete',];

    /**
     * @return HasMany
     */
    public function sub_items (): HasMany
    {
        return $this->hasMany(HeaderNav::class, 'parent_id');
    }
}
