<?php
    $appid =$_GET['id'];
    if ($appid=="PRIMAYA"){
        $appid = '7e5LZd';
    }

    $arr   = $_GET;
    $key   = array_keys($arr);
    $integrationId = $_GET['integrationId'] ?? null;
    $userId = $_GET['userId'] ?? null;

    if (count($arr)<1 || $key[0]!="id"  )
    {
        echo "Access forbidden.";
        return;
    }
    $param = [
        $appid,
        $integrationId,
        $userId,
    ];
    $par = "";
    foreach ($param as $d) {
        $par .= "'".$d."',";
    }

    $par = rtrim($par,',');
    // echo $par;
    // return;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
    <title>Chat Page New</title>
    <style type="text/css">
       #main-window {
        width: 100% !important;
        height: 100% !important;
        left: 0 !important;
        top: 0 !important;
        border-radius: 0 !important;
        display: block;
        transform: translateY(0);
        opacity: 1 !important;
      }
      #ln-caption-bubble,
      #ln-bubble-trigger {
        display: none;
      }
      .ln-dropdown-menu-history-minimize,
      .ln-dropdown-menu-minimize {
        opacity: 0;
        cursor: default;
      }
      .ln-loader-initialization {
        display: none;
      }
      /** Commented, siapa tau dibutuhkan lagi */
      /* #ln-header-chat {
        display: none;
      }
      #ln-chat-scroller {
        margin-top: 0 !important;
        height: calc(100% - 110px) !important;
      } */
    </style>
</head>
<body>
    <script>
		var lennawebchat = document.createElement('script'); 
    lennawebchat.src = "https://v3.lenna.ai/chat/lenna-init.js";
    var app = document.createElement('script');
    app.src = "https://v3.lenna.ai/chat/app.js";
    const urlParams = new URLSearchParams(window.location.search);
    const id = urlParams.get("id") || "lejRej";
    const integrationId = urlParams.get("integrationId") || "9aAOdv";
    document.head.prepend(lennawebchat);
    document.head.prepend(app);
    lennawebchat.onload = function () {
      LennaWebchatInit(id, integrationId)
    }; 
    </script>
</body>
</html>
