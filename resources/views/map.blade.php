<!DOCTYPE html>
<html>
<head>
    <title>MS SQL Data</title>
</head>
<body>
    <h1>TripController function check</h1>
    <h2>map api position_x와 position_y 확인 중입니다...</h2>
    <ul>
    @foreach ($formattedPositions as $position)
    <li>
        position_x: {{ sprintf('%.6f', $position['position_x']) }}, position_y: {{ sprintf('%.6f', $position['position_y']) }}
    </li>
    @endforeach
    </ul>
</body>
</html>

