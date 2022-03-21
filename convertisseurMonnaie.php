<html>
    <head>
    <title>Convertissseur de monnaies</title>
    </head>
    <body>
        <header>
            <h1>Convertisseur Euro vers Dollars</h1>
        </header>
        <label>
            Montant en euro :
            <input required type="number" id="champ-euro">
        </label>
        <input type = "button" id="bouton" onClick = "convertirEnDollars();" value = "Convertir" />
        &nbsp; &nbsp; &nbsp; &nbsp;
        <label>
            Montant en dollars :
            <input disabled type="text" id="champ-dollar">
        </label>
    </body>
        <script>
        var bouton = document.getElementById("bouton");
        var champEuro = document.getElementById("champ-euro");
        var champDollar = document.getElementById("champ-dollar");
        function convertirEnDollars(){
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "https://api.exchangeratesapi.io/latest"); // Récupération du taux de conversion au format JSON
            xhr.onload = function() { // Utilisation d'une fonction anonyme (voir plus loin)
                var resultat = JSON.parse(xhr.responseText);
                var tauxConversion = resultat.rates.USD;
                var valeur = champEuro.value * tauxConversion;
                champDollar.value = valeur.toLocaleString("fr-FR", {style: "currency", currency: "USD",
                maximumFractionDigits: 4});
            }
            xhr.send();
        }
    </script>
</html>