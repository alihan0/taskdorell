<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use Auth;

class ProjectMemberModel extends Model
{
    use HasFactory;

    protected $table = "project_members";


    public static function getProjects(){
        $logged_user = Auth::user()->id;
        return ProjectMemberModel::where('member',$logged_user)
                ->leftJoin('projects', 'projects.id', '=', 'project_members.project')
                ->get();
    }
}
