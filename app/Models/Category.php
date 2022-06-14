<?php

namespace App\Models;

use App\Models\User;
use App\Models\Lesson;
use App\Models\Classroom;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ['id'];

    // protected $with = ['classroom','lesson'];

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
    
    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }

    public function lesson()
    {
        return $this->hasMany(Lesson::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
