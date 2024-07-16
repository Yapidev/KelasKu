<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Topic extends Model
{
    use HasFactory, HasUlids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
    ];

    public function materials(): MorphToMany
    {
        return $this->morphedByMany(Material::class, 'topicable');
    }

    public function assignments(): MorphToMany
    {
        return $this->morphedByMany(Assignment::class, 'topicable');
    }

    public function attendances(): MorphToMany
    {
        return $this->morphedByMany(Attendance::class, 'topicable');
    }
}
