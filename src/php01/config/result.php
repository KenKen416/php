<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$item = htmlspecialchars($_POST['item'], ENT_QUOTES);
$num  = htmlspecialchars($_POST['num'], ENT_QUOTES);
print "私の名前は" . $name . "<br>";
print "希望商品は$item" . "<br>";
print "注文数は$num" . " <br>";
