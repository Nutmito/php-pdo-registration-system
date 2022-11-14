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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="favicon.png">
</head>
<body>
<div class="navbarss"></div>
    <div class="container">
        <main>
          <div class="py-4 text-center animate__animated animate__fadeInDown"></div>

      
          <div class="animate__animated animate__fadeInDown container">
              <h4 class="mb-3">สมัครสมาชิก</h4>
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

                  <div class="col-sm-6">
                    <label for="firstName" class="form-label">ชื่อจริง</label>
                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                    กรุณากรอกข้อมูล!
                    </div>
                  </div>
      
                  <div class="col-sm-6">
                    <label for="lastName" class="form-label">นามสกุล</label>
                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                    กรุณากรอกข้อมูล!
                    </div>
                  </div>
      
                  <div class="col-12">
                    <label for="username" class="form-label">เบอร์โทรศัพท์</label>
                    <div class="input-group has-validation">
                      <span class="input-group-text">></span>
                      <input min="10" maxlength="10" type="text" class="form-control" id="username" placeholder="เบอร์โทรศัพท์ (10 หลัก)" required="">
                    <div class="invalid-feedback">
                    กรุณากรอกข้อมูล!
                      </div>
                    </div>
                  </div>
      
                  <div class="col-12">
                    <label for="email" class="form-label">อีเมล</label>
                    <input type="email" class="form-control" placeholder="you@example.com" required="">
                    <div class="invalid-feedback">
                    กรุณากรอกข้อมูล!
                    </div>
                  </div>
      
                  <div class="col-12">
                    <label for="address" class="form-label">ที่อยู่</label>
                    <input type="text" class="form-control" id="address" placeholder="จังหวัด ถนน ซอย" required="">
                    <div class="invalid-feedback">
                    กรุณากรอกข้อมูล!
                    </div>
                  </div>

                  <div class="col-md-5">
                    <label for="country" class="form-label">ตำแหน่ง</label>
                    <select class="form-select" id="country" required="">
                      <option>ลูกค้าหรือสมาชิก</option>
                      <option>ผู้ดูแลร้านค้า</option>
                      <option>ผู้ส่งอาหาร</option>
                    </select>
                    <div class="invalid-feedback">
                    กรุณากรอกข้อมูล!
                    </div>
                  </div>
                  <label style="margin-top: 10px;">
                    มีบัญชีผู้ใช้งานอยู่แล้ว <a href="login">เข้าสู่ระบบ</a>
                  </label>
      
                </div>

                <hr class="my-4">
      
                <button class="btn btn-primary btn-lg" type="submit">Continue</button>
                <button class="btn btn-danger btn-lg" type="reset">Reset</button>
              </form>
              
          </div>
        </main>
        <?php include 'template/footer.php' ?>
      </div>
      <script src="assets/js/script.js"></script>
</body>
</html>