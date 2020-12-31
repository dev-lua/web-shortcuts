<?php 
$date = (new Datetime())->getTimestamp();
$today = strftime('%d de %B de %Y', $date);
loadTemplateView('sobre_nos', ['today' =>$today]);