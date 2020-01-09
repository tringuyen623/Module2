<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Validation</title>
</head>
<body>
<div class="maint-content">
<h1>Ứng dụng kiểm tra email hợp lệ</h1>
<form action="" method="get">
<label for="email-input">Email:</label>
<input type="text" id="email-input" name="email" placeholder="Nhập email cần kiểm tra">
<input type="submit" value="Check">
</form>
@if(!empty(request('email')))
Kết quả: {{ $check?'Đúng định dạng Email':'Sai định dạng Email'}}
@endif
</div>

</body>
</html>
