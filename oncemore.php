<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
<link rel="stylesheet" type="text/css" href="tristan_deratz.css">
<link rel="icon" type="image/png" href="pine_tree_16x16.ico">
	<title>Tristan Derátz, once more, 2014</title>

<style> 

/*once more*/

body
{
	height: auto;
	width: auto;	
	-webkit-animation: colorbox 100s;
	animation: colorbox 100s;
	animation-iteration-count:infinite;

}

@-webkit-keyframes colorbox
{
	0%{background: white}
	25% {background: red}
	50% {background: red}
	75% {background: white}
	100% {background: white} 
}

@keyframes colorbox
{
	0%{background: white}
	25% {background: red}
	50% {background: red}
	75% {background: white}
	100% {background: white} 
}*


.putin
{
	height: auto;
	max-width: 600px;
	padding: 20px;
	padding-top:30px;
	padding-bottom: 30px;
	margin:auto;
	
	font: serif;
		font-size: x-large;
		text-align: center;
		color: red;
	
	
	-webkit-animation: putin 100s;
	/*-webkit-animation-delay:0s;*/
	animation-iteration-count:infinite;

}

@-webkit-keyframes putin
{
	0%{color: red}
	25% {color: red}
	50% {color: white}
	75% {color: white}
	100% {color: red} 	
}


@keyframes putin
{
	0%{color: red}
	25% {color: red}
	50% {color: white}
	75% {color: white}
	100% {color: red}		
}

	</style>
</head>

<body>



	
		<!--<p>
		<div id="colorbox">
				
				<div class="putin">
	Everything in Crimea speaks of our shared history and pride. This is the location of ancient Khersones, where Prince Vladimir was baptised. His spiritual feat of adopting Orthodoxy predetermined the overall basis of the culture, civilisation and human values that unite the peoples of Russia, Ukraine and Belarus. The graves of Russian soldiers whose bravery brought Crimea into the Russian empire are also in Crimea. This is also Sevastopol, a legendary city with an outstanding history, a fortress that serves as the birthplace of the Russian Black Sea Fleet. Crimea is Balaklava and Kerch, Malakhov Kurgan and Sapun Ridge. Each one of these places is dear to our hearts, symbolising Russian military glory and outstanding valour.
		</p>
			</div> 
		
		
		</div>
		
		-->
		
<?php
		function rand_line($fileName, $maxLineLength = 2000) {
		    $handle = @fopen($fileName, "putinspeech.text");
		    if ($handle) {
		        $random_line = null;
		        $line = null;
		        $count = 0;
		        while (($line = fgets($handle, $maxLineLength)) !== false) {
		            $count++;
		            // P(1/$count) probability of picking current line as random line
		            if(rand() % $count == 0) {
		              $random_line = $line;
		            }
		        }
		        if (!feof($handle)) {
		            echo "Error: unexpected fgets() fail\n";
		            fclose($handle);
		            return null;
		        } else {
		            fclose($handle);
		        }
		        return $random_line;
		    }
		}
		

		echo rand_line("putinspeech.txt");
?>
		

	
	
<!--


		<div>			
			<p class="mca"> mca stylez </p>
			
			<p class="mcaxl"> mca XL</p>

			<p class="mca3">mca3</p>

		</div>
-->
		
	</body>
</html>