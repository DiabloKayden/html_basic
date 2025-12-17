<?php

function getCookieValue($name) {
    return isset($_COOKIE[$name]) ? htmlspecialchars($_COOKIE[$name]) : "";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>
</head>
<body>

  <h1>Registration</h1><br><br>

<form action="ht.php" method="POST">
  <table border="1">
    <tr>
      <td valign="center">
        <fieldset>
          <legend><b>General Information</b></legend>
          <table>
            <tr><td><b>First Name</b></td><td> <input type="text" name="fname" value="<?php echo getCookieValue('fname'); ?>"></td></tr>
            <tr><td><b>Last Name</b></td><td> <input type="text" name="lname" value="<?php echo getCookieValue('lname'); ?>"></td></tr>
            <tr><td><b>Gender :</td><td> 
              <input type="radio" name="gender" value="Male" <?php if(getCookieValue('gender')=="Male") echo "checked"; ?>> Male 
              <input type="radio" name="gender" value="Female" <?php if(getCookieValue('gender')=="Female") echo "checked"; ?>> Female 
            </td></tr>
            <tr><td><b>Father's Name</b></td><td><input type="text" name="faname" value="<?php echo getCookieValue('faname'); ?>"></td></tr>
            <tr><td><b>Mother's Name</b></td><td><input type="text" name="mname" value="<?php echo getCookieValue('mname'); ?>"></td></tr>
            <tr><td><b>Blood Group</b></td>
              <td>
                <select name="blood">
                  <option value="O+" <?php if(getCookieValue('blood')=="O+") echo "selected"; ?>>O+</option>
                  <option value="A+" <?php if(getCookieValue('blood')=="A+") echo "selected"; ?>>A+</option>
                  <option value="B+" <?php if(getCookieValue('blood')=="B+") echo "selected"; ?>>B+</option>
                  <option value="AB+" <?php if(getCookieValue('blood')=="AB+") echo "selected"; ?>>AB+</option>
                </select>
              </td>
            </tr>
            <tr><td><b>Religion</b></td>
              <td>
                <select name="religion">
                  <option value="islam" <?php if(getCookieValue('religion')=="islam") echo "selected"; ?>>Islam</option>
                  <option value="hindu" <?php if(getCookieValue('religion')=="hindu") echo "selected"; ?>>Hindu</option>
                  <option value="boddo" <?php if(getCookieValue('religion')=="boddo") echo "selected"; ?>>Buddhism</option>
                  <option value="christianity" <?php if(getCookieValue('religion')=="christianity") echo "selected"; ?>>Christianity</option>
                </select>
              </td>
            </tr>
          </table>
        </fieldset>
      </td>

      <td valign="center">
        <fieldset>
          <legend><b>Contact Information</b></legend>
          <table>
            <tr><td><b>Email</b></td><td><input type="Email" name="Email" value="<?php echo getCookieValue('Email'); ?>"></td></tr>
            <tr><td><b>Phone</b></td><td><input type="text" name="Mobile" value="<?php echo getCookieValue('Mobile'); ?>"></td></tr>
            <tr><td><b>Website</b></td><td><input type="text" name="Website" value="<?php echo getCookieValue('Website'); ?>"></td></tr>
            <tr><td><b>Present Address</b></td>
              <td>
                <textarea name="Address" rows="8" cols="50" placeholder="Road/street/city"><?php echo getCookieValue('Address'); ?></textarea>
              </td>
            </tr>
            <tr><td><b>Post Code</b></td><td><input type="text" name="pcode"  placeholder="Post Code" value="<?php echo getCookieValue('pcode'); ?>"></td></tr>
          </table>
        </fieldset>
      </td>

      <td valign="top">
        <fieldset>
          <legend><b>Account Information</b></legend>
          <table border="1">
            <tr><td><b>Username:</b></td><td><input type="text" name="uname" value="<?php echo getCookieValue('uname'); ?>"></td></tr>
            <tr><td><b>Password:</b></td><td><input type="password" name="password" value="<?php echo getCookieValue('password'); ?>"></td></tr>
            <tr><td><b>Confirm Password:</b></td><td><input type="password" name="conpass" value="<?php echo getCookieValue('conpass'); ?>"></td></tr>
          </table>
        </fieldset>
      </td>
    </tr>
  </table>

  <input type="hidden" name="save_as_draft" value="0">
  <input type="submit" value="Register">
  <button type="submit" name="save_as_draft" value="1">Save as Draft</button>
  <button type="submit" name="clear_draft" value="1">Clear Draft</button>
</form>

</body>
</html>
