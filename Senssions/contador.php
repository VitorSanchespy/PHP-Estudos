<?php
    require_once('./config.php');
    
    if (!isset($_SESSION['contador'])) {
       $_SESSION['contador'] = 0;  
    }
    
    if(session_regenerate_id()){
        $_SESSION['contador']++;
    }

    echo 'Session ID: ' . session_id();

    echo '<br> Visualizações: ' . $_SESSION['contador'];
    

?>