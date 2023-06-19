<!DOCTYPE html>
<html>
<head>
    <style>
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: rgb(94, 94, 94);
            flex-direction: column;
        }
        
        p {
            color: white;
            font-family: Arial, sans-serif;
        }
        
        .docker1 {
            color: rgb(0, 0, 0);
            font-size: 25px;
            font-weight: bold;
        }
        
        .docker2 {
            color: rgb(25, 45, 228);
            font-size: 15px;
        }
        
        .user {
            color: rgb(255, 136, 0);
            font-size: 70px;
            margin-bottom: 5px;
        }
        
        .normal1 {
            color: rgba(255, 136, 0, 0.5);
            font-size: 25px;
            align-items: center;
            justify-content: center;
            max-width: 35%;
        }
        
        .normal2 {
            color: rgb(0, 0, 0);
            font-size: 15px;
            align-items: center;
            justify-content: center;
            max-width: 35%;
            font-style: italic;
            margin-bottom: 1px;
        }
    </style>
</head>
<body>
    <div class="container">
        <p class="user"><?php echo "Merhaba KULLANICI!.."; ?></p>
        <p class="normal1"><?php echo "Bu sayfa size ubuntu imajlı docker konteyner içerisinde çalışan Nginx web sunucu uygulamasının statik bir <span class='docker1'>index.php</span> sayfasını <span class='docker1'>localhost/api</span> 80 numaralı portundan çalıştırması ile sağlaniyor."; ?></p>
        <p class="normal2"><?php echo "Hello USER!.."; ?></p>
        <p class="normal2"><?php echo "This page is provided to you by the Nginx web server application running in a docker container with an ubuntu image, running a static <span class='docker2'>index.php</span> page from <span class='docker2'>localhost/api</span> port 80."; ?></p>
    </div>
</body>
</html>
