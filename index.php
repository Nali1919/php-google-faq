<style>
.center{

    max-width: 1000px;
    margin: 50px auto;
}
a {
    text-decoration: none;
    padding:0px 10px;
    font-size:20px;
    color: #3367d6;
}
a:hover {
    border-bottom: 5px solid #3367d6;
    padding-bottom: 5px;

}
.flex{
display: flex;
align-items: center;
}
img{
width: 100px;
}
.newreply{
    text-align: left;
    margin-left: 170px;
}


</style>

<div class="flex">
  <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="logo-google"> 
  <h5>Privacy e Termini</h5>
</div>

<?php

$navbar=[
    
      'introduzione',
      'Norme sulla privacy',
      'Termini di servizio',
      'Tecnologie',
      'Domande Frequneti'


];


   foreach($navbar as $linkNav){
    ?>
    
      
    <a href="#"><?= $linkNav ?></a>   

    <?php
    
    } 



$text=[

    [
        'question'=> 'Come state implementando la recente decisione della Corte di giustizia dell\'Unione europea (CGUE) relativa al diritto all\'oblio?',
        'reply'=> 'I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. 
        I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi 
        rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. 
        Se desideri rimuovere qualcosa dal Web, devi contattare il webmaster del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica.
         Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni 
         su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato
          l\'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente,
        è inoltre possibile visitare la nostra pagina di assistenza per avere ulteriori informazioni.'

    ],
     [
        'question'=> 'Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?',
        'reply'=> 'I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. 
        I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi 
        rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. 
        Se desideri rimuovere qualcosa dal Web, devi contattare il webmaster del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica.
         Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni 
         su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato
          l\'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente,
        è inoltre possibile visitare la nostra pagina di assistenza per avere ulteriori informazioni.'

    ],
     [
        'question'=> 'Come state implementando la recente decisione della Corte di giustizia dell\'Unione europea (CGUE) relativa al diritto all\'oblio?',
        'reply'=> 'I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. 
        I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi 
        rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. 
        Se desideri rimuovere qualcosa dal Web, devi contattare il webmaster del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica.
         Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni 
         su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato
          l\'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente,
        è inoltre possibile visitare la nostra pagina di assistenza per avere ulteriori informazioni.'

    ],
     [
        'question'=> 'Come state implementando la recente decisione della Corte di giustizia dell\'Unione europea (CGUE) relativa al diritto all\'oblio?',
        'reply'=> 'I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. 
        I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi 
        rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. 
        Se desideri rimuovere qualcosa dal Web, devi contattare il webmaster del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica.
         Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni 
         su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato
          l\'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente,
        è inoltre possibile visitare la nostra pagina di assistenza per avere ulteriori informazioni.'

    ],
     [
        'question'=> 'Come state implementando la recente decisione della Corte di giustizia dell\'Unione europea (CGUE) relativa al diritto all\'oblio?',
        'reply'=> 'I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. 
        I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi 
        rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. 
        Se desideri rimuovere qualcosa dal Web, devi contattare il webmaster del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica.
         Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni 
         su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato
          l\'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente,
        è inoltre possibile visitare la nostra pagina di assistenza per avere ulteriori informazioni.'

    ],
     [
        'question'=> 'Come state implementando la recente decisione della Corte di giustizia dell\'Unione europea (CGUE) relativa al diritto all\'oblio?',
        'reply'=> 'I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. 
        I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi 
        rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. 
        Se desideri rimuovere qualcosa dal Web, devi contattare il webmaster del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica.
         Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni 
         su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato
          l\'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente,
        è inoltre possibile visitare la nostra pagina di assistenza per avere ulteriori informazioni.'

    ],

];

foreach($text as $faq){

?>

<div class="center">
<h2><?= $faq['question']?></h2>





</div>

<?php

$newReply=str_replace('.','<p>',$faq['reply']);
?>
<div class="newreply">
 <p  ><?= $newReply?></p>   
</div>

<?php
}



?>