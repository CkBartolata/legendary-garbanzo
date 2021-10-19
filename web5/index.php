<?php
session_start();

    if(isset($_SESSION['visitCount'])){
        $_SESSION['visitCount'] = $_SESSION['visitCount'] + 1;
    
    } else {
        $_SESSION['visitCount'] = 1;

        echo "You have visited this page ".$_SESSION['visitCount'];
}
?>

<h1>Hello</h1>
<p>You have visited this page <?= $num_visits ?> times</p>
<p><a href="?reset=true">Reset</a></p>
