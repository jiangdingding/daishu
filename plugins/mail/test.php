<?php
/**
 * @author Tissot.Cai
 * @copyright ´ûÊóÍø
 * @version 1.0
 */
include_once 'mail.php';

if (Mail::send($subject, $body, $from, $from_name, $to)) {
    echo '·¢ËÍ³É¹¦£¡';
}
else{
    echo Mail::$msg;
}
?>
