<html>
    <head>
    <title>L O G I N</title>

        <style>
            @import url(https://fonts.googleapis.com/css?family=Roboto:300);

        .login-page {
          width: 360px;
          padding: 8% 0 0;
          margin: auto;
        }
        .form {
          position: relative;
          z-index: 1;
          background: #FFFFFF;
          max-width: 360px;
          margin: 0 auto 100px;
          padding: 45px;
          text-align: center;
          box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }

        .form h1 {
            margin: 0 0 30px 0;
            text-align: center;
        }

        .form input {
          font-family: "Roboto", sans-serif;
          outline: 0;
          background: #f2f2f2;
          width: 100%;
          border: 0;
          margin: 0 0 15px;
          padding: 15px;
          box-sizing: border-box;
          font-size: 14px;
        }
        .form button {
          font-family: "Roboto", sans-serif;
          text-transform: uppercase;
          outline: 0;
          background: #ff9626;
          width: 100%;
          border: 0;
          padding: 15px;
          color: #FFFFFF;
          font-size: 14px;
          -webkit-transition: all 0.3 ease;
          transition: all 0.3 ease;
          cursor: pointer;
        }
        .form button:hover,.form button:active,.form button:focus {
          background: #e28522;
        }
        .form .message {
          margin: 15px 0 0;
          color: #b3b3b3;
          font-size: 12px;
        }
        .form .message a {
          color: #e28522;
          text-decoration: none;
        }
        .form .register-form {
          display: none;
        }
        .container {
          position: relative;
          z-index: 1;
          max-width: 300px;
          margin: 0 auto;
        }
        .container:before, .container:after {
          content: "";
          display: block;
          clear: both;
        }
        .container .info {
          margin: 50px auto;
          text-align: center;
        }
        .container .info h1 {
          margin: 0 0 15px;
          padding: 0;
          font-size: 36px;
          font-weight: 300;
          color: #1a1a1a;
        }
        .container .info span {
          color: #4d4d4d;
          font-size: 12px;
        }
        .container .info span a {
          color: #000000;
          text-decoration: none;
        }
        .container .info span .fa {
          color: #EF3B3A;
        }
        .error1{
          color: red;
        }

        body {
          margin: 0;
          font-family: "Roboto", sans-serif;
          -webkit-font-smoothing: antialiased;
          -moz-osx-font-smoothing: grayscale;
          background: url(login-bg.jpg) no-repeat center center fixed;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          -ms-background-size: cover;
          background-size: cover;
        }

        .topnav {
          overflow: hidden;
          background-color: #333;
        }
        .topnav ul{
          list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #ff8f4f;
            position: fixed;
            top: 0;
            width: 100%;
        }
        .topnav li{
          float: right;
        }
        .topnav a {
          list-style-type: none;
          float: left;
          display: block;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 17px;
        }

        .topnav a:hover {
          background-color: #db7b43;
        }

        .topnav a.active {
            background-color: #ff6326;
        }

        </style>
    </head>
    <body>
        <div class="topnav">
          <ul>
            <li style="float: left;"><a href="index.html">E X — D O C</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="#market">Market</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="index.html">About</a></li>
          </ul>
        </div>
            <div class="login-page">
                <div class="form">
                <h1>LOGIN</h1>
                    <form name="form1" method="post" action="check_login.php">
                          <input name="txtUsername" type="text" id="txtUsername" placeholder="username">
                          <input name="txtPassword" type="password" id="txtPassword" placeholder="password">
                          <button type="Submit" name="Submit" value="Login">login</button>
                          <p class="message">Not registered? <a href="register.php">Create an account</a></p>
                          <?
              if ($_GET['error'] == true)
              echo '<div class="error1"><p> Your ID or Password is incorrect. </p></div>'
            ?>
                    </form>
                </div>
        </div>
    </body>
</html>