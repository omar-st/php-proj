<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php

            echo date("l, F jS, Y") . "<br>";

            echo "<br><h2>";

            //declare var
            $age= 20;
            $name= null;

            //declare func
            function sum($x, $y) {
                $z = $x + $y;
                return $z;
                }
            function triangle($len) {
                $j = 0;
                for($i = 0; $i < $len; $i++) {
                    $j += $i;
                    echo "&emsp;&emsp;&emsp;", $j, "<br>";
                }
            }
            function prime_siv($lim, $i=2) {
                $primes = [];
                for($i; $i < $lim; $i++) {
                    foreach ($primes as $p) {
                        if ($i % $p === 0) {
                            continue 2; // Jumps directly to the next $i in the for-loop
                        }
                    }
                    $primes[] = $i;
                } return $primes;
            }

            function compare($offset) {
                return array_diff(prime_siv(100,$offset),prime_siv(100));
            }

            echo "<pre><br>&emsp;";
            print_r(compare(6));
            echo "</pre>";

            /*
            echo "<br><br>";
            echo sum(6,7);
            triangle(20);
            echo "<ul type='circle'>";
            $j = 0;
            for($i =0; $i <21 ;$i++){
                $j += $i;
                echo "<li>&emsp;&emsp;&emsp;", $j, "</li>";
                
            }
            echo "</ul>";

            prime_siv(100)
            */
        ?>
</body>
</html>