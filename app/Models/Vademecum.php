<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vademecum extends Model
{
    use HasFactory;

    /* public function afiliados()
    {
        return $this->belongsTo(Afiliado::class);
    } */

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
            return $query->where('laboratorio', 'like', "%{$value}%");
        }
    }

    public function scopeTroquel($query, $value)
    {
        if($value)
        {
            return $query->where('troquel', 'like', "%{$value}%");
        }
    }

    protected $table = 'vademecum';
}
