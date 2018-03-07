<!DOCTYPE html>
<html lang="en">
<head>	
	<title>Fences and Railings challenge</title>
</head>
<body>
	<section>
		<h1>Fences and Railings Challenge</h1>
		<div>
			<form action="fence.php" method="post">
				Number of Posts:<input type="text" name="formInputPost"><br>
				Number of Railings:<input type="text" name="formInputRailing"><br>
				Calculate Fence Length:<input type="submit" value="Validate">
			</form>
		</div>
		
		<h3> - - - - - - OR - - - - - - </h3>
		
		<div>
			<form action="fence.php" method="post">
				Length of Fence (meters):<input type="text" name="formInputFenceLength"><br>
				Calculate Materials needed and Overshoot:<input type="submit" value="Validate">
			</form>
		</div>

		<h3> - - - - - - RESULTS - - - - - - </h3>
		


<?php

$postLength = 0.1;
$railLength = 1.5;

$postCount = 0;
$railCount = 0;
$builtLength = 0;


// based off material input
$inputPostCount = $_POST["formInputPost"];
$inputRailCount = $_POST["formInputRailing"];


$loopCount = min(($inputPostCount - 2), ($inputRailCount - 1));


$remainderPostCount = max( 0, $inputPostCount - 2 -  $loopCount);
$remainderRailCount = max(0,$inputRailCount - 1 -  $loopCount);


// based off fence length input
$inputLength = $_POST["formInputFenceLength"];


$loopCount = 0;
//While Loop (as you don’t know how many iterations you will need)
//		while ($inputLength < $builtLength) {
//            $builtLength = $postLength * ( 2 +  $loopCount) + $railLength * ( 1 + $loopCount);
//            $loopCount++
//		}

//	or use a do while loop as you
		do {
            $builtLength = $postLength * ( 2 +  $loopCount) + $railLength * ( 1 + $loopCount);
            $loopCount++;
        } while ($inputLength < $builtLength);


$builtLength = $postLength * ( 2 +  $loopCount) + $railLength * ( 1 + $loopCount)
$overshotLength = $inputLength - $builtLength

echo $builtLength;

?>




	</section>
</body>



