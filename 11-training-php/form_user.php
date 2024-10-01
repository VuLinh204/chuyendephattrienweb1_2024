<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$_id = NULL;

function encodeUserId($id)
{
    return str_rot13(base64_encode($id));
}

function decodeUserId($encodedId)
{
    return base64_decode(str_rot13($encodedId));
}

if (!empty($_GET['id'])) {
    $_id = decodeUserId($_GET['id']);

    if (!is_numeric($_id)) {
        die('ID không hợp lệ.');
    }

    $user = $userModel->findUserById($_id); // Update existing user
}

// Tạo CSRF token nếu chưa tồn tại
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Xử lý khi form được submit
if (!empty($_POST['submit'])) {
    // Kiểm tra CSRF token
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die('Yêu cầu không hợp lệ');
    }

    // Validate dữ liệu
    try {
        validateUserData($_POST['name'], $_POST['password']);

        if (!empty($_id)) {
            $userModel->updateUser($_POST);
        } else {
            $userModel->insertUser($_POST);
        }
        header('location: list_users.php');
    } catch (Exception $e) {
        echo '<div class="alert alert-danger" role="alert">' . $e->getMessage() . '</div>';
    }
}

// Hàm validate dữ liệu
function validateUserData($name, $password)
{
    if (empty($name) || !preg_match('/^[A-Za-z0-9]{5,15}$/', $name)) {
        throw new Exception("Tên không hợp lệ. Độ dài từ 5-15 ký tự và chỉ chứa A-Z, a-z, 0-9.");
    }

    if (empty($password) || !preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()]).{5,10}$/', $password)) {
        throw new Exception("Mật khẩu không hợp lệ. Độ dài từ 5-10 ký tự, bao gồm chữ thường, chữ hoa, số và ký tự đặc biệt.");
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>

<body>
    <?php include 'views/header.php' ?>
    <div class="container">
        <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>
            <form method="POST" onsubmit="return validateForm()">
                <input type="hidden" name="id" value="<?php echo encodeUserId($_id); ?>">
                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name'])) echo htmlspecialchars($user[0]['name']) ?>' required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>

                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php } else { ?>
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
        <?php } ?>
    </div>
</body>

</html>