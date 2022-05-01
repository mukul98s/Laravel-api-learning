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
    public function show($id) {
        return Goals::find($id);
    }

    // create a goal
    public function store(Request $request) {
        return Goals::create($request->all());
    }

    // update a goal using id
    public function update(Request $request, $id){
        $goal = Goals::findOrFail($id);
        $goal->update($request->all());
        return $goal;
    }

    // delete a goal using id
    public function delete(Request $request, $id) {
        $goal = Goals::findOrFail($id);
        $goal->delete();
        return $goal;
    }
}
