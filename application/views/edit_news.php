<!DOCTYPE html>
<html>
<head>
	<title>Edit News</title>
</head>
<body>
	<h1>Tambah Berita</h1>
	<form action="<?= base_url('news/update')?>" method="post" enctype="multipart/form-data">
		<table>
		<?php foreach($news as $u){ 
		?>
		<input type="hidden" name="id_news" value="<?php echo $u->id_news ?>">
			<tr> 
				<td><label>Title</label></td> <td>:</td> 
				<td><input type="text" name="title" id="title" value="<?php echo $u->title; ?>" /></td>
			</tr>
			<tr> 
				<td><label>Content</label></td> <td>:</td> 
				<td><textarea name="content" ><?php echo $u->content; ?></textarea></td>
			</tr>
			<tr> 
				<td><label>Category</label></td> <td>:</td> 
				<td>
					
					<select name='category' id='category' >
					<option value=''>Pilih kategori</option>";
					<?php
					foreach ($category as $u) {
					?>
					<option value="<?php echo $u->id_category; ?>"> <?php echo $u->nm_category; ?> </option>
					<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td><label>Images</label></td> <td>:</td>
				<td><input type="file" name="userfile"></td>
			</tr>
		</table>
		<input type="submit" name="submit" value="Update"/>
	</form>
	<?php }
		?>
</body>
</html>