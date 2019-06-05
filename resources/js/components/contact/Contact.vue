<template>
    <section>
        <div id="contactUs">
        <div class="container">
            <h1>Nous contacter</h1>
            <div>
                <form>
                    <div class="row">
                        <div class="col-6">
                            <div class="box-container">
                                <div class="box">
                                    <div class="box form-group">
                                        <input type="text" class="form-control" id="inputNom" placeholder="Nom">
                                    </div>

                                    <div class="box-container">
                                        <div class="box form-group">
                                            <input type="text" class="form-control" id="inputPrenom" placeholder="Prénom">
                                        </div>
                                    </div>

                                    <div class="box-container">
                                        <div class="box form-group">
                                            <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="box-container text-center">
                                        <button type="submit" class="btn btn-primary" id="envoyerForm">Envoyer</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="big-box">
                                <div class="form-group">
                                    <textarea class="form-control" id="inputMessage" placeholder="Ecrivez-votre message ici" rows="8"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <img src="images/bouteille.png" alt="bouteille de vin">
        </div>
    </div>
    </section>
</template>
 
<style src="./Contact.css" scoped></style> 
<script src="./Contact.js"></script>
