<?php
include_once __DIR__ . "/../laczenie_z_baza.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../style2.css">
</head>
<body>
<header>
    <h1>Tu dodajesz kolor swojej rybuni!</h1>
    <nav>
        <a href="./ryby.php">Dodaj moją rybę</a>
        <a href="./../index.php">Strona główna</a>
        <a href="./gatunek.php">gatunki</a>
    </nav>
    </header>
    <main>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <label for="kolor">wpisz kolor</label>
        <input type="text" name="kolor">
        <button type="submit">zatwierdź</button>
        </form>
        <?php 
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $kolor=$_POST['kolor'];
        $kwerenda="insert into kolory(kolor) values ('$kolor')";
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