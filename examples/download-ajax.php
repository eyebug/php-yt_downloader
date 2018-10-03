<?php
require(__DIR__ . '/../youtube-dl.class.php');
try {
    $url = urldecode($_POST['url']);
    $mytube = new yt_downloader($url, TRUE);

    $video = $mytube->get_video();
    $path_dl = $mytube->get_downloads_dir();

    clearstatcache();
    if ($video !== FALSE && file_exists($path_dl . $video)) {

        print "<a href='" . $path_dl . $video . "' target='_blank'>" . $mytube->get_video_title() . "</a>";
    } else {
        print "Oups. Something went wrong.";
    }
} catch (Exception $e) {
    die($e->getMessage());
}
