<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "TF\n";
    } elseif ($i % 5 == 0) {
        echo "Five\n";
    } elseif ($i % 3 == 0) {
        echo "Three\n";
    } else {
        echo $i . "\n";
    }
}
