<?php
session_start();

require_once "config/db.php";
if (isset($_SESSION['user_id'])) {
    header("Location: student/dashboard.php");
    exit();
}
$error = "";
$success = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    if (empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
        $error = "All fields are required.";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Please enter a valid email address.";
    }
    elseif (strlen($password)<6) {
        $error = "Password must contain at least 6 characters.";
    }
    elseif ($password !== $confirm_password) {
        $error = "Passwords do not match.";
    }
    else {

        try {
            $conn = get_connection();
            $check = $conn->prepare(
                "SELECT id FROM users WHERE email = ?"
            );
            $check->bind_param("s", $email);
            $check->execute();
            $result = $check->get_result();
            if ($result->num_rows > 0) {
                $error = "Email is already registered.";
            }
            else {
                $hashed_password = password_hash($password,PASSWORD_DEFAULT);
                $stmt = $conn->prepare(
                    "INSERT INTO users (name, email, password, role)
                     VALUES (?, ?, ?, 'student')"
                );
                $stmt->bind_param("sss",$name,$email,$hashed_password);
                if ($stmt->execute()) {
                    $success = "Registration successful! You can now login.";
                }
                $stmt->close();
            }
            $check->close();
            $conn->close();

        }
        catch (mysqli_sql_exception $e) {
            error_log($e->getMessage());
            $error = "Something went wrong. Please try again.";
        }
    }
}
$page_title = "Register | ACUMEN";
require_once "includes/navbar.php";
?>

<!-- REGISTRATION FORM -->

<div class="container d-flex justify-content-center align-items-center py-4" style="min-height: calc(100vh - 80px);">
    <div class="card shadow-sm border-0 p-4"
         style="width: 100%; max-width: 450px;">
        <div class="text-center mb-4">
            <h4 class="fw-bold mt-3">
                Create your account
            </h4>
        </div>

        <?php if (!empty($error)) { ?>
            <div class="alert alert-danger">
                <?php echo htmlspecialchars($error); ?>
            </div>
        <?php } ?>

        <?php if (!empty($success)) { ?>
            <div class="alert alert-success">
                <?php echo htmlspecialchars($success); ?>
                <a href="login.php" class="alert-link">
                    Login here
                </a>
            </div>
        <?php } ?>

        <form method="POST" action="register.php">
            <div class="mb-3">
                <label class="form-label">
                    Full Name
                </label>
                <input
                    type="text"
                    name="name"
                    class="form-control"
                    placeholder="Enter your full name"
                    maxlength="100"
                    value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>"
                    required
                >
            </div>
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
            <div class="mb-3">
                <label class="form-label">
                    Password
                </label>
                <input
                    type="password"
                    name="password"
                    class="form-control"
                    placeholder="Minimum 8 characters"
                    minlength="8"
                    required
                >
            </div>
            <div class="mb-4">
                <label class="form-label">
                    Confirm Password
                </label>
                <input
                    type="password"
                    name="confirm_password"
                    class="form-control"
                    placeholder="Confirm your password"
                    required
                >
            </div>
            <button type="submit" class="btn btn-primary w-100">
                Create Account
            </button>
        </form>
        <p class="text-center text-secondary mt-4 mb-0">
            Already have an account?
            <a href="login.php" class="text-primary text-decoration-none fw-semibold">
                Login
            </a>
        </p>
    </div>
</div>

<?php
require_once "includes/footer.php";
?>
