
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../../css/style.css">
  </head>
  <body>
    <div>
      <form name="login" method="post" action="../process/loginAdminQuery.php">
        <div align="center">
          <h2>Admin Login</h2>
          <br/>
          <div class="container" style="background-color:white">
            <input type="text" placeholder="Email address" name="email" required>
            <input type="password" placeholder="Password" name="password" required>
            <input type="submit" value="LOGIN">
          </div>
          <p>Log in as user <a href="loginClient.php">User Login<a></p>
        </div>
      </form>
    </div>
  </body>
</html>
