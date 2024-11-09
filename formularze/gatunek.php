<?php
include_once __DIR__ . "/../laczenie_z_baza.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
    <h1>Tu dodajesz gatunek swojej rybuni!</h1>
    <nav>
        <a href="./formularze/ryby.php">Dodaj moją rybę</a>
        <a href="./../index.php">Strona główna</a>
        <a href="./formularze/kolor.php">kolory</a>
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
    </main>
</body>
</html>