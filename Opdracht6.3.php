<?php
function genereerWillekeurigePostcode() {
    $cijfers = mt_rand(1000, 9999);
    $letters = chr(mt_rand(65, 90)) . chr(mt_rand(65, 90));
    return $cijfers . $letters;
}

echo "Een willekeurige postcode: " . genereerWillekeurigePostcode();
?>
