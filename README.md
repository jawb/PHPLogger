
#PHPLogger

###Example :
```
<?php
include("log.php");

function abc($i){
    echo $i;
}
$name = "sth";
$arr = array("one","two",3);

$console->log($name,$arr,0.55,12,true,false);
$console->warn(144,false);
$console->info("Aa99._-jkg?yif`'@'");
$console->error(abc,false);
?>
```

###Console
```
  | sth ["one", "two", 3] 0.55 12 true false
! | 144 false
  | Aa99._-jkg?yif`'@'
X | ▼ abc false
  |   (anonymous function)
```
