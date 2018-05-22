<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
</head>
<body>
<nav>
        <div class="nav-wrapper">
           
            <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                <i class="material-icons">menu</i>
            </a>
            <ul class="right hide-on-med-and-down">
                <li>
                    <a href="index.php">Home</a>
                </li>
               
               
                
            </ul>
        </div>
    </nav>
    
<br>
<form class="container" action="aksi_register.php" method="post">
 
<div class="jumbotron">
    <div class="row">
    <div class="col-md-2"></div>
        <div class="col-md-2">
            
        </div>
        <div class="col-md-4">
        <i><label for="">Username</label><i>
            <input class="form-control" type="text" name="username" id="username">
    
        </div>
    </div>

     <div class="row">
     <div class="col-md-2"></div>
        <div class="col-md-2">
            
        </div>
        <div class="col-md-4">
        <i><label for="">Password</label></i>
            <input class="form-control" type="text" name="password" id="password">
        <br>
        </div>
    </div>
    <div class="row">
     <div class="col-md-2"></div>
        <div class="col-md-2">
            
        </div>
        <div class="col-md-4">
       <i> <label for="">Confirm</label></i>
            <input class="form-control" type="text" name="ulangi_password" id="ulangi_password">
        <br>
        </div>
    </div>
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-3">
            <button type="submit" class="btn btn-primary">Buat</button>
            <button type="button" class="btn btn-primary">Cancel</button>
            
    </div>
    
    
   
    </div>
    </div>
</form>
<footer class="page-footer">
        <div class="container">
            
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2018 Copyright Text
                
            </div>
        </div>
    </footer>
    
</body>
</html>