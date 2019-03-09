<html>
  <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <title>S I G N&nbsp;&nbsp;&nbsp;U P</title>

<style>
          @import url('https://fonts.googleapis.com/css?family=Nunito');
          @import url('https://fonts.googleapis.com/css?family=Quicksand');

          .topnav {
            overflow: hidden;
            background-color: #333;
            font-family: "Quicksand", sans-serif;

          }
          .topnav ul{
            list-style-type: none;
            margin: 0 0 0 0;
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

          *, *:before, *:after {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
          }

          html{
            background: url(login-bg.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            -ms-background-size: cover;
            background-size: cover;
          }

          body {
            font-family: "Nunito", sans-serif;
            margin: 0;
            color: #384047;
          }

          form {
            max-width: 300px;
            margin: 10px auto;
            padding: 10px 20px;
            background: #FFFFFF;
            border-radius: 8px;
          }

          h1 {
            margin: 0 0 30px 0;
            text-align: center;
          }

          input[type="text"],
          input[type="password"],
          input[type="date"],
          input[type="datetime"],
          input[type="email"],
          input[type="number"],
          input[type="search"],
          input[type="tel"],
          input[type="time"],
          input[type="url"],
          textarea,
          select {
            background: rgba(255,255,255,0.1);
            border: none;
            font-size: 16px;
            height: auto;
            margin: 0;
            outline: 0;
            padding: 15px;
            width: 100%;
            background-color: #f2f2f2;
            color: #545d63;
            box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
            margin-bottom: 30px;
          }

          input[type="radio"],
          input[type="checkbox"] {
            margin: 0 4px 8px 0;
          }

          select {
            padding: 6px;
            height: 32px;
            border-radius: 2px;
          }

          button {
            font-family: "Nunito", sans-serif;
            text-transform: uppercase;
            padding: 19px 39px 18px 39px;
            color: #FFF;
            background-color: #ff9626;
            font-size: 18px;
            text-align: center;
            font-style: normal;
            border-radius: 5px;
            width: 100%;
            border: 1px solid #e2841f;
            border-width: 1px 1px 3px;
            box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
            margin-bottom: 10px;
          }

          button:hover, button:active, button:focus{
            background: #e28522;
          }

          fieldset {
            margin-bottom: 30px;
            border: none;
          }

          .legend {
            font-size: 1.4em;
            text-align: center;
          }

          label {
            display: block;
            margin-bottom: 8px;
          }

          label.light {
            font-weight: 300;
            display: inline;
          }

          .number {
            background-color: #5fcf80;
            color: #fff;
            height: 30px;
            width: 30px;
            display: inline-block;
            font-size: 0.8em;
            margin-right: 4px;
            line-height: 30px;
            text-align: center;
            text-shadow: 0 1px 0 rgba(255,255,255,0.2);
            border-radius: 100%;
          }

          @media screen and (min-width: 480px) {

            form {
              max-width: 480px;
            }

          }
    </style>
    <script type="text/javascript">
          function check_form()
          {
            var usernm = document.getElementById('txtUsername').value;
            var passw = document.getElementById('txtPassword').value;
            var passw2 = document.getElementById('txtConPassword').value;
            var letter = /[a-z]/;
            var letterUp= /[A-Z]/;
            var number = /[0-9]/;
 
            if(usernm.length != 8 || !number.text(usernm)){
              if(usernm.length != 8){
                alert("Please make sure that username is 8 characters.");
                return false;
              }
              if(!number.test(usernm)){
                alert("Please make sure that your username is your student ID");
                return false;
              }
            }

            if(passw.length < 8 || passw != passw2) {
                  if(passw.length<8){
                  alert("Please make sure that password is longer than 8 characters.");
                  return false;
                  }
                  if(passw != passw2){
                  alert("Please make sure that passwords match.");
                  return false;
                  }
            }
              /*email test*/
            var email = document.getElementById('txtEmail').value;
            var filter = /([a-z0-9_.-]){0,}@([a-zA-Z0-9])+.[a-zA-Z0-9]{2,3}/;
              if (!filter.test(email)) {
                 alert('Please provide a valid email address');
                 form.email.focus;
                 return false;
            }


            return true;
            
          }
    </script>

<script type="text/javascript">
function check_form()
{
  var passw = document.getElementById('txtPassword').value;
  var passw2 = document.getElementById('txtConPassword').value;
  var letter = /[a-z]/;
  var letterUp= /[A-Z]/;
  var number = /[0-9]/;

  if(passw.length < 8 || passw != passw2) {
        if(passw.length<8){
        alert("Please make sure password is longer than 8 characters.")
        return false;
        }
        if(passw != passw2){
        alert("Please make sure passwords match.")
        return false;
        }

    /*email test*/
  var email = document.getElementById('txtEmail').value;
  var filter = /([a-z0-9_.-]){0,}@([a-zA-Z0-9])+.[a-zA-Z0-9]{2,3}/;
    if (!filter.test(email)) {
       alert('Please provide a valid email address');
       form.email.focus;
       return false;
  }


  return true;
  }
}
</script>

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
        <br><br><br>

<form name="form1" method="post">

<h1>SIGN UP</h1>
        
        <fieldset>
          
          <label for="username">Student ID (Username) :</label>
          <input type="text" id="txtUsername" name ="txtUsername" pattern="[0-9]{8}" placeholder="58xxxxxx" required>

          <label for="password">Password :</label>
          <input type="password" id="txtPassword" name="txtPassword" required>

          <label for="Conpassword">Confirm Password :</label>
          <input type="password" id="txtConPassword" name="txtConPassword" required>

          <label for="name">Name :</label>
          <input type="text" id="txtName" name="txtName" required>

          <label for="surname">Surname :</label>
          <input type="text" id="txtSurname" name="txtSurname" required="">
          
          <label for="mail">Email :</label>
          <input type="email" id="txtEMail" name="txtEmail" placeholder="example@me.com" required">
          
          
          <label for="faculty">Faculty :</label>
          <select name="txtFaculty" id="txtFaculty">
          
            <option value="ENG">วิศวกรรมศาสตร์</option>
            <option value="ARCH">สถาปัตยกรรมศาสตร์</option>
            <option value="IDED">ครุศาสตร์อุตสาหกรรมและเทคโนโลยี</option>
            <option value="AGRI">เทคโนโลยีการเกษตร</option>
            <option value="SCI">วิทยาศาสตร์</option>
            <option value="AGEDU">อุตสาหหรรมเกษตร</option>
            <option value="IT">เทคโนโลยีสารสนเทศ</option>
            <option value="IC">วิทยาลัยนานาชาติ</option>
            <option value="NANO">วิทยาลัยนาโนเทคโนโลยีพระจอมเกล้าลาดกระบัง</option>
            <option value="AMI">วิทยาลัยนวัตกรรมการผลิตขั้นสูง</option>
            <option value="AMC">วิทยาลัยการบริหารและจัดการ</option>
            <option value="AVAITION">วิทยาลัยอุตสาหกรรมการบินนานาชาติ</option>
            <option value="LA">ศิลปศาสตร์</option>
          
        </select>
        
        
        </fieldset>
        <button type="submit" name="Submit" value="Save" onclick="check_form()">Sign Up</button>
<div class="legend" align="center">

<?php
include("config.php");
$strSQL = "SELECT * FROM member WHERE Username = '".trim($_POST["txtUsername"])."' ";
$ObjQuery = mysqli_query($ObjCon,$strSQL);
$ObjResult= mysqli_fetch_array($ObjQuery);
if($ObjResult)
{
    echo"Username already exists!";
}
else
{
    $strSQL="INSERT INTO member (Username,Password,Name,Surname,Email,Faculty) 
        VALUES ('".$_POST["txtUsername"]."',
                '".$_POST["txtPassword"]."',
                '".$_POST["txtName"]."',
                '".$_POST["txtSurname"]."',
                '".$_POST["txtEmail"]."',
                '".$_POST["txtFaculty"]."')"; 
    $ObjQuery= mysqli_query($ObjCon,$strSQL);

    echo"Register Completed!<br>";
    echo"<br>Go to <a href='login.php'>Login page</a>";
}
mysqli_close($ObjCon);
?>
</div>
      </form>
          
</body>
</html>

