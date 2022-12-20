<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body class="loginBody">
  <div class="container">
  <div class="login-box">
  <div class="row" style="margin-top: 300px">

  <!Login Form>
  <div class="col-md-6 login-left">
    <h2> Login Here! </h2>
    <form action = "validation.php" method="post">
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="text" name="password" class="form-control" required>
          </div>
          <button type="submit" class ="btn btn-warning"> Login </button>
        </form>
    </div>

    <!Registration form>
    <div class="col-md-6 login-right">
      <h2> Sign Up Here! </h2>
      <form action="registration.php" method="post">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="user" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class ="btn btn-warning"> Register </button>
          </form>

      </div>
    </div>
  </div>
  </div>
