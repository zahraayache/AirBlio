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
            <a href="#Indicateurs" >Indicateurs</a>
            <div class="dropdown">
                <a href="#Interventions" style="cursor: pointer; font-weight:bold">Interventions</a>
                <div class="dropdown-content">
                    <a href="./Interventions_Details.php" style="position:relative; float:left; font-weight:bold">Détails</a> <a href="./Interventions_Carte.php" style="position:relative; float:left">Carte</a>
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
        <p class="titre">Les équipes d'Interventions</p>
    </div>

     <!-- table -->
     <div style="display: flex; justify-content: center;margin-top:50px">
        <table class="table" id="objet_connecte">
            <thead>
                <tr>
                    <th></th>
                    <th scope="col">Equipe</th>
                    <th scope="col">Status</th>
                    <th scope="col">Position</th>
                    <th scope="col">Dispo dans...</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th><img src="../../Images/team.png" class="team_pic"/></th>
                    <th scope="row">Equipe 1</th>
                    <td>En Intervention</td>
                    <td>Mer Rouge</td>
                    <td><div class="intervention_orange" > 3 Jours</div></td>
                </tr>
                <tr>
                    <th><img src="../../Images/team.png" class="team_pic"/></th>
                    <th scope="row">Equipe 2</th>
                    <td>En Transit</td>
                    <td>Vers Marseille</td>
                    <td><div class="intervention_jaune" > 1 Jours</div></td>
                </tr>
                <tr>
                    <th><img src="../../Images/team.png" class="team_pic"/></th>
                    <th scope="row">Equipe 3</th>
                    <td>En Intervention</td>
                    <td>La Catiniere</td>
                    <td><div class="intervention_orange" > 4 Jours</div></td>
                </tr>
                <tr>
                    <th><img src="../../Images/team.png" class="team_pic"/></th>
                    <th scope="row">Equipe 4</th>
                    <td>Disponible</td>
                    <td>Base Nante</td>
                    <td><div class="intervention_vert" > Maintenant</div></td>
                </tr>
                <tr>
                    <th><img src="../../Images/team.png" class="team_pic"/></th>
                    <th scope="row">Equipe 5</th>
                    <td>En Intervention</td>
                    <td>Rome</td>
                    <td><div class="intervention_jaune" > 2 Jours</div></td>
                </tr>
                <tr>
                    <th><img src="../../Images/team.png" class="team_pic"/></th>
                    <th scope="row">Equipe 6</th>
                    <td>Disponible-congé</td>
                    <td>N/A</td>
                    <td><div class="intervention_rouge" > 5 Jours</div></td>
                </tr>
                <tr>
                    <th><img src="../../Images/team.png" class="team_pic"/></th>
                    <th scope="row">Equipe 7</th>
                    <td>En Intervention</td>
                    <td>Bastia</td>
                    <td><div class="intervention_orange" > 3 Jours</div></td>
                </tr>
                <tr>
                    <th><img src="../../Images/team.png" class="team_pic"/></th>
                    <th scope="row">Equipe 8</th>
                    <td>En Intervention</td>
                    <td>Lime</td>
                    <td><div class="intervention_orange" > 3 Jours</div></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Les materiels -->
    <div class="description">
        <p class="titre">Les Matériels</p>
    </div>
</body>

</html>