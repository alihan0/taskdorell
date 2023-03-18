<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;
use App\Models\ProjectMemberModel;

class CheckProjects
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $logged_user = Auth::user()->id;
        $projects = ProjectMemberModel::where('member',$logged_user)
                ->leftJoin('projects', 'projects.id', '=', 'project_members.project')
                ->get();

                View::share('projects', $projects);
                return $next($request);
    }
}
