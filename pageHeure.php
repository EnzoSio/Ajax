<html>
    <head>
        <script type="text/javascript">
        function envoyerRequete(url) {
            var xhr = new XMLHttpRequest();
            if ( xhr == null) {
                alert("Impossible d'utiliser Ajax sur ce navigateur");
            }
            else {
                xhr.open("GET", url, false); 
                xhr.send(null); 
                if (xhr.readyState == 4 ) { 
                    if (xhr.status == 200 || xhr.status == 0) {
                        // var affichageReponse = xhr.responseText;
                        traiterReponse(xhr.responseText);
                    }
                    else {
                        alert("La requête ne s'est pas correctement exécutée");
                    }
                }
            }
        }
        function traiterReponse(reponse) {
            document.getElementById("heure").innerHTML = reponse ;
        }
        </script>
    </head>
    <body>
        <br /> <br />
        Page appelée à : <?php echo date('h:i:s'); ?><br />
        <form>
            <!-- <input>
                <a href="javascript:envoyerRequete('majHeure.php');">Actualiser l'heure ci-dessous</a>
            </input> -->

            <input type = "button" value = "Actualiser heure" onClick = "envoyerRequete('majHeure.php');" />
            <br />
            Heure du serveur :
            <span id="heure"><?php echo date('h:i:s'); ?></span><br />
        </form>
    </body>
</html>