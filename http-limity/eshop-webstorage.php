<?php
  $zbozi = array("pivo", "chleba", "med");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Eshop roku</title>
        <script>
            function pridej(zbozi) {
                var aktualniStav = localStorage.getItem(zbozi);
                if (aktualniStav != null) {
                    localStorage.setItem(zbozi, Number(aktualniStav) + 1);
                } else {
                    localStorage.setItem(zbozi, 1);
                }

                aktualizujKosik();
            }

            function aktualizujKosik() {
                var kosik = document.getElementById("kosik");
                kosik.innerHTML = "";
                for (var i=0; i<localStorage.length; i++)
                {
                    var key = localStorage.key(i);
                    var value = localStorage.getItem(key);
                    kosik.innerHTML += "<li>" + key + " - " + value + "</li>";
                }
            }
        </script>
    </head>
    <body>
        <h1>Eshop roku – stav držíme na klientovi ve Webstorage</h1>

        <h2>Katalog</h2>

        <ul>
<?php
  foreach ($zbozi as $z) {
    echo "<li>" . $z . " – <a href='javascript:pridej(\"$z\")'>přidej do košíku</a></li>";
}
?>
        </ul>

        <h2>Košík</h2>

        <ul id="kosik">
        </ul>
    </body>
</html>