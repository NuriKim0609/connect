<!DOCTYPE html>
<html>
<head>
    <title>MS SQL Data</title>
</head>
<body>
    <h1>ClientController function check </h1>
<h2>client_name 확인 중입니다...</h2>

<ul>

@foreach ($client as $c)
    <li>
        BIN: {{ $c['BIN'] }}, client_name: {{ $c['client_name'] }}
    </li>
@endforeach
</ul>
