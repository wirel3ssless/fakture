<?php
    require_once(__DIR__ . '\..\..\config\config.php');
    require_once(__DIR__ . '\..\..\config\database.php');
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){
        $email = htmlspecialchars(trim($_POST['email']));
        $password = htmlspecialchars(trim($_POST['password']));
        $sql = "SELECT * FROM korisnik WHERE email = ?;";
        $stmt = mysqli_prepare($konekcija, $sql);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $rez = mysqli_stmt_get_result($stmt);

        if($red = mysqli_fetch_assoc($rez)){
            if(password_verify($password, $red['lozinka'])){
                $_SESSION['user-id'] = $red['idKorisnik'];
                header('Location: ' . BASE_URL . '\index.php');
                exit;
            }
            else{
                echo "Lozinka ne valja ";
            }
        }
        else{
            echo "Nema";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Log In</title>
</head>
<body class="bg-blue d-flex align-items-center justify-content-center">
    <form method="POST" action="login.php" class="col-md-4">
        <div class="mb-3">
          <label for="unosEmail" class="form-label">Email adresa</label>
          <input type="email" required class="form-control" name="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="unosPassworda" class="form-label">Password</label>
          <input type="password" required class="form-control" name="password">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>