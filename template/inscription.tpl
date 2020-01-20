
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Inscription</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="inscription.php" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Nom</label>
                            <input type="text" class="form-control" placeholder="Nom" name="nom" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Prénom</label>
                            <input type="text" class="form-control" placeholder="Prénom" name="prenom" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Mot de passe" name="pass" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit" value="bouton">Valider</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.slim.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>