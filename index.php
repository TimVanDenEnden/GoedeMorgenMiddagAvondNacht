<?php 

$hour = date("H");
$minut = date("i");

if ($hour >= 0) 
{
	$class = "nacht";
	if ($hour >= 6) 
	{
		$class = "morgen";
		if ($hour >= 12) 
		{
			$class = "middag";
			if ($hour >= 18) 
			{
				$class = "avond";
			}
		}

	}
}

?>

<!DOCTYPE html>
<html lang="NL">
<head>
  	<title>phpOpdracht1 | T1mINC</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Grand+Hotel" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="<?php echo $class;?>">

	<div class="center">
		<h1>Goede <?php echo $class; ?>!</h1>
		<h1>het is nu  <?php echo "$hour:$minut"; ?></h1>
	</div>


</body>
</html>