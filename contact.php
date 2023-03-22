<?php
    session_start();
    include('layout/header.php');

    include('./layout/navbar.php');

?>
    <div class="container contactContainDiv">
        <p id="contFirstTxt">BUSINESS ENQUIRY</p>
        <form action="" method="POST" id="formContactSection">
            <div class="row InputInnerContactContainDiv">
                <div class="input-field col s12 m6 l6">
                    <span class="contactInputTxts">Name</span>
                    <input type="text" name="contactFirstInput" id="contactFirstInput" clas="validate" required />
                </div>
                <div class="input-field col s12 m6 l6">
                    <span class="contactInputTxts">Email</span>
                    <input type="email" name="contactSecondInput" id="contactSecondInput" clas="validate" required />
                </div>
                <div class="input-field col s12 m6 l6 txtareaDiv">
                    <span class="contactInputTxts">Message Us</span>
                    <textarea name="txtareaInput" id="txtareaInput" class="validate" required></textarea>
                </div>
                
            </div>
            <button type="submit" class="btn" id="contactBtn">
                send message
            </button>
        </form>
    </div>

<?php
    include('layout/footer.php');
?>