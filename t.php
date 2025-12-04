<?php
    for( $x = 0; $x < 10 ; $x++ ){
        if ($x % 2 == 0){
            echo $x;
            echo "<br>";

        }
    }
?>
<br><br><br>
<?php
    $x = 0;
while ($x < 10) {
    if ( $x % 2 == 0 ){
  echo $x;

    }
      $x++;
}

?>

<br><br><br><br><br><br><br><br><br><br><br><br>
<?php
$n=7;
for ( $i = 1; $i <= $n ; $i++ ) {
            for ($j = 1; $j <= $n; $j++){
                if ( $j % 3 == 0) {
                    echo "*";
                }else{
                    echo $j;
                }
            }
            echo "<br>";
        }


?>
<br><br><br><br><br><br><br><br><br>
<?php

$primeCount = 0;
$perfectSquareCount = 0;
$evenDivBy8Count = 0;


function isPrime($num) {
    if ($num < 2) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {

                if ($num % $i == 0){
                     return false;
                }
            }
        return true;
}

for ($i = 1; $i <= 500; $i++) {

            if (isPrime($i)) {

                    $primeCount++;

        }
            if (sqrt($i) == floor(sqrt($i))) {

                        $perfectSquareCount++;

    }

    if ($i % 8 == 0) {
        $evenDivBy8Count++;
    }
}

echo "Prime numbers: $primeCount <br>";
echo "Perfect squares: $perfectSquareCount <br>";
echo "Even & divisible by 8: $evenDivBy8Count <br>";

?>

