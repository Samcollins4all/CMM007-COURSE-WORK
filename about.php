<?php
    session_start();
    include('layout/header.php');

    include('./layout/navbar.php');

?>



<div class="parallax-container">
        <div class="parallax"><img src="img/groceryShop.jpg"></div>
    </div>
    <div class="grey lighten-5">
        <div class="container">
            <br><br><br>
            <p class="servicesPageHeaderTxt">About <span class="servicesPageHeaderSpanTxt">Us</span></p>
            <hr class="servicesPageHr"><br>
            <p class="aboutPageHeaderTxt">Shop Finder <span class="aboutPageSecondTxt">Is fast and reliable.</span></p>
            <p class="aboutSecondTxt">
                We also offer diplomats service Express Courier And Logistics is considered to be the leading supplier 
                to the transportation industry in America. Express Courier Logistics has forged long term 
                (wholesale) relationships / partnerships with all the major airlines, express courier integrators, 
                worldwide freighter networks, charter airlines, trucking systems and logistics suppliers. 
                Based on our significant shipping volumes, we are in a position to offer preferential pricing and superior 
                service to you, our important and valued customer.
            </p>
            <div>
                <p class="aboutPageHeaderTxt">OUR CORE <span class="servicesPageHeaderSpanTxt">VALUE</span></p>
                <hr class="servicesPageHr"><br>
                <p class="aboutPageThirdTxt">We believe in words and we keep our words</p>
                <p class="aboutPageForthTxt">This are some of the things you need to know about our company; they includes: </p>
                <ol>
                    <li>We work with professional transpoters</li>
                    <li>We deliver fast and efficiently</li>
                    <li>24/7 working strategy</li>
                </ol>
            </div>
        </div>
    </div>
    
    
    <div class="container">
        <div class="iconsContainDiv">
            <div class="row">
                <div class="col s12 m12 l3 center fontawesomeDiv">
                    <i class="fas fa-handshake fa-6x fontawesome"></i><br>
                    Customers First<br>Our services are excellent.
                </div>

                <div class="col s12 m12 l3 offset-l1 center fontawesomeDiv">
                    <i class="fas fa-users fa-6x fontawesome"></i><br>
                    Good Team<br>Our team is here because of you.
                </div>

                <div class="col s12 m12 l3 offset-l2 center fontawesomeDiv">
                    <i class="fas fa-business-time fa-6x fontawesome"></i><br>
                    Company Expectations<br>We meet to expectations in all that is expected from us.
                </div>
            </div>
        </div>
    </div>

    <p class="aboutPageTestimonTxt center">Testimonies...</p>
    <p class="aboutPageTestimonTxt1 center">What our clients says</p>
    <hr class="aboutPageHr"><br>
    <div class="row aboutPageTestimonTxtContainDiv">
        <div class="col s12 m6 l3">
            <img src="img/firstBusinessman.jpg" class="responsive-img aboutPageTestmonImg">
            <div class="aboutPageTestmonDiv z-depth-3">
                Amazed by the customer support i got. each time i have an inquiry the Global Courier Logistics
                Courier team is always ready to assist with pretty much everything from shipment<br> 
                tracking to delivery, so that i focus on my business. Awesome!!
                <p class="aboutPageTestmonName">John Kerry joe</p>
            </div>
            
        </div>
        <div class="col s12 m6 l3">
            <img src="img/businessLady.jpg" class="responsive-img aboutPageTestmonImg">
            <div class="aboutPageTestmonDiv z-depth-3">
                Excellent service - Excellent service - Easy to use website, quick reply to any queries with 
                on line chat. Would recommend.
                <p class="aboutPageTestmonName">Caroline williams Smith</p>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <img src="img/secnodbusinessWoman.jpg" class="responsive-img aboutPageTestmonImg">
            <div class="aboutPageTestmonDiv z-depth-3">
                I rely only on Global Courier Logistics for all my import related needs in UK. 
                Working with A.L. is always a pleasure. Having interacted with the company for several years 
                Everything in the company is streamlined to perfection.
                <p class="aboutPageTestmonName">Jane walker</p>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <img src="img/secondBusinessman.jpg" class="responsive-img aboutPageTestmonImg">
            <div class="aboutPageTestmonDiv z-depth-3">
                "Our experience with Global Courier Logistics Courier has been one of complete satisfaction. 
                The company comprises of highly dedicated and skilled professionals that make a sincere effort 
                to cater to our requests.".
                <p class="aboutPageTestmonName">Mark Philip</p>
            </div>
        </div>
    </div>
    
    <!-- Chat Engine Operator -->
    <div class="fixed-action-btn click-to-toggle">
        <a class="btn-floating btn-large blue">
            <i class="large material-icons">message</i>
        </a>

        <div id="modal1" class="modal">
            <div class="class headerInfo blue">
                <span class="chatTitle">Send Message</span>
                <br><br>
                <span class="chatTxt">Please fill out the form below and we will get back to you as soon as possible.</span>
            </div>
            <div class="chatEngConDiv">
                <form action="" method="POST" id="chatEngForm">
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" id="name" name="name" placeholder="*Name" class="validate" required>
                        </div>
                        <div class="input-field col s12">
                            <input type="email" id="email" name="email" placeholder="*Email" class="validate" required>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="textarea1" name="textarea1" class="materialize-textarea" placeholder="*Message"></textarea>
                        </div>
                        <button type="submit" class="btn-large col s12 waves-effect waves-light" id="chatBtn" name="chatBtn">
                            submit
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>



<?php
    include('layout/navFooter.php');
?>