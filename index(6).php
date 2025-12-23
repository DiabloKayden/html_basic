<?php
$message = "";

if (isset($_POST['save_draft'])) {

    setcookie("firstName", $_POST['firstName'] ?? '', time() + 3600);
    setcookie("lastName", $_POST['lastName'] ?? '', time() + 3600);
    setcookie("gender", $_POST['gender'] ?? '', time() + 3600);
    setcookie("fathersName", $_POST['fathersName'] ?? '', time() + 3600);
    setcookie("mothersName", $_POST['mothersName'] ?? '', time() + 3600);
    setcookie("bGroup", $_POST['bGroup'] ?? '', time() + 3600);
    setcookie("religion", $_POST['religion'] ?? '', time() + 3600);

    setcookie("email", $_POST['email'] ?? '', time() + 3600);
    setcookie("phone", $_POST['phone'] ?? '', time() + 3600);
    setcookie("website", $_POST['website'] ?? '', time() + 3600);

    setcookie("country", $_POST['country'] ?? '', time() + 3600);
    setcookie("area", $_POST['area'] ?? '', time() + 3600);
    setcookie("address", $_POST['address'] ?? '', time() + 3600);
    setcookie("postCode", $_POST['postCode'] ?? '', time() + 3600);

    setcookie("username", $_POST['username'] ?? '', time() + 3600);
    setcookie("password", $_POST['password'] ?? '', time() + 3600);
    setcookie("cPassword", $_POST['cPassword'] ?? '', time() + 3600);

    setcookie("last_modified", date("d M Y, h:i:s A"), time() + 3600);

    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if (isset($_POST['submit_form'])) {
    $message = "Form submitted successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Registration</h1>

<?php
if ($message) {
    echo '<p style="color: green; font-weight: bold;">';
    echo $message;
    echo '</p>';
}
?>

<h3>Last modified:
<?php echo $_COOKIE['last_modified'] ?? 'Never'; ?>
</h3>

<form action="" method="post">
<table style="border: 1px solid black; display: inline-table;">
    <th>General Information</th>
    <tr>
        <td><label>First Name:</label></td>
        <td><input type="text" name="firstName" value="<?php echo $_COOKIE['firstName'] ?? ''; ?>"></td>
    </tr>
    <tr>
        <td><label>Last Name:</label></td>
        <td><input type="text" name="lastName" value="<?php echo $_COOKIE['lastName'] ?? ''; ?>"></td>
    </tr>
    <tr>
        <td><label>Gender</label></td>
        <td>
            <input type="radio" name="gender" value="male"
            <?php if(($_COOKIE['gender'] ?? '')=='male') echo 'checked'; ?>>
            <label>Male</label>

            <input type="radio" name="gender" value="female"
            <?php if(($_COOKIE['gender'] ?? '')=='female') echo 'checked'; ?>>
            <label>Female</label>
        </td>
    </tr>
    <tr>
        <td><label>Father's Name:</label></td>
        <td><input type="text" name="fathersName" value="<?php echo $_COOKIE['fathersName'] ?? ''; ?>"></td>
    </tr>
    <tr>
        <td><label>Mother's Name:</label></td>
        <td><input type="text" name="mothersName" value="<?php echo $_COOKIE['mothersName'] ?? ''; ?>"></td>
    </tr>
    <tr>
        <td>
            <label>Blood Group</label>
            <select name="bGroup">
                <option value="A+" <?php if(($_COOKIE['bGroup'] ?? '')=='A+') echo 'selected'; ?>>A+</option>
                <option value="B+" <?php if(($_COOKIE['bGroup'] ?? '')=='B+') echo 'selected'; ?>>B+</option>
                <option value="O+" <?php if(($_COOKIE['bGroup'] ?? '')=='O+') echo 'selected'; ?>>O+</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            <label>Religion</label>
            <select name="religion">
                <option value="Islam" <?php if(($_COOKIE['religion'] ?? '')=='Islam') echo 'selected'; ?>>Islam</option>
                <option value="christian" <?php if(($_COOKIE['religion'] ?? '')=='christian') echo 'selected'; ?>>Christian</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            <input type="submit" name="submit_form" value="Submit">
            <button type="submit" name="save_draft">Save as draft</button>
        </td>
    </tr>
</table>

<table style="border: 1px solid black; display: inline-table;">
    <th>Contact Information</th>
    <tr>
        <td><label>Email:</label></td>
        <td><input type="text" name="email" value="<?php echo $_COOKIE['email'] ?? ''; ?>"></td>
    </tr>
    <tr>
        <td><label>Phone:</label></td>
        <td><input type="text" name="phone" value="<?php echo $_COOKIE['phone'] ?? ''; ?>"></td>
    </tr>
    <tr>
        <td><label>Website:</label></td>
        <td><input type="text" name="website" value="<?php echo $_COOKIE['website'] ?? ''; ?>"></td>
    </tr>
    <tr>
        <td><label>Address:</label></td>
        <table style="border: 1px solid black; display:inline-table;">
            <th>Present Address</th>
            <tr>
                <td>
                    <select name="country">
                        <option value="bangladesh" <?php if(($_COOKIE['country'] ?? '')=='bangladesh') echo 'selected'; ?>>Bangladesh</option>
                        <option value="palestine" <?php if(($_COOKIE['country'] ?? '')=='palestine') echo 'selected'; ?>>Palestine</option>
                    </select>

                    <select name="area">
                        <option value="dhaka" <?php if(($_COOKIE['area'] ?? '')=='dhaka') echo 'selected'; ?>>Dhaka</option>
                        <option value="Gazipur" <?php if(($_COOKIE['area'] ?? '')=='Gazipur') echo 'selected'; ?>>Gazipur</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <textarea name="address"><?php echo $_COOKIE['address'] ?? ''; ?></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="postCode" placeholder="Post Code"
                    value="<?php echo $_COOKIE['postCode'] ?? ''; ?>">
                </td>
            </tr>
        </table>
    </tr>
</table>

<table style="border: 1px solid black; display: inline-table;">
    <th>Account Information</th>
    <tr>
        <td><label>Username:</label></td>
        <td><input type="text" name="username" value="<?php echo $_COOKIE['username'] ?? ''; ?>"></td>
    </tr>
    <tr>
        <td><label>Password:</label></td>
        <td><input type="text" name="password" value="<?php echo $_COOKIE['password'] ?? ''; ?>"></td>
    </tr>
    <tr>
        <td><label>Confirm Password:</label></td>
        <td><input type="text" name="cPassword" value="<?php echo $_COOKIE['cPassword'] ?? ''; ?>"></td>
    </tr>
</table>

</form>
</body>
</html>
