<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<script type='text/javascript' src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</head>
<body>
<header>
<?php if($this->session->userdata('username'))
{
?>
<div class="container">
        <div class="row">
		<div class="col-md-4">
				<a href='<?php echo base_url('index.php/books');?>' class="links">My Books</a>
			</div>
			<div class="col-md-4">
				Logged in : <?php echo $this->session->userdata('username'); ?>
			</div>
			<div class="col-md-4">
				<a href='<?php echo base_url('index.php/Home/logout');?>' class="links">logout</a>
			</div>

</div>
<?php } else { ?>
<div class="container">
        <div class="row">
		<div class="col-md-3">
				<a href='<?php echo base_url('index.php/Home/booksListView');?>' class="links">Books</a>
			</div>
			<div class="col-md-3">
				<a href='<?php echo base_url('index.php/Home/loginView');?>' class="links">Login</a>
			</div>
			<div class="col-md-3">
			 <form action='<?php echo base_url();?>index.php/home/searchBooks' method='post' name='search'>
			<div><input type="text" style="width:200px" placeholder="Search" name="search" id="search">
			<input type="submit" name="Submit" value="Search"></div>
			</form>
			</div>
			<div class="col-md-3">
				<a href='<?php echo base_url('index.php/Home/logout');?>' class="links">Add books</a>
			</div>

</div>
<?php } ?>
</header>