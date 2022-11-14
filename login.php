<?php
session_start();
include "koneksi.php";
include "css.php";
?>

<html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<?php
  if(isset($_GET['pesan'])){
    if($_GET['pesan']=="gagal"){
      echo "<script>alert('Username / Password salah !')</script>";
    }
    if($_GET['pesan']=="galogin"){
      echo "<script>alert('login dulu ya!!')</script>";
    }
  }
?>
<body>
<section class="background-radial-gradient overflow-hidden">
  <style>
    .background-radial-gradient {
      background-color: hsl(218, 41%, 15%);
      background-image: radial-gradient(650px circle at 0% 0%,
          hsl(218, 41%, 35%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
          hsl(218, 41%, 45%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%);
    }

    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }
  </style>

  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          Zala Nur Ilahi Rahman <br />
          <span style="color: hsl(218, 81%, 75%)">21510019</span>
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
          Assalamualaikum
          Kamu..Nanyaa???
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <form action ="cek_login.php" method="POST">
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
              
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" name="username" class="form-control" />
                    <label class="form-label" for="form3Example2">Username</label>
                  </div>
                </div>
              </div>

              
              <div class="form-outline mb-4">
                <input type="password" name="password" class="form-control" />
                <label class="form-label" for="form3Example3">Password</label>
              </div>


              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4">
                Login
              </button>

            
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  </body>
