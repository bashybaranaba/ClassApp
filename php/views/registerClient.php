<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../../css/style.css">
  </head>
  <body>
    <div>
      <div class="menu"></div>
      <div class="main">
      <form name="register" method="post" action="../process/registerClientQuery.php">
        <div align="center">
          <h2>Register</h2>
          <br/>
          <div class="container" style="background-color:white">
            <input type="text" placeholder="Email address" name="email" required>
            <input type="text" placeholder="Full Name" name="name" required>
            <input type="text" placeholder="Telephone" name="telephone" required>
            <input type="text" placeholder="Physical Address" name="address" required>
            <input type="password" placeholder="Password" name="password" required>
            <input type="password" placeholder="Confirm Password" name="confirm_password" required>
            <input type="submit" value="REGISTER">
          </div>
          <p>Already have an acount? <a href="loginClient.php">Login<a></p>
        </div>
      </form>
    </div>
    </div>
  </body>
</html>
