<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script>
            function executarAjax() {
                var xmlhttp;
                xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (xmlhttp.readyState == 4) {
                        let livro = JSON.parse(xmlhttp.responseText);
                        console.log(livro);
                        document.getElementById("livro").innerHTML
                        = livro.titulo;
                    }
                };
                xmlhttp.open("GET", "http://localhost/bibliotecaphp/control/getLivroById.php?id=" + document.getElementById("id").value, true);
                xmlhttp.send();
            }
        </script>
    </head>
    <body>
        <input type="number" id="id"/><input type="button" onclick="executarAjax()"/>
        <div id="livro"></div>
    </body>
</html>
