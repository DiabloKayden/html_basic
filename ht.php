<?php
session_start();

// Handle form submissions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // --- Clear Draft ---
    if (isset($_POST['clear_draft']) && $_POST['clear_draft'] == "1") {
        foreach ($_COOKIE as $key => $value) {
            setcookie($key, "", time() - 3600, "/"); // expire each cookie
        }
        echo "<h2>Draft cleared 🗑️</h2>";
    }
    // --- Save Draft ---
    elseif (isset($_POST['save_as_draft']) && $_POST['save_as_draft'] == "1") {
        foreach ($_POST as $key => $value) {
            if ($key != "save_as_draft") {
                setcookie($key, $value, time() + (86400 * 30), "/"); // 30 days
            }
        }
        echo "<h2>Draft saved ✅</h2>";
    }
    // --- Register ---
    else {
        $data = "First Name: " . $_POST['fname'] . "\n" .
                "Last Name: " . $_POST['lname'] . "\n" .
                "Gender: " . $_POST['gender'] . "\n" .
                "Father's Name: " . $_POST['faname'] . "\n" .
                "Mother's Name: " . $_POST['mname'] . "\n" .
                "Blood Group: " . $_POST['blood'] . "\n" .
                "Religion: " . $_POST['religion'] . "\n" .
                "Email: " . $_POST['Email'] . "\n" .
                "Phone: " . $_POST['Mobile'] . "\n" .
                "Website: " . $_POST['Website'] . "\n" .
                "Address: " . $_POST['Address'] . "\n" .
                "Post Code: " . $_POST['pcode'] . "\n" .
                "Username: " . $_POST['uname'] . "\n" .
                "Password: " . $_POST['password'] . "\n\n";

        file_put_contents("registered_users.txt", $data, FILE_APPEND);
        echo "<h2>Registration successful 🎉</h2>";
    }
}

// --- Show Registered Data ---
echo "<h2>All Registered Users</h2>";
if (file_exists("registered_users.txt")) {
    echo "<pre>" . htmlspecialchars(file_get_contents("registered_users.txt")) . "</pre>";
} else {
    echo "No registered users yet.";
}

// --- Show Drafted Data (Cookies) ---
echo "<h2>Drafted Data (from Cookies)</h2>";
if (!empty($_COOKIE)) {
    echo "<ul>";
    foreach ($_COOKIE as $key => $value) {
        echo "<li><b>$key</b>: " . htmlspecialchars($value) . "</li>";
    }
    echo "</ul>";
} else {
    echo "No draft data saved.";
}

// --- Add Clear Draft Button ---
echo '<form method="POST" action="">
        <button type="submit" name="clear_draft" value="1">Clear Draft</button>
      </form>';

echo '<br><a href="profile.php">Back to Form</a>';
?>
