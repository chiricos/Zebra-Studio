<!DOCTYPE HTML>
<html>
<head>
    <title>zebra studio</title>
    <meta charset="utf-8">
    <meta name="author" content="Drawde"/>
    <meta name="description" content="zebra studio"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>
    <!-- Style -->
    <link rel="stylesheet" href="animate.min.css">
    <link rel="stylesheet" href="css/normalize.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>

    <!-- Style <script src="{{asset('js/prefixfree.min.js')}}"></script>-->
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
<div class="panel_up"></div>

<?php include('header.php'); ?>

<div id="wrapper">



    <div class="content">
        <section>
            <img src="images/portafolio/nuestro_portafolio.png">
            <?php include("portafolio_menu.php"); ?>
            <div id="content_works">
                <div class="content_line">
                    <div class="content_line1"></div>
                    <div class="content_line2"></div>
                </div>

                <?php include("portafolio_content.php"); ?>

                <div class="rey hidden pop_up">
                    <?php include("portafolio1_pop_up.php"); ?>
                </div>

                <div class="francisco hidden pop_up">
                    <?php include("portafolio2_pop_up.php"); ?>
                </div>

                <div class="refisal hidden pop_up">
                    <?php include("portafolio3_pop_up.php"); ?>
                </div>

                <div class="blancox hidden pop_up">
                    <?php include("portafolio4_pop_up.php"); ?>
                </div>

                <div class="trocipollo hidden pop_up">
                    <?php include("portafolio5_pop_up.php"); ?>
                </div>

                <div class="condimentos hidden pop_up">
                    <?php include("portafolio6_pop_up.php"); ?>
                </div>

                <div class="nts hidden pop_up">
                    <?php include("portafolio7_pop_up.php"); ?>
                </div>

                <div class="mago hidden pop_up">
                    <?php include("portafolio8_pop_up.php"); ?>
                </div>

                <div class="cabarria hidden pop_up">
                    <?php include("portafolio9_pop_up.php"); ?>
                </div>

                <div class="chefrito hidden pop_up">
                    <?php include("portafolio10_pop_up.php"); ?>
                </div>

                <div class="campiña hidden pop_up">
                    <?php include("portafolio11_pop_up.php"); ?>
                </div>

                <div class="durena hidden pop_up">
                    <?php include("portafolio12_pop_up.php"); ?>
                </div>

                <div class="chefrito hidden pop_up">
                    <?php include("portafolio10_pop_up.php"); ?>
                </div>

                <div class="chefrito hidden pop_up">
                    <?php include("portafolio10_pop_up.php"); ?>
                </div>

                <div class="chefrito hidden pop_up">
                    <?php include("portafolio10_pop_up.php"); ?>
                </div>

                <div class="content_line">
                    <div class="content_line2" style="margin: 30px auto auto"></div>
                    <div class="content_line1"></div>
                </div>
            </div>
        </section>
    </div>

</div>

<?php include('footer.php') ?>

</body>
</html>