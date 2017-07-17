<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jeu de pendu php/ Javascipt</title>
    <link rel=Stylesheet type="text/css" href=stylePendu.css>


    <link rel="stylesheet" href="jquery-ui-min.css">
</head>


<body>

<div id="page">

<?php include 'random.php' ?>
    <div class=" scenespendu">
        <img  id="penduimg" name="pendu" class="pendu" src="man.png">
    </div>

    <h1>Jeu de pendu</h1>

    <h2>Entrez une lettre gràce au clavier ci-dessous; si elle est dans le mot secret, elle sera affichée mais sinon... la sentence se rapprochera !</h2>

    <table id="clavier">
        <tr>
            <td onclick="proposer(this);" >A</td>
            <td onclick="proposer(this);" >B</td>
            <td onclick="proposer(this);" >C</td>
            <td onclick="proposer(this);" >D</td>
            <td onclick="proposer(this);" >E</td>
            <td onclick="proposer(this);" >F</td>
            <td onclick="proposer(this);" >G</td>
            <td onclick="proposer(this);" >H</td>
            <td onclick="proposer(this);" >I</td>
            <td onclick="proposer(this);" >J</td>
        </tr>
        <tr>
            <td onclick="proposer(this);" >K</td>
            <td onclick="proposer(this);" >L</td>
            <td onclick="proposer(this);" >M</td>
            <td onclick="proposer(this);" >N</td>
            <td onclick="proposer(this);" >O</td>
            <td onclick="proposer(this);" >P</td>
            <td onclick="proposer(this);" >Q</td>
            <td onclick="proposer(this);" >R</td>
            <td onclick="proposer(this);" >S</td>
            <td onclick="proposer(this);" >T</td>
        </tr>
        <tr>
            <td onclick="proposer(this);" >U</td>
            <td onclick="proposer(this);" >V</td>
            <td onclick="proposer(this);" >W</td>
            <td onclick="proposer(this);" >X</td>
            <td onclick="proposer(this);" >Y</td>
            <td onclick="proposer(this);" >Z</td>
        </tr>
    </table>
    <br>

    <form>
        <input class="lien" type="button" value="Nouvelle partie" onclick="javascript:location.reload();">
    </form>

    <script type="text/javascript" src="lePendu.js"></script>
    <!--/ce script converti le nombre  du mot aléatoire en tableau ce qui permet d'afficher le nombre de cases à déquate-->
    <table id="mot">
        <tr>
<!--  <div id="nbre de cases affichées/mot">-->
            <script language="javascript">
                for(var i=0; i<tailleMot; i++) document.write("<td> <p id=\""+i+"\">"+motSecret.charAt(i)+"</p></td>");
            </script>

        </tr>
    </table>


    <script language="javascript">
        for(var i=0; i<tailleMot; i++) tableauMot[i]=document.getElementById(i);
    </script>





</body>

</html>
