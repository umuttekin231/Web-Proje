<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="loginpage.css">
    </head>
    <body>
        <nav>
           <ul class="nav nav-pills nav-justified">
            <li class="nav-item"><a class="nav-link" href="hakkımda.html">Hakkında</a></li>  
            <li class="nav-item"><a class="nav-link" href="sehrim.html">Şehrim</a></li>
            <li class="nav-item"><a class="nav-link" href="mirasimiz.html">Mirasımız</a></li>
            <li class="nav-item"><a class="nav-link" href="iletisim.html">İletişim</a></li>
            <li class="nav-item"><a class="nav-link active" href="#">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="özgecmis.html">Özgeçmiş</a></li>
           </ul>
        </nav>
        <div class="container">
            <div class="row justify-content-center">
                <form  action="process.php" method="post" class="form">
                <p>
                <input type="text" id="input1" name="username" placeholder="Kullanıcı Adı">
                </p>
                <p>
                 <input type="password" id="input2" name="password" placeholder="Şifre">
                </p>
                <p>
                <input type="submit" class="btn btn-primary" name="Login" value="Giriş">
                </p>
                </form>
            </div>
        </div>
    </body>
</html>