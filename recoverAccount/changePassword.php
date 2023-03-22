<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Finder - Change Password</title>
    <link rel="stylesheet" href="../css/materialize.min.css">
    <link rel="stylesheet" href="../fonts/material-icons.css">
    <link rel="stylesheet" href="../sweetalert2/dist/sweetalert2.min.css" />
    <link rel="stylesheet" href="../css/airbnb.css">
</head>
<body>
    <!-- Scrollable Fixed-Navbar  -->
    <div class="navbar-fixed hide-on-med-and-down">
        <nav id="thirdFormNav">
            <div class="nav-wrapper white">
                <a href="../index.php" class="brand-logo pink-text hide-on-med-and-down"><i class="material-icons" id="logo">business</i>Shop Finder</a>
                <ul class="right hide-on-med-and-down">
                    
                    <li>
                        <!-- About Navbar Link -->
                        <!-- Shops Dropdown Trigger -->
                        <a class='dropdown-trigger scrollableNavLink' href='#' data-target='aboutDrop'>About us</a>

                        <!-- Shops Dropdown Structure -->
                        <ul id='aboutDrop' class='dropdown-content'>
                            <li><a href="#!" class="black-text">About</a></li>
                            <li class="divider" tabindex="-1"></li>
                            <li><a href="#!" class="black-text">Contact</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <!-- Shops Navbar Link -->
                        <a class='scrollableNavLink' href='searchResult.php'>Shops</a>
                    </li>

                    <li>
                        <!-- Blog Navbar Link -->
                        <!-- Blog Dropdown Trigger -->
                        <a class='dropdown-trigger scrollableNavLink' href='#' data-target='blogDrop'>Blog</a>

                        <!-- Blog Dropdown Structure -->
                        <ul id='blogDrop' class='dropdown-content'>
                            <li><a href="#!" class="black-text">Blog & News</a></li>
                        </ul>
                    </li>

                    <li>
                        <!-- Login/Register  -->
                        <?php
                            if(isset($_SESSION['loggedIn'])){
                    
                                echo '
                                        <!-- Username Modal Trigger -->
                                        <a href="#" style="display: flex;" class="dropdown-trigger scrollableNavLink" data-target="userTypeDropdown1">
                                            '.$_SESSION["name"].'
                                            <i class="material-icons black-text">account_circle</i>
                                        </a>
                                    ';
                            } else {
                                echo '  
                                        <!-- Auth Modal Trigger -->
                                        <a class="modal-trigger scrollableNavLink" href="#authModal">
                                            Login/Register
                                        </a>
                                    ';
                            }
                        ?>

                        <!-- UserType Dropdown Structure -->
                        <ul id='userTypeDropdown1' class='dropdown-content'>
                            <?php
                                if(isset($_SESSION['loggedIn'])){
                                    $userType = $_SESSION['userType'];
                                    if($userType == 'admin'){
                                        echo '<li>
                                                <a class="modal-trigger black-text" href="#modal1">
                                                    Register Shop
                                                </a>
                                            </li>';
                                    } else if ($userType == 'vendor') {
                                        echo '<li>
                                                <a class="black-text">Dashboard</a>
                                            </li>';
                                    } else if ($userType == 'client') {
                                        echo '<li>
                                                <a href="#" class="black-text">Client</a>
                                            </li>';
                                    }
                                }
                            ?>
                            <li class="divider" tabindex="-1"></li> 
                            <li><a href="./logout.php" class="black-text">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <form class="" id="recPassForm1">
        <div class="internalRecPassContainDiv z-depth-1">

            <h3 class="center">Change Password</h3>

            <!-- Change Recover Password -->
            <div class="row">
                <div class="input-field col s12">
                    <label for="pass">Enter Password</label>
                    <input type="password" name="recPass" id="recPass" class="validate" required>
                </div>
                <div class="input-field col s12">
                    <label for="cPass">Confirm Password</label>
                    <input type="password" name="recCPass" id="recCPass" class="validate" required>
                </div>
                <input type="hidden" id="recPassId">
                <button type="submit" class="btn waves-effect waves-light col s12" name="recPassBtn1" id="recPassBtn1">
                    Submit
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </div>
    </form>

    <?php
        include('../layout/recPassFooter.php');
    ?>

  <script src="../js/jquery-3.0.0.min.js"></script>
  <script src="../js/materialize.min.js"></script>
  <script src="../js/raphael.js"></script>
</body>
</html>