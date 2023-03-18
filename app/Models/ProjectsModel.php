<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\ProjectMemberModel;
use App\Models\User;
use Auth;

class ProjectsModel extends Model
{
    use HasFactory;

    protected $table = "projects";

}
