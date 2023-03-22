<div class="navbar-fixed"> 
    <nav>
        <div class="nav-wrapper white hide-on-med-and-down">
            <a href="index.php" class="brand-logo pink-text hide-on-med-and-down"><i class="material-icons" id="logo1">business</i>Shop Finder</a>
            <ul class="right hide-on-med-and-down">

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
                    <!-- Shops Dropdown Trigger -->
                    <a class='dropdown-trigger scrollableNavLink' href='#' data-target='shopsDrop'>Shops</a>

                    <!-- Shops Dropdown Structure -->
                    <ul id='shopsDrop' class='dropdown-content'>
                        <li><a href="searchResult.php" <?= $africa = 'africa' ?> class="black-text africaShopResultBtn">Africa</a></li>
                        <li class="divider" tabindex="-1"></li>
                        <li><a href="searchResult.php" <?= $asia = 'asia' ?> class="black-text asiaShopResultBtn">Asia</a></li>
                    </ul>
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
                                $feedbackUserId = $_SESSION['feedbackUserId'];
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