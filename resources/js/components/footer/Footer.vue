<template>
    <section>
        <footer class="footer-area footer--light">
        <div class="footer-big">
            <!-- start .container -->
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="footer-widget">
                            <div class="footer-menu footer-menu--1">
                                <h4 class="footer-widget-title">Boutique</h4>
                                <hr>
                                <ul>
                                    <li>
                                        <a href="#">Livraison</a>
                                    </li>
                                    <li>
                                        <a href="#">Retour</a>
                                    </li>
                                    <li>
                                        <a v-bind:href="this.cgv">CGV</a>
                                    </li>
                                    <li>
                                        <a v-bind:href="this.login">Connectez-vous</a>
                                    </li>
                                    <li>
                                        <a v-bind:href="this.register">Inscrivez-vous</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.footer-menu -->
                        </div>
                        <!-- Ends: .footer-widget -->
                    </div>
                    <!-- end /.col-md-3 -->

                    <div class="col-md-3 col-sm-3">
                        <div class="footer-widget">
                            <div class="footer-menu">
                                <h4 class="footer-widget-title">Gazzar</h4>
                                <hr>
                                <ul>
                                    <li>
                                        <a v-bind:href="this.about">À propos</a>
                                    </li>
                                    <li>
                                        <a href="#">Emplois</a>
                                    </li>
                                    <li>
                                        <a v-bind:href="this.about">Blog</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.footer-menu -->
                        </div>
                        <!-- Ends: .footer-widget -->
                    </div>
                    <!-- end /.col-lg-3 -->

                    <div class="col-md-3 col-sm-3">
                        <div class="footer-widget">
                            <div class="footer-menu no-padding">
                                <h4 class="footer-widget-title">Aide</h4>
                                <hr>
                                <ul>
                                    <li>
                                        <a href="#">Service d'aide</a>
                                    </li>
                                    <li>
                                        <a href="#">Droits d'auteur</a>
                                    </li>
                                    <li>
                                        <a v-bind:href="this.about+'#contactUs'">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.footer-menu -->
                        </div>
                        <!-- Ends: .footer-widget -->
                    </div>
                    <!-- Ends: .col-lg-3 -->

                    <div class="col-md-3 col-sm-3">
                        <div class="footer-widget">
                            <div class="footer-menu footer-menu--1">
                                <h4 class="footer-widget-title">Réseaux sociaux</h4>
                                <hr>
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/">Facebook</a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/">Twitter</a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/">Instagram</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.footer-menu -->
                        </div>
                        <!-- Ends: .footer-widget -->
                    </div>
                    <!-- end /.col-md-3 -->
                </div>
                <!-- end /.row -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img v-bind:src="this.baseUrl+'/images/logo-horizontal-fond-clair.png'" alt="Logo Gazzar">
                    </div>
                </div>
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.footer-big -->

        <div class="mini-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="copyright-text">
                            <p>Copyright <i class="far fa-copyright"></i> Alpaka 2019
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="copyright-text">
                            <i class="far fa-envelope"></i>
                            <a href="#" id="newsletter">Inscription à la newsletter</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="col socialMedia">
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/"><i class="fab fa-instagram instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </section>
</template>

<style src="./Footer.css" scoped></style> 
<script src="./Footer.js"></script>
