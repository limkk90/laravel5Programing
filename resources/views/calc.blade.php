@if ($num>5)
    <p>{{$num}}는 5보다 큽니다</p>
@elseif ($num == 5)
    <p> {{$num}}은 5랑 같습니다</p>
@else
    <p> {{$num}}은 5보다 작습니다</p>
@endif
