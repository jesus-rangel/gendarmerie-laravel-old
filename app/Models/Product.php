<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function clients()
    {
        return $this->belongsToMany(Client::class)->withTimestamps()->withPivot('quantity', 'purchase_date', 'user_id');
    }

    public function scopeNombre($query, $value)
    {
        if($value)
        {
            return $query->where('nombre', 'like', "%{$value}%");
        }
    }

    public function scopeMonodroga($query, $value)
    {
        if($value)
        {
            return $query->where('monodroga', 'like', "%{$value}%");
        }
    }

    public function scopeLaboratorio($query, $value)
    {
        if($value)
        {
            return $query-where('laboratorio', 'like', "%{$value}%");
        }
    }

    public function scopeTroquel($query, $value)
    {
        if($value)
        {
            return $query-where('troquel', 'like', "%{$value}");
        }
    }
}