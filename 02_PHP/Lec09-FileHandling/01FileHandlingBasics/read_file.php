<?php
$path = __DIR__ . '/data.txt';

// validation
if (!file_exists($path)) {
    echo "File does not exist";
}

// Method 1: simple
$content = file_get_contents($path);
echo "<h3>Using file_get_contents()</h3>";
echo "<pre>" . htmlspecialchars($content) . "</pre>";

  
// Method 2: fopen + fread
$handle = fopen($path, 'r');
if ($handle) {
    $size = filesize($path);
    if ($size > 0) {
        $data = fread($handle, $size);
    } else {
        // if filesize is 0, return callback to reading in chunks
        $data = '';
        while (!feof($handle)) {
            $data = fgets($handle, $size);
        }
    }
    fclose($handle);

    echo "<h3>Using fopen + fread</h3>";
    echo "<pre>" . htmlspecialchars($data) . "</pre>";

}
