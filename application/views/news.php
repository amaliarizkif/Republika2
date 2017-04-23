<!DOCTYPE html>
<html>
<head>
	<title>News</title>
</head>
<body>
	
<?php echo anchor('news/add_news/','Add News'); ?>
<br>
<br>
<hr>

	<table border="1">

		<tr>
			<td>Img</td>
			<td>Tilte</td>
			<td>Content</td>
			<td>Category</td>
			<td>Hapus</td> 
			<td>Edit</td>
		</tr>

		<?php 
		$no = 1;
		foreach($news as $u){ 
		?>
		<tr>
			<td><img src="<?php echo base_url();?>uploads/<?= $u->images?>" height="200px" width="100px"/></td>
			<td><?php echo $u->title; ?></td>
			<td><?php echo $u->content; ?></td>
			<td><?php echo $u->nm_category; ?></td>
			<td> <?php echo anchor('news/delete/'.$u->id_news,'Hapus'); ?></td> 
			<td> <?php echo anchor('news/edit/'.$u->id_news,'Edit'); ?></td>
		</tr>
		<?php } ?>

	</table>
</body>
</html>