<html>
<meta charset="UTF-8">
<script>
    var pulaLinha = function () {
        document.write("<br>");
    }

    var mostra = function (frase) {
        document.write(frase);
        pulaLinha();
        pulaLinha();
    }

    var peso = 82;
    var altura = 1.83;
    var imc = peso / (altura * altura);
    mostra("meu IMC é: " + imc);
</script>

</html>
