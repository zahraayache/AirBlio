<?php
session_start();
    unset($_SESSION['userId']);
    unset($_SESSION['username']);
?>

<html>
    <head>
        <title>AirBlio</title>
        <link rel="stylesheet" type="text/css" href="styles.css?version=3.5"/>
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
                    <label style="font-family: 'Roboto', sans-serif; font-weight: bold; font-size: 25px;">
                        Identifiez-vous!
                    </label>
                    <br>

                    <label class="identifiant">
                        Adresse-mail :
                    </label>
                    <br>

                    <input id="email" type="text" placeholder="john.doe@gmail.com" class="textbox"/>
                    <br>

                    <label class="identifiant">
                        Mot de passe :
                    </label>
                    <br>
                    <input id="password" type="password" placeholder="*******" class="textbox"/>
                    <br>

                    <input type="checkbox" checked="checked"> 
                    <label class="textcheck"> Se souvenir de moi</label>  
                    <label class="textcheck">
                        <a style="text-decoration: underline;">Mot de passe oublié ?</a>    
                    </label>
                    
                    <br>
                    <br>
                    <input type="button" class="connecter" value="Se connecter" style="background-color: #2C5282;" onclick="loginFunction()">

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
        <script>
            function loginFunction() {	 
                var email = document.getElementById("email").value;
                var password = document.getElementById("password").value;
                var credentials = {
                    "email" : email,
                    "password" : password
                }
                
                var xhr = new XMLHttpRequest();
                
                xhr.open('POST', "http://localhost/SIA/Site/Apis/loginApi.php");
                                
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                                
                xhr.send("email=" + email + "&password=" + password);
                
                xhr.onreadystatechange = function(){
                    if (this.readyState == 4 && this.status == 200){
                        var data=JSON.parse(xhr.responseText); 
                        console.log(data.employee);
                        alert(data.employee.userId);
                            if(data.employee != ""){
                                if(data.employee[0].role == 4){
                                    window.location.href = "http://localhost/HayaiWebsite/4-Operator/ViewItems.php"
                                }
                                else if(data.employee[0].role == 2){
                                    window.location.href = "http://localhost/SIA/Site/src/employee/Indicateur.php"
                                } else {
                                    window.location.href = "http://localhost/SIA/Site/src/client/Client.php"
                                }
                            } else{
                                alert("No such user found!");
                                document.getElementById("email").focus();
                            }
                        }	
                    }		
            } 
        </script>
    </body>
</html>