<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function store(Request $request)
    {
        // TASK: Add one sentence to save the project to the logged-in user
        //   by $request->project_id and with $request->start_date parameter
        $user = Auth::user();

        $project = new Project();

        $user->projects()->attach($project, [
            'project_id' => $request->project_id,
            'start_date' => $request->start_date
        ]);

        return 'Success';
    }
}
