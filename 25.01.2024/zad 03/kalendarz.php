<?php

$conn = new mysqli(
    '127.0.0.1',
    'root',
    '',
    'egzamin5',
    3306
);
    function skrypt1(){
        global $conn;
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
            echo "<section class='day'><h5>".$row['dataZadania']."</h5><p>".$row['wpis']."</p></section>";
        }
        $result->free_result();
    };

        function skrypt3(){
            global $conn;
            $sql3 = "SELECT DISTINCT miesiac FROM zadania WHERE miesiac LIKE 'L%'";
            $result = mysqli_query($conn, $sql3);
            $result->free_result();
        }
        function skrypt4(){
            global $conn;
            $wpis = $_POST['text'];
            $sql3= "UPDATE zadania SET wpis = '$wpis' WHERE dataZadania = '2020-07-13'";
            mysqli_query($conn,$sql3);
        };
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
        <?=skrypt4();?>
    <section id="baner1">
    <div>
        <img src="logo1.png" alt="logo">
    </div>
        
    </section>

        <section id="baner2">
                <h1>KALENDARZ</h1>
                <?php
                skrypt1();
                ?>
        </section>

    <main>
       <?php
       skrypt2();
       ?>
    </main>
    <footer>
            <form method="post">
                dodaj wpis <input type="text" name="text"></input>
                <button id="btn">DODAJ</button>
            </form>
            <p>Stronę wykonał: Bartłomiej Łuć</p>
    </footer>
</body>
</html>