
<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="WebTecher">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <title>Roadworth | give meaning to transportation</title>

  <!-- Removing the / brings the css -->
    <!-- Bootstrap core CSS -->
    <link href="css/bootsrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/index.css" rel="stylesheet">

</head>

<body class="d-flex h-100 text-center text-white bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-start mb-0" >Roadworthy</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end"></nav>
            </div>
        </header>

        <main class="px-3">
            <!--
        <h1>Cover your page.</h1> -->
            <p class="lead">Welcome to  Roadworthy.</p>
            <p class="lead">A system that works</p>

            <?php if(isset($_SESSION['username'])==true) { ?>
            <a class="btn btn-success" style="text-align: center" href="registerv.php"> Register Vehicle</a>
            
            <?php } else{  ?>
            <a class="btn btn-success" style="text-align: center" href="index.php" >Login to register your Vehicle</a> 
            <?php } ?>
            
           
        </main>

        <footer class="mt-auto text-white-50">
            <p>for <a href="https://www.ashesi.edu.gh/" target="_blank" class="text-white">Ashesi University's</a> Final
                Web Technologies Project, by <a href="linked in"
                    class="text-white">Kwame Gyau</a>.</p>
        </footer>
    </div>

    <!-- form login  -->

    <form   action="login.php" method="POST"> 
    <div class="form" >
         
         
        <h2>Login Here</h2>
        
        <input type="email" id="email" name="email" placeholder="Enter Email Here">
        <input type="password" id="password" name="password" placeholder="Enter Password Here">

        <button name= "login_user" class="btnn">Login</a></button>

    
        <p class="link">Don't have an account<br>
            <a href="signup.php">Sign up </a>here</a>
        </p>
        
    
        
       
    </div>
    </form>

    <!-- end -->



    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script src="/Scripts/script.js"></script>
   <script src="../js/form-validation.js"></script>

</body>

</html>


