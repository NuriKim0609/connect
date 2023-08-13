<!DOCTYPE html>
<html>
<head>
    <title>MS SQL Data</title>
</head>
<body>
    <h1>TripController function check</h1>
    <h2>map api position_x와 position_y 확인 중입니다...</h2>
    <ul>
        @foreach ($map as $m)
            <li>
                position_x: {{ $m['position_x'] }}, position_y: {{ $m['position_y'] }}
            </li>
        @endforeach
    </ul>
</body>
</html>