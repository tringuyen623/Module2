<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="" method="POST">
@csrf
    <h1>Calculator</h1>
<input type="text" name="op1">
<input type="text" name="op2">
<br>
<br>
<button name="operation" value="plus">Plus</button>
<button name="operation" value="minus">Minus</button>
<button name="operation" value="multiply">Multiply</button>
<button name="operation" value="divide">Divide</button>
</form>
<br>

@if(isset($result))
<p>Result: {{$result}}</p>
@endif
</body>
</html>
