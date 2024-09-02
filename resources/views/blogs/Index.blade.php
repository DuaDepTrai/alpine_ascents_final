<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #2C3E50; /* Màu nền của thanh điều hướng */
            padding: 40px 0;
        }

        nav ul {
            list-style-type: none; /* Loại bỏ dấu chấm đầu dòng */
            margin: 0;
            padding: 0;
            text-align: center; /* Căn giữa các mục trong thanh điều hướng */
        }

        nav ul li {
            display: inline-block; /* Hiển thị các mục trong cùng một dòng */
            margin-right: 20px;
        }

        nav ul li a {
            color: white; /* Màu chữ trắng */
            text-decoration: none; /* Loại bỏ gạch chân */
            font-weight: bold; /* Chữ đậm */
            font-size: 18px; /* Kích thước chữ */
            padding: 5px 15px; /* Khoảng cách giữa chữ và viền */
        }

        nav ul li a:hover {
            color: #18bc9c; /* Màu chữ khi hover */
        }

        .container {
            width: 80%;
            margin: 20px auto;
        }

        .post {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .post img {
            width: 100%;
            height: auto;
            display: block;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        .post h2 {
            color: #FF4500;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .post p {
            font-size: 16px;
            line-height: 1.6;
            color: #333;
        }

        .post a {
            color: white;
            background-color: #FF4500;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 3px;
            display: inline-block;
            margin-top: 10px;
        }

        .post a:hover {
            background-color: #FF6347;
        }

        hr {
            border: none;
            border-top: 1px solid #ddd;
            margin: 20px 0;
        }

    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="#">Giới Thiệu</a></li>
            <li><a href="#">Tour</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Đối Tác</a></li>
            <li><a href="#">About Us</a></li>
        </ul>       
    </nav>
    <div class="container">
        <?php
        // Thông tin kết nối cơ sở dữ liệu
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "blog";

            // Tạo kết nối
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Kiểm tra kết nối
            if ($conn->connect_error) {
                die("Kết nối thất bại: " . $conn->connect_error);
            }

            // Truy vấn SQL để lấy bài đăng
            $sql = "SELECT title, date_posted, content, category, image_url FROM blog_posts ORDER BY date_posted DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Xuất dữ liệu cho mỗi hàng
                while($row = $result->fetch_assoc()) {
                    echo '<div class="post">';
                    echo '<h2>' . $row["title"] . '</h2>';
                    echo '<p>ĐĂNG VÀO NGÀY ' . date("d/m/Y", strtotime($row["date_posted"])) . ' - CHUYÊN MỤC: ' . $row["category"] . '</p>';
                    echo '<img src="' . $row["image_url"] . '" alt="Hình ảnh bài đăng" />';
                    echo '<p>' . substr($row["content"], 0, 150) . '...</p>';
                    echo '<a href="read_more.php?id=' . $row["id"] . '">ĐỌC TIẾP</a>';
                    echo '</div><hr>';
                }
            } else {
                echo "Không có kết quả";
            }

            $conn->close();
        ?>
    </div>
</body>
</html>
