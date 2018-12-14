<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404</title>
</head>
<style>
    body{
        position: fixed;
        width: 100%;
        height: 100%;
    }
    *{
        margin: 0;
        padding: 0;
    }
    img{
        display: block;
        width: 100%;
        height: auto;
    }
    .page_404{
        position: relative;
        width: 100%;
        height: 100%;
        background: url('<?php echo get_stylesheet_directory_uri()?>/images/404.svg') center no-repeat;
        background-size: cover;
    }
    .pss_404{
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        width: 100%;
        color: #ffffff;
        text-align: center;
    }
    .icon_404 img{
        width: auto;
        display: inline-block;

    }
    .text_1{
        font-size: 48px;
        line-height: 1.17;
        letter-spacing: 4.8px;
        margin-bottom: 32px;
        margin-top: 25px;
        font-family: Raleway;
        font-weight: bold;
    }
    .text_2{
        font-size: 28px;
        font-family: Raleway;
        line-height: 1.18;
        letter-spacing: 1.4px;
    }
    .button_404{
        margin-top: 40px;
    }
    .button_404 a{
        display: inline-block;
        background: #ffffff;
        text-decoration: none;
        font-family: Raleway;
        font-size: 28px;
        font-weight: bold;
        line-height: 1.18;
        letter-spacing: 1.4px;
        color: #1b384c;
        padding: 17px 47px;
        border: solid 1px #707070;
        border-radius: 35px;
    }
    .button_404 a:hover{
        text-decoration: none;
    }
    @media screen and (max-width: 1600px) {
        .icon_404 img{
            width: 500px;
        }
        .text_1{
            font-size: 40px;
        }
        .text_2{
            font-size: 24px;
        }
    }
    @media screen and (max-width: 1366px) {
        .icon_404{
            margin-top: 50px;
        }
        .button_404 a{
            padding: 7px 47px;
            font-size: 24px;
        }
    }
</style>
<body>
<div class="page_404">
<!--    <div class="bg">-->
<!--        <img src="--><?php //echo get_stylesheet_directory_uri()?><!--/images/404.svg" alt="">-->
<!--    </div>-->
    <div class="pss_404">
        <div class="icon_404">
            <img src="<?php echo get_stylesheet_directory_uri()?>/images/404_icon.png" alt="">
        </div>
        <div class="text_1">Oops... look like you got lost</div>
        <div class="text_2">Sorry, we're not able to find what you are looking for.</div>
        <div class="button_404">
            <a href="<?php echo home_url()?>">
                GO BACK
            </a>
        </div>
    </div>

</div>

<script type="text/javascript">
    WebFontConfig = {
        google: { families: [
                'Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i',
            ] }
    };
    (function() {
        var wf = document.createElement('script');
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })(); </script>

</body>
</html>
