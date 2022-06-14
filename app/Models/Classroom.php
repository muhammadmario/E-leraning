<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classroom extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ['id'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeFilter($query)
    {
      if (request('search')) {
          $query->where('name','like', '%' . request('search'). '%');
      }
    }

    public function category()
    {
        return $this->hasMany(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
