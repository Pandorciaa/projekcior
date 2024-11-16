<?php
include_once __DIR__ . "/../laczenie_z_baza.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../style3.css">
</head>
<body>
<header>
    <h1>Tu dodajesz gatunek swojej rybuni!</h1>
    <nav>
        <a href="./ryby.php">Dodaj moją rybę</a>
        <a href="./../index.php">Strona główna</a>
        <a href="./kolor.php">kolory</a>
    </nav>
    </header>
    <main>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <label for="gatunek">wpisz gatunek</label>
        <input type="text" name="gatunek">
        <button type="submit">zatwierdź</button>
        </form>
        
        <?php 
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $gatunek=$_POST['gatunek'];
        $kwerenda="insert into gatunek(gatunek) values ('$gatunek')";
        if($conn->query($kwerenda)){
            echo 'dodano';
        } else {
           echo 'nie dodano :(';
        }
        };
        ?>
        <div class="galeria">
        <h2>Przykładowe zdjęcia rybek w moim akwarium</h2>
            <div class="zdjecia">
                <div class="zdjeciaa">
                <img src="./../glonojad.jpg" alt="Rybka">
                <p>glonojad</p>
                </div>
                <div class="zdjeciaa">
                <img src="./../gupik.jpg" alt="Rybka">
                <p>gupik</p>
                </div>
                <div class="zdjeciaa">
                <img src="./../bojownik.jpg" alt="Rybka">
                <p>bojownik</p>
    </div>
    </div>
    </main>
</body>
</html>