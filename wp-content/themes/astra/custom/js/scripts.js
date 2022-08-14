
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

$(document).ready(function(){
    
    $("#btn-login").click(function(e){
        e.preventDefault();
        $email_add = $("#Email").val();
        $pass_add = $("#Password").val();
        $cus_url = $("#valurl").val() + "/login-post.php";
        console.log($email_add);
        console.log($pass_add);
        console.log($cus_url);

        $.ajax({
            type: 'POST',
            url: $cus_url,
            data: {
                email:$email_add,
                pass:$pass_add
            },
            success: function(resultData)
             {
                 console.log(resultData);
                if(resultData=="success"){
                    window.location.reload();
                }else{
                    alert("Something went wrong, contact support team")
                }
            }
      });
    });
});
