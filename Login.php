<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'/>
    <link rel="stylesheet" href="login.css"/>
    <script src="index.js"></script>
  </head>
  <body>
   <h1>Welcome to Agrimovers transport company</h1>
<div class="wrapper">
  
<!----------------------------- Form box ----------------------------------->    
  <div class="form-box">
      
      <!------------------- login form -------------------------->
      <div class="login-container" id="login">
          <div class="top">
              <span>Don't have an account? <a href="#" onclick="register()">Sign Up</a></span>
              <header>Login</header>
          </div>
          <div class="input-box">
              <input type="text" value ="" class="input-field" placeholder="Name or Email">
              <i class="bx bx-user"></i>
          </div>
          <div class="input-box">
              <input type="password" class="input-field" placeholder="Password">
              <i class="bx bx-lock-alt"></i>
          </div>
          <div class="input-box">
              <input type="submit" class="submit" value="Sign In">
          </div>
          <div class="two-col">
              <div class="one">
                  <input type="checkbox" id="login-check">
                  <label for="login-check"> Remember Me</label>
              </div>
              <div class="two">
                  <label><a href="#">Forgot password?</a></label>
              </div>
          </div>
      </div>
      <!------------------- registration form -------------------------->
      <div class="register-container" id="register">
          <div class="top">
              <span>Have an account? <a href="#" onclick="login()">Login</a></span>
              <header>Sign Up</header>
          </div>
          <div class="two-forms">
              <div class="input-box">
                  <input type="text" class="input-field" value ="fname" placeholder="Full Names">
                  <i class="bx bx-user"></i>
              </div>
              <div class="input-box">
                  <input type="text" class="input-field" value="pno" placeholder="Phone number">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                 <i class="phone"></i>
              </div>
            
          </div>
          <div class="two-forms">
            <div class="input-box">
                <input type="email" class="input-field" value="email" placeholder="Email">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <input type="number" class="input-field" value="idno" placeholder="ID number">
                <i class="fa fa-phone" aria-hidden="true"></i>
            </div>
        </div>
         
        <div class="input-box">
            <input type="password" class="input-field" id="Password" value="pass" placeholder="Password">
            <i class="bx bx-lock-alt"></i>
        </div>
        <div class="input-box">
          <input type="password" class="input-field" id="Confirm Password" value="conpass" placeholder="Confirm Password" >
          <i class="bx bx-lock-alt"></i>
          <p id="message">   </p>
      </div>

          <div class="input-box">
              <input type="submit" class="submit" value="Register"  onclick="checkPassword()">
          </div>
         
      </div>
  </div>
</div>  
<script src="index.js"></script>
<script>
 
 function myMenuFunction() {
  var i = document.getElementById("navMenu");
  if(i.className === "nav-menu") {
      i.className += " responsive";
  } else {
      i.className = "nav-menu";
  }
 }

</script>
<script>
  var a = document.getElementById("loginBtn");
  var b = document.getElementById("registerBtn");
  var x = document.getElementById("login");
  var y = document.getElementById("register");
  function login() {
      x.style.left = "4px";
      y.style.right = "-520px";
      a.className += " white-btn";
      b.className = "btn";
      x.style.opacity = 1;
      y.style.opacity = 0;
  }
  function register() {
      x.style.left = "-510px";
      y.style.right = "5px";
      a.className = "btn";
      b.className += " white-btn";
      x.style.opacity = 0;
      y.style.opacity = 1;
  }
</script>
</body>
</html>