<?php
    include 'config.php';
    $query = "SELECT * FROM tbl_payments";
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Findmynest Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
              <a href="index.php"><img height="70px" width="200px" class="logo" src="assets/img/main-logo.svg"></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../index.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="ad_details.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Manage Ads
                            </a>
                             <a class="nav-link" href="req_details.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Manage Requirements
                            </a>
                            <a class="nav-link" href="fav_details.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Manage Favourites
                            </a>
                            <a class="nav-link" href="payment_details.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Manage Payments
                            </a>
                            <a class="nav-link" href="user_query.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                User Queries
                            </a>
                            <a class="nav-link" href="loanapplications.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Manage Loan Applications
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Payment Details</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Payment Details</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                              <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Card number</th>
                                            <th>Expiry</th>
                                            <th>Name</th>
                                            <th>Amount</th>
                                            <th>Username</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Card number</th>
                                            <th>Expiry</th>
                                            <th>Name</th>
                                            <th>Amount</th>
                                            <th>Username</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                   
                                    <tbody>
                                        <?php
                                        if($sql)
                                        {
                                            while($row = mysqli_fetch_array($sql))
                                            {
                                             echo("
                                                <tr>
                                                <td>".$row['id']."</td>
                                                <td>".$row['card_num']."</td>
                                                <td>".$row['expiry']."</td>
                                                <td>".$row['name']."</td>
                                                <td>".$row['amount']."</td>
                                                <td>".$row['username']."</td>
                                                ");
                                                if($row['status'] == 1)
                                                {
                                                    echo ("<td><span class='label label-success'>Active</span></td>");
                                                }
                                                else
                                                {
                                                    echo ("<td><span class='label label-danger'>Removed</span></td>");
                                                }
                                                if($row['status'] == 1)
                                                {
                                                    echo ("<td><form action='fav_details.php' method='post'><button type='submit' name='del' value=".$row['fav_id']." class='btn btn-danger'><i class='fa fa-trash' aria-hidden='true'></i></button></form></td>");
                                                }
                                                else
                                                {
                                                    echo ("<td><form action='fav_details.php' method='post'><button type='submit' name='act' value=".$row['fav_id']." class='btn btn-success'><i class='fa fa-check' aria-hidden='true'></i></button></form></td>");
                                                }
                                                echo("
                                                </tr>
                                            ");
                                            }
                                        }
                                 
                                        ?>
                                        <?php
                                        include 'config.php';
                                        if(isset($_POST['del']))
                                        {
                                            $id = $_POST['del'];
                                            $query = "UPDATE tbl_ads SET status = 0 WHERE fav_id = '$id'";
                                            $run = mysqli_query($conn,$query);
                                        }
                                        if(isset($_POST['act']))
                                        {
                                            $id = $_POST['act'];
                                            $query = "UPDATE tbl_ads SET status = 1 WHERE fav_id = '$id'";
                                            $run = mysqli_query($conn,$query);
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Findmynest 2021</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
