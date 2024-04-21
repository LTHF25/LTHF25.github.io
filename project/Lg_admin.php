<!-- <?php

        include "data/dataApp.php";


session_start();

// Periksa apakah pengguna sudah login
if (isset($_SESSION['nim'])) {
    // Jika sudah login, arahkan pengguna ke halaman yang sesuai
    header("location: ../view/app.php");
    exit();
}

// Pesan untuk ditampilkan kepada pengguna yang belum login
$loginMessage = '';

// Pengguna mencoba login
if (isset($_POST["login"])) {
    // Proses login
    $nim = $_POST['nim'];
    $password = $_POST['password'];

    // Cek apakah username dan password valid
    if (empty($nim) || empty($password)) {
        // Jika ada yang kosong, berikan pesan kesalahan
        $loginMessage = "Username atau password tidak boleh kosong";
    } else {
        // Proses login jika username dan password telah diisi
        $sql1 = "SELECT * FROM login_multiuser WHERE nim = '$nim' AND password = MD5('$password')";
        $ql = mysqli_query($db, $sql1);
        $r1 = mysqli_fetch_array($ql);

        if ($r1) {
            // Jika login berhasil, atur session dan arahkan ke halaman aplikasi
            $_SESSION['nim'] = $nim;
            $_SESSION['password'] = $password;
            $_SESSION["is_login"] = true;
            header("location: app.php");
            exit();
        } else {
            // Jika login gagal, tampilkan pesan kesalahan
            $loginMessage = "Username atau password salah";
        }
    }
}
?>



        ?> -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login nawasena</title>
    <link href="css/Log_up.css" rel="stylesheet" />


    <!--     
    - favicon 
  -->
    <link rel="shortcut icon" href="img/logo_robotik-RV.png" type="image/jpeg">


    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- BOXICON -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header" style="display: flex; align-items: flex-start; justify-content: center; flex-wrap: wrap;">
                                    <img src="img/NAWASENA-light.png" alt="" style=" background-repeat: no-repeat; background-size: cover;    width: 35%; margin: -46px 8%;">

                                </div>
                                <div class="card-body">
                                    <?php if (!empty($loginMessage)) : ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?php echo $loginMessage; ?>
                                        </div>
                                    <?php endif; ?>
                                    <form action="#" method="POST">
                                        <div class="row mb-5">
                                            <div class="col-md-6" style="color: whitesmoke;">
                                                <label for="inputUser">NIM</label>
                                                <input class="form-control" name="nim" id="inputEmail" type="number" placeholder="1232345" required />
                                            </div>
                                            <div class="col-md-6" style="color: whitesmoke;">

                                                <label for="inputEmail">Password</label>
                                                <input class="form-control" name="password" id="inputpassword" type="password" required />

                                            </div>

                                            <div style="margin-top:15px; " class="col-md-7">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" id="inputRememberpassword" type="checkbox" value="checkbox" />
                                                    <label class="form-check-label" for="inputRememberpassword" style="color: white;">Ingat NIM</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0" style="text-align:center; border:2px solid #007bff; border-radius:5px; ">
                                            <button class="d-grid btn btn-primary btn-block" name="login" style="width:100%;">Masuk</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy;lth Website 2024</div>
                        <div>
                            <a href="404.html">Privacy Policy</a>
                            &middot;
                            <a href="404.html">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- 
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- Script Botsrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- BOXICON -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

</body>

</html>