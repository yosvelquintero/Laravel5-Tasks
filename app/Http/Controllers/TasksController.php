<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Task;

class TasksController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('pages.tasks.index', [
            'tasks' => Task::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('pages.tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        Task::create($request->all());

        \Session::flash('flash_message', 'Task successfully added!');

        return redirect()->route('tasks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return view('pages.tasks.show', [
            'task' => $this->getTask($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return view('pages.tasks.edit', [
            'task' => $this->getTask($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $this->getTask($id)->fill($request->all())->save();

        \Session::flash('flash_message', 'Task successfully updated!');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->getTask($id)->delete();

        \Session::flash('flash_message', 'Task successfully deleted!');

        return redirect()->route('tasks.index');
    }

    /**
     * get task by id
     *
     * @param  int  $id
     * @return obj
     */
    private  function getTask($id)
    {
        $task = Task::findOrFail($id);

        if ($task)
        {
            \Debugbar::info('Loaded task with id ' . $id . ' from database');
        }

        return $task;
    }
}
