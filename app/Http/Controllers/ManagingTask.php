<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;


class ManagingTask extends Controller
{
    public function index()
    {
        return view('task.index');
    }
    public function create()
    {
        return view('task.create');
    }
    public function store(Request $request)
    {
//        return $request;
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
