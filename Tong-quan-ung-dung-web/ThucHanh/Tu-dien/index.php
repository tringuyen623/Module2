<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Từ điển</title>
</head>

<body>
  <h2>Từ điển Anh - Việt</h2>
  <form method="post">
    <input type="text" name="search" placeholder="Nhập từ cần tìm">
    <input type="submit" value="Tìm">
  </form>

  <?php
  $dictionary = array("hello" => "xin chào", "how" => "thế nào", "book" => "quyển vở", "computer" => "máy tính");
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchword = $_POST["search"];
    $flag = false;
    foreach ($dictionary as $word => $description) {
      if ($word === $searchword) {
        echo "Từ: " . $word . ". <br/>Nghĩa của từ: " . $description;
        echo "<br/>";
        $flag = true;
      }
    }
    
    if($flag  === false){
      echo "Không tìm thấy từ cần tra.";
    }
  }
  ?>
</body>

</html>