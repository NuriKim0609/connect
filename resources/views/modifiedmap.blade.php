<!DOCTYPE html>
<html>
<head>
    <title>Car Positions</title>
</head>
<body>
    <h1>Car Positions</h1>
    <ul>
        
        @foreach ($carPositions as $position)
            <li>
                Position X: {{ $position['position_x'] }}
                Position Y: {{ $position['position_y'] }}
            </li>
        @endforeach
        
    </ul>
</body>
</html>

