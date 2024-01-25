<?php

$conn = new mysqli(
    '127.0.0.1',
    'root',
    '',
    'egzamin5',
    3306
);
    function skrypt1(){
        $sql1 = "SELECT miesiac,rok FROM zadania WHERE dataZadania = '2020-07-01'";
        $result = $conn->query($sql1);
        while ($row = $result->fetch_assoc()) {
            echo "miesiac: ". $row['miesiac']. ",rok" .$row['rok'];
        }
        $result->free_result();
    }

    function skrypt2(){
        global $conn;
        $sql2 = "SELECT dataZadania, wpis FROM zadania WHERE miesiac = 'lipiec'";
        $result = mysqli_query($conn,$sql2);
        while ($row = $result->fetch_assoc()){
            echo "<section><h5>".$row['dataZadania']."</h5><p>".$row['wpis']."</p></section>";
        }
    }

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mój kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
  
    <section id="baner1">
    <div>
        <img src="logo1.png" alt="logo">
    </div>
        
    </section>

        <section id="baner2">
                <h1>KALENDARZ</h1>
        </section>

    <main>
        <section>

        </section>
    </main>
    <footer>
            <form action="post">
                dodaj wpis <input type="text"></input>
                <button id="btn">DODAJ</button>
            </form>
            <p>Stronę wykonał: Bartłomiej Łuć</p>
    </footer>
</body>
</html>