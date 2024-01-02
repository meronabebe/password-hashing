<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Authentication and Authorization for a Web Application</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>

</head>
<body>
    <script>
        start_loader()
    </script>
    <main>
        <nav class="navbar navbar-expand-lg navbar-dark bg-gradient">
            <div class="container">
                <a class="navbar-brand" href="./">Secure Authentication and Authorization for a Web Application</a><br>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="login.php">Log out</a>
                        
                    </ul>
                </div>
               
                
            </div>
        </nav>
        <div id="main-wrapper">
            <div class="container-md px-5 my-3">
                <div class="col-lg-7 col-md-8 col-sm-10 col-xs-12 mx-auto">
                    <div class="card rounded-0 shadow">
                        <div class="card-header rounded-0">
                            <div class="card-title"><b>Password Hashing</b></div>
                        </div>
                        <div class="card-body rounded-0">
                            <div class="container-fluid">
                                <form action="" id="hash-password" method="POST">
                                    <div class="mb-3">
                                        <label for="" class="form-label fw-light">Enter Password to Encrypt</label>
                                        <input type="text" class="form-control rounded-0" name="password" id="password" value="<?= $_POST['password'] ?? "" ?>" required>
                                    </div>
                                    <div class="mb-3 text-center">
                                        <div class="col-lg-4 col-md-6 col-sm-10 col-sm-12 mx-auto">
                                            <button class="btn btn-primary rounded-pill">Generate Hash Values</button>
                                        </div>
                                    </div>
                                    <?php if($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
                                        <hr>
                                        <div class="mb-3">
                                            <dl>
                                                <dt class="fw-light text-body">Using md5():</dt>
                                                <dd><?= md5($_POST['password']) ?></dd>
                                                
                                            </dl>
                                        </div>
                                    <?php endif; ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="shadow-top py-4 col-auto">
        <div class="">
                <div class="text-center">
                     <span id="dt-year" style = "display: none"></span> <span class="text-muted">PHP - Password Hashing</span>
                </div>
                <div class="text-center">
                    <a href="" class="text-decoration-none text-body-secondary"></a>
                </div>
            </div>
        </footer>
    </main>
</body>
</html>