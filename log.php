<?php
class console {
     function __call($name, $args) {
         if(!in_array($name, array("error","log","info","warn"))) return;
         echo '<script type="text/javascript">';
         $log = "";
         foreach($args as $var) {
             if (is_object($var) || is_array($var)) $log .= json_encode($var).",";
             elseif (is_string($var)) $log .= '"'.$var.'",';
             elseif (is_bool($var)) {
                 $var = ($var)?"true,":"false,";
                 $log .= $var;
             }
             else $log .= $var.",";
         }
         $log = substr($log, 0,-1);
         echo "console.$name(".$log.");";
         echo '</script>';
     }
}

$console = new console();
?>
