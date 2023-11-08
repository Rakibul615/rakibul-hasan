<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;


class ManagingTask extends Controller
{
    public $info;
    public function index()
    {
       $this->info = Task::get();
        return view('task.index', ['details' =>  $this->info]);
    }
    public function create()
    {
        return view('task.create');
    }
    public function store(Request $request)
    {
//       return $request;
        Task::storeInfo($request);
        return view('task.store');
    }
    public function edit($id)
    {
        $this->info = Task::find($id);
        return view('task.edit', ['info' =>  $this->info]);

    }

    public function update(Request $request, $id)
    {
        Task::updateInfo($request,$id);
    }

    public function delete($id)
    {
        $this->info = Task::find($id);
        $this->info->delete();

    }
}
