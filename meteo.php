<html>
    <head>
    <title>PARIS</title>
    </head>
    <body>
        <h1>PARIS</h1>
        <input type = "button" id="bouton" onClick = "afficher();" value = "Afficher les informations..." /><br /><br />
        Longitude : <span id = "longitude"></span><br />
        Latitude : <span id = "latitude"></span><br />
        Température : <span id = "temperature"></span> en degrés Fahrenheit. <br /><br />
        <span id = "celcius"></span>
    </body>
    <script>
        function afficher(){
            var reponse = new XMLHttpRequest();
            reponse.open("GET",
            "http://api.openweathermap.org/data/2.5/weather?q=Paris&appid=cb83efa1ba66096f8743aba2474495cc"
            , false);
            // Accès aux informations sur la ville de Paris
            reponse.onload = function(){ // Utilisation d'une fonction anonyme (voir plus loin)
            var data = JSON.parse(reponse.responseText);
                document.getElementById("latitude").innerHTML = data.coord.lat;
                document.getElementById("temperature").innerHTML = data.main.temp;
                document.getElementById("longitude").innerHTML = data.coord.lon;
                document.getElementById("celcius").innerHTML = "et en degrés celcius, ça fait combien ?";
            }
            reponse.send();
        }
    </script>
</html>