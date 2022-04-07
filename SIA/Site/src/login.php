<html>
    <head>
        <title>AirBlio</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
        <link rel="icon" href="../images\fav_icon.jpeg"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
	    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body id="body_login">
        <div id="fill" class="login" style="width:65%;">
            <img src="../images\sea_and_sky.jpg">
        </div>

        <div class="login" id="fill2" style="width: 35%;">
            <img src="../images\logo.png">
            <div id="loginForm">
                <p>
                    <label style="font-family: 'Roboto', sans-serif; font-weight: bold; font-size: 35px;">
                        Identifiez-vous!
                    </label>
                    <br>

                    <label class="identifiant">
                        Adresse-mail :
                    </label>
                    <br>

                    <input type="text" placeholder="john.doe@gmail.com" class="textbox"/>
                    <br>

                    <label class="identifiant">
                        Mot de passe :
                    </label>
                    <br>
                    <input type="password" placeholder="*******" class="textbox"/>
                    <br>

                    <input type="checkbox" checked="checked"> 
                    <label class="textcheck"> Se souvenir de moi</label>  
                    <label class="textcheck">
                        <a style="text-decoration: underline;">Mot de passe oublié ?</a>    
                    </label>
                    
                    <br>
                    <br>
                    <input type="button" class="connecter" value="Se connecter" style="background-color: #2C5282;">
                    <br>
                    <input type="button" class="connecter" value="Se connecter sans compte" style="  background-color: #CECECE;">
                    <br>
                    <div style="display: flex;
                    justify-content: center;
                    align-items: center;
                    overflow: hidden;">
                    <label class="textcheck">
                        
                            <a style="flex-shrink: 0; min-width: 100%;min-height: 100%; text-decoration: underline;">
                                Pas encore de compte ? Rejoignez l'aventure !
                            </a>
                        
                            
                    </label>
                    </div>
                </p>
            </div>
        </div>
    </body>
</html>