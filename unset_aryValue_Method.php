<?php
$ary = ["One","Two","Three","Four","Five"];
echo "<pre>".print_r($ary,true)."</pre>";
unset($ary[0]);
echo "<hr>";
echo "<pre>".print_r($ary,true)."</pre>";
unset($ary[1]);
echo "<hr>";
echo "<pre>".print_r($ary,true)."</pre>";
$aa = array_values($ary);
echo "<hr>";
echo "<pre>".print_r($aa,true)."</pre>";