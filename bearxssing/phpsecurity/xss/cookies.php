<?php

$week = new DateTime('+1 week');
#setcookie('key', 'value', $week->getTimestamp());
setcookie('key', 'value', $week->getTimestamp(), '/', null, null, true);

setcookie('user_id', '1', $week->getTimestamp());
