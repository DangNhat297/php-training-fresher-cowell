<?php session_start(); ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.98.0">
  <title>Signin Template · Bootstrap v5.2</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
  <link href="../dashboard/assets/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">
</head>

<body class="d-flex justify-content-center">

  <main class="col-4">
    <form class="w-100" method="POST" action="register-process.php">
      <h2 class="h3 mb-3 fw-normal">Đăng ký</h2>
      <p class="text-muted">Nhanh chóng và dễ dàng</p>
      <div class="row mb-3 g-2">
        <div class="col form-group">
          <input type="text" class="form-control <?=isset($_SESSION['errors']['first-name']) ? 'is-invalid' : ''?>" value="<?= $_SESSION['old']['first-name'] ?? ''  ?>" name="first-name" placeholder="Họ">
          <p class="text-danger"><?= $_SESSION['errors']['first-name'] ?? ''  ?></p>
        </div>
        <div class="col form-group">
          <input type="text" class="form-control <?=isset($_SESSION['errors']['last-name']) ? 'is-invalid' : ''?>" value="<?= $_SESSION['old']['last-name'] ?? ''  ?>" name="last-name" placeholder="Tên">
          <p class="text-danger"><?= $_SESSION['errors']['last-name'] ?? ''  ?></p>
        </div>
      </div>

      <div class="form-group mb-3">
        <input type="text" class="form-control <?=isset($_SESSION['errors']['email']) ? 'is-invalid' : ''?>" value="<?= $_SESSION['old']['email'] ?? ''  ?>" name="email" placeholder="Email">
        <p class="text-danger"><?= $_SESSION['errors']['email'] ?? ''  ?></p>
      </div>

      <div class="form-group mb-3">
        <input type="password" class="form-control <?=isset($_SESSION['errors']['password']) ? 'is-invalid' : ''?>" value="<?= $_SESSION['old']['password'] ?? ''  ?>" name="password" placeholder="Mật khẩu">
        <p class="text-danger"><?= $_SESSION['errors']['password'] ?? ''  ?></p>
      </div>

      <div class="form-group mb-3">
        <label>Ngày sinh </label>
        <div class="row g-2">
          <div class="col">
            <select class="form-select <?=isset($_SESSION['errors']['birth-day']) ? 'is-invalid' : ''?>" name="birth-day">
              <option value="0" selected hidden>Ngày sinh</option>
              <?php for($i = 1;$i <= 31;$i++): ?>
              <option value="<?=$i?>" <?=(isset($_SESSION['old']['birth-day']) && $_SESSION['old']['birth-day'] == $i) ? 'selected' : '' ?>><?=$i?></option>
              <?php endfor ?>
            </select>
            <p class="text-danger"><?=$_SESSION['errors']['birth-day'] ?? ''?></p>
          </div>
          <div class="col">
            <select class="form-select <?=isset($_SESSION['errors']['birth-month']) ? 'is-invalid' : ''?>" name="birth-month">
              <option value="0" selected hidden>Tháng sinh</option>
              <?php for($i = 1;$i <= 12;$i++): ?>
              <option value="<?=$i?>" <?=(isset($_SESSION['old']['birth-month']) && $_SESSION['old']['birth-month'] == $i) ? 'selected' : '' ?>><?=$i?></option>
              <?php endfor ?>
            </select>
            <p class="text-danger"><?=$_SESSION['errors']['birth-month'] ?? ''?></p>
          </div>
          <div class="col">
            <select class="form-select <?=isset($_SESSION['errors']['birth-year']) ? 'is-invalid' : ''?>" name="birth-year">
              <option value="0" selected hidden>Năm sinh</option>
              <?php for($i = date("Y");$i >= 1905;$i--): ?>
              <option value="<?=$i?>" <?=(isset($_SESSION['old']['birth-year']) && $_SESSION['old']['birth-year'] == $i) ? 'selected' : '' ?>><?=$i?></option>
              <?php endfor ?>
            </select>
            <p class="text-danger"><?=$_SESSION['errors']['birth-year'] ?? ''?></p>
          </div>
        </div>
      </div>

      <div class="form-group mb-3">
        <label>Giới tính</label>
        <div class="row g-2">
          <div class="col">
            <div class="form-check">
            <label class="form-check-label" for="exampleRadios1">
                Nam
              </label>
            <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="option1" checked>
            </div>
          </div>
          <div class="col">
            <div class="form-check">
            <label class="form-check-label" for="exampleRadios2">
                Nữ
              </label>
            <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="option1" >
            </div>
          </div>
          <!-- <div class="col">
            <div class="form-check">
            <label class="form-check-label" for="exampleRadios3">
                Tùy chỉnh
              </label>
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option1" >
            </div>
          </div> -->
        </div>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" name="terms" value="ok" <?=isset($_SESSION['old']['terms']) ? 'checked' : ''?>> Đồng ý điều khoản
        </label>
        <p class="text-danger"><?=$_SESSION['errors']['terms'] ?? ''?></p>
      </div>

      <button class="w-100 btn btn-lg btn-success" type="submit">Đăng ký</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
    </form>
  </main>



</body>

</html>
<?php session_destroy(); ?>