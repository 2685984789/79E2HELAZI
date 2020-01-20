<?php

function print_r2($ma_variable) {
    echo '<pre>';
    print_r($ma_variable);
    echo '</pre>';

    return true;
}


//notif
function notif($message, $result) {
    $_SESSION['notification']['message'] = $message;
    $_SESSION['notification']['result'] = $result;
    
    return TRUE;
}

//Conter nb article
function countArt($bdd){
        /* @var $bdd PDO */
    $sth = $bdd->prepare("SELECT COUNT(*) as total "
            . "FROM Article "
            . "WHERE publier = :publier");
   $sth->bindValue(':publier', 1,PDO::PARAM_BOOL);
   $sth->execute();
   $result= $sth->fetch(PDO::FETCH_ASSOC);
   
   return $result['total'];
}

//Retourne la page index
function return_index($page_courante,$nb_article_par_page){
    $index_depart = (($page_courante - 1) * $nb_article_par_page);
    return $index_depart;   
}

