
<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Ok</title>
</head>
<body>
    <h1>할일 정보</h1>
    <p>작업 : {{$task['name']}}</p>
    <p>날짜 : {{$task['due_date']}}</p>
    <p>comment : <?= $task = $task['comment'] ?></p>
</body>
</html>
