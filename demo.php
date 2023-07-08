<?php
//echo'demo is working';
$pages = glob('pages/*.php', GLOB_BRACE);
foreach ($pages as $page) {
    echo str_replace('.php', '', (str_replace('pages/', '', $page)));
}
