M.AutoInit();//Initiliazie all materialize behaviours

$('.dropdown-trigger').dropdown({
    coverTrigger: false
});

$(document).ready(function(){
    $('.datepicker').datepicker({
        selectMonths: true,
        selectYear: 1,
        format: 'mmm d',
        setDefaultDate: true
    });
});

// carousel function
$('.carousel.carousel-slider').carousel({   
    fullWidth: true,
    indicators: true
});

setInterval(() => {
   $('.carousel').carousel('next'); 
}, 5000);

// Sidenav to Right
$(document).ready(function () {
    $("#slide-out").sidenav({
        edge: "right",
    });
});

$('#navbar').hide();

$(window).scroll( (event) => {
    event.preventDefault();

    let scrollPos = $(window).scrollTop();

    if(scrollPos <= 0){
        $('#navbar').hide();
        $('#identy').show();
        $('#formNav').show();
        $('.directory').show();
        $('.secondContainNav').show();

        $('#thirdForm').show();
        $('#thirdFormNav').css('height', '9vh');
        $('.directory1').addClass('hide');
        $('.thirdContainNav').addClass('hide');
        $('.forthContainNav').addClass('hide');

        $('#personMainDiv').show();

        $("#expNearOverallDiv").css('margin-top', '63vh');

    } else if(scrollPos >= 90){
        $('#navbar').show();
        $('#identy').hide();
        $('#formNav').hide();
        $('.directory').hide();
        $('.secondContainNav').hide();

        $('#thirdForm').show();
        $('#thirdFormNav').css('height', '9vh');
        $('.directory1').addClass('hide');
        $('.thirdContainNav').addClass('hide');
        $('.forthContainNav').addClass('hide');

        $('#personMainDiv').hide();

        $("#expNearOverallDiv").css('margin-top', '79vh');
    }
});

// Preloader / imageHolder hide and show 
$('#preloader').removeClass('hide');
$('#imageHolder').addClass('hide');
$('#expNearOverallDiv').addClass('hide');

setInterval(function (){
    $('#preloader').addClass('hide');
    $('#imageHolder').removeClass('hide');
    $('#expNearOverallDiv').removeClass('hide');
}, 3000); 

$('#search').on('click', (e) => {
    e.preventDefault();

    $('#search').css('backgroundColor', 'white');
    $('#search').css('border-radius', '40px');
    // $('#search').css('position: relative', 'right: 11px');
    $('#search').css('box-shadow', '3px 0px rgb(201, 197, 197)');

    $('#searchBtn').html('search');
});

//Getting value from "ajax.php".

function fill(Value){

    //Assigning value to "search" div in "search.php" file.

    $('.search').val(Value);

    //Hiding "display" div in "search.php" file.

    $('.display').hide();

}

$(document).ready(function () {
    $('#search1').keyup(function () {
        var name1 = $("#search1").val();

        if (name1 == "") {
            $("#thirdFormContain").css("border-radius", "40px");
            $("#nav_wrap").css("border-radius", "50px");
        } else {
            $("#thirdFormContain").css("border-radius", "0px");
            $("#nav_wrap").css({
              "border-radius": "0px",
              "border-top-radius;": "0px",
            });
        }
    });
});

$(document).ready(function () {
  $("#search").keyup(function () {
    var name2 = $("#search").val();

    if (name2 == "") {
      $("#thirdFormContain").css("border-radius", "40px");
      $("#nav_wrap").css("border-radius", "50px");
    } else {
      $("#thirdFormContain").css("border-radius", "0px");
      $("#nav_wrap").css({
        "border-radius": "0px",
        "border-top-radius;": "0px",
      });
    }
  });
});

$(document).ready(function () {
  // On pressing a key in "Search box" in "search.php" file. This function will be called.

  $('input[type="search"].search').keyup(function () {
    //Assigning search box value to javascript variable named as "name".

    var name = $('input[type="search"].search').val();

    if (name == "") {
    
        $(".display").html("");
        
    } else {

      // AJAX call.

      $.ajax({
        type: "POST",
        url: "searchvalidate.php",
        data: { search: name },
        success: function (html) {
          $(".display").html(html).show();
        },
      });
    }
  });
});

$(document).ready(function () {
  // On pressing a key in "Search box" in "search.php" file. This function will be called.

  $("#search").keyup(function () {
    //Assigning search box value to javascript variable named as "name".

    var name = $("#search").val();

    if (name == "") {
      $(".display").html("");
    } else {
      // AJAX call.

      $.ajax({
        type: "POST",
        url: "searchvalidate.php",
        data: { search: name },
        success: function (html) {
          $(".display").html(html).show();
        },
      });
    }
  });
});

$('#secondNavText').on('click', (e) => {
    e.preventDefault();

    $('.firstContainNav').addClass('hide');
    $('.secondContainNav').removeClass('hide');
});

$('#firstNavText').on('click', (e) => {
    e.preventDefault();

    $('.firstContainNav').removeClass('hide');
    $('.secondContainNav').addClass('hide');
});

// directoryDiv firstNavText hover-function
$('#firstNavText').mouseover(function() {
    // e.preventDefault();

    $('.firstBord').removeClass('hide');
});

$('#firstNavText').mouseout(function() {
    // e.preventDefault();

    $('.firstBord').addClass('hide');
});

// directoryDiv secondNavText hover-function
$('#secondNavText').mouseover(function() {
    // e.preventDefault();

    $('.secondBord').removeClass('hide');
});

$('#secondNavText').mouseout(function() {
    // e.preventDefault();

    $('.secondBord').addClass('hide');
});

// directoryDiv thirdNavText hover-function
$('#thirdNavText').mouseover(function() {
    // e.preventDefault();

    $('.thirdBord').removeClass('hide');
});

$('#thirdNavText').mouseout(function() {
    // e.preventDefault();

    $('.thirdBord').addClass('hide');
});



// $('#thirdFormSearch').on('click', (e) => {
//     e.preventDefault();

//     $('#thirdForm').hide();
//     $('#thirdFormNav').css('height', '30vh');
//     $('.directory1').removeClass('hide');
//     // $('.thirdContainNav').css('position: relative', 'top: 10vh;');
//     $('.thirdContainNav').removeClass('hide');
// });

// directoryDiv firstNavText hover-function
$('.placeToStay').mouseover(function() {
    // e.preventDefault();

    $('.placeToStayBord').removeClass('hide');
});

$('.placeToStay').mouseout(function() {
    // e.preventDefault();

    $('.placeToStayBord').addClass('hide');
});

// directoryDiv secondNavText hover-function
$('.exp').mouseover(function() {
    // e.preventDefault();

    $('.expBord').removeClass('hide');
});

$('.exp').mouseout(function() {
    // e.preventDefault();

    $('.expBord').addClass('hide');
});

// directoryDiv thirdNavText hover-function
$('.onExp').mouseover(function() {
    // e.preventDefault();

    $('.onExpBord').removeClass('hide');
});

$('.onExp').mouseout(function() {
    // e.preventDefault();

    $('.onExpBord').addClass('hide');
});

$('.exp').on('click', (e) => {
    e.preventDefault();

    $('.thirdContainNav').addClass('hide');
    $('.forthContainNav').removeClass('hide');
});

$('.placeToStay').on('click', (e) => {
    e.preventDefault();

    $('.thirdContainNav').removeClass('hide');
    $('.forthContainNav').addClass('hide');
});

$('.formSearchLocate').on('submit', function(e) {
    e.preventDefault();

    let search = $('.search').val();
    // let checkInDateInput = $('#checkInDateInput').val();
    // let checkOutDateInput = $('#checkOutDateInput').val();
    // let addGuestsInput = $('#addGuestsInput').val();
    var err = 0;

    if(search != ""){
        err;
    } else {
        err = 1;
    }

    if(err == 0){
        var searchBtn = true;

        $.ajax({
            type: 'POST',
            url: 'locateSearch.php',
            data: {search: search, searchBtn: searchBtn},
            success: function(result){
                if(result == 200){
                    // window.location.reload();
                    window.location.href = "./searchResult.php";
                } else if(result == 501) {
                    M.toast({html: 'Error! Occurs here.', classes: 'errorToast'});
                }
            }
        });
    }

});

$('#usersHostingForm').on('submit', function(e){
    e.preventDefault();

    let addr = $('#addr').val();
    let exact = $('#exact').val();
    let title = $('#title').val();
    let houseD = $('#houseD').val();
    let price = $('#price').val();
    let fileToUpload = $('input[type="file"]')[0].files[0];
    var err = 0;
    // console.log(addr, exact, title, houseD, price, fileToUpload);
    if(addr != "" && exact != "" && title != "" && houseD != "" && price != "" && fileToUpload != ""){
        err;
    } else {
        err = 1;
    }

    if(err == 0){
        var fileUpload = true;

        var formData = new FormData();
        formData.append('addr', addr);
        formData.append('exact', exact);
        formData.append('title', title);
        formData.append('houseD', houseD);
        formData.append('file', fileToUpload);
        formData.append('price', price);
        formData.append('fileUpload', fileUpload);

        $.ajax({
            type: 'POST',
            url: 'controller/hostFormController.php',
            data: formData,
            processData: false,
            contentType: false,
            success: function(result){
                if(result == 200){
                    M.toast({html: 'saved!', classes: 'successToast'});
                    setInterval(() => {
                        location.reload()
                    }, 3000);
                    
                } else if(result == 501){
                    M.toast({html: 'Failed!', classes: 'errorToast'});
                }
            }
        });
    }
});
 

$('#logSwapBtn').on('click', (e) => {
    e.preventDefault();

    $('#logModalDiv').addClass('hide');
    $('#regModalDiv').removeClass('hide');
});

$('#regSwapBtn').on('click', (e) => {
    e.preventDefault();

    $('#regModalDiv').addClass('hide');
    $('#logModalDiv').removeClass('hide');
});

$('#regForm').on('submit', (e) => {
    e.preventDefault();

    var fName = $('#fName').val();
    var regLName = $('#regLName').val();
    var oName = $('#oName').val();
    var phone = $('#phone').val();
    var email = $('#email').val();
    var pass = $('#pass').val();
    var cPass = $('#cPass').val();

    var err = 0;

    if(fName == "" || regLName == "" || phone == "" || email == "" || pass == "" || cPass == ""){
        err = 1;
        console.log('Make sure all input fields are properly filled, except Othername field which is optional.');
        $('#authMsgResult').html('Make sure all input fields are properly filled, except Othername field which is optional.');
    } else {
        err;
        console.log('validated');
    }

    if(pass === cPass){
        err;
    } else {
        err = 1;
        console.log('Passwords does not match!');
        $('#authMsgResult').html('Passwords does not match!');
    }

    if(err == 0){
        var regBtn = true;

        var formData = new FormData();
        formData.append('fName', fName);
        formData.append('regLName', regLName);
        formData.append('phone', phone);
        formData.append('email', email);
        formData.append('pass', pass);
        formData.append('cPass', cPass);
        formData.append('oName', oName);
        formData.append('regBtn', regBtn);

        $.ajax({
            type: 'POST',
            url: './auth/authController.php',
            data: formData,
            processData: false,
            contentType: false,
            success: (result) => {
                if(result == 200){
                    console.log('Inserted');
                    M.toast({html: 'Registered Successfully! Login.', classes: 'successToast'});
                    $('#regModalDiv').addClass('hide');
                    $('#logModalDiv').removeClass('hide');

                } else if(result == 501){
                    console.log('Not Inserted');
                }
            },
            error: () => {
                M.toast({html: 'Registeration failed. Please try again.', classes: 'errorToast'});
                console.log('Error here...');
            }
        });
    }
});

$('#loginForm').on('submit', (e) => {
    e.preventDefault();

    let logEmail = $('#logEmail').val();
    let logPass = $('#logPass').val();

    var err = 0;

    if(logEmail == "" && logPass == ""){
        err = 1;
        console.log('Fill in the input fields');
    } else {
        err;
        console.log('Validation OK!');
    }

    if(err == 0){
        var logBtn = true;
        formData = new FormData();
        formData.append('logEmail', logEmail);
        formData.append('logPass', logPass);
        formData.append('logBtn', logBtn);

        $.ajax({
            type: 'POST',
            url: './auth/authController.php',
            data: formData,
            processData: false,
            contentType: false,
            success: (result) => {
                if(result == 200){
                    console.log('User LoggedIn');
                    location.reload();

                } else if(result == 501){

                    console.log('User could not login');
                }
            },
            error: () => {
                console.log('Error: login process terminated.');
            }
        });
    }
});


function flexNearby() {
    window.location.href = "./searchResult.php";
};

$(".directionBtn").on('click', () => {
    window.location.href = "./searchResult.php";
});

$(".gpsLocBtn").on("click", function () {

    var gpsId = $(this).attr("data-id");
    var gpsValue = $(this).attr("data-value");
    
    $(".gpsLocImg").attr("src", gpsValue);
});

$(".giveFeedbackDelBtn").on("click", function () {
    var shopId = $(this).attr('data-id');
    var shopFile = $(this).attr("data-value");
    // console.log(shopId, shopFile);

    Swal.fire({
        //   imageUrl: `url(../media/${shopFile})>`,
        icon: "warning",
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        showCancelButton: true,
        confirmButtonColor: "red",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
              type: "POST",
              url: "controller/deleteShopController.php",
              data: { shopId: shopId, delShopBtn: true },
              success: function (result) {
                if (result == 501) {
                    Swal.fire("Failed!", "Shop Delete Failed", "error");
                } else if (result == 200) {
                    Swal.fire("Deleted!", "Shop Deleted Successfully", "success");
                    setTimeout(function () {
                        location.reload();
                    }, 3000);
                }
              },
            });
        }
    });
});

// Direct to Africa Shops
$(".africaShopResultBtn").on('click', () => {
    $("#searchEngineShopResultDiv").addClass("hide");
    $("#asiaShopResultDiv").addClass("hide");
    $("#africaShopResultDiv").removeClass("hide");
    
});

// Direct to Asia Shops
$(".asiaShopResultBtn").on("click", () => {
    $("#searchEngineShopResultDiv").addClass("hide");
    $("#africaShopResultDiv").addClass("hide");
    $("#asiaShopResultDiv").removeClass("hide");
});

// Recover Password Section
$("#recPassForm").on("submit", (e) => {
    e.preventDefault();

    let recPassEmail = $("#recPassEmail").val();
    
    var err = 0;

    if (recPassEmail != "") {
      err;
    } else {
      err = 1;
    }

    if (err == 0) {
        var recPassBtn = true;
            
        $.ajax({
        type: "POST",
        url: "../controller/recoverPassController.php",
        data: { recPassEmail: recPassEmail, recPassBtn: recPassBtn },
        success: (result) => {
            if (result) {
                $("#recPassId").val(result);
                // window.location.href = "../recoverAccount/changePassword.php";
                $("#recPassForm").addClass("hide");
                $("#recCPassForm").removeClass("hide");
                    
                if (result == 501) {
                    $("#recPassForm").removeClass("hide");
                    $("#recCPassForm").addClass("hide");
                    Swal.fire({
                        icon: "error",
                        title: "Invalid Username/Password",
                        text: "Please put a valid Username and Password.",
                        showConfirmButton: false,
                        timer: 5000,
                    });
                }   
            } 
        },
        error: () => {
            Swal.fire({
                icon: "error",
                title: "Network Failure!",
                text: "Network disconnected. Please try again later.",
                });
            },
        });
    }
});

// Change Password Section
$("#recCPassForm").on("submit", (e) => {
    e.preventDefault();

    let recPass = $("#recPass").val();
    let recCPass = $("#recCPass").val();
    let recPassId = $("#recPassId").val();
    // console.log(recPassId);

    var err = 0;

    if (recPass != "" && recCPass != "") {
        err;
    } else {
        err = 1;
    }

    if (recPass !== recCPass) {
        Swal.fire({
        icon: "error",
        title: "Password doesn't match",
        text: "Please make sure the passwords fields matches.",
        showConfirmButton: false,
        timer: 5000,
        });
    } else {
        if (err == 0) {
            var recCPassBtn = true;
            
            $.ajax({
                type: "POST",
                url: "../controller/recoverPassController.php",
                data: {
                    recPass: recPass,
                    recCPass: recCPass,
                    recPassId: recPassId,
                    recCPassBtn: recCPassBtn,
                },
            success: (result) => {
                if (result == 200) {
                    Swal.fire({
                        icon: "success",
                        title: "Password Changed Successfully!",
                        text: "Now Login to your account.",
                        timer: 5000,
                    });
                    $("#recCPassForm").addClass("hide");
                    $("#recPassLoginForm").removeClass("hide");
                    //   console.log("200");
                } else if (result == 501) {
                    // Swal.fire({
                    //   icon: "info",
                    //   title: "Password Detected!",
                    //   text: "Do you still want to change it? Put a different password to update.",
                    //   showConfirmButton: false,
                    //   timer: 5000,
                    // });
                    // console.log("501");

                    Swal.fire({
                        icon: "info",
                        title: "Password Detected!",
                        text: "Do you still want to change it? Put a different password to update.",
                        showDenyButton: true,
                        //   showCancelButton: true,
                        confirmButtonText: "Yes",
                        denyButtonText: "No",
                        denyButtonColor: 'grey',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire("Go on with your password changes but put a different password.", "", "success");
                        } else if (result.isDenied) {
                            window.location.href = "../index.php";
                        }
                    });
                }
            },
            error: () => {
                Swal.fire({
                    icon: "error",
                    title: "Network Failure!",
                    text: "Network disconnected. Please try again later.",
                    });
                },
            });
        }
    }
});

// Recover Password Login Section
$("#recPassLoginForm").on("submit", (e) => {
    e.preventDefault();

    let recPassLogEmail = $("#recPassLogEmail").val();
    let recLogPass = $("#recLogPass").val();
    // console.log(recPassId);

    var err = 0;

    if (recPassLogEmail != "" && recLogPass != "") {
        err;
    } else {
        err = 1;
    }

    
    if (err == 0) {
        var recLogPassBtn = true;

        $.ajax({
            type: "POST",
            url: "../controller/recoverPassController.php",
            data: {
            recPassLogEmail: recPassLogEmail,
            recLogPass: recLogPass,
            recLogPassBtn: recLogPassBtn,
            },
            success: (result) => {
            if (result == 200) {
                window.location.href = "../index.php";
                //   console.log("200");
            } else if (result == 501) {
                Swal.fire({
                    icon: "info",
                    title: "Password Detected!",
                    text: "Do you still want to change it? Put a different password to update.",
                    showConfirmButton: false,
                    timer: 5000,
                });
                // console.log("501");
            }
            },
            error: () => {
            Swal.fire({
                icon: "error",
                title: "Network Failure!",
                text: "Network disconnected. Please try again later.",
            });
            },
        });
    }
});


// Feedback Section
$(document).ready(function () {
    // First feedback star
    $("#feedbackIcon").on("click", () => {

        $("#feedbackIcon").addClass("hide");
        $("#feedbackClickedIcon").removeClass("hide");
        
        $(".feedbackBoxMsg1")
        .html("Very Poor")
            .css({ "font-weight": "700", color: "#76777d" });
        
        $(".feedbackTxtBox").removeClass('hide');

        $(".feedbackTxt1").removeClass('hide');
        
    });
    $("#feedbackClickedIcon").on("click", () => {
        
        $("#feedbackIcon5").removeClass("hide");
        $("#feedbackClickedIcon").addClass("hide");

        $(".feedbackBoxMsg1")
          .html("Very Poor")
          .css({ "font-weight": "700", color: "#76777d" });

        $(".feedbackTxtBox").removeClass("hide");

        $(".feedbackTxt1").removeClass("hide");
    });

    // Second feedback star
    $("#feedbackIcon1").on("click", () => {
        $("#feedbackIcon1").addClass("hide");

        $("#feedbackClickedIcon").removeClass("hide");
        $("#feedbackClickedIcon1").removeClass("hide");
        $("#feedbackClickedIcon2").addClass("hide");
        $("#feedbackClickedIcon3").addClass("hide");
        $("#feedbackClickedIcon4").addClass("hide");

        $("#feedbackIcon").addClass("hide");
        $("#feedbackIcon1").addClass("hide");
        $("#feedbackIcon2").removeClass("hide");
        $("#feedbackIcon3").removeClass("hide");
        $("#feedbackIcon4").removeClass("hide");

        $("#feedbackIcon5").addClass("hide");

        $(".feedbackBoxMsg1")
          .html("Poor")
          .css({ "font-weight": "700", color: "#76777d" });

        $(".feedbackTxtBox").removeClass("hide");

        $(".feedbackTxt1").removeClass("hide");
    });
    $("#feedbackClickedIcon1").on("click", () => {

        $("#feedbackClickedIcon").removeClass("hide");
        $("#feedbackClickedIcon1").removeClass("hide");
        $("#feedbackClickedIcon2").addClass("hide");
        $("#feedbackClickedIcon3").addClass("hide");
        $("#feedbackClickedIcon4").addClass("hide");

        $("#feedbackIcon").addClass("hide");
        $("#feedbackIcon1").addClass("hide");
        $("#feedbackIcon2").removeClass("hide");
        $("#feedbackIcon3").removeClass("hide");
        $("#feedbackIcon4").removeClass("hide");

        $("#feedbackIcon5").addClass("hide");

        $(".feedbackBoxMsg1")
          .html("Poor")
          .css({ "font-weight": "700", color: "#76777d" });

        $(".feedbackTxtBox").removeClass("hide");

        $(".feedbackTxt1").removeClass("hide");
    });

    // Third feedback star
    $("#feedbackIcon2").on("click", () => {
        $("#feedbackIcon2").addClass("hide");
        // $("#feedbackClickedIcon2").removeClass("hide");

        $("#feedbackClickedIcon").removeClass("hide");
        $("#feedbackClickedIcon1").removeClass("hide");
        $("#feedbackClickedIcon2").removeClass("hide");
        $("#feedbackClickedIcon3").addClass("hide");
        $("#feedbackClickedIcon4").addClass("hide");

        $("#feedbackIcon").addClass("hide");
        $("#feedbackIcon1").addClass("hide");
        $("#feedbackIcon2").addClass("hide");
        $("#feedbackIcon3").removeClass("hide");
        $("#feedbackIcon4").removeClass("hide");

        $("#feedbackIcon5").addClass("hide");

        $(".feedbackBoxMsg1")
          .html("Fair")
            .css({ "font-weight": "700", color: "#76777d" });
        
        $(".feedbackTxtBox").removeClass("hide");

        $(".feedbackTxt1").removeClass("hide");
    });
    $("#feedbackClickedIcon2").on("click", () => {

        $("#feedbackClickedIcon").removeClass("hide");
        $("#feedbackClickedIcon1").removeClass("hide");
        $("#feedbackClickedIcon2").removeClass("hide");
        $("#feedbackClickedIcon3").addClass("hide");
        $("#feedbackClickedIcon4").addClass("hide");

        $("#feedbackIcon").addClass("hide");
        $("#feedbackIcon1").addClass("hide");
        $("#feedbackIcon2").addClass("hide");
        $("#feedbackIcon3").removeClass("hide");
        $("#feedbackIcon4").removeClass("hide");

        $("#feedbackIcon5").addClass("hide");

        $(".feedbackBoxMsg1")
          .html("Fair")
            .css({ "font-weight": "700", color: "#76777d" });
        
        $(".feedbackTxtBox").removeClass("hide");

        $(".feedbackTxt1").removeClass("hide");
    });

    // Fourth feedback star
    $("#feedbackIcon3").on("click", () => {
        $("#feedbackIcon3").addClass("hide");

        $("#feedbackClickedIcon").removeClass("hide");
        $("#feedbackClickedIcon1").removeClass("hide");
        $("#feedbackClickedIcon2").removeClass("hide");
        $("#feedbackClickedIcon3").removeClass("hide");
        $("#feedbackClickedIcon4").addClass("hide");

        $("#feedbackIcon").addClass("hide");
        $("#feedbackIcon1").addClass("hide");
        $("#feedbackIcon2").addClass("hide");
        $("#feedbackIcon3").addClass("hide");
        $("#feedbackIcon4").removeClass("hide");

        $("#feedbackIcon5").addClass("hide");

        $(".feedbackBoxMsg1")
          .html("Good")
            .css({ "font-weight": "700", color: "#76777d" });
        
        $(".feedbackTxtBox").removeClass("hide");

        $(".feedbackTxt1").addClass("hide");
    });
    $("#feedbackClickedIcon3").on("click", () => {

        $("#feedbackClickedIcon").removeClass("hide");
        $("#feedbackClickedIcon1").removeClass("hide");
        $("#feedbackClickedIcon2").removeClass("hide");
        $("#feedbackClickedIcon3").removeClass("hide");
        $("#feedbackClickedIcon4").addClass("hide");

        $("#feedbackIcon").addClass("hide");
        $("#feedbackIcon1").addClass("hide");
        $("#feedbackIcon2").addClass("hide");
        $("#feedbackIcon3").addClass("hide");
        $("#feedbackIcon4").removeClass("hide");

        $("#feedbackIcon5").addClass("hide");

        $(".feedbackBoxMsg1")
          .html("Good")
            .css({ "font-weight": "700", color: "#76777d" });
        
        $(".feedbackTxtBox").removeClass("hide");

        $(".feedbackTxt1").addClass("hide");
    });

    // Fift feedback star
    $("#feedbackIcon4").on("click", () => {
        $("#feedbackIcon4").addClass("hide");

        $("#feedbackClickedIcon").removeClass("hide");
        $("#feedbackClickedIcon1").removeClass("hide");
        $("#feedbackClickedIcon2").removeClass("hide");
        $("#feedbackClickedIcon3").removeClass("hide");
        $("#feedbackClickedIcon4").removeClass("hide");

        $("#feedbackIcon").addClass("hide");
        $("#feedbackIcon1").addClass("hide");
        $("#feedbackIcon2").addClass("hide");
        $("#feedbackIcon3").addClass("hide");
        $("#feedbackIcon4").addClass("hide");

        $("#feedbackIcon5").addClass("hide");

        $(".feedbackBoxMsg1")
          .html("Excellent!")
            .css({ "font-weight": "700", color: "#76777d" });
        
        $(".feedbackTxtBox").removeClass("hide");

        $(".feedbackTxt1").addClass("hide");
    });
    $("#feedbackClickedIcon4").on("click", () => {
        console.log('feedback4');
    });
});

$(".feedbackIcon").on("click", function () {
        $("#feedbackForm").on("click", () => {
        feedback = $(this).attr("data-feed");
        // e.preventDefault();

        // console.log(feedback);

        var feedbackTxtArea = $(".feedbackTxtArea").val();

        var feedbackUserId = $("#feedbackUserId").val();
            
        var shopId = $("#shopId").val();
            
        console.log(shopId);


        // var err = 0;

        // if (feedback != "" && feedbackTxtArea != "" && feedbackUserId != "") {
        // err;
        // } else {
        // err = 1;
        // }

        // if (err == 0) {
        //     // console.log(feedback, feedbackTxtArea, feedbackUserId);
        //     var feedbackFormBtn = true;

        //     $.ajax({
        //         type: "POST",
        //         url: "../controller/feedbackController.php",
        //         data: {
        //         feedback: feedback,
        //         feedbackTxtArea: feedbackTxtArea,
        //         feedbackUserId: feedbackUserId,
        //         feedbackFormBtn: feedbackFormBtn,
        //         },
        //         success: (result) => {
        //             if (result == 200) {
        //                 Swal.fire({
        //                     icon: "success",
        //                     title: "Feedback Sent Successfully!",
        //                     text: "Your feedback has been sent, thanks for your time.",
        //                     showConfirmButton: false,
        //                     timer: 5000,
        //                 });
        //                 setTimeout(() => {
        //                     location.reload();
        //                 }, 4000);
        //                 // console.log("200");
        //             } else if (result == 501) {
        //                 Swal.fire({
        //                     icon: "error",
        //                     title: "Feedback Failed.",
        //                     text: "Feedback did not send, please try again later.",
        //                     showConfirmButton: false,
        //                     timer: 3000,
        //                 });
        //                 // console.log("501");
        //             }
        //         },
        //         error: () => {
        //         Swal.fire({
        //             icon: "error",
        //             title: "Network Failure!",
        //             text: "Network disconnected. Please try again later.",
        //         });
        //         },
        //     });
        // } else {
        //     console.log("here");
        // }
    });
});

