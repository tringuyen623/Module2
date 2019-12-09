<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
  table {
    border-collapse: collapse;
    width: 100%;
  }

  th,
  td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }
</style>

<body>
  <table border="0">
    <caption>
      <h1>Danh sách khách hàng</h1>
    </caption>
    <tr>
      <th>STT</th>
      <th>Tên</th>
      <th>Ngày sinh</th>
      <th>Địa chỉ</th>  
      <th>Ảnh</th>
    </tr>

    <?php
    $customerlist = array(
      "1" => array("ten" => "Nguyễn Trọng Trí", "ngaysinh" => "1983-08-20", "diachi" => "Huế", "anh" => "https://ca.slack-edge.com/TEZB2M9GC-UPKSCL666-75fba2c082f3-512"),
      "2" => array("ten" => "Nguyễn Công Hữu", "ngaysinh" => "1983-08-20", "diachi" => "Huế", "anh" => "https://ca.slack-edge.com/TEZB2M9GC-UPYL0D1GQ-51f5d001bdb7-512"),
      "3" => array("ten" => "Lê Hữu Hoàng", "ngaysinh" => "1983-08-20", "diachi" => "Huế", "anh" => "https://ca.slack-edge.com/TEZB2M9GC-UPKSCM5EE-4322805a9abf-512"),
      "4" => array("ten" => "Nguyễn Chí Tiến", "ngaysinh" => "1983-08-22", "diachi" => "Huế", "anh" => "https://ca.slack-edge.com/TEZB2M9GC-UQ636QTNJ-0ecf3f55c5cb-512"),
      "5" => array("ten" => "Hoàng Anh Tân", "ngaysinh" => "1983-08-17", "diachi" => "Huế", "anh" => "https://scontent.fdad3-2.fna.fbcdn.net/v/t1.0-9/p960x960/78213731_709787186211443_7737634341114609664_o.jpg?_nc_cat=101&_nc_ohc=e0MrSJ-BjMwAQnI9997RJAwz5-nYxvy8z74jzz0mailN8QS1LYdV1RjsQ&_nc_ht=scontent.fdad3-2.fna&oh=65afa84b56d69ffbb4f22d1ef5abc0de&oe=5E6AF47B"),
      "6" => array("ten" => "Phan Văn Đông", "ngaysinh" => "1983-08-17", "diachi" => "Huế", "anh" => "https://ca.slack-edge.com/TEZB2M9GC-UPY6CEPEY-1b74f31dbeee-512"),
      "7" => array("ten" => "Võ Thế Văn", "ngaysinh" => "1983-08-17", "diachi" => "Huế", "anh" => "https://ca.slack-edge.com/TEZB2M9GC-UPYL9C161-164e32a49211-512"),
      "8" => array("ten" => "Nguyễn Đỗ Nguyên", "ngaysinh" => "1983-08-17", "diachi" => "Huế", "anh" => "https://ca.slack-edge.com/TEZB2M9GC-UPQNQ0SJV-6763c3e16394-512"),
      "9" => array("ten" => "Đặng Hữu Hiếu", "ngaysinh" => "1983-08-17", "diachi" => "Huế", "anh" => "https://ca.slack-edge.com/TEZB2M9GC-UQ0S6LZSS-b6986f751737-512"),
    );

    foreach ($customerlist as $key => $values) {
      echo "<tr>";
      echo "<td>" . $key . "</td>";
      echo "<td>" . $values['ten'] . "</td>";
      echo "<td>" . $values['ngaysinh'] . "</td>";
      echo "<td>" . $values['diachi'] . "</td>";
      echo "<td><image src ='".$values['anh']."' width = '60px' height ='60px'/></td>";
      echo "<tr>";
    }
    ?>
  </table>
</body>

</html>