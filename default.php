<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OZENFIT</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="URL_DO_SEU_ICONE.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Event snippet for OzenFit Caps conversion page -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16633741769"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-16633741769');
    </script>

    <!--In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
    function gtag_report_conversion(url) {
      var callback = function () {
        if (typeof(url) != 'undefined') {
          window.location = url;
        }
      };
      gtag('event', 'conversion', {
          'send_to': 'AW-16633741769/Tq7ZCMiNvswZEMmDy_s9',
          'value': 0.0,
          'currency': 'BRL',
          'transaction_id': '',
          'event_callback': callback
      });
      return false;
    }
    </script>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
        }

        .full-screen-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }

        .modal-content {
            background-color: rgba(0, 0, 0, 0.85); /* Cor mais escura */
            color: white;
        }

        /* Estilo personalizado para o botão de fechar */
        .btn-close {
            background-color: rgba(47, 79, 79); /* Cor vermelha */
            border-radius: 50%;
            opacity: 1; /* Remove a transparência padrão */
        }
        .btn-close:hover {
            background-color: rgba(105, 105, 105); /* Cor mais escura ao passar o mouse */
        }
        /* Aumentar a modal */
        .modal-dialog {
            max-width: 500px; /* Aumenta a largura da modal */
        }

        /* Centralizar botão à esquerda */
        .modal-footer {
            justify-content: flex-start; /* Move o botão para a esquerda */
        }
    </style>
</head>
<body>

<!-- Imagem em Tela Cheia -->
<img src="img/presell_ozenfit.png" alt="Imagem em tela cheia" class="full-screen-image">

<!-- Modal (Pop-up) de Cookies -->
<div class="modal fade" id="cookieModal" tabindex="-1" aria-labelledby="cookieModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered"> <!-- Classe para centralizar o modal -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cookieModalLabel">Política de Cookies</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="acceptCookies()" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Este site usa cookies para personalizar conteúdo e anúncios, fornecer recursos de mídia social e analisar nosso tráfego. Ao clicar em Aceitar, você concorda com o uso de cookies. Para mais informações, por favor visite nossa <a href="https://ev.braip.com/ref?pv=prodzxk5&af=afip12y9jg">Política de Cookies</a></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="acceptCookies()">Aceitar</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var cookieModal = new bootstrap.Modal(document.getElementById('cookieModal'), {
            backdrop: 'static',
            keyboard: false
        });
        cookieModal.show();
    });

    function acceptCookies() {
        document.getElementById('cookieModal').style.display = "none";
        window.location.href = "https://ev.braip.com/ref?pv=prodzxk5&af=afip12y9jg";
    }
</script>

</body>
</html>
