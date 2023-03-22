<?php
    session_start();

    if(isset($_POST['search'])){

        $search = $_POST['search'];

        require('../shopFinderDbConfig.php');

        $res = $db->query('SELECT * FROM choosedplacefile WHERE exactPlace LIKE "%'.$search.'%" LIMIT 5');
        
        $numRows = $res->num_rows;

        if($numRows > 0) {
            echo '<ul>';
            
            while($rows = $res->fetch_assoc()){
?>
                <li onclick='fill("<?php echo $rows["exactPlace"]; ?>")'>
                    <a class="searchEngineLink">
                        <?php echo $rows['exactPlace']; ?>
                    </a>
                </li>
                <br>
<?php 
            }
        } else {
            echo '0 records.';
        }

    } else {

        echo 501;  
    }
?>
</ul>