
<?php 
	//load the images source
	$resources = array(
		"pexels-ben-mack-5326922" => array("src" => "pexels-ben-mack-5326922","title" => "Title 1"),
		"pexels-burst-373912" => array("src" => "pexels-burst-373912","title" => "Title 2"),
		"pexels-julia-volk-5273512" => array("src" => "pexels-julia-volk-5273512", "title"  => "Title 3"),
		"pexels-pixabay-220769" => array("src" => "pexels-pixabay-220769","title" => "Title 4"),
	);
?>

<div class="container">
	<div class="row-flex-full">
		<div class="col-12">
			<h1 style="text-align:center">Light Box Exercise 12</h1>
		</div>
	</div>
	<div class="row-flex-full">
		<?php foreach($resources as $key => $resource) : ?>
		<div class="col-3">
			<a href="<?php echo base_url("/assets/imgs/" . $resource["src"] . ".jpg") ?>" 
				data-lightbox="<?php echo $key ?>" data-title="<?php echo $resource["title"] ?>">
				<img src="<?php echo base_url("/assets/imgs/" . $resource["src"] . ".jpg") ?>" style="width:200px;height:200px"/>
				</a>
		</div>
		<?php endforeach ?>
	</div>
</div>
