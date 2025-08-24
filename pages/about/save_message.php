<?php
// 数据库配置
$host = 'localhost';       // 数据库主机
$dbname = 's5859897';      // 数据库名
$username = 's5859897';    // 数据库用户名
$password = 'nihao1234';   // 数据库密码

// 创建数据库连接
$conn = new mysqli($host, $username, $password, $dbname);

// 检查连接是否成功
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

// 设置数据库字符集为 utf8mb4
$conn->set_charset("utf8mb4");

// 获取表单数据
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// 防止SQL注入攻击
$name = $conn->real_escape_string($name);
$email = $conn->real_escape_string($email);
$message = $conn->real_escape_string($message);

// 插入数据到数据库
$sql = "INSERT INTO `messages` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "留言提交成功！";
} else {
    echo "错误: " . $sql . "<br>" . $conn->error;
}

// 关闭数据库连接
$conn->close();
?>
