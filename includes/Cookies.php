<div class="fixed-bottom" id="cookieConsent">
    <div class="toast text-white w-100 mw-100" style="background: yellow;" role="alert" data-autohide="">
        <div class="toast-body p-3 d-flex align-items-center justify-content-between">
            <div>
                <p class="mb-0" style="color: #000;">
                    Este site armazena cookies de acordo com nossa
                    <a style="color: blue;" href="privacidade">política de privacidade.</a>
                    Ao clicar em "eu aceito" utilizamos esses cookies.
                </p>
            </div>
            <div class="d-flex align-items-center">
                <button type="button" class="btn-cookies btn-sm mr-2" id="btnDeny">não aceito</button>
                <button type="button" class="btn-cookies btn-sm" id="consentButton">eu aceito</button>
            </div>
        </div>
    </div>
</div>

<style>
    /* Estilos do modal cookie para telas menores */
    @media (max-width: 768px) {
        .toast-body {
            flex-direction: column;
            align-items: center;
        }

        .toast-body>div {
            margin-bottom: 10px;
        }


    }
</style>