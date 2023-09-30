<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hatchepsout</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" integrity="sha512-oHDEc8Xed4hiW6CxD7qjbnI+B07vDdX7hEPTvn9pSZO1bcRqHp8mj9pyr+8RVC2GmtEfI2Bi9Ke9Ass0as+zpg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div class="container">
        <!-- 
         ==================================== Header 
         ==================================== Navbar 
        -->
        <nav class="nav">
            <ul>
                <li><a href="#home"><i class="fa-solid fa-house"></i></a></li>
                <li><a href="#article"><i class="fa-solid fa-newspaper"></i></a></li>
                <li><a href="#galery"><i class="fa-solid fa-images"></i></a></li>
            </ul>
        </nav>

        <!-- ==================================== Home -->

        <header class="container__home" id="home">
            <div class="background_home">
                <h1>Hatchepsout</h1>
            </div>
        </header>

        <!-- ==================================== Article -->

        <main>
            <section class="container__article" id="article">
                <div class="container__title">
                    <h2 class="article__title">Biographie</h2>
                    <div class="bar"></div>
                </div>
                <article class="article">
                    <div class="paragraphe">
                        <p>
                            Hatchepsout, également orthographiée Hatchepsut, était l'une des rares femmes de l'Égypte ancienne à régner en tant que pharaon. Elle est née vers 1507 avant J.-C., dans une période marquée par des luttes pour le pouvoir en Égypte. Elle était la fille de Thoutmôsis Ier et de la reine Ahmès.
                        </p>
                        <p>
                            Hatchepsout est devenue reine consort lorsqu'elle a épousé son demi-frère Thoutmôsis II, qui est monté sur le trône d'Égypte après la mort de Thoutmôsis Ier. Après la mort de Thoutmôsis II, leur fils, Thoutmôsis III, était trop jeune pour gouverner, ce qui a ouvert la voie à Hatchepsout pour devenir régente. Cependant, elle a rapidement assumé le rôle de pharaon et est devenue l'une des dirigeantes les plus influentes de l'Égypte ancienne.
                        </p>
                        <p>
                            L'un des aspects les plus remarquables du règne d'Hatchepsout était sa décision de se faire couronner pharaon, portant la tenue traditionnelle masculine, y compris la fausse barbe. Elle a régné pendant plus de vingt ans, de 1479 à 1458 avant J.-C., une période de stabilité et de prospérité pour l'Égypte.
                        </p>
                        <p>
                            Sous son règne, l'Égypte a connu une série d'expéditions commerciales et militaires, notamment une célèbre expédition en terre de Pount (une région probablement située en Érythrée ou en Éthiopie), au cours de laquelle des richesses et des marchandises rares ont été ramenées en Égypte. Elle a également supervisé de nombreux projets de construction, y compris le temple de Deir el-Bahari, un complexe funéraire impressionnant situé sur la rive ouest du Nil à Thèbes.
                        </p>
                        <p>
                            Hatchepsout est décédée vers 1458 avant J.-C., et son règne a été suivi par une période de règne conjoint avec Thoutmôsis III, son beau-fils, jusqu'à sa propre mort. Malheureusement, de nombreuses preuves de son règne ont été effacées par son successeur, peut-être pour effacer le souvenir d'une femme au pouvoir, mais des recherches modernes ont permis de découvrir davantage d'informations sur cette reine-pharaon remarquable.
                        </p>
                        <p>
                            Hatchepsout reste l'une des figures les plus fascinantes de l'Égypte ancienne, à la fois en raison de sa montée au pouvoir en tant que femme et de ses réalisations durant son règne. Sa contribution à l'histoire de l'Égypte ancienne est incontestable.
                        </p>
                    </div>
                    <div class="card">
                        <div class="img__card"></div>
                        <p>
                            Photo d'une des sculptures à l'effigie d'Hatchepsout ce trouvant au Musée national des Antiquités des Pays-Bas, Leyde
                        </p>
                    </div>
                </article>
            </section>

            <!-- ================================ Galery -->

            <section class="container__galery" id="galery">
                <div class="container__title">
                    <h2 class="article__title">Galery</h2>
                    <div class="bar"></div>
                </div>
                <div class="grid__img">
                    <div class="size grid__1">
                        <img class="img" src="./assets/images/temple.jpg" alt="">
                    </div>
                    <div class="size grid__2">
                        <img class="img" src="./assets/images/temple2.jpg" alt="">
                    </div>
                    <div class="size grid__3">
                        <img class="img" src="./assets/images/temple_int.jpg" alt="">
                    </div>
                    <div class="size grid__4">
                        <img class="img" src="./assets/images/hatchepsout_tete.jpeg" alt="">
                    </div>
                    <div class="size grid__5">
                        <img class="img" src="./assets/images/hatchepsout.jpg" alt="">
                    </div>
                    <div class="size grid__6">
                        <img class="img" src="./assets/images/hatchepsout2.jpg" alt="">
                    </div>
                </div>
            </section>

        </main>

        <footer>
            Devcode@2023
        </footer>

    </div>
    <script src="./assets/js/app.js"></script>
</body>

</html>