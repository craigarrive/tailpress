<?php function my_login_logo() { ?>

<style type="text/css">

    @font-face {
        font-family: "Carelia";
        src:
            url("../CleanBuild/assets/fonts/Carelia-Upright.ttf") format("truetype"),
            url("../CleanBuild/assets/fonts/Carelia-Upright.otf") format("opentype"),
            url("../CleanBuild/assets/fonts/Carelia-Upright.woff") format("woff"),
            url("../CleanBuild/assets/fonts/Carelia-Upright.woff2") format("woff2");
    }
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap');

    body.login {
        background: #F4C544;
        /* background: linear-gradient(90deg, #F4C544 0%, #C45937 100%); */
    }

    #login h1 a, .login h1 a {
        background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/svg/logo.svg');
        height:65px;
        width:320px;
        background-size: 320px 65px;
        background-repeat: no-repeat;
        padding-bottom: 30px;
    }

    body.login form#loginform {
        border-radius: 18px;
        border-color: white;
    }

    .login #backtoblog a,
    .login #nav a {
        color: white !important;
    }

    .login form .input,
    .login form input[type=checkbox],
    .login input[type=text] {
        border-color: #547B61 !important;
    }

    body.login.wp-core-ui .button, 
    .wp-core-ui .button-secondary {
        background:  #547B61 !important;
        border-color:  white !important;
        color: white !important;
    }

    body.login.wp-core-ui .button-primary {
        background:  #547B61 !important;
        border-color:  #547B61 !important;
        color: white !important;
    }

    .language-switcher {
        display: none !important;
    }

    body.login.wp-core-ui div.wp-pwd button.button-secondary {
        background: white !important;
        border-color:  #547B61 !important;
        color: #547B61 !important;
    }

</style>

<?php }

add_action( 'login_enqueue_scripts', 'my_login_logo' );