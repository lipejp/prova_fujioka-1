<?php

namespace App\Models\Project;

use App\Models\Person\Person;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'min_salary',
        'max_salary',
        'person_id'
    ];

    public function tasks()
    {
        return $this->hasMany(Project::class, 'project_id');
    }

    public function gerent()
    {
        return $this->belongsTo(Person::class, 'person_id');
    }

    public function persons()
    {
        return $this->belongsToMany(Person::class, 'projects_persons', 'project_id', 'person_id');
    }
}
