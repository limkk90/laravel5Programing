{{--@foreach($tasks as $task)--}}
{{--    <p>할일 : {{$task['name']}}, 기한: {{$task['due_date']}}</p>--}}
{{--@endforeach--}}

@for ($i=0; $i <count($tasks); $i++)
    <p>할일 : {{$tasks[$i]['name']}}, 기한 : {{$tasks[$i]['due_date']}}</p>
@endfor
