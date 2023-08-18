<!DOCTYPE html>
<html>
<head>
    <title>MS SQL Data</title>
</head>
<body>
    <h1>tripController function check </h1>
<h2>trip_table 확인 중입니다...</h2>

<ul>
@foreach ($trip as $t)
            <li>
                <p>출발 시간: {{ $t['departure_time'] }}</p>
                <p>도착 시간: {{ $t['arrival_time'] }}</p>
                <p>운전자 이름: {{ $t['driver_name'] }}</p>
                <p>DTG 상태: {{ $t['dtg_status'] }}</p>
                <p>운행시간(시:분:초): {{ $t['driving_time'] }}</p>
                <p>운행거리(km): {{ $t['driving_distance'] }}</p>
                <p>최고속도(km/h): {{ $t['speed_max'] }}</p>
                <p>평균속도(km/h): {{ $t['speed_avg'] }}</p>
                <p>최고RPM: {{ $t['rpm_max'] }}</p>
                <p>평균RPM: {{ $t['rpm_avg'] }}</p>
                <p>최소전압: {{ $t['volt_min'] }}</p>
                <p>최고전압: {{ $t['volt_max'] }}</p>
                <p>과속시간: {{ $t['overspeed_time'] }}</p>
                <p>누적주행거리(km): {{ $t['accumulated_distance'] }}</p>

                <!-- 나머지 데이터도 필요한 대로 표시 -->
            </li>
@endforeach