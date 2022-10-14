<?php
    $appid =$_GET['id'];
    if ($appid=="PRIMAYA"){
        $appid = '7e5LZd';
    }

    $arr   = $_GET;
    $key   = array_keys($arr);

    if (count($arr)!=1 || $key[0]!="id"  )
    {
        echo "Access forbidden.";
        return;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
    <title>Chat Page New</title>
    <style type="text/css">
        /* .emoji-button {
            display: none;
        } */
        .lenna-message-content {
            min-width: 70px !important;
        }
        .lenna-others .lenna-message-content {
/*            max-width: 400px !important;
*/             max-width: calc(100% - 50px) !important; 
        }

        #chatBody {
            height: calc(100% - 50px) !important;
            /* background: url(bni.jpg) !important; */
            background-size: cover !important;
        }   
        .lenna-carousel-img[data-v-0a9b51ba]{
            border-bottom-left-radius: 0px !important;
            border-bottom-right-radius: 0px !important;
        }
        .lenna-message-avatar img {
            width: 35px;
            height: 35px;
        }
        .lenna-others .lenna-message-content span span{
/*            white-space: pre-line;
*/        }

        .lenna-message-content {
            border-radius: 20px !important;
            padding: 8px 15px !important;
            margin-top: 5px !important;
            margin-bottom: 5px !important;
        }

        .lenna-self .lenna-message-content {
            /* background: linear-gradient(to bottom, #00D0EA 0%, #0085D1 100%) !important; */
            background-attachment: fixed !important;
            position: relative !important;
        }

        .lenna-others .lenna-message-content {
            margin-right: 25%;
            /* background-color: rgb(229, 229, 229) !important; */
            position: relative !important;
        }

        .lenna-credit.lenna-d-flex.lenna-justify-content-center.credit-shadow {
            display: none !important;
        }

        .sc-launcher {
            display: none !important;
        }

        .lenna-others:nth-child(n+2) .lenna-message-content {
            left: 45px;
            margin-top: -10px;
        }

        .lenna-main-window {
            /* position: absolute !important; */
            display: block !important;
            width: 100% !important;
            height: 100% !important;
            top: 0 !important;
            left: 0 !important;
            bottom: 0 !important;
            right: 0 !important;
        }

        .lenna-chat-header {
            display: none;
        }

        .lenna-justify-content-center img {
            height: 20px
        }

        .lenna-justify-content-center {
            display: none;
        }
        .lenna-message-content.lenna-d-flex {
            min-width: 100% !important;
        }
.lenna-message-image {
    width: 250px !important;
    border-radius: 15px;
    height: auto !important;
    margin: -3px -10px -3px -10px !important;
}
        .lenna-message-container p , .lenna-message-content span,#lenna-webchat span,#lenna-webchat span[data-v-f1f83ede]{
            /* font-family: "HK Grotesk" !important; */
        }      
        #lenna-webchat .lenna-aller-font,#lenna-webchat .lenna-aller-font[data-v-0a9b51ba]{
            /* font-family: "HK Grotesk" !important; */
            
        }
        .lenna-register-main {
            height: 100%!important;
        }
    </style>
</head>
<body>
    <script>
        var lennawebchat = document.createElement('script'); lennawebchat.src = "https://app.lenna.ai/webchat/lenna-init.js";var app = document.createElement('script');app.src = "https://app.lenna.ai/webchat/app.js";document.head.prepend(lennawebchat);document.head.prepend(app);lennawebchat.onload = function () {LennaWebchatInit('<?php echo $appid;?>')};
    </script>
</body>
</html>
