<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>College Website</title>
        <link rel="stylesheet" href="loginstyle.css">
    </head>
    <body>
       <section class="header">
           <nav>
            <a href="index.html"><img src="images/logo.png"></a>
            <div class="nav-links">
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="courses.html">COURSE</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                    <li><a href="profile.html">PROFILE</a></li>
                    <li><a href="login.html">LOGIN</a></li>
                </ul>
            </div>
           </nav>
           <div class="container">
            <h1>Login</h1>
            <form id="login-form" class="form" action="profile.html" method="">
                <h2>Login</h2>
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
                <input type="submit" value="Login">
              <a href="signup.php" class="sign">signup</a>

            </form>
            
        </div>


           <footer>
            <p>&copy; My Eduford Website 2023</p>
        </footer>
    
        </body>
    </html>