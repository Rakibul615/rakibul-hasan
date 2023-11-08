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
    public function update()
    {
        return view('task.update');
    }
    public function delete()
    {

    }
}
