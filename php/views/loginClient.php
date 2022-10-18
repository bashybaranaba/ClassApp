
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../../css/style.css">
  </head>
  <body>
    <div>
      <form name="login" method="post" action="../process/loginClientQuery.php">
        <div align="center">
          <h2>Login</h2>
          <br/>
          <div class="container" style="background-color:white">
            <input type="text" placeholder="Email address" name="email" required>
            <input type="password" placeholder="Password" name="password" required>
            <input type="submit" value="LOGIN">
          </div>
          <p>Don't have an account? <a href="registerClient.php">Signup<a></p>
          <p>Log in as admin <a href="loginAdmin.php">Admin Login<a></p>
        </div>
      </form>
    </div>
  </body>
</html>
