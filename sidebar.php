<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">Notre Profile</h4>
         <p class="w3-center"><img src="<?php bloginfo('template_url'); ?>/src/logo.png" class="w3-circle" style="height:106px;width:106px" alt="ESTSB"></p>
         <hr>
         <p><i class="fa fa-graduation-cap fa-fw w3-margin-right w3-text-theme"></i> Ecole supérieure de technologie</p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i>Sidi Bennour</p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i>Date de création 2017</p>
         <p><i class="fa fa-university fa-fw w3-margin-right w3-text-theme"></i>Université Chouaib Doukkali</p>
         <p><i class="fa fa-facebook-official fa-fw w3-margin-right w3-text-theme"></i>ESTSB</p>
         <p><i class="fa fa-linkedin fa-fw w3-margin-right w3-text-theme"></i>ESTSB</p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i>A propos</button>
          <div id="Demo1" class="w3-hide w3-container">
            <p>Ecole Supérieure de Technologie Sidi Bennour : ( EST Sidi Bennour ou ESTS Sidi Bennour ), est un établissement public d’enseignement supérieure à finalité de formation des Techniciens specialises. Elle a été créée en Août 2016 par le Ministère de l’Enseignement Supérieur, de la Formation des Cadres et de la Recherche Scientifique du Royaume du Maroc.</p>
          </div>
  
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i>Orientation appliquée de l’enseignement</button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>La formation appliquée à l’ESTSB est largement tournée vers les Technologies d’Information et de Communication, les Techniques de Gestion, les langues vivantes, les Systèmes et Réseaux Informatiques, les conceptions et les réalisations informatiques, c’est pourquoi ses programmes ont toujours le souci de répondre aux exigences et aux attentes de l’environnement socio-économique de l’Ecole et font appel à des méthodes pédagogiques actives et évoluées.
Les programmes d’enseignement comportent des Cours magistraux, des Travaux Pratiques (TP), des Travaux Dirigés (TD) et des Dossiers et Travaux de Réalisation, des Projets de Fin d’Etude, des Stages d’Initiation et des Stages de Stages Techniques dans les entreprises, les organismes socio-professionnels, les collectivités locales et les administrations publiques..</p>
          </div>
			
			 <button onclick="myFunction('Demo4')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i>Durée des études</button>
          <div id="Demo4" class="w3-hide w3-container">
            <p>La durée des études est de deux années universitaires avec 16 modules d’enseignement. La première année s’étale sur 32 semaines suivies de quatre semaines de stage d’initiation après la fin de S2 et avant le démarrage de S3 dans l’entreprise en Juillet ou Aout à raison de 24 jours avec un rapport et une soutenance. La deuxième année est de 36 semaines dont 8 semaines de stage technique et dispensé à raison de 48 jours pour 36 heures par semaine en moyenne avec un rapport et une soutenance.</p>
          </div>
				
			
          <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i>Nos Filiéres</button>
          <div id="Demo3" class="w3-hide w3-container">
         <div class="w3-row-padding">
         <br>
           <div class="w3-half">
             <p><ul>
             <li>Génie Informatique</li>
             <li>Technique de Management</li>
             <li>Génie Agroenvironnement</li>
             </ul></p>
           </div>
         </div>
          </div>
        </div>      
      </div>
      <br>
      
      <!-- Interests --> 
      <div class="w3-card w3-round w3-white w3-hide-small">
        <div class="w3-container">
          <p>Activités</p>
          <p>
            <span class="w3-tag w3-small w3-theme-d5">Des Forums</span>
            <span class="w3-tag w3-small w3-theme-d4">Des Compétitions</span>
            <span class="w3-tag w3-small w3-theme-d3">Des Evénements</span>
            <span class="w3-tag w3-small w3-theme-d2">Des Jeux</span>
            <span class="w3-tag w3-small w3-theme-d1">Du Sport</span>
            <span class="w3-tag w3-small w3-theme">Des Clubes</span>
            <span class="w3-tag w3-small w3-theme-l1">Du Theatre</span>
            <span class="w3-tag w3-small w3-theme-l2">Des Championats</span>
            <span class="w3-tag w3-small w3-theme-l4">De l'Art</span>
            
          </p>
        </div>
      </div>
      <br>
      
      <!-- Alert Box -->
      <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small;style=background-color:#CEF6D8">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
        <h4><strong>Bonjour cher(e) visiteur(e) !</strong></h4>
        <p>Bienvenue dans notre plateforme. 
        <br>le cadre administratif et le corps pédagogique de <b  style="background-color:#CEF6D8;">l'école supérieure de technologie de sidi bennour</b> vous souhaite une trés bonne visite.</p>
      </div>
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
    
   
    
    <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h2 class="w3-opacity" style=" color: black; background:#00FFFF"><center>Ecole Superieure De Technologie de Sidi Bennour</center></h2>
				<br>
			<center>	<img   src="<?php bloginfo('template_url'); ?>/src/estsb.png" style="height:400px;width:640px" alt="ESTSB"></center>
                  <br>
            </div>
          </div>
        </div>
      </div>
    <br>
    
    <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h2 class="w3-opacity" style=" color: black; background:#80FF00"><center>La famille ESTSB: </center></h2>
				<br>
            <center>  <img   src="<?php bloginfo('template_url'); ?>/src/famille.png" style="height:400px;width:640px" alt="ESTSB"></center>
            </div>
          </div>
        </div>
      </div>
    
    <br>
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h2 class="w3-opacity" style=" color: black; background:#00FFFF"><center>&loz; Présentation</center> </h2>
              <p class="w3-border w3-padding">L’Ecole Supérieure de Technologie Sidi Bennour (ESTSB) est un établissement public d’enseignement supérieur à finalité de formation des Techniciens Supérieurs. Elle a été créée en Août 2016 par le Ministère de l’Enseignement Supérieur, de la Formation des Cadres et de la Recherche Scientifique du Royaume du Maroc. L’ESTSB est une composante de l’Université Chouaib Doukkali d’El Jadida. Sa vocation est de former des Techniciens Supérieurs polyvalents, hautement qualifiés et immédiatement opérationnels après leur sortie de l’Ecole en tant que collaborateurs d’ingénieurs et de managers. Sont admis à l’ESTSB, les bacheliers de l’enseignement secondaire technique, scientifique et tertiaire. L’admission à l’Ecole (au de Diplôme Universitaire de Technologie « DUT ») se fait par voie de sélection par ordre de mérite après une présélection sur la base des notes obtenues au baccalauréat. Les candidats doivent être âgés de 22 ans au plus au 31 Décembre de l’année du concours et doivent déposer leurs dossiers de pré-inscription avant le 30 Juin de chaque année universitaire. </p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
    
     
        <h2  class="w3-opacity" style=" color: black; background:#80FF00"> <center> &loz; Orientation appliquée de l’enseignement</center></h2>
        <hr class="w3-clear">
        <p>

La formation appliquée à l’ESTSB est largement tournée vers les Technologies d’Information et de Communication, les Techniques de Gestion, les langues vivantes, les Systèmes et Réseaux Informatiques, les conceptions et les réalisations informatiques, c’est pourquoi ses programmes ont toujours le souci de répondre aux exigences et aux attentes de l’environnement socio-économique de l’Ecole et font appel à des méthodes pédagogiques actives et évoluées. 
<br>
Les programmes d’enseignement comportent des Cours magistraux, des Travaux Pratiques (TP), des Travaux Dirigés (TD) et des Dossiers et Travaux de Réalisation, des Projets de Fin d’Etude, des Stages d’Initiation et des Stages de Stages Techniques dans les entreprises, les organismes socio-professionnels, les collectivités locales et les administrations publiques.
<br>
Durée des études

La durée des études est de deux années universitaires avec 16 modules d’enseignement. La première année s’étale sur 32 semaines suivies de quatre semaines de stage d’initiation après la fin de S2 et avant le démarrage de S3 dans l’entreprise en Juillet ou Aout à raison de 24 jours avec un rapport et une soutenance. La deuxième année est de 36 semaines dont 8 semaines de stage technique et dispensé à raison de 48 jours pour 36 heures par semaine en moyenne avec un rapport et une soutenance.</p>
          
    
      </div>
      
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
   
        <h2 class="w3-opacity" style=" color: black; background:#00FFFF"><center>  &loz; Activités</center></h2>
        <hr class="w3-clear">
        <p>L'ESTSB est trés active coté activités.
        <br>
        Parmi les activités que notre école organise ou participe, nous vous présentons: </p>
        <br>
        
        <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half">
              <img src="<?php bloginfo('template_url'); ?>/src/activite1.png" style="width:100%" alt="activités" class="w3-margin-bottom">
              <p style="color: black;"><center>Participation des étudiants d'ESTSB dans la compétition nationale INJAZ</center></p>
            </div>

          <div class="w3-half">
              <img src="<?php bloginfo('template_url'); ?>/src/activite3.png" style="width:100%" alt="activités" class="w3-margin-bottom">
              <p style="color: black;"><center>Participation d'ESTSB dans le FORUM d'étudiant 2020</center></p>
          </div>
          <div class="w3-half">
              <img src="<?php bloginfo('template_url'); ?>/src/activite4.png" style="width:100%" alt="activités" class="w3-margin-bottom">
              <p style="color: black;"><center>Participation d'ESTSB dans la CMPC 2020</center></p>
              <div class="w3-half">
              <img src="<?php bloginfo('template_url'); ?>/src/activite6.png" style="width:200%" alt="activités" class="w3-margin-bottom">
              <p style="color: black;"><center>Participation d'ESTSB dans la compétition HACKATHON ENSAJ 2019</center></p>
          </div>
          </div>
          
          
          <div class="w3-half">
              <img src="<?php bloginfo('template_url'); ?>/src/activite2.png" style="width:100%" alt="activités" class="w3-margin-bottom">
              <p style="color: black;"><center>La commuté nationale INJAZ prends sa place entre le corps personnel d'ESTSB</center></p>
          </div>
           <div class="w3-half">
              <img src="<?php bloginfo('template_url'); ?>/src/activite8.png" style="width:100%" alt="activités" class="w3-margin-bottom">
              <p style="color: black;"><center>Participation d'ESTSB dans le FORUM d'étudiant 2020</center></p>
          </div>


          <div class="w3-half">
              <img src="<?php bloginfo('template_url'); ?>/src/activite5.png" style="width:100%" alt="activités" class="w3-margin-bottom">
              <p style="color: black;"><center>Des étudiants actives d'ESTSB préparent un workshop à propos de WORDPRESS pour le bien de leurs collégues </center></p>
          </div>
        </div>
        
      </div>  

      
   
	
	 <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
    
     
        <h2  class="w3-opacity" style=" color: black; background:#80FF00"> <center> &loz; Actualités</center></h2>
        <hr class="w3-clear">
       

<h1 class="titre">Coronavirus. Suspension des cours au Maroc à partir du lundi 16 mars </h1>
	
<div class="chapo-options">
		                        <div class="chapo">
									<p>Dans un communiqué diffusé en fin journée ce vendredi 13 mars 2020, le ministère de l'Education nationale annonce la suspension de tous les cours, des jardins d'enfants jusqu'à l'enseignement supérieur à compter du lundi 16 mars 2020, du public, du privé et de la mission.</p>								</div>
						</div>
<p>
	
		 
Les cours sont arrêtés jusqu'à nouvel ordre, dans le cadre de la lutte contre la propagation éventuelle du virus, annonce un communiqué du ministère.

Cette décision concerne tous les établissements, maternelle, jardins d'enfants, préscolaire, primaire, secondaire, collégial, supérieur, privé ou public, général ou de formation professionnelle.

Il ne s'agit pas de vacances exceptionnelles, ajoute-t-on de même source. Des cours à distance seront mis en place pour permettre aux élèves de suivre de chez eux les cours prévus. Le ministère insiste sur la continuité pédagogique. Des packs pédagogiques devront être créés spécialement par les cadres et le corps enseignant.
<br>
Même les centres de formation ne relevant pas directement de l'Education nationale ainsi que les centres de formation de langues et tout centre d'apprentissage sont concernés, ainsi que les missions étrangères.
<br>
Voici la traduction intégrale du communiqué du ministère:
</p>
		 <h4>
			 "Les cours seront suspendus à partir du lundi 16 mars, jusqu'à nouvel ordre, dans l’ensemble des crèches, des établissements d’enseignement et de formation professionnelle et des universités, qu'ils soient privés ou publics, a annoncé vendredi le ministère de l’Éducation nationale, de la formation professionnelle, de l'enseignement supérieur et de la recherche scientifique.</h4>
  
<h4> "Cette décision s'inscrivant dans le cadre des mesures de prévention visant à endiguer la propagation du Coronavirus "Covid-19", est applicable à l'ensemble des établissements d'enseignement supérieur publics et privés, les établissements de formation des cadres ne faisant pas partie d'universités, les écoles et les centres de langues relevant des Missions étrangères ainsi que les centres de langues et ceux de soutien scolaire privés, a précisé le ministère dans un communiqué.</h4>
	
<h4>
	
		
"La décision de suspension des cours représente une mesure préventive visant à protéger la santé des élèves, des stagiaires, des étudiants, des cadres administratifs et pédagogiques exerçant dans les établissements d'enseignement et tous les citoyens, l'objectif ultime étant de lutter contre la propagation du virus Corona, déclaré comme une "pandémie" d’envergure mondiale par l'OMS.
 </h4>
	  
		 <h4>
"Le ministère assure qu'il veillera à informer la famille de l'éducation, de la formation et de la recherche scientifique ainsi que les apprenants, leurs parents et les citoyens, de tous les développements qui surviennent dans cette conjoncture exceptionnelle via tous les canaux disponibles. "</h4>
    
      </div>
	 </div>
    
    <!-- Right Column -->
    <div class="w3-col m2">
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Evenement marqués</p>
          <p class="w3-center">
            <img src="<?php bloginfo('template_url'); ?>/src/rentre.png" class="w3-circle" style="height:106px;width:106px" alt="ESTSB"></p>
          <p><strong>Rentrée Scolaire</strong></p>
          <p> Lundi 2 Septembre</p>
         
        </div>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
         <p>   </p>
          <img src="<?php bloginfo('template_url'); ?>/src/anne.png" class="w3-circle" alt="année" style="height:106px;width:106px" alt="ESTSB">
          <p><strong>Vaccances du 1er d'année</strong></p>
          <p> Du samedi 31 decembre au lundi 2  Janvier</p>
         
        </div>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
         <p>   </p>
          <img src="<?php bloginfo('template_url'); ?>/src/printemps.png" class="w3-circle" alt="Vaccances" style="height:106px;width:106px" alt="ESTSB">
          <p><strong>Vaccances de Printemps</strong></p>
          <p> Du samedi 10 Avril au lundi 22 Février</p>
         
        </div>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
         <p>   </p>
          <img src="<?php bloginfo('template_url'); ?>/src/travail.png" class="w3-circle" alt="Vaccances" style="height:106px;width:106px" alt="ESTSB">
          <p><strong>Fete du travail</strong></p>
          <p> Le 1er Mai</p>
         
        </div>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
         <p>   </p>
          <img src="<?php bloginfo('template_url'); ?>/src/ete.png" class="w3-circle" alt="Vaccances" style="height:106px;width:106px" alt="ESTSB">
          <p><strong>Vaccances d'été</strong></p>
          <p> Du samedi 4 Juillet</p>
         
        </div>
      </div>
      <br>
      
      
      
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Evénement marqués</p>
          <img src="<?php bloginfo('template_url'); ?>/src/conf.png" class="w3-circle" alt="Conférence" style="height:106px;width:106px" alt="ESTSB">
          <br>
          <span><b>Conférence à propos du Réseau informatique</b>
          <br>
          <p>Le 22 mars 2020 a salle de doctorat à la UCD Faculté de Lettre</p>
          
          </span>
         
        </div>
      </div>
      <br>
      
     <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Evénement marqués</p>
          <img src="<?php bloginfo('template_url'); ?>/src/visite.png" class="w3-circle" alt="Visite" style="height:106px;width:106px" alt="ESTSB">
          <br>
          <span><b>Visite à la cité Portugaise.</b>
          <br>
          <p>Le 03 Avril 2020 </p>
          
          </span>
         
        </div>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Evénement marqués</p>
          <img src="<?php bloginfo('template_url'); ?>/src/activite5.png" class="w3-circle" alt="workshop" style="height:106px;width:106px" alt="ESTSB">
          <br>
          <span><b>Workshop sous théme de créer votre site web avec WordPress.</b>
          <br>
          
          </span>
         
        </div>
      </div>
      <br>
		
		 <div class="w3-card w3-round w3-white w3-center">
          <div class="w3-container">
           <p>Evénement marqués</p>
          <img src="<?php bloginfo('template_url'); ?>/src/journéedelafemme.png" class="w3-circle" alt="Journée" style="height:106px;width:106px" alt="ESTSB">
          <br>
          <span><b>La journée de la femme.</b>
          <br>
          <p>Le 08 mars 2019 </p>
          
          </span>
         
        </div>
      </div>
      <br>
     
      
      
      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
	
  

</div>
<br>
	<div class="col-md-12">
                    <div class="cta-content">
						<h4 style=" font-size: 45px; letter-spacing: -1px; line-height: 1; text-align: center;color:#F2F2F2 ;background:#0040FF"><center> 
							<br>
                        Des milliers d'étudiant nous font confiance, soyez parmi eu,et n'hésitez pas d'etre parmi la grande famille ESTSB <br> 
                        <span>pour bien préparer votre Diplome universitaire DUT</span>
                        <br>
							<br>
                        <a href="http://www.estsb.ucd.ac.ma/">A votre tour</a>
							<p>...
		</p>
                    </center></h4> </div>
                </div>
	<!-- End Page Container -->
