<?php 
function connectiondb(){
    $basi = mysqli_connect('localhost', 'root', '', 'bambo');
    if (!$basi) {
        die("Erreur de connexion : " . mysqli_connect_error());
    }
    return $basi;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Drone</title>
    <link rel="stylesheet" href="hom.css">
</head>
<body>
    <aside class="sidebar">
        <h2>MediDrone</h2>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="drones.php">Drones</a></li>
            <li><a href="reports.php">Reports</a></li>
            <li><a href="alerts.php">Alerts</a></li>
            <li><a href="team.php">Team</a></li>
            <li class="logout"><a href="logout.php">Logout</a></li>
        </ul>
    </aside>

    <main class="content">
        <h1>Drones</h1>
        <div class="drone-list" id="droneList">
            <!-- Drones will be loaded here by JS -->
        </div>
    </main>

    <script src="script.js"></script>
</body>
</html>
