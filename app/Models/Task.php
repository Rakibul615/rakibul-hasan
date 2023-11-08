<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    private static $product;

    public  static  function storeInfo($request)
    {
        self::$product = new Task();
        self::$product->title = $request->title;
        self::$product->description = $request->description;
        self::$product->completed = $request->bool;
        self::$product->save();
        return self::$product;

    }

    public  static  function updateInfo($request , $id)
    {
        self::$product = Task::find($id);
        self::$product->title = $request->title;
        self::$product->description = $request->description;
        self::$product->completed = $request->bool;
        self::$product->update();
        return self::$product;

    }
}
