<?php
    session_start();
    include('layout/header.php');

    include('./layout/navbar.php');

?>
    <div class="row contain">
        <div class="col s4">
            <div class="dashBckDiv1">
                <div class="dashBckInnerDiv">
                    <h4 class="dashTitle">BLOG AND NEWS</h4>
                    <hr>
                    
                    <br>
                    300+ shops
                    <p id="searchResPara1">Shops in Aberdeen</p>   

                    <div class="col s6">
                        <img src="media/doughnuts.jpg" alt="doughnuts.jpg" class="responsive-img resultImg">
                    </div>
                    
                    <div class="col s6" id="houseDetails">
                        <span id="title">Fast food Restaurant</span>
                        <br />  
                        <span id="exactPlace">No 3 Highway Aberdeen express</span>
                        <br />
                        <hr id="hRow">
                        <span id="houseD">Fast food food restaurant for all kinds of fast food like burger, pizza, etc.</span>
                        <br />
                        <p class="shopTimeFunc">
                            <span class="shopTimeFunc1">Open</span> . from 6am till 11pm
                        </p>
                    </div>
                </div>
                
                <div class="dashBckInnerDiv">
                    <br>
                    <p id="searchResPara2"><small>Shops in Aberdeen</small></p>   

                    <div class="col s6">
                        <img src="media/ecommerce.jpg" alt="doughnuts.jpg" class="responsive-img resultImg">
                    </div>
                    
                    <div class="col s6" id="houseDetails">
                        <span id="title">Ecommerce delivery</span>
                        <br />  
                        <span id="exactPlace">No 3 Mission Rd</span>
                        <br />
                        <hr id="hRow">
                        <span id="houseD">Ecommerce and delivery shop</span>
                        <br />
                        <p class="shopTimeFunc">
                            <span class="shopTimeFunc1">Open</span> . from 6am till 11pm
                        </p>
                    </div>
                </div>
                <hr>

                <div class="row dashBckInnerDiv">
                    <br>
                    <p id="searchResPara2"><small>Shops in Aberdeen</small></p>   

                    <div class="col s6">
                        <img src="media/doughnuts.jpg" alt="doughnuts.jpg" class="responsive-img resultImg">
                    </div>
                    
                    <div class="col s6" id="houseDetails">
                        <span id="title">Fast food Restaurant</span>
                        <br />  
                        <span id="exactPlace">No 3 Highway Aberdeen express</span>
                        <br />
                        <hr id="hRow">
                        <span id="houseD">Fast food food restaurant for all kinds of fast food like burger, pizza, etc.</span>
                        <br />
                        <p class="shopTimeFunc">
                            <span class="shopTimeFunc1">Open</span> . from 6am till 11pm
                        </p>
                    </div>
                </div>

                <div class="row dashBckInnerDiv">
                    <br>
                    <!-- <p id="searchResPara2"><small>Shops in Aberdeen</small></p>    -->

                    <div class="col s6">
                        <img src="media/doughnuts.jpg" alt="doughnuts.jpg" class="responsive-img resultImg">
                    </div>
                    
                    <div class="col s6" id="houseDetails">
                        <span id="title">Fast food Restaurant</span>
                        <br />  
                        <span id="exactPlace">No 3 Highway Aberdeen express</span>
                        <br />
                        <hr id="hRow">
                        <span id="houseD">Fast food food restaurant for all kinds of fast food like burger, pizza, etc.</span>
                        <br />
                        <p class="shopTimeFunc">
                            <span class="shopTimeFunc1">Open</span> . from 6am till 11pm
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s8 dashContainDiv">
            <img src="img/blog.png" alt="feedbackDashImg.png" class="feedbackDashImg">
        </div>
    </div>

<?php
    include('layout/navFooter.php');
?>