<?php
session_start();

//Message flash
// flash('login_success', 'Bienvenu Jean');
// Afficher dans la view - <?php echo flash('login_sucess');
function flash($name ='', $message ='',$class = 'alert alert-success'){
    if(!empty($name)){
        if(!empty($message) && empty($SESSION[$name])){
            if(!empty($_SESSION[$name])){
                unset($_SESSION[$name]);
            }

            if(!empty($_SESSION[$name.'_class'])){
                unset($_SESSION[$name.'_class']);
            }

            $_SESSION [$name] = $name;
            $_SESSION [$name. '_class'] = $class;
        }elseif(empty($message) && !empty($SESSION[$name])){
            $class = !empty($_SESSION[$name.'_class']) ?  $_SESSION [$name. '_class'] :'';
            echo '<div class ="'.$class.'" id="msg-flash">'.$_SESSION[$name].'</div>';
            unset($_SESSION[$name]);
            unset($_SESSION[$name.'_class']);
        }
    }
}

//$_SESSION[$name .'_class']