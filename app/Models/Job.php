<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'company_name', 'location', 'salary'];

    // Define relationships
    // For example, if you want to associate applications with jobs:
    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
