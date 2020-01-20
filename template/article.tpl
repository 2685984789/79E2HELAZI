<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">{$titreM} un article</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                
                <!-- Formulaires-->
                <form method="POST" action="article.php" enctype="multipart/form-data">
                    <input type="hidden" value="{$tableau.id}" name="id">
                    <div class="form-group">
                        <label for="titre">Titre</label>
                        <input type="text" class="form-control" id="titre" placeholder="Entrer un titre" name="titre" value="{$tableau.titre}">
                    </div>
                    <div class="form-group">
                        <label for="text">Texte de l'article</label>
                        <textarea class="form-control" id="texte" rows="3" name="texte">{$tableau.texte}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="img">Image</label>
                        <input type="file" class="form-control-file" id="img" name="img">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="publier" name="publier" {if $tableau['publier']==1} checked {/if}>
                        <label class="form-check-label" for="publier" >Publier article ?</label>
                    </div>
                        
                        
                        <!-- Bouton modifier ou ajouter-->
                    {if !empty($action) & $action == 'modifier'} 
                        <button type="submit" class="btn btn-primary" name="submit" value="modifier">Modifier</button>
                    {else}
                        <button type="submit" class="btn btn-primary" name="submit" value="ajouter">Ajouter</button>
                    {/if}

                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.slim.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>