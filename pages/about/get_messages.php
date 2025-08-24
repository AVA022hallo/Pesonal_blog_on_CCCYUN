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

// 设置数据库字符集为 UTF-8
$conn->set_charset("utf8");

// 获取留言
$sql = "SELECT `name`, `email`, `message` FROM `messages` ORDER BY `id` DESC";
$result = $conn->query($sql);

$messages = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $messages[] = $row;
    }
}

// 返回JSON格式的数据
header('Content-Type: application/json; charset=utf-8');
echo json_encode($messages, JSON_UNESCAPED_UNICODE);

// 关闭数据库连接
$conn->close();
?>
