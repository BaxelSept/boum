<nav>
                    <div class="logo_container">
                        <img src="images/extraImages/3.png" width="70" alt="logo">
                    </div>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <!--
                    <li><a href="#apropos">A propos</a></li>
                    <li><a href="#outils">Outils</a></li>
                    <li><a href="#contact">Contact</a></li> 
                    -->
                    <li><a href="tâche.php">Tâche</a></li>
                </ul>
            </nav>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
:root{
    --sk_yellow:#FFDE59;
    --sk_gray:#545454;
    --transparent-black:rgba(0, 0, 0, .8);
    --sk_white:#fff;
    --sk_red:crimson;
    --sk_dark_gray:#333;
    --sk_darken_yello:#f8d030;
}


header nav{

    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 15rem;
    background-color: var(--sk_white);
}
header nav ul{
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1rem;
    list-style: none;
    animation: fadeSomething .2s ease-in-out;
}

header nav ul li a{
    text-decoration: none;
    color: var(--sk_dark_gray);
    display: block;
    padding: 1rem;
    border-radius: 1rem;
    transition: all .2s ease-in-out;
}
nav ul li a:hover{
    background-color: var(--sk_yellow);
}
@keyframes fadeSomething {
    from{
        opacity: 0;
    }
    to{
        opacity: 1;
    }
}
@keyframes fadeInLeft {
    from{
        opacity: 0;
        filter: blur(2px);
        transform: translateX(-50%);
    } 
    to{
        opacity: 1;
        filter: blur(0);
        transform: translateX(0);
    }
}
@keyframes fadeInUp {
    from{
        opacity: 0;
        filter: blur(2px);
        transform: translateY(-5%);
    } 
    to{
        opacity: 1;
        filter: blur(0);
        transform: translateY(0);
    }
}
@media screen and (max-width:900px){
   header nav{
    padding: 0;
    flex-direction: column;
    }
    .logo_container{
        width: 100%;
        padding: 0 2rem;
    }
    header nav ul{
        flex-direction: column;
        width: 100%;
        background-color: #fbfbfb;
        display: none;
    }
    header nav ul li{
        width: 100%;
        text-align: center;
    }
    .menu{
        top: 2%;
        display: flex;
    }
    header{
        min-height: 40vh;
    }
    .my_sections{
        padding: 5rem 2rem;
        min-height: 50vh;
    }
    .sub_sections{
        gap: 1rem;
    }
    .text_container p{
        font-size: 2rem;
        letter-spacing: .2rem;
    }
    .services_container{
        padding: 5rem;
    }
    .service_cart{
        padding: 1rem;
        text-align: center;
      
    }
    .tool_carts_container{
        grid-template-columns: repeat(4,1fr);
    }
    .portfolio_container{
        grid-template-columns: repeat(2,1fr);
    }
    .uiux_design_portfolio{
        grid-template-columns: repeat(2,1fr);
        height: auto;
    }
    .toggleImage img{
        width: 80%;
    }
}
@media screen and (max-width:500px) {
    .sub_sections{
        grid-template-columns: 1fr;
    }
    .text_container p{
        font-size: 1.6rem;
        letter-spacing: .2rem;
    }
    .services_container{
        padding: 2rem;
        grid-template-columns: 1fr;
    }
    .service_cart{
        padding: 1rem;
        text-align: center;
        height: 20rem;
    }
    .tool_carts_container{
        grid-template-columns: repeat(3,1fr);
        padding: 0;
    }
    .portfolio_container{
        grid-template-columns:1fr;
    }
    .uiux_design_portfolio{
        grid-template-columns: 1fr;
    }
    .contact_form_container{
        grid-template-columns: 1fr;
    }
    .toggleImage img{
        width: 95%;
    }
}
</style>