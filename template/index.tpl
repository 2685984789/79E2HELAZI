<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Accueil blog</h1>
        </div>
    </div>
    
    <!--            Recherche        -->
    <form class="form-inline my-2 my-lg-0" method="GET" action="index.php">
        <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Search" name="recherche">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
    </form><br>



    <!--            Notification        -->
    {if isset($smarty.session.notification)}<!--Superglobal $_session-->

        <div class="row">
            <div class="col-12">
                <div class="alert alert-{$smarty.session.notification.result}" role="alert">
                    {$smarty.session.notification.message}

                </div>
            </div>
        </div>
    {/if}

    <!--            Article        -->
    <div class="row">
        {foreach from=$result item=value}
            <div class="col-6">
                <div class="card" style="width: 100%;">
                    <img src="img/{$value.id}.jpg" class="card-img-top" alt="{$value.titre}">
                    <div class="card-body">
                        <h5 class="card-title">{$value.titre}</h5>
                        <p class="card-text">{if $compteurmots < 300}{$value.texte}{else}{$value.texte|substr:0:400}{/if}</p><!--Limiter nb de mots-->
                        <a href="affart.php?id={$value.id}&action=consultation" class="btn btn-primary">Afficher article</a>
                        <a href="article.php?id={$value.id}&action=modifier" class="btn btn-primary">Modifier</a>
                        <a>{$value.date_fr}</a> 
                    </div>
                </div>
            </div> 
        {/foreach}
    </div><br>


    <!--            Pagination        -->
    
<!--Supprimer pagination si recherche-->
    {if $recherche == 1}
        <nav>
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="?p={$page_prec}" tabindex="-1" >Précedent</a>
                </li>
                
                <!--            Grisé page courante        -->
                {for $index=1 to $nb_total_page}
                    <li class="page-item {if $page_courante == $index}active{/if}"><a class="page-link" href="?p={$index}">{$index}</a></li>
                {/for}
                
                <!--            Bloquer suivant        -->
                {if $page_courante < $nb_total_page}
                    <a class="page-link" href="?p={$page_suiv}">Suivant </a>
                {/if}
   
            </ul>
        </nav>
    {/if}




    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.slim.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>



