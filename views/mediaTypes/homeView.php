<nav class="breadcrumb bg-white py-0">
  <a class="breadcrumb-item" href="#" onclick="event.preventDefault(); DLM.go('/home/params/')"><?php echo \__("adminMenu-Params"); ?></a>
  <span class="breadcrumb-item active"><?php echo \__('mediaTypes'); ?></span>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
	<div class="navbar-brand"><?php echo \__("mediaTypes"); ?></div>
</nav>
<!--<div class="text-right">
	<button class="btn btn-outline-secondary mt-4 mb-2 mr-0" type="button" onclick="DLM.go('/mediaType/form/create/')">
		<?php echo \__("createMediaType"); ?>
	</button>
</div>-->
<?php echo $this->mediaList; ?>