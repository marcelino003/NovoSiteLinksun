
document.addEventListener("DOMContentLoaded", function() {
    var cookieConsent = document.getElementById("cookieConsent");
    var consentButton = document.getElementById("consentButton");
    var denyButton = document.getElementById("btnDeny");

    if (localStorage.getItem("cookieConsent") === "true") {
        cookieConsent.style.display = "none";

    } else {
        cookieConsent.style.display = "block";
    }

    consentButton.addEventListener("click", function() {
        localStorage.setItem("cookieConsent", "true");
        cookieConsent.style.display = "none";

        var currentDate = new Date();
        var dia_semana = currentDate.getDay(); // 0 a 6 (Domingo a Sábado)
        var nome_dia_semana = ["Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado"][dia_semana];

        // Armazenar as informações em cookies
        document.cookie = "data_aceitacao=" + encodeURIComponent(currentDate.toISOString()) + "; path=/";
        document.cookie = "dia_semana=" + encodeURIComponent(dia_semana) + "; path=/";
        document.cookie = "nome_dia_semana=" + encodeURIComponent(nome_dia_semana) + "; path=/";

        fetch("https://api64.ipify.org?format=json")
            .then(response => response.json())
            .then(data => {
                var ip_usuario = data.ip;

                fetch("https://ipapi.co/" + ip_usuario + "/json/")
                    .then(response => response.json())
                    .then(data => {
                        var localizacao_usuario = data.city + ", " + data.region; 

                        fetch("classes/GravaCookies.php", {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/x-www-form-urlencoded"
                            },
                            body: "ip_usuario=" + ip_usuario + "&localizacao_usuario=" + localizacao_usuario
                        });
                    });
            });
    });

    denyButton.addEventListener("click", function() {
        localStorage.setItem("cookieConsent", "false");
        cookieConsent.style.display = "none";
    });

    window.addEventListener("click", function(event) {
        if (event.target === cookieConsent) {
            cookieConsent.style.display = "none";
        }
    });
});

