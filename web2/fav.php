<html>
<head><title>Your Favorite</title></head>
<body>
    <?php
    
    if (isset($_POST['username']) && !empty($_POST['username'])){
        $username=$_POST['username'];
            echo "Thanks for you selection ". $username. "<br />";
    } else {
        echo "invalid input, please enter your username". "<br />";
    }


    if (isset($_POST['dish']) && !empty($_POST['dish'])){
        $dish=$_POST['dish'];
            echo "You really enjoyed ". $dish. "<br />";
    } else {
        echo "invalid input, please enter your favorite dish". "<br />";
    }


    if (isset($_POST['color']) && !empty($_POST['color'])){
        $color=$_POST['color'];
            echo "You really enjoyed ". $color. "\n". "wine";
    } else {
        echo "invalid input, please select your favorite color". "<br />";
    }
            
        
    ?>
</body>
</html>