<?php 


require_once("../../../../wp-load.php");

global $wpdb;

if(!isset($POST)){
    
    $email= sanitize_email($_POST['email']);
    $pass = $_POST['pass'];

    if($email){

        $creds = array();
        $creds['user_login'] = $email;
        $creds['user_password'] = $pass;
        $creds['remember'] = false;
        $user = wp_signon( $creds, false );
        if ( is_wp_error($user) )
        {
            $result = "error";
           echo $result;
        }
        else
        {
            $result = "success";
            
            echo $result;
        }

      
    }else{
        echo "Something went wrong";
    }
}else{
    echo "Something Went Wrong";
}