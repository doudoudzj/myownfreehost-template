<?php
if (!defined('IN_SYS')) {
    // exit('禁止访问');
    header("Location: ../../payment-methods.php");
    exit;
}

$title = $title . ' - ' . I18N('payment_methods');
