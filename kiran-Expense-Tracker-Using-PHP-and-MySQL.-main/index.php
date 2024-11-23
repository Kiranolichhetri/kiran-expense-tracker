<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>
<?php
include_once 'database.php';
error_reporting(E_ALL);
$msg = '';

// Login functionality
if (isset($_POST['submit'])) {
    $email = $db->real_escape_string($_POST['email']);
    $password = $db->real_escape_string($_POST['password']);

    $query = "SELECT id, password FROM users WHERE email = '$email'";
    $result = $db->query($query);

    if ($result->num_rows == 1) {
        $user = $result->fetch_object();
        if (password_verify($password, $user->password)) {
            session_start();
            $_SESSION['detsuid'] = $user->id;
            header('Location: home.php');
            exit;
        } else {
            $msg = "Invalid Details.";
        }
    } else {
        $msg = "Invalid Details.";
    }
}
?>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form method="post">
          <h2 class="fw-bold mb-2 text-center text-uppercase">Login</h2>
          <p class="text-black-50 text-center mb-5">Please enter your login and password!</p>
          <p style="font-size:16px; color:red" align="center"> 
            <?php if($msg){ echo $msg; } ?>
          </p>
          <div class="form-outline mb-4">
            <input type="email" id="email" name="email" class="form-control form-control-lg" required/>
            <label class="form-label" for="form3Example3">Email address</label>
          </div>
          <div class="form-outline mb-3">
            <input type="password" id="password" name="password" class="form-control form-control-lg" required/>
            <label class="form-label" for="form3Example4">Password</label>
          </div>
          <div class="d-flex justify-content-between align-items-center">
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">Remember me</label>
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
          </div>
          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg" name="submit" value="Login">
              Login
            </button>
            <p class="small fw-bold mt-2 pt-1 mb-0">
              Don't have an account? <a href="signup.php" class="link-danger">Create account</a>
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

