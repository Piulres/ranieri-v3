<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ranieri v1</title>
        <meta name="author" content="Piulres" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,700|Spectral:200" rel="stylesheet">      
        <link href="https://fonts.googleapis.com/css?family=Kanit:700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/revealer.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />       
        <script>document.documentElement.className = 'js';</script>
    </head>
    <body class="demo-1 loading">
        <svg class="hidden">
            <symbol id="icon-nav-arrow" viewBox="0 0 24 17">
                <title>nav arrow</title>
                <polygon points="14.1333333 2.61666667 18.9333333 7.41666667 0 7.41666667 0 10.0833333 18.9333333 10.0833333 14.1333333 14.8833333 16 16.75 24 8.75 16 0.75"></polygon>
            </symbol>
        </svg>
        <main>
            <div class="content content--intro">
                <div class="content__inner">
                    <h2 class="introhome content__title">Ranieri</br>Full</br>Casting</h2>
                    <a href="#" class="enter">entrar</a>                 
                </div>
                <div class="shape-wrap">
                    <svg class="shape" width="100%" height="100vh" preserveAspectRatio="none" viewBox="0 0 1440 800">
                        <path d="M -44,-50 C -52.71,28.52 15.86,8.186 184,14.69 383.3,22.39 462.5,12.58 638,14 835.5,15.6 987,6.4 1194,13.86 1661,30.68 1652,-36.74 1582,-140.1 1512,-243.5 15.88,-589.5 -44,-50 Z" pathdata:id="M -44,-50 C -137.1,117.4 67.86,445.5 236,452 435.3,459.7 500.5,242.6 676,244 873.5,245.6 957,522.4 1154,594 1593,753.7 1793,226.3 1582,-126 1371,-478.3 219.8,-524.2 -44,-50 Z"></path>
                    </svg>
                </div>
            </div><!-- /content -->
            <div class="content content--fixed">
                <div class="nav-menu">
                    <ul>
                        <li><a href="#" class="active">Home</a></li>
                        <li><a href="#">Quem Somos</a></li>
                        <li><a href="#">Portifolio</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contato</a></li>
                        @if (Auth::check())
                            <li><a href="/admin/home">Painel</a></li>
                            <li><a href="/logout">Logout</a></li>
                        @else
                            <li><a href="/login">Login</a></li>
                        @endif
                    </ul>
                </div>
                <div class="grid grid--layout-1 grid--current">
                    <div class="grid__item" data-delay="150" data-direction="ttb"></div>
                    <div class="grid__item" data-delay="300" data-direction="ttb"></div>
                    <div class="grid__item" data-delay="200" data-direction="ttb"></div>
                    <div class="grid__item" data-delay="40" data-direction="ttb"></div>
                    <div class="grid__item" data-delay="70" data-direction="ttb"></div>
                    <div class="grid__item" data-delay="100" data-direction="ttb"></div>
                    <div class="grid__item" data-delay="250" data-direction="ttb"></div>
                    <div class="grid__item" data-delay="350" data-direction="ttb"></div>
                    <div class="grid__item" data-delay="400" data-direction="ttb"></div>
                    <div class="grid__item" data-direction="ttb"></div>
                    <div class="grid__item" data-direction="ttb" data-delay="20"></div>
                    <div class="grid__item" data-direction="ttb" data-delay="500" ></div>
                    <div class="grid__item" data-delay="120" data-direction="ttb"></div>
                    <div class="grid__item grid__item--nav grid__item--nav-prev" data-direction="ttb">
                        <svg class="icon icon--nav-arrow"><use xlink:href="#icon-nav-arrow"></use></svg>
                    </div>
                    <div class="grid__item grid__item--nav grid__item--nav-next" data-direction="ttb">
                        <svg class="icon icon--nav-arrow"><use xlink:href="#icon-nav-arrow"></use></svg>
                    </div>
                    <h2 class="grid__item grid__item--name">Ranieri<br/> Full<br/>Casting</h2>
                    <h3 class="grid__item grid__item--title">Texto #1</h3>
                    <p class="grid__item grid__item--text">A reet bobbydazzler a right toff Sherlock Queen Elizabeth Shakespeare</p>
                </div>
                <div class="grid grid--layout-2">
                    <div class="grid__item" data-delay="350" data-direction="ttb"></div>
                    <div class="grid__item" data-delay="20" data-direction="ttb"></div>
                    <div class="grid__item" data-direction="ttb"></div>
                    <div class="grid__item" data-delay="400" data-direction="ttb"></div>
                    <div class="grid__item" data-delay="70" data-direction="ttb"></div>
                    <div class="grid__item" data-delay="350" data-direction="ttb"></div>
                    <div class="grid__item" data-delay="200" data-direction="ttb"></div>
                    <div class="grid__item" data-delay="500"  data-direction="ttb"></div>
                    <div class="grid__item" data-direction="ttb"></div>
                    <div class="grid__item" data-delay="20" data-direction="ttb"></div>
                    <div class="grid__item" data-delay="450" data-direction="ttb"></div>
                    <div class="grid__item" data-direction="ttb"></div>
                    <div class="grid__item" data-delay="650" data-direction="ttb"></div>
                    <div class="grid__item grid__item--nav grid__item--nav-prev" data-delay="100" data-direction="ttb">
                        <svg class="icon icon--nav-arrow"><use xlink:href="#icon-nav-arrow"></use></svg>
                    </div>
                    <div class="grid__item grid__item--nav grid__item--nav-next" data-direction="ttb">
                        <svg class="icon icon--nav-arrow"><use xlink:href="#icon-nav-arrow"></use></svg>
                    </div>
                    <h2 class="grid__item grid__item--name">Ranieri<br/> Full<br/>Casting</h2>
                    <h3 class="grid__item grid__item--title">Texto #2</h3>
                    <p class="grid__item grid__item--text">You mean it ain't me noggin' leisurely shepherd's pie bossy britches</p>
                </div>
                <div class="grid grid--layout-3">
                    <div class="grid__item" data-direction="ttb"></div>
                    <div class="grid__item" data-delay="200" data-direction="ttb"></div>
                    <div class="grid__item" data-delay="400" data-direction="ttb"></div>
                    <div class="grid__item" data-delay="300" data-direction="ttb"></div>
                    <div class="grid__item" data-delay="140" data-direction="ttb"></div>
                    <div class="grid__item" data-delay="600" data-direction="ttb"></div>
                    <div class="grid__item" data-delay="350" data-direction="ttb"></div>
                    <div class="grid__item" data-delay="500" data-direction="ttb"></div>
                    <div class="grid__item" data-delay="50" data-direction="ttb"></div>
                    <div class="grid__item" data-delay="250" data-direction="ttb"></div>
                    <div class="grid__item" data-delay="300" data-direction="ttb"></div>
                    <div class="grid__item" data-delay="100" data-direction="ttb"></div>
                    <div class="grid__item" data-delay="40" data-direction="ttb"></div>
                    <div class="grid__item grid__item--nav grid__item--nav-prev" data-direction="ttb">
                        <svg class="icon icon--nav-arrow"><use xlink:href="#icon-nav-arrow"></use></svg>
                    </div>
                    <div class="grid__item grid__item--nav grid__item--nav-next" data-delay="40" data-direction="ttb">
                        <svg class="icon icon--nav-arrow"><use xlink:href="#icon-nav-arrow"></use></svg>
                    </div>
                    <h2 class="grid__item grid__item--name">Ranieri<br/> Full<br/>Casting</h2>
                    <h3 class="grid__item grid__item--title">Texto #3</h3>
                    <p class="grid__item grid__item--text">Dignified teacakes air one's dirty linen off t'shop scouser quid pezzy little taking the mick</p>
                </div>
            </div>
        </main>
            
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/charming.min.js"></script>
        <script src="js/anime.min.js"></script>
        <script src="js/revealer.js"></script>
        <script src="js/morphing_page_transition.js"></script>
        <script src="js/grid_layout_slideshow.js"></script>

        <script>
        {
            const DOM = {};
            DOM.body = document.body;
            DOM.gridElems = Array.from(document.querySelectorAll('.grid'));
            
            imagesLoaded(DOM.body, {background: true} , () => {
                DOM.body.classList.remove('loading');
                new Slideshow(DOM.gridElems, {
                    hasTilt: true,
                    tilt: {maxTranslationX: 25, maxTranslationY: 25}
                });
            });
        }
        </script>   

    </body>
</html>