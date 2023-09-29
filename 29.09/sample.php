<?php //<? znacznik otwierajacy phpa

//typ boolean - prawda falsz, $ oznacza zmienną
$b1 = true;
$b2 = false;

//typ integer
$i1 = 2137; //decimal
$i2 = 0x45; //hex
$i3 = 0420; //octal
$i4 = 0b1000101; //binary

//typ float
$f1 = 69.420;

//typ string
$s1 = 'Sample 1';
$s2 = "Sample 2 $i1";

//heredoc
$s3 = <<<LABEL
    dsadasdasdasdasdsad[]
    sadasdsadasd
    asdadasdadad
LABEL;

    //nowdoc
    $s4 = <<<"NOW"
        adasdadasda
        sadadasdas
        asdadasda
NOW;

echo "dsadasdada";

echo "<br />";

echo $s1;

    //typy tablicowe
    $arr = ['ddsada',1231312, 3.123];

    //tablica asocjacyjna
    $asoc = [
        'k1' => 84342,
        'q2' => 'hrehg322gh',
        5 => 3.656
    ];

    //tablica tablic
    $arrofArr = [
        ['12',23123, 3.231],
        ['sadadas','dsadadad','asdadada']
    ];
    
    //typ obiektowy
    $o1 = new stdClass();
    $o1->attr = 8643834538;

    //funkcje 
    
    function f1(){
        echo "Hello world";
    }
    
    f1();

    function f2(): void {
        echo "Hello World!";
    }

    f2();

    function f3($a1, $a2){
        echo $a1 + $a2;
    }

    function f4(int $a1, int $a2): void
    {
        echo $a1 + $a2;
    }

    function f5(string $a): string { //kropka oznacza połączenie stringów ze sobą
        return $a . ' by f5()';
    }