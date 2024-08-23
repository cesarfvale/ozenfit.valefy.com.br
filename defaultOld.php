<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OZENFIT</title>
    <style>
        body, html {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
        }

        .full-screen-image {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('img/presell_ozenfit.png');
            background-size: cover;
            background-position: center;
            z-index: -1; /* Mantém a imagem ao fundo */
        }

        .cookie-popup {
            position: fixed;
            bottom: 20px;
            left: 20px;
            right: 20px;
            background-color: rgba(51, 51, 51, 0.8); /* Fundo transparente */
            color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 1000;
        }

        .cookie-popup img {
            width: 50px;
            height: 50px;
            margin-right: 20px;
        }

        .cookie-popup-content {
            flex: 1;
        }

        .cookie-popup button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .cookie-popup button:hover {
            background-color: #45a049;
        }
    </style>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16633741769">
    </script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());  
      gtag('config', 'AW-16633741769');
    </script>
</head>
<body>

<!-- Imagem em Tela Cheia com Link -->
<a href="https://ev.braip.com/ref?pv=prodzxk5&af=afip12y9jg">
    <img src="img/presell_ozenfit.png" alt="Imagem em tela cheia" class="full-screen-image">
</a>
<div class="cookie-popup" id="cookiePopup">
    <div class="cookie-popup-content">
        <p>Usamos cookies para melhorar sua experiência no nosso site. Ao continuar navegando, você aceita nossa política de cookies.</p>
    </div>
    <button onclick="acceptCookies()">Aceitar</button>
</div>

<script>
    function acceptCookies() {
        document.getElementById("cookiePopup").style.display = "none";
        window.location.href = "https://ev.braip.com/ref?pv=prodzxk5&af=afip12y9jg";
    }
</script>

</body>
</html>
