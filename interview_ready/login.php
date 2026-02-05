<?php
session_start();
require_once __DIR__ . '/config.php';

$errors = [];
$identifier = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $identifier = trim($_POST['identifier'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($identifier)) {
        $errors[] = 'Username or email is required';
    }
    if (empty($password)) {
        $errors[] = 'Password is required';
    }

    if (empty($errors)) {
        $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ? OR email = ? LIMIT 1");
        if ($stmt) {
            $stmt->bind_param('ss', $identifier, $identifier);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows === 1) {
                $stmt->bind_result($id, $username, $hash);
                $stmt->fetch();

                if (password_verify($password, $hash)) {
                    // Success: set session and redirect to home
                    $_SESSION['user_id'] = $id;
                    $_SESSION['username'] = $username;

                    // Update last_login (optional)
                    $u = $conn->prepare("UPDATE users SET last_login = NOW() WHERE id = ?");
                    if ($u) {
                        $u->bind_param('i', $id);
                        $u->execute();
                        $u->close();
                    }

                    header('Location: home.php');
                    exit;
                } else {
                    $errors[] = 'Invalid credentials';
                }
            } else {
                $errors[] = 'No account found with that username or email';
            }

            $stmt->close();
        } else {
            $errors[] = 'Database error: ' . $conn->error;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login — Beginner PHP</title>
    <style>
        body {
            font-family: Segoe UI, Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px
        }

        .box {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            max-width: 400px;
            width: 100%;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15)
        }

        h1 {
            margin-bottom: 6px;
            font-size: 24px;
            color: #333;
            text-align: center
        }

        .subtitle {
            color: #666;
            margin-bottom: 18px;
            text-align: center
        }

        label {
            display: block;
            margin-bottom: 6px;
            color: #333
        }

        input {
            width: 100%;
            padding: 10px;
            border: 2px solid #e1e8ed;
            border-radius: 6px;
            margin-bottom: 14px
        }

        button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: #fff;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer
        }

        .errors {
            background: #fee;
            padding: 10px;
            border: 1px solid #fcc;
            color: #c33;
            border-radius: 6px;
            margin-bottom: 12px
        }

        .links {
            text-align: center;
            margin-top: 12px
        }

        a {
            color: #667eea;
            text-decoration: none
        }
    </style>
</head>

<body>
    <div class="box">
        <h1>Log in</h1>
        <p class="subtitle">Sign in to your account</p>

        <?php if (!empty($errors)): ?>
            <div class="errors">
                <ul>
                    <?php foreach ($errors as $e): ?>
                        <li><?php echo htmlspecialchars($e); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="POST">
            <label for="identifier">Username or Email</label>
            <input id="identifier" name="identifier" value="<?php echo htmlspecialchars($identifier); ?>" autofocus>

            <label for="password">Password</label>
            <input id="password" type="password" name="password">

            <button type="submit">Log in</button>
        </form>

        <div class="links">
            <p>Don't have an account? <a href="register.php">Create one</a></p>
            <p><a href="home.php">Back to Home</a></p>
        </div>
    </div>
</body>

</html>