<?php
 include('connect.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="5">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="icon" type="image/png" href="image/icon.png" />
    <title>Showhistory</title>
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
    </style>

</head>

<body>

    <div class="container-md bg-dark">
        <div class="sidebar-sticky">
            <table class="table table-hover  
                            table-striped table-sm table-responsive-sm" id="datatable" style="text-align: center;">
                <!--teble-->
                <thead>
                    <tr class=" bg-success ">
                        <th scope="col">id</th>
                        <th scope="col">username</th>
                        <th scope="col">Device</th>
                        <th scope="col">IMEI</th>
                        <th scope="col">date</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                                    $i = 1;
                                    foreach($door as $c){
                                    echo"<tr class='table-success'> ";
                                    echo"<td>$c[id]</td>";
                                    echo"<td>$c[username]</td>";
                                    echo"<td>$c[Device]</td>";
                                    echo"<td>$c[IMEI]</td>";
                                    echo"<td>$c[date]</td>";
                                    
                                    echo"</tr> ";
                                    $i++;    
                                    }
                        
                                    ?>
                </tbody>
            </table>
        </div>
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

</body>

</html>