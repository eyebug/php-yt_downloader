<?php
require(__DIR__ . '/../youtube-dl.class.php');
try {
    new yt_downloader("https://www.youtube.com/watch?v=MsRxMAfYk0Q1", TRUE, "audio");
}
catch (Exception $e) {
    die($e->getMessage());
}
