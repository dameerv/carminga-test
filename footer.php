<footer>
    <?php
    $themeDirectory = get_stylesheet_directory_uri();
    ?>

    <div class="row">
        <div class="col-sm-4">
            <div class="footer-logo">
                <img class="footer-logo" src="<?php echo $themeDirectory ?>/images/logo-horizontal.svg" alt="Carminga logo">
            </div>
            <div class="footer-motto">
                <p>Dein Traumauto im Abo</p>
                <p>All inclusive außer Tanken</p>
            </div>
            <div class="footer-contacts">
                <p>+49 (0) 8531 2494111</p>
                <p>info@carminga.com</p>
                <p><a href="https://www.carminga.com" target="_blank">www.carminga.com</p>
            </div>
        </div>
        <div class="col-sm-2 d-flex flex-column">
            <div class="footer-link-container">
                <a href="!#">
                    Home
                </a>
            </div>
            <div class="footer-link-container">
                <a href="!#">
                    Über uns
                </a>
            </div>
            <div class="footer-link-container">
                <a href="!#">
                    Fahrzeuge
                </a>
            </div>
            <div class="footer-link-container">
                <a href="!#">
                    Häufige Fragen
                </a>
            </div>
            <div class="footer-link-container">
                <a href="!#">
                    Geschäftskunden
                </a>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="footer-link-container">
                <a href="!#">
                    Unser Journal
                </a>
            </div>
            <div class="footer-link-container">
                <a href="!#">
                    Kontakt zu uns
                </a>
            </div>
            <div class="footer-link-container">
                <a href="!#">
                    Das Carminga Abo
                </a>
            </div>
            <div class="footer-link-container">
                <a href="!#">
                    Auto Abo vs. Leasing
                </a>
            </div>
            <div class="footer-link-container">
                <a href="!#">
                    Auto Abo vs. Autofauf
                </a>
            </div>
        </div>
        <div class="col-sm-4 pl-2">
            <h2 class="footer-newsletter-head">Newsletter Anmeldung</h2>
            <p>
                Mit unsern Newsletter erhltstält fu  Informationen rund um unsereService, Angeboten sowie
                unseren neuesten Autos.
            </p>
            <form action="">
                <div class="input-group mb-3">
                    <input type="email" class="form-control newsletter-input" placeholder="E-Mail*" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Anmelden</button>
                    </div>

                    <div class="form-group form-check mt-2">
                        <input type="checkbox" class="form-check-input" id="agreement">
                        <label class="form-check-label" for="agreement">   Ich stimme den <a href="!#" class="black-text">Datenschutzbestimmungen</a> zu. Diese Einwilligung kann
                            jederzeit widerrufen werden.</label>
                    </div>

                </div>
            </form>
        </div>
    </div>
    <div class="row footer-2">
        <div class="col-sm-3">
            <p class="copyright">© — 2020 Carminga GmbgH</p>
        </div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3">
            <a href="https://apps.apple.com/ru/app/helpsignal/id1457176654" rel="nofollow" target="_blank">Загрузить из App Store →<br><br><img src="/Content/img/app-apple.png" width="300" alt="Загрузить для устройства на iOS"></a>
        </div>
        <div class="col-sm-3">
            <a href="https://play.google.com/store/apps/details?id=com.carminga.customer.android.prod" rel="nofollow" target="_blank">Загрузить из App Store →<br><br><img src="/Content/img/app-apple.png" width="300" alt="Загрузить для устройства на iOS"></a>
        </div>
    </div>
</footer>
</div>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<!--<script type="text/javascript" src="//content.wirkaufendeinauto.de/lib/wkda-api.min.js"></script>-->
<!--<script src="--><?php //echo $themeDirectory; ?><!--/js/app.js"></script>-->
</body>
<?php wp_footer() ?></body>
</html>
