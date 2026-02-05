<?php
/**
 * Beginner Registration Page
 * A simple user registration form with basic validation
 */

// Initialize variables
$errors = [];
$success = false;
$form_data = [];
// Include database configuration (creates DB/table if needed)
require_once __DIR__ . '/config.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get and sanitize form inputs
    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    $age = trim($_POST['age'] ?? '');

    // Store form data for re-display
    $form_data = [
        'username' => htmlspecialchars($username),
        'email' => htmlspecialchars($email),
        'age' => htmlspecialchars($age)
    ];

    // Validate inputs
    if (empty($username)) {
        $errors[] = "Username is required";
    } elseif (strlen($username) < 3) {
        $errors[] = "Username must be at least 3 characters long";
    }

    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    if (empty($password)) {
        $errors[] = "Password is required";
    } elseif (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters long";
    }

    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match";
    }

    if (empty($age)) {
        $errors[] = "Age is required";
    } elseif (!is_numeric($age) || $age < 13 || $age > 120) {
        $errors[] = "Age must be a valid number between 13 and 120";
    }

    // If no errors, process registration
    if (empty($errors)) {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Check for existing username
        $stmt = $conn->prepare("SELECT id FROM users WHERE username = ? LIMIT 1");
        if ($stmt) {
            $stmt->bind_param('s', $username);
            $stmt->execute();
            $stmt->store_result();
            if ($stmt->num_rows > 0) {
                $errors[] = "This username is already taken";
            }
            $stmt->close();
        } else {
            $errors[] = "Database error: " . $conn->error;
        }

        // Check for existing email
        if (empty($errors)) {
            $stmt = $conn->prepare("SELECT id FROM users WHERE email = ? LIMIT 1");
            if ($stmt) {
                $stmt->bind_param('s', $email);
                $stmt->execute();
                $stmt->store_result();
                if ($stmt->num_rows > 0) {
                    $errors[] = "This email is already registered";
                }
                $stmt->close();
            } else {
                $errors[] = "Database error: " . $conn->error;
            }
        }

        // Insert into database if still no errors
        if (empty($errors)) {
            $insert = $conn->prepare("INSERT INTO users (username, email, password, age) VALUES (?, ?, ?, ?)");
            if ($insert) {
                $insert->bind_param('sssi', $username, $email, $hashed_password, $age);
                if ($insert->execute()) {
                    $success = true;
                    // Clear form data after successful submission
                    $form_data = [];
                } else {
                    $errors[] = "Error creating account: " . $insert->error;
                }
                $insert->close();
            } else {
                $errors[] = "Database error: " . $conn->error;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration - Beginner Level</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            color: #333;
            margin-bottom: 10px;
            text-align: center;
            font-size: 28px;
        }

        .subtitle {
            color: #666;
            text-align: center;
            margin-bottom: 30px;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 500;
            font-size: 14px;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 2px solid #e1e8ed;
            border-radius: 5px;
            font-size: 14px;
            transition: border-color 0.3s;
        }

        input:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .error-messages {
            background-color: #fee;
            border: 1px solid #fcc;
            color: #c33;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .error-messages ul {
            margin-left: 20px;
        }

        .error-messages li {
            margin-bottom: 8px;
        }

        .success-message {
            background-color: #efe;
            border: 1px solid #cfc;
            color: #3c3;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }

        button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        button:active {
            transform: translateY(0);
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
            color: #666;
            font-size: 14px;
        }

        .login-link a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        .back-link {
            margin-bottom: 20px;
        }

        .back-link a {
            color: #667eea;
            text-decoration: none;
            font-size: 14px;
        }

        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="back-link">
            <a href="home.php">← Back to Home</a>
        </div>

        <h1>Create Account</h1>
        <p class="subtitle">Join us today!</p>

        <?php if ($success): ?>
            <div class="success-message">
                <strong>✓ Registration Successful!</strong><br>
                Welcome! Your account has been created. You can now log in.
            </div>
        <?php endif; ?>

        <?php if (!empty($errors) && !$success): ?>
            <div class="error-messages">
                <strong>Please fix the following errors:</strong>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo htmlspecialchars($error); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php if (!$success): ?>
            <form method="POST">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" value="<?php echo $form_data['username'] ?? ''; ?>"
                        required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo $form_data['email'] ?? ''; ?>" required>
                </div>

                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age" value="<?php echo $form_data['age'] ?? ''; ?>" min="13"
                        max="120" required>
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <div class="form-group">
                    <label for="confirm_password">Confirm Password:</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                </div>

                <button type="submit">Create Account</button>
            </form>

            <div class="login-link">
                Already have an account? <a href="login.php">Log in here</a>
            </div>
        <?php else: ?>
            <div style="text-align: center; margin-top: 30px;">
                <p>Your registration details:</p>
                <ul style="list-style: none; text-align: left; display: inline-block; margin-top: 15px;">
                    <li><strong>Username:</strong> <?php echo htmlspecialchars($form_data['username'] ?? $username); ?></li>
                    <li><strong>Email:</strong> <?php echo htmlspecialchars($form_data['email'] ?? $email); ?></li>
                    <li><strong>Age:</strong> <?php echo htmlspecialchars($form_data['age'] ?? $age); ?></li>
                </ul>
                <p style="margin-top: 20px; color: #666; font-size: 14px;">
                    (In a real application, this data would be saved to a database)
                </p>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>