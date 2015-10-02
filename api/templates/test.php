<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Test</title>
</head>
<body>
	<select>
<?php
foreach ($this->data['data'] as $test) {
	echo "<option>";
	echo $test['name'];
	echo "</option>";
}
?>
</select>
</body>
</html>