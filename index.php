
<!DOCTYPE html>
<html>
<head>
  <title>Site Todo_List</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body class="white-background">
    <div class="tabcontent" id="Home"> 
           <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css/style.css">
            <link rel="shortcut icon" href="images/extraImages/3.pnng" type="image/x-icon">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <title>Mon site web</title>
        </head>
    <body>
       
        <header>
        <?php  require 'header.php'; ?>
            <span class="menu">
                <span></span>
                <span></span>
                <span></span>
            </span>
            <div id="accueil" class="second_part">
                <h1>Salut, moi c'est <span class="underline_me">Axel</span></h1>
                <p>Je suis ingénieur logiciel, développeur et designer web</p>
                <div class="btns_container">
                   
                        <a href=".odt" download="cv">
                            <button class="buttons"><i class="fa-solid fa-download"></i> Télécharger mon cv</button>
                            
                        </a>
                    <a href="#contact" class="buttons"><i class="fa-solid fa-envelope"></i> Contactez-moi</a>
                </div>
            </div>
        </header>
        <main>
            <section id="apropos" class="my_sections">
                <h2><span class="underline_me2">Qui</span> suis je?</h2>
                <div class="sub_sections">
                    <div class="text_container">
                        <p>élève de seconde à saint-rémi. J'ai crée ce site le 06/07/2023 j'ai 16ans et j'habite à lys-lez-lannoy </p>
                        <a href="#contact" class="buttons"><i class="fa-solid fa-envelope"></i> Contactez-moi</a>
                    </div>
                </div>
    
            <section id="outils" class="my_sections">
                <h2><span class="underline_me2">Mes</span> outils</h2>
                <p>plusieurs outils que j'utilise ci-dessous.</p>
                <div class="tool_carts_container">
                    <div class="tool_carts_cart">
                        <div class="tool_carts_cart_img_container">
                            <img src="images/logos/html.png" width="200" alt="html image">
                        </div>
                        <div class="cart_text_container">
                            <body>
                                <a href="https://fr.wikibooks.org/wiki/Le_langage_HTML" target="_blank">HTML</a>
                            </body>
                        </div>
                    </div>
                    <div class="tool_carts_cart">
                        <div class="tool_carts_cart_img_container">
                            <img src="images/logos/css.png" width="20" alt="css image">
                        </div>
                        <div class="cart_text_container">
                            <body>
                                <a href="https://fr.wikipedia.org/wiki/Feuilles_de_style_en_cascade#:~:text=Les%20feuilles%20de%20style%20en,Wide%20Web%20Consortium%20(W3C)." target="_blank">CSS</a>
                            </body>
                        </div>
                    </div>
                    <div class="tool_carts_cart">
                        <div class="tool_carts_cart_img_container">
                            <img src="images/logos/js.png" width="200" alt="JavaScript image">
                            <button></button>
                        </div>
                        <div class="cart_text_container">
                            <body>
                                <a href="https://fr.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                            </body>
                        </div>
                    </div>
                    <!-- <div class="tool_carts_cart">
                        <div class="tool_carts_cart_img_container">
                            <img src="images/logos/icons8-bootstrap-240.png" width="200" alt="icons8-bootstrap-240 image">
                        </div>
                        <div class="cart_text_container">
                            <p>Bootstrap</p>
                        </div>
                     </div> 
                    <div class="tool_carts_cart">
                        <div class="tool_carts_cart_img_container">
                            <img src="images/logos/angularJS.png" width="200" alt="angularJS image">
                        </div>
                        <div class="cart_text_container">
                            <p>angularJS</p>
                        </div>
                    </div> -->
                    <div class="tool_carts_cart">
                        <div class="tool_carts_cart_img_container">
                            <img src="images/logos/sql.png" width="200" alt="sql image">
                        </div>
                        <div class="cart_text_container">
                            <body>
                                <a href="https://fr.wikipedia.org/wiki/Structured_Query_Language" target="_blank">SQL</a>
                            </body>
                        </div>
                    </div>
                    <div class="tool_carts_cart">
                        <div class="tool_carts_cart_img_container">
                            <img src="images/logos/php.png" width="200" alt="php image">
                        </div>
                        <div class="cart_text_container">
                            <body>
                                <a href="https://fr.wikipedia.org/wiki/PHP" target="_blank">PHP</a>
                            </body>
                        </div>
                    </div>
                    <div class="tool_carts_cart">
                        <div class="tool_carts_cart_img_container">
                            <img src="images/logos/java_original_wordmark_logo_icon_146459.png" width="200" alt="java image">
                        </div>
                        <div class="cart_text_container">
                            <body>
                                <a href="https://fr.wikipedia.org/wiki/Java_%28technique%29" target="_blank">Java EE</a>
                            </body>
                        </div>
                    </div>
                    <!-- <div class="tool_carts_cart">
                        <div class="tool_carts_cart_img_container">
                            <img src="images/logos/spring.png" width="200" alt="spring image">
                        </div>
                        <div class="cart_text_container">
                            <p>Spring Framework</p>
                        </div>
                    </div> -->
                    <!-- <div class="tool_carts_cart">
                        <div class="tool_carts_cart_img_container">
                            <img src="images/logos/wordpress.png" width="200" alt="wordpress image">
                        </div>
                        <div class="cart_text_container">
                            <p>wordpress</p>
                        </div>
                    </div> -->
                    <div class="tool_carts_cart">
                        <div class="tool_carts_cart_img_container">
                            <img src="images/logos/Google_Chrome_icon_(February_2022).svg.png" width="200" alt="chrome dev tools image">
                        </div>
                        <div class="cart_text_container">
                            <body>
                                <a href="http://www.google.com/" target="_blank">chrome</a>
                            </body>
                        </div>
                    </div>
                    <!-- <div class="tool_carts_cart">
                        <div class="tool_carts_cart_img_container">
                            <img src="images/logos/Git-Icon-1788C.png" width="200" alt="Git image">
                        </div>
                        <div class="cart_text_container">
                            <p>Git</p>
                        </div>
                    </div> -->
                    <div class="tool_carts_cart">
                        <div class="tool_carts_cart_img_container">
                            <img src="images/logos/github-logo_icon-icons.com_73546.png" width="200" alt="Github image">
                        </div>
                        <div class="cart_text_container">
                            <body>
                                <a href="https://github.com/" target="_blank">GITHUB</a>
                            </body>
                        </div>
                    </div>
                </div>
            </section>
            
            <section id="contact" class="my_sections">
                <h2><span class="underline_me2">Con</span>tactez-moi</h2>
                <div class="contact_form_container">
                    <div class="links_container">
                        <ul>
                            <li><a href="mailto:youremail@gmail.com"><i class="fa-solid fa-envelope"></i> axel.bossut7@gmail.com</a></li>
                            <li><a href="tel:+"><i class="fa-solid fa-phone"></i>+33 7 67 83 77 76</a></li>
                            <li><a href="#"><i class="fa-brands fa-facebook"></i>BaxelSept</a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i>BaxelSept</a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i>BaxelSept</a></li>
                        </ul>
                        <p><i class="fa-solid fa-location-dot"></i> Adresse: 
                            <!DOCTYPE html>
                            <html>
                            <body>
                                <a href="https://www.google.com/maps/search/?api=1&query=70B+Rue+Jean+Baptiste+Lebas" target="_blank">70B rue jean baptiste lebas</a>
                            </body>
                            </html>
                            <li><a><i class="fa-brands fa-code-postal"></i>
                                <!DOCTYPE html>
                                <html>
                                <body>
                                    <a href="https://www.google.com/maps/search/?api=1&query=59390+Lys-lez-Lannoy" target="_blank">59390 lys-lez-lannoy</a>
                                </body>
                                </html>
                                </a></li>
                        </p>
                    </div>
                     <div class="form_container">
                         <form action="post">
                             <input type="email" placeholder="email@something.com" required>
                             <input type="text" placeholder="sujet" required>
                             <textarea  id="message" cols="30" rows="10"></textarea>
                             <button class="buttons"><i class="fas fa-paper-plane"></i> envoyer</button>
                         </form>
                     </div>
                </div>
            </section>
        </main>
        <footer>
            <p>2022-2023</p>
            <a href="#accueil" class="buttons top">top</a>
        </footer>
        <script src="js/ajs"></script> 
    </body>
    </html>
    