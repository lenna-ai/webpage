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
            height: 100vh !important;
            left: 0 !important;
            top: 0 !important;
            border-radius: 0 !important;
            display: block;
            transform: translateY(0);
            opacity: 1 !important;
        }
        #ln-chat-scroller {
            height: calc(100% - 190px);
        }
        #ln-caption-bubble, #ln-bubble-trigger {
            display: none;
        }
    </style>
</head>
<body>
    <script src="/mobile-detect.min.js"></script>
		<script>
			const device = new MobileDetect(window.navigator.userAgent);
			
			if (device.mobile()) {
				const inter = setInterval(() => {
					const target = document.getElementById('ln-chat-scroller');
					if (target) {
						target.style.height = 'calc(100% - 245px)'
					}
				}, 100)
			}
		</script>
    <script>
		var lennawebchat = document.createElement('script'); lennawebchat.src = "https://v3.lenna.ai/chat/lenna-init.js";var app = document.createElement('script');app.src = "https://v3.lenna.ai/chat/app.js";document.head.prepend(lennawebchat);document.head.prepend(app);lennawebchat.onload = function () {LennaWebchatInit('lejRej','9aAOdv')}; 
    </script>
</body>
</html>
