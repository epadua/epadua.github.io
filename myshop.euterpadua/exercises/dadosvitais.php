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

    var nome = prompt("Qual o seu nome?");
    mostra("Bem vindo " + nome + "!");
    var idade = prompt(nome + ", quantos anos você tem?");
    var diasVida = idade * 365;
    mostra(nome + ", você já viveu " + diasVida + " dias desde que nasceu!");

    var batimentos = diasVida * 24 * 60 * 80;
    mostra("Seu coração já bateu " + batimentos + " vezes durante esse tempo!");


</script>
</html>