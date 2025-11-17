<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Primzahlen und Logarithmus</title>
</head>
<body>
<h2>Aufgabe 1: Primzahlen</h2>
<!-- Formular für Zahleneingabe -->
<form method="post">
    <input type="number" name="zahl" value="<?php echo isset($_POST['zahl']) ? $_POST['zahl'] : 50; ?>">
    <button type="submit" name="berechne_prim">Berechnen</button>
</form>

<?php
// Prüfen ob Button geklickt wurde
if (isset($_POST['berechne_prim'])) {
    $n = $_POST['zahl'];
    echo "<p>Primzahlen von 1 bis $n:</p>";

    // Alle Zahlen von 2 bis n durchgehen
    for ($num = 2; $num <= $n; $num++) {
        $istPrim = true;

        // Zahl durch alle Zahlen von 2 bis n/2 teilen
        for ($i = 2; $i <= $num / 2; $i++) {
            // Wenn teilbar, dann keine Primzahl
            if ($num % $i == 0) {
                $istPrim = false;
                break;
            }
        }

        // Wenn Primzahl, dann ausgeben
        if ($istPrim) {
            echo $num . "<br>";
        }
    }
}
?>

<hr>

<h2>Aufgabe 2: Logarithmus</h2>
<form method="post">
    <button type="submit" name="berechne_log">Berechnen</button>
</form>

<?php
for ($n = 1; $n <= 100; $n++) {
    $logwert = log($n);          // natürlicher Logarithmus ln(n)
    $sterneAnzahl = (int)round($logwert * 10); // Skala: mal 10
    if ($sterneAnzahl < 1) {
        $sterneAnzahl = 1;       // damit wenigstens 1 Stern ausgegeben wird
    }
    
    // Sterne ausgeben
    for ($i = 0; $i < $sterneAnzahl; $i++) {
        echo "*";
    }

    echo "<br>";
}
?>
</body>
</html>
