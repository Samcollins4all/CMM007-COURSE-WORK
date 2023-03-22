<?php
    include('layout/header.php');

    session_start();
?>
    <!-- Carousel -->
    <div class="carousel carousel-slider ">
            <div class="carousel-fixed-item">
                <header class="main">
                    <h1 class="grey-text text-lighten-3">Shop away<br>From home</h1>
                    <button class="btn directionBtn">Explore nearby stays</button>
                </header>

                <!-- Preloader Div -->
                <div class="row">
                    <div class="center loader" id="preloader">
                        <img src="img/preloader.gif" alt="">
                    </div>
                </div>
            </div>
            <div class="carousel-item red white-text" href="#one!" id="carousel-item">
                <img src="img/ecommerce.jpg" alt="" class="responsive-img">
            </div>
            <div class="carousel-item amber white-text" href="#two!">
                <img src="img/bazaar.jpg" alt="" class="responsive-img">
            </div>
            <div class="carousel-item green white-text" href="#three!">
                <img src="img/groceryShop.jpg" alt="" class="responsive-img">
            </div>
            <div class="carousel-item blue white-text" href="#four!">
                <img src="img/doughnuts.jpg" alt="" class="responsive-img">
            </div>
    </div>

    <!-- Scrollable Fixed-Navbar  -->
    <div class="navbar-fixed hide-on-med-and-down" id="navbar">
        <nav id="thirdFormNav">
            <div class="nav-wrapper white">
                <a href="#!" class="brand-logo pink-text hide-on-med-and-down"><i class="material-icons" id="logo">business</i>Shop Finder</a>
                <ul class="right hide-on-med-and-down">
                    <li id="thirdForm" class="black-text">
                        <form method="POST" class="formSearchLocate">
                            <div class="thirdFormContain" id="thirdFormContain">
                                <div class="input-field">
                                    <input type="search" class="black-text validate search" id="search1" name="search" placeholder="Start your search" required>
                                    <!-- <input type="search" class="black-text" id="thirdFormSearch" name="thirdFormSearch" placeholder="Start your search" required> -->
                                    <!-- <span class="hide-on-small-only loc"></span> -->
                                </div>
                                
                                <button type="submit" class="btn-floating btn-small pink waves-effect waves-light right" name="searchBtn" id="searchBtn3">
                                    <i class="material-icons" id="thirdFormIcon">search</i>
                                </button>

                                <div class="display z-depth-1" id="display2"></div>
                            </div>
                        </form>
                    </li>
                    
                    <li>
                        <!-- About Navbar Link -->
                        <!-- Shops Dropdown Trigger -->
                        <a class='dropdown-trigger scrollableNavLink' href='#' data-target='aboutDrop'>About us</a>

                        <!-- Shops Dropdown Structure -->
                        <ul id='aboutDrop' class='dropdown-content'>
                            <li><a href="about.php" class="black-text">About</a></li>
                            <li class="divider" tabindex="-1"></li>
                            <li><a href="contact.php" class="black-text">Contact</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <!-- Shops Navbar Link -->
                        <a class='scrollableNavLink' href='searchResult.php'>Shops</a>
                    </li>

                    <li>
                        <!-- Blog Navbar Link -->
                        <!-- Blog Dropdown Trigger -->
                        <a class='scrollableNavLink' href='blog.php'>Blog</a>

                        <!-- Blog Dropdown Structure -->
                        <!-- <ul id='blogDrop' class='dropdown-content'>
                            <li><a href="#!" class="black-text">Blog & News</a></li>
                        </ul> -->
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
                                                <a href="dashboard.php" class="black-text">Dashboard</a>
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
    
    <!-- Page-Navbar -->
    <div id="navbarContainDiv">
        <a href="#" class="white-text hide-on-med-and-down" id="identy">
            <i class="material-icons" id="anotherIcon">business</i>
            Shop Finder
        </a>

        <div class="transNavLinkDiv">
            <!-- About Navbar Link -->
            <div>
                <!-- Shops Dropdown Trigger -->
                <a class='dropdown-trigger aboutDrop' href='#' data-target='aboutDrop'>About us</a>

                <!-- Shops Dropdown Structure -->
                <ul id='aboutDrop' class='dropdown-content'>
                    <li><a href="about.php" class="black-text">About</a></li>
                    <li class="divider" tabindex="-1"></li>
                    <li><a href="contact.php" class="black-text">Contact</a></li>
                </ul>
            </div>

            <!-- Shops Navbar Link -->
            <div>
                <a class='dropdown-trigger shopsDrop' data-target='shopsDrop'>Shops</a>

                <!-- Shops Dropdown Structure -->
                <ul id='shopsDrop' class='dropdown-content'>
                    <li><a href="searchResult.php" <?= $africa = 'africa' ?> class="black-text africaShopResultBtn">Africa</a></li>
                    <li class="divider" tabindex="-1"></li>
                    <li><a href="searchResult.php" <?= $asia = 'asia' ?> class="black-text asiaShopResultBtn">Asia</a></li>
                </ul>
            </div>
            

            <!-- Blog Navbar Link -->
            <div>
                <!-- Blog Dropdown Trigger -->
                <a class='blogDrop' href='blog.php'>Blog</a>

                <!-- Blog Dropdown Structure -->
                <!-- <ul id='blogDrop' class='dropdown-content'>
                    <li><a href="#!" class="black-text">Blog & News</a></li>
                </ul> -->
            </div>

            <!-- Login/Register  -->
            <div>
                <?php
                    if(isset($_SESSION['loggedIn'])){

                        echo '<div id="" class="hide-on-med-and-down">
                                <!-- Username Modal Trigger -->
                                <a href="#" class="dropdown-trigger userDrop" data-target="userTypeDropdown">
                                    '.$_SESSION["name"].'
                                    <i class="material-icons black-text userAcctIcon">account_circle</i>
                                </a>
                            </div>';
                    } else {
                        echo '<a class="modal-trigger authDrop" href="#authModal">
                                    Login/Register
                                </a>
                            ';
                    }
                ?>
            </div>
        </div>
    </div>
    
    <!-- UserType Dropdown Structure -->
    <ul id='userTypeDropdown' class='dropdown-content'>
        
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
                            <a href="dashboard.php" class="black-text">Dashboard</a>
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

    <!-- Auth Modal Structure -->
    <div id="authModal" class="modal">
        <div class="modal-content">
            <!-- Login Modal Structure -->
            <div id="authMsgResult" style="color: red;"></div>
            <div id="logModalDiv">
                <h5>Login</h5>
                <form action="" id="loginForm" method="POST">
                    <div class="row">
                        <div class="col s12 input-field">
                            <label for="logEmail">Email</label>
                            <input type="email" class="validate" name="logEmail" id="logEmail" required /> 
                        </div>
                        <div class="col s12 input-field">
                            <label for="logPass">Password</label>
                            <input type="password" class="validate" name="logPass" id="logPass" required /> 
                        </div>
                        
                        <div class="input-field">
                            <button class="btn waves-effect waves-light col s12 center" type="submit" id="logBtn" name="logBtn">Submit
                                <i class="material-icons right">send</i>
                            </button>
                        </div>

                        <p class="center">Don't have an account? <a href="#" id="logSwapBtn">Register</a></p>
                        <p class="center">
                            <!-- <small> -->
                                Forgot Account details? <a href="../recoverAccount/recoverPassword.php">Recover Account</a>
                            <!-- </small> -->
                        </p>
                    </div>
                </form>
            </div>

            <!-- Registry Modal Structure -->
            <div id="regModalDiv" class="hide">
                <h5>Registration</h5>
                <form action="" id="regForm" method="POST">
                    <div class="row">
                        <div class="col s6 input-field">
                            <label for="fName">Firstname</label>
                            <input type="text" class="validate" name="fName" id="fName" required/> 
                        </div>
                        <div class="col s6 input-field">
                            <label for="regLName">Lastname</label>
                            <input type="text" class="validate" name="regLName" id="regLName" required/> 
                        </div>
                        <div class="col s6 input-field">
                            <label for="oName">Othername</label>
                            <input type="text" class="validate" name="oName" id="oName" /> 
                        </div>
                        <div class="col s6 input-field">
                            <label for="phone">phone</label>
                            <input type="number" class="validate" name="phone" id="phone" required/> 
                        </div>
                        <div class="col s12 input-field">
                            <label for="email">Email</label>
                            <input type="email" class="validate" name="email" id="email" required/> 
                        </div>
                        <div class="col s6 input-field">
                            <label for="pass">Password</label>
                            <input type="password" class="validate" name="pass" id="pass" required/> 
                        </div>
                        <div class="col s6 input-field">
                            <label for="cPass">Confirm Password</label>
                            <input type="password" class="validate" name="cPass" id="cPass" required/> 
                        </div>
                        <div class="input-field">
                            <button class="btn waves-effect waves-light col s12 center" type="submit" id="regBtn" name="regBtn">Submit
                                <i class="material-icons right">send</i>
                            </button>
                        </div>

                        <p class="center">Already have an account? <a href="#" id="regSwapBtn">Login</a></p>
                    </div>
                </form>
            </div>
            
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
        </div>
    </div>

    <!-- Admin Host Modal Structure -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h5>Tell us more about your place and we'll update your estimate</h5>
            <!-- <p>A bunch of text</p> -->
            <form action="" id="usersHostingForm" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="input-field col s6">
                        <select class="validate" id="addr" name="addr">
                            <option value="" disabled selected>Choose a Continent</option>
                            <option>Asia</option>
                            <option>Africa</option>
                        </select>
                        </div>
                    <div class="col s6 input-field">
                        <label for="exact">Exact Shop's Location</label>
                        <input type="text" class="validate" name="exact" id="exact" require /> 
                    </div>
                    <div class="col s6 input-field">
                        <label for="title">Title</label>
                        <input type="text" class="validate" name="title" id="title" require /> 
                    </div>
                    <div class="col s6 input-field">
                        <label for="houseD">Shop Description</label>
                        <input type="text" class="validate" name="houseD" id="houseD" require /> 
                    </div>
                    <div class="file-field input-field col s6">
                        <div class="btn">
                            <span>Pick File</span>
                            <input type="file" name="file" id="file" multiple>
                            
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" multiple>
                        </div>
                    </div>
                    <div class="col s6 input-field">
                        <label for="price">Shop's GPS Location Link</label>
                        <input type="text" class="validate" name="price" id="price" require /> 
                    </div>
                    <div class="input-field">
                        <button class="btn waves-effect waves-light col s12 center" type="submit" id="fileUpload" name="fileUpload">Submit
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
        </div>
    </div>

    
    <div class="directory center hide-on-med-and-down">
        <div class="directorySibsDiv">
            <a href="#" id="firstNavText">Search for Shops Nearby</a>
            <hr class="firstBord hide">
        </div>
    </div>

    <!-- Firstnav for large Device -->
    <div class="firstContainNav hide-on-med-and-down">
        <div class="firstNav">
            <nav id="formNav">
                <div class="nav-wrapper" id="nav_wrap">
                    <form class="formSearchLocate" action="" method="POST">
                        <div class="searchForm">
                            <div id="searchSection">
                                <div class="input-field">
                                    <div class="black-text">
                                        <input type="search" class="validate search" id="search" name="search" placeholder="Search for nearby shops" required>
                                        <span class="hide-on-small-only loc"></span>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn-floating btn-large pink waves-effect waves-light right" name="searchBtn" id="searchBtn">
                                <i class="material-icons" id="searchIcon">search</i>
                            </button>
                        </div>
                        <div class="display z-depth-1"></div>
                    </form>
                </div>
            </nav>
        </div>
    </div>

    <!-- Small Device navbar -->
    <div class="hide-on-large-only navbar-fixed" id="smallDeviceContainDiv">
        <div class="">
            <form action="" id="">
                <div id="smallDInputContainDiv">
                    <i class="material-icons" id="smallDSearchIcon">search</i>
                    <input type="text" id="smallDInput" placeholder="Where are you going?">
                </div>
            </form>
        </div>
    </div>

    <!-- <div>
        <img src="img/airbnb.jpg" alt="" class="responsive-img" id="image">
        <header class="main">
            <h1 class="grey-text text-lighten-3">Shop away<br>From home</h1>
            <a href="./searchResult.php"class="btn directionBtn">Explore nearby stays</a>
        </header>
    </div> -->

    <div class="row" id="expNearOverallDiv">
        <div id="expNearContainDiv">
            <h3 id="headerSection">Explore nearby</h3>

            <div class="col s3">
                <a href="./searchResult.php" class="expNearAnchorLink">
                    <div class="expNearImgDiv hoverable">
                        <img src="img/airbnbAbjImg.png" alt="product1.jpg" width="23%" class="expNearImg">
                        <div class="expNearTextDiv">
                            <span class="expNearTitle">Abuja</span>
                            <br>
                            15 minutes drive
                        </div>
                    </div>
                </a>

                <a href="./searchResult.php" class="expNearAnchorLink">
                    <div class="expNearImgDiv hoverable">
                        <img src="img/airbnbLogosImg.jpg" alt="product2.jpg" width="23%" class="expNearImg">
                        <div class="expNearTextDiv">
                            <span class="expNearTitle">Lagos</span> 
                            <br>
                            7 minutes drive
                        </div>
                        
                    </div>
                </a>
            </div>

            <div class="col s3">
                <a href="./searchResult.php" class="expNearAnchorLink">
                    <div class="expNearImgDiv hoverable">
                        <img src="img/airbnbWarriImg.png" alt="product3.jpg" width="23%" class="expNearImg">
                        <div class="expNearTextDiv">
                            <span class="expNearTitle">Warri</span>
                            <br>
                            23 minutes drive
                        </div>
                    </div>
                </a>

                <a href="./searchResult.php" class="expNearAnchorLink">
                    <div class="expNearImgDiv hoverable">
                        <img src="img/airbnbBeninImg.jpg" alt="product4.jpg" width="23%" class="expNearImg">
                        <div class="expNearTextDiv">
                            <span class="expNearTitle">Benin</span>
                            <br>
                            19 minutes drive
                        </div>
                    </div>
                </a>

            </div>

            <div class="col s3">
                <a href="./searchResult.php" class="expNearAnchorLink">
                    <div class="expNearImgDiv hoverable">
                        <img src="img/airbnbUyoImg.png" alt="bathroom_wallpaper.jpg" width="23%" class="expNearImg">
                        <div class="expNearTextDiv">
                            <span class="expNearTitle">Uyo</span>
                            <br>
                            23 hours drive
                        </div>
                    </div>
                </a>

                <a href="./searchResult.php" class="expNearAnchorLink">
                    <div class="expNearImgDiv hoverable">
                        <img src="img/airbnbLekkiImg.jpg" alt="kitchen-wallpaper-2048x1536.jpg" width="23%" class="expNearImg">
                        <div class="expNearTextDiv">
                            <span class="expNearTitle">Lekki</span>
                            <br>
                            5.5 hours drive
                        </div>
                    </div>
                </a>
            </div>

            <div class="col s3">
                <a href="./searchResult.php" class="expNearAnchorLink">
                    <div class="expNearImgDiv hoverable">
                        <img src="img/airbnbPortImg.jpg" alt="living_room_design.jpg" width="23%" class="expNearImg">
                        <div class="expNearTextDiv">
                            <span class="expNearTitle">Port-Harcourt</span>
                            <br>
                            13 hours drive
                        </div>
                    </div>
                </a>

                <a href="./searchResult.php" class="expNearAnchorLink">
                    <div class="expNearImgDiv hoverable">
                        <img src="img/airbnbEnuguImg.jpg" alt="luxury_hotel_room.jpg" width="23%" class="expNearImg">
                        <div class="expNearTextDiv">
                            <span class="expNearTitle">Enugu</span>
                            <br>
                            3 hours drive
                        </div>
                    </div>
                </a>
            </div>

        </div>
        
        <div id="notSureWhereToGoImgContainDiv">
            <div>
                <p id="notSureWhereToGoArticles" class="hide-on-med-and-down">
                    Not sure where to go? Perfect.
                    <button id="notSureWhereToGoBtn" onclick="flexNearby()">I'm flexible</button>
                </p>
            </div>
        </div>
    </div>

    <div class="row imageHolder hide" id="imageHolder">
        <div class="col s12" id="headerSection">
            Gallery
        </div>
        <div class="col s12">
            <div class="col s12 m6 l3">
                <img src="img/product1.jpg" alt="" class="responsive-img materialboxed" id="pageImages">
            </div>

            <div class="col s12 m6 l3">
                <img src="img/product2.jpg" alt="" class="responsive-img materialboxed" id="pageImages">
            </div>

            <div class="col s12 m6 l3">
                <img src="img/product3.jpg" alt="" class="responsive-img materialboxed" id="pageImages">
            </div>

            <div class="col s12 m6 l3">
                <img src="img/product4.jpg" alt="" class="responsive-img materialboxed" id="pageImages">
            </div>
        </div>
    </div>
        
    <?php
        include('layout/indexPageFooter.php');
    ?>