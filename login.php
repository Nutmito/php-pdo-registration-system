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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="favicon.png">
</head>
<body>
<div class="navbarss"></div>
    <div class="container">
        <main>
          <div class="py-5 text-center animate__animated animate__fadeInDown"></div>

      
          <div class="animate__animated animate__fadeInDown container">
              <h4 class="mb-3">เข้าสู่ระบบ</h4>
              <form action="" class="needs-validation" novalidate="">
                <div class="row g-3">
                  <div class="col-sm-6">
                    <label for="firstName" class="form-label">บัญชีผู้ใช้</label>
                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                    กรุณากรอกข้อมูล!
                    </div>
                  </div>
      
                  <div class="col-sm-6">
                    <label for="lastName" class="form-label">รหัสผ่าน</label>
                    <input type="password" class="form-control" id="lastName" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                    กรุณากรอกข้อมูล!
                    </div>
                  </div>
              
                  <label style="margin-top: 10px;">
                    ยังไม่มีบัญชีผู้ใช้งาน? <a href="register">สมัครสมาชิก</a>
                  </label>
      
                </div>

                <hr class="my-4">
      
                <button class="btn btn-primary btn-lg" type="submit">Continue</button>
              </form>
              
          </div>
        </main>
        <div class="py-5"></div>
        <?php include 'template/footer.php' ?>
      </div>

      <script src="assets/js/script.js"></script>

</body>
</html>