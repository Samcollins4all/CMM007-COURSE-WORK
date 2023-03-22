<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Finder - Recover Password</title>
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
                        <a class='scrollableNavLink' href='../searchResult.php'>Shops</a>
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
                </ul>
            </div>
        </nav>
    </div>

    <!-- <form id="recPassForm"> -->
        <div class="internalRecPassContainDiv z-depth-1">

            <!-- Recover Password Email Search -->
            <form id="recPassForm">                   
                <h3 class="center">Recover Password</h3>

                <div class="row">
                    <p class="recPassEmailTxt">Please enter your Email Address to search for your account.</p>
                    <div class="input-field col s12">
                        <label for="pass">Enter Address</label>
                        <input type="email" name="recPassEmail" id="recPassEmail" class="validate" required>
                    </div>
                    <input type="hidden" id="recPassId">
                    <button type="submit" class="btn waves-effect waves-light col s12" name="recPassBtn" id="recPassBtn">
                        Submit
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>

            <!-- Change Recover Password Section -->
            <form class="hide" id="recCPassForm"> 
                <h3 class="center">Change Password</h3>

                <div class="row">
                    <div class="input-field col s12">
                        <label for="pass">Enter Password</label>
                        <input type="password" name="recPass" id="recPass" class="validate" required>
                    </div>
                    <div class="input-field col s12">
                        <label for="cPass">Confirm Password</label>
                        <input type="password" name="recCPass" id="recCPass" class="validate" required>
                    </div>
                    <!-- <input type="hidden" id="recPassId"> -->
                    <button type="submit" class="btn waves-effect waves-light col s12" name="recCPassBtn" id="recCPassBtn">
                        Submit
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>

            <!-- Login Recover Password Section -->
            <form class="hide" id="recPassLoginForm">
                <h3 class="center">Login</h3>

                <div class="row">
                    <div class="col s12 input-field">
                        <label for="logEmail">Email</label>
                        <input type="email" class="validate" name="recPassLogEmail" id="recPassLogEmail" required /> 
                    </div>
                    <div class="col s12 input-field">
                        <label for="logPass">Password</label>
                        <input type="password" class="validate" name="recLogPass" id="recLogPass" required /> 
                    </div>
                    
                    <div class="input-field">
                        <button class="btn waves-effect waves-light col s12 center" type="submit" id="recLogPassBtn" name="recLogPassBtn">Submit
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>

        </div>

        
    <!-- </form> -->

    <?php
        include('../layout/recPassFooter.php');
    ?>

  <script src="../js/jquery-3.0.0.min.js"></script>
  <script src="../js/materialize.min.js"></script>
  <script src="../js/raphael.js"></script>
</body>
</html>