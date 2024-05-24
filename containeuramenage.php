
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Contenaire</title>
  <link href="assets/utils/css/style.css" rel="stylesheet" type="text/css" />
  <link rel="shortcut icon" href="images/Immo-michelet-logo.png" type="image/x-icon">


  <style>
    body {
      background-color: #c45824;
          }

  </style>
</head>
<?php
require ('assets/utils/navbar/indice.html');
?>


<main>
  <FONT COLOR="#FFFFFF">
    <center>
    <img src="images/Immo-michelet-logo.png" alt="Avatar" class="avatar" border="1px">
      </center>
  <h1 class="title">Bienvenue sur Immo Michelet!</h1>
  <p class="description">La solution <mark>idéale</mark> pour étudiants!</b>

<!--lien site-->
<div class="cadre"><p>Pour acceder au site, <a href="https://139f7a6a-ee71-4343-bfc9-26f2e5d18585-00-23z8a8wvbuv2n.spock.replit.dev/containeuramenage.php" target="_blank">Immo michelet</a></p>
</div>



<!--diapo-->
<div class="slideshow-container">
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="images/plan.png" style="width: 100%;" />
        <div class="text">Plan conteneur</div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="images/apercuexterne.png" style="width: 100%;" />
        <div class="text">Aperçu externe du conteuneur</div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="images/apercuinterne.png" style="width: 100%;" />
        <div class="text">Aperçu de l'amenagement</div>
      </div>

    </div>
<br/>

<!--bouton-->
<center>
  <button onclick="window.location.href = 'https://home.by.me/fr/project/pauline.viguier-3669/contenaire-1/' ; " target="_blank">Réaliser une visite virtuelle</button>
</center>

<p></p>
    
<div class="table2x1">
  <div class="ligneHead">
    <div class="cell"><h3>Appartement à louer</h3>
    </div>
    <div class="cell"><h3>350 €<h3>
    </div>
  </div>
</div>

            
<br>2 pièces - 1 chambre - 36 m²
<br>Quartier rangueil a toulouse(31 400)
<p><b>Caractéristiques:</b></p>

<table border="0">
  <tr>
    <td>Construit en 2000</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td><b>Extérieur:</b>
      <br>Terrasse</td>
    <td><b>Surfaces annexes:</b>
      <br>Parking</td>
    <td><b>Services et accessibilité:</b>
      <br>Digicode</td>
    <td><b>Hygiène</b>
      <br>Salle d'eau (douche, toilettes)</td>
  </tr>
</table>





<p></p>
<div class="container">
<button class="accordion">
  <div class="table2x1">
    <div class="ligneHead">
      <div class="cell">Caractéristiques du bien
        </div>
        <div class="cell"><span display: inline-block; style="display: inline-block; transform: rotate(-90deg)">&#10094;</span>
        </div>
      </div>
    </div>
  </button>
  <div class="panel">
    <p>Si vous êtes plusieurs étudiants à désirer un conteuneur il y a possibilité de les empiler pour vous offrir une meilleure efficacité et une meilleure qualité.
      <br/>
      Les solutions mises en places pour se proteger du froid et de la chaleur sont une mises en place d'isolation, chauffage et d'un toit végétalisé. Pour l'accés a l'eau, il y a dans le conteuneur deux éviers, une toilette,et une douche. Pour dormir, le lit est dans une zone separée pour éviter les perturbations sonores. Pour étudiers, une zone a coté de la cuisine a étée mise en place pour permettre de travailler tout en surveillant la cuisson. Des prises électriques sont installées tout les 3 mètre.
    <br> 
    </p>
  </div>
</div>
<p><p></p></p>
<div class="container">
  <button class="accordion">
    <div class="table2x1">
      <div class="ligneHead">
        <div class="cell">Description du professionel
        </div>
        <div class="cell"><span display: inline-block; style="display: inline-block; transform: rotate(-90deg)">&#10094;</span>
        </div>
      </div>
    </div>
  </button>
    <div class="panel">
      <p>Le conteneur a une orientation est-ouest, ce qui est ideal poour avoir une luminosite traversante. La terrasse se trouve du coté ouest pour ofrir un meilleur ensoleilement le soir.</p>
    </div>
</div>
<p><p></p></p>
<div class="container">
        <button class="accordion">
          <div class="table2x1">
            <div class="ligneHead">
              <div class="cell">Vidéo
              </div>
              <div class="cell"><span display: inline-block; style="display: inline-block; transform: rotate(-90deg)">&#10094;</span>
              </div>
            </div>
          </div>
        </button>
          <div class="panel">
            <p><video src='images/conteuner.mp4' width=100% controls></video></p></video></p>
          </div>
      </div>


<!--credit-->
<h2>Simulateur de Crédit</h2>

<form id="loan-form">
  <label for="loan-amount">Montant du pret :</label>
  <input type="number" id="loan-amount" placeholder="Montant du prêt" required>
  <label for="interest-rate">Taux d'intérêt (en pourcentage) :</label>
  <input type="number" id="interest-rate" placeholder="Taux d'intérêt" required>
  <label for="loan-term">Durée du prêt (en années) :</label>
  <input type="number" id="loan-term" placeholder="Durée du prêt" required>
  <button type="button" onclick="calculateLoan()">Calculer</button>
</form>

<div id="result"></div>

<!--carte-->

<p></p>
<div class="map-responsive">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d836.4834000613031!2d1.4659554401630013!3d43.574773317594065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sfr!2sfr!4v1706781111150!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>







</FONT>
</main>
<script src="assets/utils/codejvs/script.js"></script>


</body>

</html>