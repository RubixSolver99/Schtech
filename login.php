<?php

?>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <style>

  a.button {
    background-color: #2c40d1;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    text-decoration: none;
    font-size: 13px;
    border-radius: 2px;
  }

  a.button:hover {
    opacity: 0.8;
  }

  .popup {
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
    padding-top: 60px;
    color: white;
    font-family: 'Roboto', sans-serif;
  }

  .popup-content {
    background-color: #37474f;
    margin: 5% auto 15% auto;
    border: 1px solid #888;
    width: 80%;
  }
  input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }

  button {
    background-color: #2c40d1;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    font-size: 13px;
  }

  button:hover {
    opacity: 0.8;
  }

  .imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
  }

  img.avatar {
    width: 25%;
  }

  .container {
    padding: 16px;
  }

  span.psw {
    float: right;
    padding-top: 16px;
  }

  .animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
  }

  @-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
  }

  @keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
  }

  @media screen and (max-width: 800px) {
    img.avatar {
      width: 35%;
    }
  }

  @media screen and (max-width: 600px) {
    img.avatar {
      width: 45%;
    }
  }
  </style>
</head>
<body>
  <div class="popup">
    <div class="popup-content animate">
      <form method="post" action="login.php">
        <div class="imgcontainer">
          <img src="images/Logo.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
          <label for="uname">Username</label>
          <input type="text" placeholder="Enter Username" name="uname" required>

          <label for="psw">Password</label>
          <input type="password" placeholder="Enter Password" name="psw" required>

          <div style="padding-top: 25px;">
            <a href="/createaccount.php" class="button"><b>Create Account</b></a>
              <button type="submit" style="float: right;margin-top: -15px;"><b>Login</b></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
  </html>
