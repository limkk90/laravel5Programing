<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TaskController extends Controller
{
    //
    public function list3(){
        $tasks = [
            ['name'=> 'Response클래스 분석', 'due_date' => '2015-06-01 11:22:33'],
            ['name'=> '블레이드 분석', 'due_date' => '2015-06-01 11:22:33'],
        ];
        return view('task.list3')->with('tasks', $tasks);
    }

//    public function param($id=1, $arg='argument'){
//        return ['id'=>$id, 'arg'=>$arg];
//    }
    public function param(Request $request, $id=1, $arg='argument'){
        return dump([
           'path'=>$request->path(),
           'url'=>$request->url(),
           'fullUrl'=>$request->fullUrl(),
           'method'=>$request->method(),
           'name'=>$request->get('name'),
            'ajax'=>$request->ajax(),
            'header'=>$request->header(),
        ]);
    }
}
