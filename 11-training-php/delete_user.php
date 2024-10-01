<?php
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

// Kiểm tra xem người dùng có đăng nhập hay không
if (!isset($_SESSION['id'])) {
    die('Bạn cần đăng nhập để thực hiện hành động này.');
}

// Hàm mã hóa ID người dùng
function encodeUserId($id)
{
    return str_rot13(base64_encode($id));
}

// Hàm giải mã ID người dùng
function decodeUserId($encodedId)
{
    return base64_decode(str_rot13($encodedId));
}

// Kiểm tra xem có ID không
if (isset($_GET['id']) && !empty($_GET['id'])) {
    // Giải mã ID
    $userId = decodeUserId($_GET['id']);


    // Kiểm tra xem ID người dùng trong phiên có trùng với ID muốn xóa hay không
    if ($_SESSION['id'] != $userId) {
        die('Bạn không có quyền xóa người dùng này.');
    }

    // Tạo CSRF token nếu chưa có
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }

    // Kiểm tra phương thức POST để xác nhận xóa
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Kiểm tra CSRF token
        if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
            die('Yêu cầu không hợp lệ.');
        }

        // Xóa người dùng
        if ($userModel->deleteUserById($userId)) {
            header('Location: list_users.php');
            exit();
        } else {
            die('Không thể xóa người dùng.');
        }
    }
} else {
    die('ID không hợp lệ...');
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Xóa người dùng</title>
    <?php include 'views/meta.php'; ?>
</head>

<body>
    <?php include 'views/header.php'; ?>
    <div class="container">
        <h2>Xóa người dùng</h2>
        <p>Bạn có chắc chắn muốn xóa người dùng này không?</p>
        <form method="POST">
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars(encodeUserId($userId)); ?>">
            <button type="submit" class="btn btn-danger">Xóa</button>
            <a href="list_users.php" class="btn btn-secondary">Hủy</a>
        </form>
    </div>
</body>

</html>