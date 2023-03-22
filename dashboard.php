<?php
    session_start();
    include('layout/header.php');

    include('./layout/navbar.php');

?>
    <div class="row contain">
        <div class="col s4">
            <div class="dashBckDiv">
                <div class="dashBckInnerDiv">
                    <h4 class="dashTitle">Story Seckers Feedback</h4>
                    <hr>
                    
                    <div class="dashfeedUpperDiv">
                        <span>
                            <i class="material-icons">account_circle</i>
                            <span class="dashfeedtxt">Peter Parker</span>
                        </span>
                        <span class="dashfeedInnerDiv">
                            <i class="material-icons">mail</i>
                            <span class="dashfeedtxt">peterParker3@gmail.com</span>
                        </span>
                    </div>
                    <div>
                        <span>
                            <i class="material-icons">phone</i>
                            <span class="dashfeedtxt">08140372637</span>
                        </span>
                        <span class="dashfeedInnerDiv">
                            <i class="material-icons">message</i>
                            <span class="dashfeedtxt">peterParker3@gmail.com</span>
                        </span>
                    </div>

                    <div class="dashfeedtxtArea">
                        <i class="material-icons">message</i>
                        <div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Vitae, illo esse asperiores quae commodi deserunt praesentium 
                            rerum placeat delectus sed.
                        </div>
                    </div>

                    <div>
                        <i class="material-icons feedbackIcon" id="feedbackIcon">star</i>
                        <i class="material-icons feedbackIcon" id="feedbackIcon">star</i>
                        <i class="material-icons feedbackIcon" id="feedbackIcon">star</i>
                        <i class="material-icons feedbackIcon" id="feedbackIcon">star_border</i>
                        <i class="material-icons feedbackIcon" id="feedbackIcon">star_border</i>
                    </div>
                    <hr class="shortHr">
                    <p cclass="dashfeedtxt1"><b>Fair</b></p>
                    <hr>
                    <div class="dashfeedUpperDiv">
                        <span>
                            <i class="material-icons">account_circle</i>
                            <span class="dashfeedtxt">Jeff Hardy</span>
                        </span>
                        <span class="dashfeedInnerDiv">
                            <i class="material-icons">mail</i>
                            <span class="dashfeedtxt">jeffhardy@gmail.com</span>
                        </span>
                    </div>
                    <div>
                        <span>
                            <i class="material-icons">phone</i>
                            <span class="dashfeedtxt">08125234452</span>
                        </span>
                        <span class="dashfeedInnerDiv">
                            <i class="material-icons">message</i>
                            <span class="dashfeedtxt">jeffhardy@gmail.com</span>
                        </span>
                    </div>

                    <div class="dashfeedtxtArea">
                        <i class="material-icons">message</i>
                        <div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Vitae, illo esse asperiores quae commodi deserunt praesentium 
                            rerum placeat delectus sed.
                        </div>
                    </div>

                    <div>
                        <i class="material-icons feedbackIcon" id="feedbackIcon">star</i>
                        <i class="material-icons feedbackIcon" id="feedbackIcon">star</i>
                        <i class="material-icons feedbackIcon" id="feedbackIcon">star</i>
                        <i class="material-icons feedbackIcon" id="feedbackIcon">star</i>
                        <i class="material-icons feedbackIcon" id="feedbackIcon">star_border</i>
                    </div>
                    <hr class="shortHr">
                    <p cclass="dashfeedtxt1"><b>Good</b></p>
                    <hr>
                    <div class="dashfeedUpperDiv">
                        <span>
                            <i class="material-icons">account_circle</i>
                            <span class="dashfeedtxt">Philip Andrew</span>
                        </span>
                        <span class="dashfeedInnerDiv">
                            <i class="material-icons">mail</i>
                            <span class="dashfeedtxt">philipandrew@gmail.com</span>
                        </span>
                    </div>
                    <div>
                        <span>
                            <i class="material-icons">phone</i>
                            <span class="dashfeedtxt">09140373459</span>
                        </span>
                        <span class="dashfeedInnerDiv">
                            <i class="material-icons">message</i>
                            <span class="dashfeedtxt">philipandrew@gmail.com</span>
                        </span>
                    </div>

                    <div class="dashfeedtxtArea">
                        <i class="material-icons">message</i>
                        <div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Vitae, illo esse asperiores quae commodi deserunt praesentium 
                            rerum placeat delectus sed.
                        </div>
                    </div>

                    <div>
                        <i class="material-icons feedbackIcon" id="feedbackIcon">star</i>
                        <i class="material-icons feedbackIcon" id="feedbackIcon">star</i>
                        <i class="material-icons feedbackIcon" id="feedbackIcon">star</i>
                        <i class="material-icons feedbackIcon" id="feedbackIcon">star</i>
                        <i class="material-icons feedbackIcon" id="feedbackIcon">star</i>
                    </div>
                    <hr class="shortHr">
                    <p cclass="dashfeedtxt1"><b>Excellent!</b></p>
                </div>
            </div>
        </div>
        <div class="col s8 dashContainDiv">
            <img src="img/feedbackDashImg.png" alt="feedbackDashImg.png" class="feedbackDashImg">
        </div>
    </div>

<?php
    include('layout/navFooter.php');
?>