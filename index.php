<?php get_header();
$themeDirectory = get_stylesheet_directory_uri();
?>
    <div class="thumbnail-text">
        <div class="row">
            <div class="col-md-12 col-lg-6">

                <p>Es gibt viele Gründe, sein Auto zu verkaufen; zum Beispiel,
                    wenn du keine Lust mehr auf unkalkulierbare, kostenintensive Reparaturen hast oder dein
                    Fahrzeug nicht mehr durch den TÜV kommt. Vielleicht ist es auch einfach nur der Wunsch
                    nach Veränderung: Du hast schöne Jahre mit deinem Auto verbracht, doch langsam wird es
                    Zeit für ein neues Modell.der Wunsch nach einem neuen Modell wächst und wächst.
                </p>
            </div>
            <div class="col-md-12 col-lg-6">
                <p>
                    Wären da bloß nicht der zeitraubende Fahrzeugankauf und -verkauf! Zum Glück unterstützt
                    dich Carminga bei beidem: Mit dem Carminga All Inclusive Auto Abo fährst du zum monatlichen
                    Fixpreis, solange du willst – und dank unserer Partnerschaft mit wirkaufendeinauto.de ist
                    dein Auto schneller verkauft als gedacht. Dank dem großen Partnernetzwerk von
                    wirkaufendeinauto.de erhältst du einen fairen Preis und nicht nur ein Angebot vom lokalen Händler.
                </p>
            </div>
        </div>
    </div>
    <div class="page-content">
        <div class="h2-container">
            <div class="h2-before"></div>

            <h2>Stressfreier Autoverkauf mit wirkaufendeinauto.de</h2>
        </div>
        <p>Wirkaufendeinauto.de bietet den einfachsten, schnellsten, sichersten und bequemsten
            Weg, dein Auto zu verkaufen.
        </p>
        <div class="selling-steps">
            <p class="head">Autoverkauf in 3 Schritten:</p>
            <div class="steps d-flex">
                <div class="arrows-container">
                    <div class="steps-arrow-item">
                        <img src="<?php echo $themeDirectory; ?>/images/line-1.svg" alt="">
                    </div>
                    <div class="steps-arrow-item">
                        <img src="<?php echo $themeDirectory; ?>/images/line-1.svg" alt="">
                    </div>
                </div>
                <div class="steps-container flex-grow-1 d-flex flex-column">
                    <div class="steps-item">
                        <div class="row">
                            <div class="col-sm-2">
                                <p class="step-number"><span>1</span></p>
                            </div>
                            <div class="col-sm-10">
                                <p class="step-text">
                                    Lasse dein Auto kostenlos bewerten, indem du Fahrzeuginformationen wie Marke,
                                    Modell und Erstzulassung in das Bewertungstool von wirkaufendeinauto.de eingibst.
                                    Du erhältst umgehend einen ersten Schätzwert.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="steps-item">
                        <div class="row">
                            <div class="col-sm-2">
                                <p class="step-number"><span>2</span></p>
                            </div>
                            <div class="col-sm-10">
                                <p class="step-text">
                                    Nun kannst du einen kostenlosen Termin in einer der über 130 Niederlassungen
                                    von wirkaufendeinauto.de in Deutschland vereinbaren. Dort wird dein Auto
                                    inspiziert und eine umfassende professionelle Fahrzeugbewertung vorgenommen.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="steps-item">
                        <div class="row">
                            <div class="col-sm-2">
                                <p class="step-number"><span>3</span></p>
                            </div>
                            <div class="col-sm-10">
                                <p class="step-text">
                                    Im Anschluss an die Inspektion wird in den meisten Fällen der Schnell-Verkauf
                                    angeboten, der optimal auf deine Bedürfnisse ausgerichtet ist. Das unverbindliche
                                    Angebot ist bis zu 7 Werktage gültig, du musst dich also nicht sofort
                                    entscheiden – und wenn doch wird dir das Geld in kürzester Zeit überwiesen.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-container d-flex">
        <div class="form-container-left-arrow">
            <img class="header-logo" src="<?php echo $themeDirectory; ?>/images/line-2-copy.svg" alt="stroke">
        </div>
        <div class="flex-grow-1">
            <div class="form-block">
                <div class="form-head text-center">
                    Kostenlose Online-Bewertung<br>
                    Ihres Autos
                </div>
                <div class="form-content">
                    <form class="form-group" id="form">
                        <div class="stage" id="stageOne">
                            <div class="select-wrapper" >
                                <select class="form-control"  name="make" id="selectMarke">
                                    <option selected>Marke</option>
                                </select>
                            </div>
                            <div class="select-wrapper">
                                <select class="form-control" name=""model id="selectModels">
                                    <option selected>Modell</option>
                                </select></div>
                            <div class="select-wrapper">
                                <select class="form-control" name="year"  id="selectYears">
                                    <option selected>Erstzulassung</option>
                                </select>
                            </div>
                        </div>
                        <div class="w-fit-content m-auto">
                            <input type="button" class="btn bg-orange text-white m-3" id="submitBtn" value="Jetzt bewerten">
                            <p><span class="color-blue">wir</span><span class="color-orange">kaufen</span><span class="color-blue">dein</span><span class="color-orange">auto</span><span class="color-blue">.de</span></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="form-container-right-arrow">
            <img class="header-logo" src="<?php echo $themeDirectory; ?>/images/line-2-copy.svg" alt="stroke">
        </div>
    </div>
    <div class="benefits-container">
        <p class="head mt-5">Deine Vorteile auf einen Blick:</p>
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <div class="d-flex benefit"><div><div class="circle"><img src="<?php echo $themeDirectory; ?>/images/check-1.svg" alt=""></div></div><div class="flex-grow-1">
                        Alles unverbindlich, zu keinem Zeitpunkt besteht eine Verpflichtung zum Verkauf
                    </div></div>
                <div class="d-flex benefit"><div><div class="circle"><img src="<?php echo $themeDirectory; ?>/images/check-1.svg" alt=""></div></div><div class="flex-grow-1">
                        Kostenlose Onlinebewertung
                    </div></div>
                <div class="d-flex benefit"><div><div class="circle"><img src="<?php echo $themeDirectory; ?>/images/check-1.svg" alt=""></div></div><div class="flex-grow-1">
                        Kostenlose Expertenbewertung
                    </div></div>
                <div class="d-flex benefit"><div><div class="circle"><img src="<?php echo $themeDirectory; ?>/images/check-1.svg" alt=""></div></div><div class="flex-grow-1">
                        Kostenloser Schnell-Verkauf auf Wunsch, innerhalb von 24 Stunden
                    </div></div>
                <div class="d-flex benefit"><div><div class="circle"><img src="<?php echo $themeDirectory; ?>/images/check-1.svg" alt=""></div></div><div class="flex-grow-1">
                        Schnelle Bezahlung
                    </div></div>
                <div class="d-flex benefit"><div><div class="circle"><img src="<?php echo $themeDirectory; ?>/images/check-1.svg" alt=""></div></div><div class="flex-grow-1">
                        Kostenlose Abmeldung deines Autos
                    </div></div>
                <div class="d-flex benefit"><div><div class="circle"><img src="<?php echo $themeDirectory; ?>/images/check-1.svg" alt=""></div></div><div class="flex-grow-1">
                        Übernahme der kostenlosen Bankablösung im Falle einer laufenden Finanzierung
                    </div></div>
                <div class="d-flex benefit"><div><div class="circle"><img src="<?php echo $themeDirectory; ?>/images/check-1.svg" alt=""></div></div><div class="flex-grow-1">
                        Professioneller Partner auch für Firmenkunden
                    </div></div>
            </div>
            <div class="col-sm-12 col-lg-6 ">
                <div class="benefit-block-2">
                    <p class="head">Das sparst du dir:</p>
                    <ul>
                        <li>Zeitaufwendiges Inserieren</li>
                        <li>Lästige Verkaufsverhandlungen</li>
                        <li>Lange Wartezeiten, bis dein Auto endlich verkauft ist</li>
                    </ul>
                    <button class="benefit-block-2-offer">Jetzt gratis Angebot für dein Auto einholen</button>
                </div>
            </div>
        </div>
    </div>
<?php get_footer();?>