<!doctype html>
<html lang="en">

<head>
    <?php session_start();
        error_reporting(~E_NOTICE);

        if($_SESSION["username"])
        {
          Header("Location:adminForm.php");
        }
  ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="image/icon.png" />
    <link rel="stylesheet" href="css/css.css">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <Style>
    .icon {
        padding: 10px;
        background: rgb(122, 180, 238);
        color: white;
        min-width: 70px;
        min-height: 40px;
        text-align: center;
    }

    input[type=text],
    select {
        width: 60%;
        height: 40px;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=password],
    select {
        width: 60%;
        height: 40px;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    </Style>
    <title>Login Smartlock</title>
</head>

<body>
   
    <div class="log-form">
        <nav class="navbar navbar-dark bg-primary">
            <a class="navbar-brand">
                <img src="image/icon2.png" width="30" height="30"
                    class="d-inline-block align-top" alt="">
                Login SmartLock
            </a>
        </nav>
        <form align="center" name="frmlogin" id="rcorners1" method="post" action="php/checklogin.php" align="center">
            <br>
            <br>
            <i class="fa fa-user icon"></i>
            <input class="input-field" type="text" title="username" placeholder="username" id="txtUsername" required
                name="txtUsername" maxlength="10" />
            <br>

            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password" title="password" id="txtPassword" required name="txtPassword"
                placeholder="Password" maxlength="8" />
            <br>
            <br>
            <button type="submit" class="btn">Login</button>
            <button type="reset" class="btn">Reset</button>
            <br>
            <br>
            <br>
        </form>
    </div>
    <!--end log form -->
    <div class="container-fluid-md sm-2 fixed-bottom bg-dark">
        <footer id="sticky-footer" class="py-2  text-white-50">
            <div class="container text-center">
                <small>Copyright &copy; 2019. All rights reserved.</small>
            </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

</body>

</html>