<?php
class chef{

}

class officier extends chef{

}
$a=new chef;
$b=new officier;

var_dump($a instanceof officier);
var_dump($b instanceof officier);