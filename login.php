<?php
session_start();
require_once "config/db.php";
function verify_user($email, $password) {
    $conn = get_connection();
    $stmt = $conn->prepare(
        "SELECT id, name, email, password FROM users WHERE email = ?"
    );
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $stmt->close();
            $conn->close();
            return $user;
        }
    }
    $stmt->close();
    $conn->close();
    return null;
}
$msg = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    try {
        $res = verify_user($email, $password);
        if (isset($res)) {
            $_SESSION['id'] = $res['id'];
            $_SESSION['name'] = $res['name'];
            $_SESSION['email'] = $email;
            header("Location: student/dashboard.php");
            exit;
        } else {
            $msg = "Invalid Credentials!";
        }
    }
    catch (mysqli_sql_exception $se) {
        $msg = "Database error. Please try again.";
        error_log($se->getMessage());
    }
    catch (Exception $e) {
        $msg = "Something went wrong. Please try again.";
        error_log($e->getMessage());
    }
}
include_once "includes/navbar.php";
?>

<!-- LOGIN FORM -->
<div class="container d-flex justify-content-center align-items-center py-4" style="min-height: calc(100vh - 100px);">
    <div class="card shadow-sm border-0 p-4"
         style="width: 100%; max-width: 450px;">
        <div class="text-center mb-4">
            <h4 class="fw-bold mt-3">
                Sign In
            </h4>
        </div>

        <?php if (!empty($msg)) { ?>
            <div class="alert alert-danger">
                <?php echo htmlspecialchars($msg); ?>
            </div>
        <?php } ?>

        <form method="POST" action="login.php">
            <div class="mb-3">
                <label class="form-label">
                    Email Address
                </label>
                <input
                    type="email"
                    name="email"
                    class="form-control"
                    placeholder="Enter your email"
                    maxlength="150"
                    value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>"
                    required
                >
            </div>
            <div class="mb-4">
                <label class="form-label">
                    Password
                </label>
                <input
                    type="password"
                    name="password"
                    class="form-control"
                    placeholder="Enter your password"
                    required
                >
            </div>
            <button type="submit" class="btn btn-primary w-100">
                Sign In
            </button>
        </form>
        <p class="text-center text-secondary mt-4 mb-0">
            Not registered yet?
            <a href="register.php"
               class="text-primary text-decoration-none fw-semibold">
                Create Account
            </a>
        </p>
    </div>
</div>
<?php
require_once "includes/footer.php";
?>

