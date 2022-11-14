<?php include 'config/db.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.bundle.js"></script>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="assets/css/sign.css">
</head>
<body>

<main class="text-center form-signin w-100 m-auto">
  <form>

    <h1 class="h3 mb-3 fw-normal">กรุณาเข้าสู่ระบบ</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="e">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="e">
      <label for="floatingPassword">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <label style="margin-top: 10px;">
        ยังไม่มีบัญชีผู้ใช้งาน? <a href="register">สมัครสมาชิก</a>
      </label>
    <p class="mt-5 mb-3 text-muted">© 2022 <?php echo $title ?></p>
  </form>
</main>
</body>
</html>