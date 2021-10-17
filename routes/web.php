<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
use App\Http\Controllers\TaskController;
use \App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//
//Route::get('hello/world', function ($name){
//    return 'Hello' . $name;
//});

Route::get('hello/world/{name?}', function ($name = null){
    return 'Hello' . $name;
});

Route::get('hello/world/{name}', function ($name){
//    $response = new Response('Hello World' . $name, 200);
//    $response->header('Content-Type', 'text/plain');
    return response('Hello World'. $name, 200)
        ->header('Content-Type', 'text/plain')
        ->header('Cache-Control', 'max-age=' . 60*60 . ",must-revaliidate");
});

Route::get('hello/json', function (){
    $data = ['name'=> 'Iron Man', 'gender'=>'Man'];
    return response()->json($data);
});

Route::get('hello/html', function (){
//    return View::make('hello.html');
    return view('hello');

});

Route::get('task/view', function (){
    $task = ['name'=>'Task 1', 'due_date'=>'2015-06-01 12:00:11'];
    return view('task.view', compact('task'));
});

Route::get('task/alert', function (){ //p110
    $task = ['name'=>'라라벨 예제 작성',
        'due_date'=>'2015-06-01 12:11:15',
        'comment' => '<script>alert("Welcome");</script>']; //난해하다 난해해
    return view('task.alert')->with('task', $task);
});

Route::get('calc/{num}', function ($num){
    return view('calc')->with('num', $num);
});

Route::get('task/list2', function (){
   $tasks = [
        ['name'=> 'Response클래스 분석', @'due_date' => '2015-06-01 11:22:33'],
       ['name'=> 'Response클래스 분석', 'due_date' => '2015-06-01 11:22:33'],
   ];
   return view('task.list2')->with('tasks', $tasks);
});

//P118
//Route::get('task/list3', function (){
//    $tasks = [
//        ['name'=> 'Response클래스 분석', 'due_date' => '2015-06-01 11:22:33'],
//        ['name'=> '블레이드 분석', 'due_date' => '2015-06-01 11:22:33'],
//    ];
//    return view('task.list3')->with('tasks', $tasks);
//});

//Route::get('/user', [UserController::class, 'index']);
//P140 컨트롤러에서 함수 호출 하는 방법 다름
Route::get('task/list3}', [TaskController::class, 'list3']);

//P141 라우트에 매개변수 넣기
Route::get('task/param/{id?}/{arg?}', [TaskController::class, 'param']);


Route::post('/project/task/store', [TaskController::class, ['as'=>'task.add', 'uses'=>'add']]);

//리소스 컨트롤러
Route::resource('orders', OrderController::class);




