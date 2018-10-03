<?php
require(__DIR__ . '/../youtube-dl.class.php');
try {
    new yt_downloader("https://www.youtube.com/watch?v=MsRxMAfYk0Q", TRUE);
} catch (Exception $e) {
    die($e->getMessage());
}
