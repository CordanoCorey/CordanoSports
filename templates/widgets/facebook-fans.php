<?php

$page_id = "YOUR PAGE-ID";
$xml = @simplexml_load_file("http://api.facebook.com/restserver.php?method=facebook.fql.query&query=SELECT%20fan_count%20FROM%20page%20WHERE%20page_id=".$page_id."") or die ("a lot");
$fans = $xml->page->fan_count;
echo $fans;