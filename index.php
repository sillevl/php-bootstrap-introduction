<?php

class MenuItem{

	public function __construct($title, $url = "#", $active = false){
		$this->title = $title;
		$this->url = $url;
		$this->active = $active;
	}

	public function __toString(){
		$active = $this->active ? " class=\"active\"" : "";
		return "<li{$active}><a href=\"?p=$this->url\">$this->title</a></li>";
	}

	public function setActive($active = true){
		$this->active = $active;
	}

	public function getUrl(){
		return $this->url;
	}
}

$menu[] = new MenuItem("Bootstrap Demo","intro");
$menu[] = new MenuItem("Page 1", "page1");
$menu[] = new MenuItem("Page 2", "page2");
$menu[] = new MenuItem("Page 3", "page3");

if(isset($_GET['p'])){
	$p = $_GET['p'];
	foreach ($menu as $item) {
		if($p == $item->getUrl()){
			$item->setActive();
			break;
		}
	}
} else{
	$menu[0]->setActive();
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/boostrap-responsive.css">
	<title></title>
</head>
<body>
<div class="container">
		<div class="navbar">
		  	<div class="navbar-inner">
		    	<a class="brand" href="#">Title</a>
			    <ul class="nav">
			    	<?php 
			    		foreach ($menu as $menuItem) {
			    			echo $menuItem;
			    		}
			    	?>
			    </ul>
		  	</div>
		</div>
		<h1>Bootstrap Demo</h1>
		<p><img src="http://lorempixel.com/output/food-q-c-640-480-1.jpg" alt="food mmm!" align="right" class="img-circle"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula mi enim, eu sagittis tellus congue sit amet. Pellentesque in tincidunt velit. Nulla scelerisque sit amet mauris nec adipiscing. Integer sollicitudin metus at dignissim molestie. Nullam pretium pellentesque libero vitae ultricies. Integer diam tortor, faucibus vitae neque ac, dapibus congue lectus. Mauris mattis lorem urna, nec sollicitudin massa sollicitudin id. Maecenas pharetra arcu risus, in laoreet nisi placerat semper. Curabitur venenatis elementum pretium. Ut feugiat lectus quis justo imperdiet ultrices. Suspendisse potenti. Vivamus ultricies lacus ac massa ultrices, at placerat turpis interdum. Nullam ullamcorper felis vitae purus venenatis, eget dictum mauris eleifend. Donec volutpat vitae nibh lacinia volutpat. Vestibulum et tellus id erat posuere commodo. Maecenas auctor condimentum elementum.</p>

		<p>Ut eros augue, aliquam et commodo nec, aliquet sed est. Curabitur in massa convallis, porta dui quis, dignissim tellus. Quisque eleifend, purus sit amet rhoncus suscipit, nisi elit eleifend dui, sed condimentum ipsum ipsum sit amet nibh. Integer condimentum et metus sed vehicula. Quisque imperdiet urna vitae dolor feugiat malesuada ac vitae erat. Maecenas leo enim, sagittis vitae tempus vestibulum, imperdiet in felis. Pellentesque at urna tortor. Vivamus nibh odio, auctor vel posuere non, malesuada ut nunc. Proin ante metus, dapibus sed tempor eget, interdum vel neque. Nulla id fringilla felis, eu venenatis mi. Proin tortor velit, dignissim vel tincidunt nec, molestie at felis. Praesent sit amet lectus eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent tempor leo quis tincidunt congue.</p>

		<p>Sed bibendum commodo odio, nec egestas metus euismod eget. Integer nec aliquet risus. Fusce id purus tincidunt, consectetur augue ut, laoreet nisi. Etiam tempus odio sed placerat tincidunt. Vestibulum ac eros mollis, aliquam urna at, viverra lectus. Donec at nulla non justo pretium semper a eget arcu. Quisque sed magna dictum, rhoncus erat quis, faucibus turpis. Pellentesque odio sapien, consequat quis lorem nec, fermentum ultricies ligula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas rhoncus mollis quam, vitae sollicitudin diam interdum auctor. Integer a sagittis risus, semper congue ligula. Pellentesque vel dui ac metus iaculis commodo. Aliquam porttitor elit vitae posuere vehicula. Suspendisse aliquam erat in ligula varius luctus.</p>

		<p>Duis sit amet lorem euismod, facilisis nisi nec, convallis dui. Vivamus scelerisque mi odio, fermentum mollis tellus viverra nec. Curabitur interdum est eu tincidunt tempor. Aliquam augue lacus, venenatis sit amet ligula vitae, molestie dignissim purus. Aliquam et urna iaculis, varius diam volutpat, condimentum enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque consectetur lorem in lorem pharetra, viverra vestibulum nibh luctus. In congue magna sit amet tortor placerat facilisis quis quis elit. Aliquam condimentum nisi in dui rutrum, id pellentesque libero aliquam. Proin non facilisis sapien, id aliquam nunc. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam ornare nisl sapien, eu iaculis tortor sagittis vel. Fusce sed nibh est. Phasellus a felis gravida, tempor orci vulputate, ullamcorper purus. Etiam et gravida elit, sed malesuada nisl.</p>
	</div>
</body>
</html>