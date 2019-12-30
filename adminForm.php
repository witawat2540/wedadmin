<?php
    include('php/connect.php');
    session_start();
	if($_SESSION["username"] == "")
	{
		Header("Location: index.php");
    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    
    <title>adminSmartlock</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="icon" type="image/png" href="image/icon.png" />
    <style>
    .sidebar-sticky {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        /* Height of navbar */
        height: calc(95vh - 48px);
        padding-top: .5rem;
        overflow-x: hidden;
        overflow-y: auto;
        /* Scrollable contents if viewport is shorter than content. */
    }

    .sidebar2-sticky2 {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        /* Height of navbar */
        height: calc(95vh - 48px);
        padding-top: .5rem;
        overflow-x: hidden;
        overflow-y: auto;
        /* Scrollable contents if viewport is shorter than content. */
    }
    </style>


</head>

<body>
    <div class="container-md bg-dark" >
        <!--navhead-->

        <nav class="navbar navbar-expand-md navbar-dark  ">

            <a class="navbar-brand"><img src="http://iot.rmu.ac.th/iot/Smartlock/img/icon.png" width="30" height="30"
                    class="d-inline-block align-top" alt="">
                Smartlock
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <form class="form-inline ml-auto mt-2 mt-lg-0" action="php/logout.php">
                    <button class="btn btn-success my-2 my-sm-0" type="submit" align="center">
                        <svg class="bi bi-box-arrow-up" width="1.5em" height="1.5em" viewBox="0 0 20 20"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M6.646 6.354a.5.5 0 00.708 0L10 3.707l2.646 2.647a.5.5 0 00.708-.708l-3-3a.5.5 0 00-.708 0l-3 3a.5.5 0 000 .708z"
                                clip-rule="evenodd"></path>
                            <path fill-rule="evenodd" d="M10 13.5a.5.5 0 00.5-.5V4a.5.5 0 00-1 0v9a.5.5 0 00.5.5z"
                                clip-rule="evenodd"></path>
                            <path fill-rule="evenodd"
                                d="M4.5 16A1.5 1.5 0 006 17.5h8a1.5 1.5 0 001.5-1.5V9A1.5 1.5 0 0014 7.5h-1.5a.5.5 0 000 1H14a.5.5 0 01.5.5v7a.5.5 0 01-.5.5H6a.5.5 0 01-.5-.5V9a.5.5 0 01.5-.5h1.5a.5.5 0 000-1H6A1.5 1.5 0 004.5 9v7z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Logout
                    </button>
                </form>
            </div>
        </nav>

    </div>
    <div class="container-md sm-2">
        <div class="row">
            <div class="col-md-3 sm-2 d-none d-md-block sidebar  bg-light">
                <!--menu-->
                <div class="sidebar-sticky">
                    <img src=" <?php echo $_SESSION["img"];?>" class="mx-auto d-block" width="140" height="150">
                    <br>
                    <ul class="list-group">
                        <li class="list-group-item text-center"><?php echo'<b>User</b> '; echo $_SESSION['username'];?></li>
                        <li class="list-group-item text-center"><?php echo'<b>NameHome</b> '; echo $_SESSION['namehome'];?></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm" style="background: #7aabbc85; ">
                <!--headteble-->
                <div class="sidebar2-sticky2">
                    <div class="container-sm md-2">
                        <!--containernav-->

                        <nav class="navbar navbar-expand-md sm navbar-light">
                            <a class="navbar-brand">Smartlock Admin</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#btnadd"
                                aria-controls="btnadd" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="btnadd">
                                <form class="form ml-auto mt-2 mt--0">
                                    <button type="button" class="btn btn-success mr-sm-2  " data-toggle="modal"
                                        data-target="#exampleModal">
                                        create
                                    </button>
                                    <a class="btn  btn-dark  my-2 my-sm-0" href="https://netpie.io/login" target="blank"
                                        role="button"> Goto NETPIE</a>

                                </form>
                            </div>

                        </nav>
                        <hr>
                    </div>
                    <div class="container-sm md">
                        <!--containerteble-->
                        <table class="table table-hover  
                            table-striped table-sm table-responsive-sm" id="datatable" style="text-align: center;">
                            <!--teble-->
                            <thead>
                                <tr class=" bg-success ">
                                    <th scope="col">NamePhone</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">IMEI</th>
                                    <th scope="col">Door</th>
                                    <th scope="col">Numberphone</th>
                                    <th scope="col">Edit/Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i = 1;
                                    foreach($door as $c){
                                    echo"<tr class='table-success'> ";
                                    echo"<td>$c[NamePhone]</td>";
                                    echo"<td>$c[name]</td>";
                                    echo"<td>$c[IMEI]</td>";
                                    echo"<td>$c[Door]</td>";
                                    echo"<td>$c[NumbPhone]</td>";
                                    echo"<td>
                                            <button class='btn btn-sm btnedit' data-toggle='modal' data-target='#formEditDoor' 
                                             type='button' style='background-color:#008CBA;' 
                                             data-id='$c[id]'
                                             data-namephone='$c[NamePhone]'
                                             data-name='$c[name]'
                                             data-imei='$c[IMEI]'
                                             data-door='$c[Door]'
                                             data-numbphone='$c[NumbPhone]'>

                                             <i class='fas fa-edit' style='font-size:15px'></i>
                                             
                                             </button>
                                            <button class='btn  btn-danger btn-sm btndel' type='submit' data-toggle='modal' data-target='#del' data-id='$c[id]'>
                                            <i class='fas fa-trash' style='font-size:15px'></i>
                                            </button>
                                        </td>";
                                    echo"</tr> ";
                                    $i++;    
                                    }
                        
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>




        <!--model-->

        <div class="modal fade" id="del" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="php/Delform.php">
                            Do you want to delete this?
                            <input type="hidden" name="btnDelete" id="id" value="">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                        <button type="submit" id="id" class="btn btn-danger">Yes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--madeldellete-->


        <div class="modal fade" id="formEditDoor" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Please correct the information. </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="php/save.php">

                            <input type="hidden" name="id" id="id" value="">
                            <div class="form-group">
                            <small  class="form-text text-muted">Namephone</small>
                                <input type="text" name="NamePhone" class="form-control" id="NamePhone" required
                                    name="NamePhone"  maxlength="20">
                            </div>
                            <div class="form-group">
                            <small class="form-text text-muted">Name</small>
                                <input type="text" name="Name" class="form-control" id="Name" 
                                    maxlength="20">
                            </div>
                            <div class="form-group">
                            <small  class="form-text text-muted">Select Door</small>
                                <select class="form-control" id="txtDoor" name="txtDoor">
                                    <?php
                                        $objCon = mysqli_connect("localhost","iot","!Qazxsw2","iot");
                                        $sql =	"SELECT * FROM Namedoor";		
                                        $objQuery = mysqli_query($objCon,$sql);
                                        while($row = mysqli_fetch_assoc($objQuery)) {
                                            echo" <option value='$row[door]'>$row[door]</option>";
                                            }
                                        ?>
                                </select>
                                <small id="emailHelp" class="form-text text-muted">Please select a
                                    door.</small>
                            </div>
                            <div class="form-group">
                            <small  class="form-text text-muted">EMEI</small>             
                                <input type="text" class="form-control" name="txtEmi" id="txtEmi" required
                                    name="txtEmei"  maxlength="15">
                                <small id="emailHelp" class="form-text text-muted">Must be 15 characters
                                    long.</small>
                            </div>
                            <div class="form-group">
                            <small id="emailHelp" class="form-text text-muted">No. phone</small> 
                                <input type="text" class="form-control" name="phone" id="phone" required name="phone"
                                     maxlength="10">
                                <small id="emailHelp" class="form-text text-muted">Must be 10 characters
                                    long.</small>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" id="btnedit" class="btn btn-primary">Save</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!--modeledit-->
    </div>




    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Please enter user information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form name="frmlogin" method="post" action="php/add_door.php">
                        <div class="form-group">

                            <input type="text" class="form-control" id="NamePhone" required name="NamePhone"
                                placeholder="NamePhone" maxlength="20">
                        </div>
                        <div class="form-group">

                            <input type="text" class="form-control" id="Name" required name="Name" placeholder="Name"
                                maxlength="20">
                        </div>
                        <div class="form-group">
                            <select class="form-control" required  name="txtDoor">
                            <option value='' id = "door" selected> Select Door</option>
                                <?php
                                $objCon = mysqli_connect("localhost","iot","!Qazxsw2","iot");
                                $sql =	"SELECT * FROM Namedoor";		
                                $objQuery = mysqli_query($objCon,$sql);
                                while($row = mysqli_fetch_assoc($objQuery)) {
                                    echo" <option value='$row[door]'>$row[door]</option>";
                                    }
                                ?>
                            </select>
                            <small id="emailHelp" class="form-text text-muted">Please select a door.</small>
                        </div>
                        <div class="form-group">

                            <input type="text" class="form-control" id="txtEmi" required name="txtEmei"
                                placeholder="Emi" maxlength="15">
                            <small id="emailHelp" class="form-text text-muted">Must be 15 characters
                                long.</small>
                        </div>
                        <div class="form-group">

                            <input type="text" class="form-control" id="phone" required name="phone"
                                placeholder="No. phone" maxlength="10">
                            <small id="emailHelp" class="form-text text-muted">Must be 10 characters
                                long.</small>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--modeladd-->
    
    <div class="container-md sm-2 fixed-bottom bg-dark">
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
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="js/app.js"></script>

</body>

</html>