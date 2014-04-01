<?php

echo "<ul>"; 

foreach($menu as $name=>$link){ 
    echo "<li>"; 
    echo "<a href=\"$link\">$name</a><br>";  
    echo "</li>"; 
} 

echo "</ul>"; 