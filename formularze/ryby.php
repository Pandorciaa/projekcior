<?php
include_once __DIR__ . "/../laczenie_z_baza.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../style1.css">
</head>
<body>
<header>
    <h1>Tu dodajesz swoją rybcie do bazy!</h1>
    <nav>
        <a href="./kolor.php">kolory</a>
        <a href="./../index.php">Strona główna</a>
        <a href="./gatunek.php">gatunki</a>
    </nav>
    </header>
    <main>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <label for="imie">podaj imie</label>
        <input type="text" name="imie">
        <label for="data">podaj date urodzenia</label>
        <input type="date" name="data">
        <p>rozmiar rybki</p>
        <label for="maly">mała</label>
        <input type="radio" name="rozmiar" id="maly" value="mała">
        <label for="sredni">średnia</label>
        <input type="radio" name="rozmiar" id="sredni" value="średnia">
        <label for="duzy">duża</label>
        <input type="radio" name="rozmiar" id="duzy" value="duża">
        <p>
            kolor
        </p>
        <input list="kolory" name="kolory">
        <datalist id="kolory">
            <?php
            $wynik=$conn->query("select * from kolory");

            while ($row = $wynik->fetch_assoc()) {
                echo '<option value="' . $row['id'] . '">'. $row['kolor'] .'</option>';
            }
            ?>
        </datalist>
        <p>gatunek</p>
        <input list="gatunek" name="gatunek">
        <datalist id="gatunek">
            <?php
            $wynik=$conn->query("select * from gatunek");

            while ($row = $wynik->fetch_assoc()) {
                echo '<option value="' . $row['id'] . '">'. $row['gatunek'] .'</option>';
            }
            ?>
        </datalist>

        <button type="submit">zatwierdź</button>
        </form>
        <?php 
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $stmt=$conn->prepare("insert into ryby (imie, data_ur, rozmiar, kolor, gatunek) values (?,?,?,?,?)");
        $stmt->bind_param("sssii", $_POST['imie'], $_POST['data'], $_POST['rozmiar'], $_POST['kolory'], $_POST['gatunek']);
        if ( $stmt->execute()){
            echo 'działa';
        }else{
            echo 'nie działa';
        }
        };
        ?>
        <div class="zdjecie">
                <img src="./../rybka.png" alt="Rybka">
                <p>rybka</p>
        </div>
</main>
</body>
</html>