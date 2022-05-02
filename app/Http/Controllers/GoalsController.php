<?php

namespace App\Http\Controllers;
use App\Models\Goals;

use Illuminate\Http\Request;

class GoalsController extends Controller
{
    // get all the data inside Goals
    public function index() {
        return Goals::all();
    }

    // get a single goals with @param $id
    public function show(Goals $goal) {
        return $goal;
    }

    // create a goal
    public function store(Request $request) {
        $goal = Goals::create($request->all());

        return response()->json($goal, 201);
    }

    // update a goal using id
    public function update(Request $request, $id){
        $goal = Goals::findOrFail($id);
        $goal->update($request->all());
        return response()->json($goal, 200);
    }

    // delete a goal using id
    public function delete(Request $request, $id) {
        $goal = Goals::findOrFail($id);
        $goal->delete();
        return response()->json([
            'goal' => $goal,
            'message' => 'Goal Deleted'
        ], 200);
    }
}
