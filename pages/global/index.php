<?php 
include("../commons/header.php");

echo styleTitreNiveau1("Ils ont besoin de vous !",COLOR_ASSO);

?>

<div class="presentation"></div>
 <div class="coucou">
<div class="main">

 <div class="section">
    <img src ='../../sources/images/Animaux/chat/bougui/bougui.jpg' />
      <div class="descriptions">
          <h1>Bougui</h1>
          <p> 
          description Bougui 
          </p>
          <button>Visiter ma page</button>
      </div>
  </div>
  <div class="section">
      
      <img src ='../../sources/images/Animaux/chien/samdie/samdie.jpg' />
      <div class="descriptions">
          <h1>Samdie</h1>
          <p>
             description de Samdie</p>
          <button>Visiter ma page</button>
      </div>
  </div>
  <div class="section">
      <img src ='../../sources/images/Animaux/chat/aidie/aidie.jpg' /> 
         <div class="descriptions">

          <h1>Aidie</h1>
          <p>
              description de Aidie </p>
          <button>Visiter ma page</button>
      </div>
  </div>
</div>
</div>
<div class='row'>
    <div class='col-6 mt-3'>
        <?php 
        $txt = "<img src='../../sources/images/Autres/icones/journal.png' alt='logo News'/>Nouvelles des adoptés";
        echo styleTitreNiveau2($txt,COLOR_ACTUS);
        ?>
    </div>
    <div class='col-6 mt-3'>
        <?php 
        $txt = "<img src='../../sources/images/Autres/icones/action.png' alt='logo News'/>Evénements & Actions";
        echo styleTitreNiveau2($txt,COLOR_PENSIONNAIRE);
        ?>
    </div>
</div>
<div class='row'>
    <div class='col-6'>
        <div class='rond row no-gutters border rounded mb-4'>
       <div class='col-auto d-lg-block'>
       <img src ='../../sources/images/Animaux/chien/Charli.jpeg' style='height:200px;' alt='photo de Framboise' />
            </div>
            <div class='col p-3 d-flew flex-column position-static perso_bgGreen'>
                <h3 class='mb-0 perso_ColorVertMenu perso_policeTitre perso_textShadow'>Doyenne Chipie</h3>
                <p class='perso_size12 mt-2'>Un petit coucou de notre doyenne CHIPIE (20ans) en famille d accueil longue durée chez notre trésorière.<br/>
                    La miss a un programme journalier surchargé...
                </p>
                <a href=" " class='btn btn-primary'>visiter ma page </a>
            </div>
        </div>
    </div>
    <div class='col-6'>
        <div class='row no-gutters border rounded mb-4'>
            <div class='rond col-auto d-lg-block '>
                <img src ='../../sources/images/Animaux/chat/framboise/framboise.jpg' style='height:200px;' alt='photo de Framboise' />
            </div>
            <div class='col p-3 d-flew flex-column position-static perso_bgOrange'>
                <h3 class='mb-0 perso_ColorOrangeMenu perso_policeTitre perso_textShadow'>Doyenne Chipie</h3>
                <p class='perso_size12 mt-2'>Un petit coucou de notre doyenne CHIPIE (20ans) en famille d accueil longue durée chez notre trésorière.<br/>
                    La miss a un programme journalier surchargé...
                </p>
                <a href="" class='btn btn-primary'>Accéder aux news </a>
       
    </div>
        </div>
    </div>
</div>
<div>     
<?php 

echo styleTitreNiveau1("Venez les voir !",COLOR_ASSO);

?>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.2486174227474!2d2.2931853156755513!3d48.891598879290754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66f9beb71a183%3A0x93e52aa5423fb04!2s21%20Rue%20d&#39;Alsace%2C%2092300%20Levallois-Perret!5e0!3m2!1sfr!2sfr!4v1573637527211!5m2!1sfr!2sfr" width="100%" height="320px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>

<?php include("../commons/footer.php") ?>
            
      