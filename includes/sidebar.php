<!-- Blog Sidebar Widgets Column -->
<div class="col-md-4">
    <div class="view_profile_main  right_widget_nav">
        <?php
        if(isset($_GET["profile"])) {
            $profile = $_GET["profile"];
        }
        else {
            $profile = "";
        }
        switch($profile) {
            case 'view';
            include "view_profile_main.php";
            break;


            default: include "login_search_widget_component.php";
            break;




        }
        ?>





    </div>







</div>