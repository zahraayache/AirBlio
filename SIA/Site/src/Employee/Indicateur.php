<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="../styles.css?version=3.1">
    <link rel="icon" href="../../Images\fav_icon.jpeg" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.bootcss.com/flag-icon-css/2.8.0/css/flag-icon.css" rel="stylesheet" />

    <script>
        
    </script>

</head>

<body>


    <!-- menu bar -->
    <div id="topmenu">
            <img class="imgtopmenu" src="../../Images/logo.png"> 
            <a href="#Indicateurs" style="font-weight: bold;">Indicateurs</a>
            <div class="dropdown">
                <a href="#Interventions" style="cursor: pointer;">Interventions</a>
                <div class="dropdown-content">
                    <a href="./Interventions_Details.php" style="position:relative; float:left">Détails</a> <a href="./Interventions_Carte.php" style="position:relative; float:left">Carte</a>
                </div>
            </div>
            
            <a href="#service">Service d'assistance</a>
            <a href="#Support">Support</a>
            <svg id="profile" width="68" height="69" viewBox="0 0 68 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M34 0C49.0601 0 61.2 12.3185 61.2 27.6C61.2 42.8815 49.0601 55.2 34 55.2C18.94 55.2 6.80005 42.8815 6.80005 27.6C6.80005 12.3185 18.94 0 34 0ZM34 10.6033C38.9175 10.6033 42.9129 14.6575 42.9129 19.6473C42.9129 24.637 38.9175 28.5352 34 28.5352C29.0826 28.5352 25.0872 24.637 25.0872 19.6473C25.0872 14.6575 29.0826 10.6033 34 10.6033ZM16.4813 43.193C20.4767 36.7998 26.931 32.5897 34 32.5897C41.2228 32.5897 47.5233 36.7998 51.6723 43.193C47.2158 48.3387 40.7612 51.3017 34 51.3017C27.2389 51.3017 20.7838 48.3391 16.4813 43.193Z" fill="white"/>
            </svg>
    </div>
   
    <!-- Contenu -->
    <div class="description">
        <p class="titre">Veuillez trouvez la liste des Indicateurs des Objects Connectés de tous les clients</p>
    </div>

     <!-- table -->
     <div style="display: flex; justify-content: center;margin-top:50px">
        <table class="table" id="objet_connecte">
            <thead>
                <tr>
                    <th scope="col">Object Connectés</th>
                    <th scope="col">Machines</th>
                    <th scope="col">Client</th>
                    <th scope="col">Localisation</th>
                    <th scope="col">Appel d'une mise a jour</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Airbodul</th>
                    <td>AirBlioSonnar</td>
                    <td>Monsieur X</td>
                    <td>Nice</td>
                    <td>Oui <input type="button" class="demande-MAJ" value="Envoyer equipe" /></td>
                </tr>
                <tr>
                    <th scope="row">AirScanaire</th>
                    <td>AirBlioScanner</td>
                    <td>Monsieur X</td>
                    <td>Nante</td>
                    <td>Oui <input type="button" class="demande-MAJ"  value="Envoyer equipe" /></td>
                </tr>
                <tr>
                    <th scope="row">Airbodul</th>
                    <td>AirBlioSoudure</td>
                    <td>Monsieur X</td>
                    <td>Nice</td>
                    <td>Non</td>
                </tr>
                <tr>
                    <th scope="row">Airbodul</th>
                    <td>AirBlioMicroscope</td>
                    <td>Monsieur X</td>
                    <td>Marseille</td>
                    <td>Non</td>
                </tr>
                <tr>
                    <th scope="row">Airbodul</th>
                    <td>AirBlioSoudure</td>
                    <td>Monsieur X</td>
                    <td>Nice</td>
                    <td>Non</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td colspan="4" style="float:right; padding-right:50px;color:gray"> 1-5 of 18
                        <>
                    </td>
                </tr>
            </tbody>
        </table>



    </div>
</body>

</html>