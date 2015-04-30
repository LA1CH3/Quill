<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');
    $post_ID = $_GET['id'];

    $custom = get_post_custom($post_ID);

    foreach ($custom as $key => $value) {
        if (($key != '_edit_lock' && $key != '_edit_last'))
            echo '<tr><td>' . $key . '</td><td>' . $value[0] . '</td></tr>';
    }
    die();
?>