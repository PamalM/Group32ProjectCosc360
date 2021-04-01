
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>MyBlogPost</title>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
    <script type = "text/javascript" src="../js/signIn.js"></script>  
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
  <header id="masthead">
    <table>
      <tr>
        <td id="menuTitle">
          <h1>MyBlogPost</h1>
          <input type="text" placeholder="Search...">
      </tr>
      <tr>
        <td>
          <div id="menu">
            <a id="menuItem" href="../index.php">Home</a>
            <a id="active-item" class="onactive" href="signin.html"><em>Sign In</em></a>
          </div>
        </td>
      </tr>
    </table>
  </header>

  <div id="center">

    <div class="signup-container">
      <form class="signup-form" action="">
        <fieldset>
          <p><label for="email">Email:</label></p>
          <p><input type="email" name="email" id="email"  maxlength="30" /></p>

          <p><label for="password">Password:</label></p>
          <p><input type="password" name="password" id="password"  maxlength="15" /></p>
          <a href="forgetPassword.html" id="forgetP">Forgot Password?</a>
          <h3 id="message"></h3>
          <p><input type="submit" value="Sign In" id="signIn-btn"/></p>
          <p><input type="button" value="Sign Up" onclick="signUp_Visit()" id="signUp-btn"/></p>
        </fieldset>
      </form>
    </div>

  </div>

  <footer id="mastfoot">
    <a href="#">FAQ Page</a>
    | <a href="#">Home</a>
    | <a href="#">Contact Us</a>
  </footer>
  </body>
</html>