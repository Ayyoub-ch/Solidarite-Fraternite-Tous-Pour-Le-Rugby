<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Solidarité Fraternité "Tous pour le Rugby"</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

<?php include('inc/header.inc'); ?>

<main>
<?php
if (isset($_GET['action'])) {
    $page = $_GET['action'];
    $allowed = ['actusrugby', 'images', 'insertion_rugby', 'notre_assoc', 'projet_sportif', 'rugby_pour_tous', 'rugby_solidaire', 'solidarite_fraternite_tous_pour_le_rugby', 'women_rugby'];

    if (in_array($page, $allowed)) {
        include('pages/' . $page . '.php');
    } else {
        echo '<p>Page introuvable.</p>';
    }
} else {
    include('pages/solidarite_fraternite_tous_pour_le_rugby.php');
}
?>
</main>

<?php include('inc/footer.inc'); ?>

</body>
</html>
