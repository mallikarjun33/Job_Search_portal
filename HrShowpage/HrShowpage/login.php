<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Login.css">
</head>
<body>
  <script type="text/javascript">
    function onSignIn(googleUser) {
    var id_token = googleUser.getAuthResponse().id_token;
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'https://yourhr.com/auth/google');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
      if (xhr.status === 200) {
        console.log('User authenticated');
      } else {
        console.error('User authentication failed');
      }
    };
    xhr.send('id_token=' + encodeURIComponent(id_token));
  }
  
  </script>
    <?php
    include("conn.php")
     ?>
    <form action="signup.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <button type="submit">Sign Up</button>
      </form>
      <br><br>
      <div class="social-media-signin">
        <button type="button" class="btn btn-facebook">
          <i class="fab fa-facebook-f"></i> Sign up with Facebook
        </button>
        <br><br>
        <button type="button" class="btn btn-google">
          <i class="fab fa-google"></i> Sign up with Google
        </button>
      </div>
      
</body>
</html>