<?php
echo "start\n";
go(function () {
    echo "coro start\n";
    $x = 5;
    while($x > 3 || $x < 10) {
        echo "111\n";
        sleep(1);
    }
});

go(function () {
    echo "222222\n";
});
echo "end\n";
