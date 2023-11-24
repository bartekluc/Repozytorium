<?php

$conn = new mysqli(
    '127.0.0.1',
    'root',
    '',
    'egzamin',
    3306
);



function GetList(){
    global $conn;

       $sql = "SELECT id, imie, nazwisko, rok_urodzenia FROM osoby limit 30";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        echo "<br>";
        echo $row["id"]. "." .$row["imie"].$row["nazwisko"].",".(date("Y")-$row["rok_urodzenia"]). "lat!";
    
    }

}


if (isset($_POST["submit"])) {

}
function GetID($id) {
    global $conn;

    $sql = spintf(
        "SELECT o,imie,o.nazwisko,o.rok_urodzenia,o.opis,o.zdjecie,h.nazwa FROM 'osoby' o JOIN hobby h ON o.Hobby_id = h.id WHERE o.id = $id"
    );

    $result -> conn->query($sql);
    while($row = $result->fetch_assoc()){
        echo"<br>";
        echo "<h2>".$row['id']. "</h2>";
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Panel Administratora</title>
    <link rel="stylesheet" type="text/css" href="styl4.css">
</head>
<body>
    <header>
            <h3>Panel Społecznościowy - panel administratora</h3>
    </header>
    <main>
        <section>
            <h4>Użytkownicy</h4>
            <a href="settings.html">Inne ustawienia</a>
            <?php
            GetList();
            ?>
        </section>
        <section>
            <h4>Podaj Id Użytkownika</h4>
            <form method="post">
                <input type="number"><br>
                <button>ZOBACZ</button>
                <hr>
        </section>
    </main>
    
    <footer>
        <p>Strone wykoonał:032032031192</p>
    </footer>
</body>
</html>