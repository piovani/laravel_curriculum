<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    use HasFactory;

    protected $table = 'resumes';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'role',
        'schooling',
        'observation',
        'curriculum_file_path',
        'curriculum_file_name',
        'curriculum_file_type',
    ];
}
