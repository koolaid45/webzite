<?php
$directory = 'clips/';
$videos = array_diff(scandir($directory), array('..', '.')); // Get files in the "videos" directory excluding '.' and '..'

echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head><meta charset='UTF-8'><meta name='viewport' content='width=device-width, initial-scale=1.0'><title>Video List</title></head>";
echo "<body>";
echo "<h1>List of Videos</h1>";
echo "<ul class='video-list'>";

foreach ($videos as $video) {
    echo "<li class='video-item'>";
    echo "<strong>" . htmlspecialchars($video) . ":</strong> <span>" . htmlspecialchars($video) . "</span><br>";
    echo "<video controls><source src='$directory$video' type='video/mp4'>Your browser does not support the video tag.</video>";
    echo "</li>";
}

echo "</ul>";
echo "</body></html>";
?>
