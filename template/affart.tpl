<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">{$tableau.titre}</h1>
        </div>
    </div>

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
    
    <div class="container-fluid">
        <div class="text-center">
            <img src="img/{$tableau.id}.jpg" alt="" class="img-thumbnail"></div>
    </div>
    </br>

    <div class="row">
        <div class="col-12 text-center">
            <p class="card-text">{$tableau.texte}</p>
        </div>
    </div>  </br>

    <div class="row">
        <div class="col-lg-12 text-center">
            <a href="article.php?id={$tableau.id}&action=modifier" class="btn btn-primary">Modifier article</a>
            <form action='affart.php' method="POST"></br>
                <input type="hidden" value="{$tableau.id}" name="id_article">   <!-- afficher confirmation-->
                <button type="submit" class="btn btn-danger" name="submit" onclick="return confirm('Voulez-vous vraiment suprimer cette article ?')" value="supprimer">Supprimer article</button>
            </form>
        </div>
    </div>
    </br>

    <!--            Commentaires        -->
    
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Commentaire</h1>
        </div>
    </div> 
    <hr>
    {foreach from=$commen item=value}
        <a><font color="#ff0000">{$value.pseudo}</font> <font size="2">{$value.date} à {$value.temp}</font></a></br>
        <a>{$value.texte}</a>
        <hr>
    {/foreach}

    <!--            Ajout Commentaire        -->
    
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Ajout Commentaire</h1>
        </div>
    </div> </br>

    <form action='affart.php' method="POST" name="comment">
        <input type="hidden" value="{$tableau.id}" name="id_article">
        <div class="col-lg-5">
            <div class="form-group">
                <input class="form-control" id="pseudo" rows="3" name="pseudo" placeholder="Entrer votre pseudo"></br>
                
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
            </div>
        </div></br>

        <div class="col-lg-9">
            <div class="form-group">
                <textarea class="form-control" id="texte" rows="3" name="texte" placeholder="Entrer votre commentaire"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit" onclick="return champvide()" value="commentaire">Ajouter commentaire</button>
        </div>
    </form></br>
</div>   
        
        
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.slim.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>



