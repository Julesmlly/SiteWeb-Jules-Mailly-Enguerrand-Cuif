<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="accueil.css">   
    <title>Ingé Fest</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body>
<?php session_start(); ?> 
<?php if (isset($_SESSION['message'])): ?>
    <div class="alert">
        <?php echo $_SESSION['message']; ?>
        <?php unset($_SESSION['message']); ?>
    </div>
<?php endif; ?>

<header>
  <nav>
  <ul>
  <li id="logo"><a href="#">Ingé Fest</a></li>
  <div id="conteur">Visiteurs: <span id="visitor-number"></span></div>
  <?php if (isset($_SESSION['user_login'])): ?>

      <li><a href="deconnexion.php">Se déconnecter</a></li>
      <li><a href="reservation.php">Réservation</a></li> 
  <?php else: ?>
 
      <li><a href="connexion.php">Inscription</a></li>
  <?php endif; ?>
  <li><a href="#contact">Nous contacter</a></li>
</ul>

  </nav>
  <div id="imagePrincipale">
    <h1>Ingé Fest</h1>
    <div id="premierTrait"></div>
    <h3>Festival pour Ingénieur</h3>
  </div>
</header>

    <section id="presentation">
      <div id="texteIntro">
        <h2>Un festival unique, pour un sejour unique</h2>
        <p>Bienvenue à l'Ingé Fest, le festival de musique incontournable pour tous les passionnés de son et de spectacle ! Préparez-vous à vivre trois jours intenses, du vendredi au dimanche, où la musique et l'ambiance ne cesseront jamais. Chaque jour, cinq artistes talentueux monteront sur scène pour vous offrir des performances inoubliables. Et pour couronner le tout, nous avons l'honneur de présenter un artiste très connu chaque soir : Nekfeu enflammera la scène le vendredi, Lomepal vous emportera avec son flow unique le samedi, et Damso clôturera le festival en beauté le dimanche. Préparez-vous à une expérience musicale inégalée avec des artistes émergents tels que Luna Sol, The Electric Waves, DJ Vortex, Melody Sky et bien d'autres. L'Ingé Fest est l'endroit où la musique prend vie, alors ne manquez pas cette occasion unique de célébrer et de partager votre passion pour la musique !</p>
      </div>
      <div id="prestations">
        <div class="imagesPrestations">
          <h4>Nekfeu</h4>
          <a href="#"><img src="media/Nekfeu.jpg" alt="Nekfeu"></a>
        </div>
        <div class="imagesPrestations">
          <h4>Lomepal</h4>
          <a href="#"><img src="media/Lomepal.jpg" alt="Lomepal"></a>
        </div>
        <div class="imagesPrestations">
          <h4>Damso</h4>
          <a href="#"><img src="media/Damso.jpg" alt="Damso"></a>
        </div>
      </div>


<h3>Artistes par jour</h3>
<table>
    <thead>
        <tr>
            <th>Jour</th>
            <th>Artistes</th>
            <th>Nombre de places</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Vendredi de 12h a 00h00</td>
            <td>Nekfeu, Luna Sol, DJ Vortex</td>
            <td>10000</td>
        </tr>
        <tr>
            <td>Samedi de 12h a 00h00</td>
            <td>Lomepal, The Electric Waves, Melody Sky</td>
            <td>18000</td>
        </tr>
        <tr>
            <td>Dimanche de 12h a 00h00</td>
            <td>Damso, The Electric Waves, DJ Vortex</td>
            <td>25000</td>
        </tr>
    </tbody>
</table>
    </section>

    <footer>
      <h2 id="contact">Contactez-nous!</h2>
  

      <div class="contact-buttons">
        <button id="showDialer" class="left-button"><i class="fa fa-phone"></i></button>
        <button id="showEmailForm" class="right-button"><i class="fa fa-envelope"></i></button>
      </div>
  

      <div id="phoneDialer" style="display:none;">
          <div id="display"></div>
          <div id="keypad">
              <button onclick="pressKey('1')">1</button>
              <button onclick="pressKey('2')">2</button>
              <button onclick="pressKey('3')">3</button>
              <button onclick="pressKey('4')">4</button>
              <button onclick="pressKey('5')">5</button>
              <button onclick="pressKey('6')">6</button>
              <button onclick="pressKey('7')">7</button>
              <button onclick="pressKey('8')">8</button>
              <button onclick="pressKey('9')">9</button>
              <button onclick="clearDial()">Effacer</button>
              <button onclick="pressKey('0')">0</button>
              <button onclick="makeCall()">Appeler</button>
          </div>
      </div>
  

      <form id="emailForm" style="display:none;">
        <input placeholder="Nom">
        <input placeholder="E-mail">
        <textarea placeholder="Votre message ici..."></textarea>
        <button type="submit">Envoyer</button>
      </form>
  
       <div id="deuxiemeTrait"></div>
    <div id="copyrightEtIcons">
        <div id="copyright">
            <span>© from Jules Mailly/Enguerrand Cuif</span>
        </div>
        <div id="tel">
            <span>Un problème? Contactez-nous au 06 XX XX XX XX</span>
        </div>
        <div id="icons">
            <a href="http://www.twitter.fr"><i class="fa fa-twitter"></i></a>
            <a href="http://www.facebook.fr"><i class="fa fa-facebook"></i></a>
            <a href="http://www.instagram.com"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
</footer>
    <script src="tel.js"></script>
    <script src="conteur.js"></script>
</body>
</html>
