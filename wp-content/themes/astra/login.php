<?php
/**
* Template Name: Login Page
*
* @package WordPress
*/



$dashboard_URL = get_template_directory_uri().'/custom';
$uid = get_current_user_id();



if($uid){
 
    $caps = get_user_meta($uid, 'wp_capabilities', true);
    $roles = array_keys((array)$caps);
   
    $result = $roles[0];
   
    if($result == 'administrator'){
        wp_redirect( "http://localhost/login/wp-admin", 301 );
        exit();
    }else if($result == 'custom'){
        wp_redirect( "http://localhost/login/dashboard", 301 );
        exit(); 
    }else{
        wp_redirect( "http://localhost/login/wp-admin", 301 );
        exit();
    }

    
    
}else{
    // wp_redirect( "http://localhost/login/login", 301 );
    // exit();
}



?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - Redpinz</title>
        <link href="<?php echo $dashboard_URL; ?>/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="#">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="Email" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="Password" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="<?php echo get_home_url() .'/wp-login.php?action=lostpassword'; ?>">Forgot Password?</a>
                                                <input class="form-check-input" id="valurl" type="hidden" value="<?php echo $dashboard_URL?>" />
                                                <button class="btn btn-primary" id="btn-login">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="<?php echo get_home_url() .'/wp-login.php?action=register' ?>">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted text-center">Copyright &copy; <?php echo  get_home_url()?>&nbsp;&nbsp;<?php echo  date("Y"); ?> </div>
                            <!-- <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div> -->
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo $dashboard_URL; ?>/js/scripts.js"></script>
    </body>
</html>
