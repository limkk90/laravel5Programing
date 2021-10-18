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
 //컬렉션 연습 함수
    public function getCollection(){
        //P181
//        $collection = collect([1, 'apple', '', 'banana', null, 3])
//            ->map(function ($name){
//               return strtoupper($name);
//            })
//            ->reject(function ($name){
//                return is_numeric($name);
//            })
//            ->reject(function ($name){
//                return empty($name);
//            });
//        dump($collection);

        //P183 all()
//        $allP183 = collect([1,2,3])->all();
//        dump($allP183);

        //P183 chunk()
//        $col = collect([1,2,3,4,5,6,7,8]);
//        $chunks = $col -> chunk(3);
//        $chunks->toArray();
//        dump($chunks);

        //p186
//        $col = collect([
//           ['fruit'=>'banana', 'price'=>50],
//           ['fruit'=>'Apple', 'price'=>60],
//        ]);
//
//        dump($col->implode('fruit', ','));

        //185 filter
//        $col = collect(['banana', 'apple', 'peach']);
//        $fil = $col->filter(function ($item){
//            return strlen($item)> 5;
//        });

        //p186 first() 해결안됨
//        $col = collect([3,5,7,9]);
//        $colfirst = $col->first(function ($key, $value){
//            return $value>5;
//        });
//        dump($colfirst);

        //p186 forget()
//        $col = collect(['item'=>'banana', 'price'=>50]);
//        $col->forget('item');
//        dump($col->all());

    $col = collect(['Banana', 'Apple']);
    $col2 = $col->map(function ($item, $key){
       return strtolower($item);
    });

    dump($col2);


    }
}
