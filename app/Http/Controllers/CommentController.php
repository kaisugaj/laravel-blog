<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function store(Project $project)
    {
        Comment::create([
            'project_id' => $project->id,
            'name' => \request('name'),
            'description' => \request('description')
        ]);

        return back();
    }

}
