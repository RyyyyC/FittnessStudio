<?php

    error_reporting(0);
    session_start();
    $_SESSION['numer-karty'] = $_POST['numer-karty'];
    $_SESSION['cvc'] = $_POST['cvc'];
    $_SESSION['data-karta'] = $_POST['data-karta'];
    $_SESSION['imie-nazwisko-karta'] = $_POST['imie-nazwisko-karta'];
    
    //echo $_SESSION['data-rozpoczecia'];
    //echo $_SESSION['imie'];
    //echo $_SESSION['kosztKarnet'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rationale">
		<link rel="stylesheet" href="style.css" type="text/css" /> 
		<link href="animations.css" rel="stylesheet" type="text/css" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <div class="Naglowek">
		<div style="width: 70vw;">
			<p id = "Logo">FITNESSSTUDIO</p>
		</div>
		<div style="display:flex; justify-content: right;">
			<p id="Podstrona"><a href="LoggedUser.php">STRONA GLOWNA</a></p>
			<p id="Podstrona2">O NAS</p>
			<p id="Podstrona3"><a href="Passes.php">KUP KARNET</a></p>
			<p id="Podstrona4"><a href="backend/log-out.php">WYLOGUJ</a></p>
		</div>
	</div>
	<div class="Naglowek2">
		<img id="Ikona" src="grafiki/twitter.png" >
		<img id="Ikona" src="grafiki/instagram.png" >
		<img id="Ikona" src="grafiki/facebook.png" >
	</div>
    <div class="Proces">
        <div class="box">
            <p class="tekst-box two-line">WYBIERZ KARNET</p>
        </div>
        <div class="strzalka"> --- </div>
        <div class="box">
            <p class="tekst-box two-line">DANE KONTAKTOWE</p>
        </div>
        <div class="strzalka"> --- </div>
        <div class="box">
            <p class="tekst-box">PLATNOSC</p>
        </div>
        <div class="strzalka"> --- </div>
        <div class="box">
            <p id="processing" class="tekst-box">GOTOWE</p>
        </div>
    </div>
    <div class="Glowna_5">
        <div class="LewyBok">
            <section class="Animacja5">
                <svg width="513" height="646" viewBox="0 0 513 646" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M504.166 0.209473H5.43274V319.304H504.166V0.209473Z" fill="#3F3D56"/>
                    <path d="M489.984 57.8237H265.436V319.009H489.984V57.8237Z" fill="#6C63FF"/>
                    <path d="M477.574 82.126H341.386V87.6175H477.574V82.126Z" fill="white"/>
                    <path d="M477.574 94.2075H341.386V99.699H477.574V94.2075Z" fill="white"/>
                    <path d="M387.514 106.289H341.386V111.78H387.514V106.289Z" fill="white"/>
                    <path d="M197.915 200.225H61.7263V205.716H197.915V200.225Z" fill="white"/>
                    <path d="M197.915 212.306H61.7263V217.797H197.915V212.306Z" fill="white"/>
                    <path d="M107.855 224.387H61.7263V229.878H107.855V224.387Z" fill="white"/>
                    <path d="M445.665 149.491H309.476V154.982H445.665V149.491Z" fill="white"/>
                    <path d="M445.665 161.572H309.476V167.063H445.665V161.572Z" fill="white"/>
                    <path d="M445.665 173.39H309.476V178.882H445.665V173.39Z" fill="white"/>
                    <path d="M445.665 185.208H309.476V190.7H445.665V185.208Z" fill="white"/>
                    <path d="M445.665 197.027H309.476V202.518H445.665V197.027Z" fill="white"/>
                    <path d="M445.665 208.845H309.476V214.337H445.665V208.845Z" fill="white"/>
                    <path d="M445.665 220.664H309.476V226.155H445.665V220.664Z" fill="white"/>
                    <path d="M445.665 232.482H309.476V237.973H445.665V232.482Z" fill="white"/>
                    <path d="M445.665 244.3H309.476V249.792H445.665V244.3Z" fill="white"/>
                    <path d="M445.665 256.119H309.476V261.61H445.665V256.119Z" fill="white"/>
                    <path d="M445.665 267.937H309.476V273.428H445.665V267.937Z" fill="white"/>
                    <path d="M179.446 112.906C179.454 120.305 177.804 127.611 174.616 134.288C171.429 140.964 166.785 146.842 161.027 151.487C158.897 153.217 156.626 154.765 154.237 156.114C152.796 156.933 151.312 157.677 149.794 158.342C144.76 160.563 139.388 161.924 133.904 162.366C132.557 162.478 131.196 162.533 129.821 162.531C127.1 162.534 124.385 162.311 121.702 161.864C120.756 161.716 119.822 161.533 118.901 161.32C117.289 160.962 115.697 160.52 114.132 159.996C107.694 157.849 101.767 154.402 96.7175 149.868C95.4168 148.715 94.1836 147.488 93.0243 146.193C87.6212 140.219 83.7535 133.019 81.7555 125.216C79.7575 117.413 79.6891 109.241 81.5563 101.405C83.4235 93.5697 87.1701 86.3066 92.4726 80.2431C97.775 74.1796 104.474 69.4982 111.99 66.603C119.507 63.7079 127.616 62.6862 135.615 63.6261C143.615 64.566 151.266 67.4393 157.907 71.9978C164.548 76.5563 169.979 82.663 173.732 89.7903C177.484 96.9177 179.446 104.851 179.446 112.906V112.906Z" fill="#6C63FF"/>
                    <path d="M503.87 139.961C481.93 139.961 460.887 148.677 445.373 164.191C429.858 179.706 421.142 200.748 421.142 222.689V222.689C421.142 229.115 418.59 235.277 414.046 239.821C409.503 244.364 403.34 246.917 396.915 246.917H356.732C347.265 246.917 337.891 248.781 329.144 252.404C320.397 256.027 312.45 261.338 305.756 268.032C299.061 274.726 293.751 282.674 290.128 291.42C286.505 300.167 284.641 309.541 284.641 319.008V319.009H503.87V139.961H503.87Z" fill="#3F3D56"/>
                    <path d="M259.822 0.209473H249.186V319.304H259.822V0.209473Z" fill="#2F2E41"/>
                    <path d="M433 559C477.183 559 513 513.781 513 458C513 402.219 477.183 357 433 357C388.817 357 353 402.219 353 458C353 513.781 388.817 559 433 559Z" fill="#F2F2F2"/>
                    <path d="M492.655 390C510.07 441.225 491.164 500.502 450.427 522.401C418.734 539.438 381.928 529.112 359 496.75C376.413 547.976 423.553 571.752 464.291 549.856C505.028 527.96 523.936 468.683 506.524 417.457C503.246 407.684 498.574 398.437 492.655 390Z" fill="#E6E6E6"/>
                    <path d="M433.5 437H433.737L438 646H429L433.5 437Z" fill="#CCCCCC"/>
                    <path d="M239.5 589.405C265.181 589.405 286 559.989 286 523.702C286 487.416 265.181 458 239.5 458C213.819 458 193 487.416 193 523.702C193 559.989 213.819 589.405 239.5 589.405Z" fill="#F2F2F2"/>
                    <path d="M274.174 479.467C284.297 512.79 273.308 551.351 249.63 565.597C231.208 576.68 209.815 569.962 196.488 548.91C206.609 582.233 234.009 597.701 257.688 583.457C281.366 569.213 292.357 530.652 282.236 497.328C280.33 490.971 277.615 484.956 274.174 479.467Z" fill="#E6E6E6"/>
                    <path d="M239.791 510.042H239.928L242.406 646H237.175L239.791 510.042Z" fill="#CCCCCC"/>
                    <path d="M80 559C124.183 559 160 513.781 160 458C160 402.219 124.183 357 80 357C35.8172 357 0 402.219 0 458C0 513.781 35.8172 559 80 559Z" fill="#F2F2F2"/>
                    <path d="M139.655 390C157.07 441.225 138.164 500.502 97.4275 522.401C65.734 539.438 28.9281 529.112 6 496.75C23.4129 547.976 70.5531 571.752 111.291 549.856C152.028 527.96 170.936 468.683 153.524 417.457C150.246 407.684 145.574 398.437 139.655 390Z" fill="#E6E6E6"/>
                    <path d="M80.5 437H80.7366L85 646H76L80.5 437Z" fill="#CCCCCC"/>
                </svg>
            </section>
        </div>
        <div class="PrawyBok">
            <div class="PrawyBokCalosc">
                <div class="Podsumowanie">
                    <div class="napisPodsumowanie">
                        <p class="tekstPodsumowanie">PODSUMOWANIE:</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>