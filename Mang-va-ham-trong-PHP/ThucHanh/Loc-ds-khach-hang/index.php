    <?php
    $customerlist = array(
        "1" => array("ten" => "Nguyễn Trọng Trí", "ngaysinh" => "02/01/1991", "diachi" => "Huế", "anh" => "https://ca.slack-edge.com/TEZB2M9GC-UPKSCL666-75fba2c082f3-512"),
        "2" => array("ten" => "Nguyễn Công Hữu", "ngaysinh" => "02/31/1992", "diachi" => "Huế", "anh" => "https://ca.slack-edge.com/TEZB2M9GC-UPYL0D1GQ-51f5d001bdb7-512"),
        "3" => array("ten" => "Lê Hữu Hoàng", "ngaysinh" => "12/11/1993", "diachi" => "Huế", "anh" => "https://ca.slack-edge.com/TEZB2M9GC-UPKSCM5EE-4322805a9abf-512"),
        "4" => array("ten" => "Nguyễn Chí Tiến", "ngaysinh" => "04/01/1994", "diachi" => "Huế", "anh" => "https://ca.slack-edge.com/TEZB2M9GC-UQ636QTNJ-0ecf3f55c5cb-512"),
        "5" => array("ten" => "Hoàng Anh Tân", "ngaysinh" => "11/01/1995", "diachi" => "Huế", "anh" => "https://scontent.fdad3-2.fna.fbcdn.net/v/t1.0-9/p960x960/78213731_709787186211443_7737634341114609664_o.jpg?_nc_cat=101&_nc_ohc=e0MrSJ-BjMwAQnI9997RJAwz5-nYxvy8z74jzz0mailN8QS1LYdV1RjsQ&_nc_ht=scontent.fdad3-2.fna&oh=65afa84b56d69ffbb4f22d1ef5abc0de&oe=5E6AF47B"),
        "6" => array("ten" => "Phan Văn Đông", "ngaysinh" => "10/15/1996", "diachi" => "Huế", "anh" => "https://ca.slack-edge.com/TEZB2M9GC-UPY6CEPEY-1b74f31dbeee-512"),
        "7" => array("ten" => "Võ Thế Văn", "ngaysinh" => "08/21/1997", "diachi" => "Huế", "anh" => "https://ca.slack-edge.com/TEZB2M9GC-UPYL9C161-164e32a49211-512"),
        "8" => array("ten" => "Nguyễn Đỗ Nguyên", "ngaysinh" => "06/14/1998", "diachi" => "Huế", "anh" => "https://ca.slack-edge.com/TEZB2M9GC-UPQNQ0SJV-6763c3e16394-512"),
        "9" => array("ten" => "Đặng Hữu Hiếu", "ngaysinh" => "02/01/1999", "diachi" => "Huế", "anh" => "https://ca.slack-edge.com/TEZB2M9GC-UQ0S6LZSS-b6986f751737-512"),
    );
    function searchByDate($customers, $from_date, $to_date)
    {
        if (empty($from_date) && empty($to_date)) {
            return  $customers;
        }
        $filtered_customers = [];
        foreach ($customers as $customer) {
            if (!empty($from_date) && (strtotime($customer['ngaysinh']) < strtotime($from_date))) {
                continue;
            }
            if (!empty($to_date) && (strtotime($customer['ngaysinh']) > strtotime($to_date))) {
                continue;
            }
            $filtered_customers[] = $customer;
        }
        return $filtered_customers;
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Lọc danh sách khách hàng</title>
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
    </head>

    <body>
        <?php
        $from_date = null;
        $to_date = null;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $from_date = $_POST["from"];
            $to_date = $_POST["to"];
        }
        $filtered_customers = searchByDate($customerlist, $from_date, $to_date);
        ?>
        <form method="post">
            From: <input id="from" type="date" name="from">
            To: <input id="to" type="date" name="to">
            <input type="submit" id="submit" value="Search">
        </form>

        
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
            <?php if (count($filtered_customers) === 0) : ?>
                <tr>
                    <td colspan="5" class="message">Không tìm thấy khách hàng nào</td>
                </tr>
            <?php endif; ?>

            <?php foreach ($filtered_customers as $key => $values) : ?>
                <tr>
                    <td><?php echo  $key; ?> </td>
                    <td><?php echo $values['ten']; ?></td>
                    <td><?php echo $values['ngaysinh']; ?></td>
                    <td><?php echo $values['diachi']; ?></td>
                    <td>
                        <image src='<?php echo $values['anh']; ?>' width='60px' height='60px' />
                    </td>
                <tr>

                <?php endforeach; ?>
        </table>
    </body>

    </html>