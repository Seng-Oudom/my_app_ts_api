<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        return Task::all();
    }
    public function store(Request $request, $note_name)
    // public function store(Request $request, $note_name)
    {
        $quert = DB::insert('insert into tasks (id, note_name) values (?, ?)', [null, $note_name]);
        $res = DB::select('select id, note_name from tasks');


        return response()->json([
            'message' => 'Task insert successfully',
            'code' => $res,
        ]);

    }
    public function update(Request $request, $id, $note_name)
    {
        $task = DB::table('tasks')->where('id', $id)->update(array('note_name' => $note_name));
        return response()->json(['message' => 'Task update successfully',]);

    }

    public function destroy($id)
    {
        Task::destroy($id);
        return response()->json(['message' => 'Task deleted successfully']);

    }
}
