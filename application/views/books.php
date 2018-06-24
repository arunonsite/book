<article>
<div class="container">
        <div class="row">
		<?php 
		if(isset($book_list)) { 
		foreach ($book_list as $b_key){ ?>
          <div class="card">  <span style="text-align:right"><a href="<?php echo base_url('index.php/Home/checkLogin');?>">Favourite</a></span>
             <span>Book Name :<?php echo $b_key['book_name']; ?></span>
         
			<span>Author :   <?php echo $b_key['author']; ?></span>
			<span>Date :   <?php echo $b_key['create_date']; ?></span>
          </div>
		  <?php } } ?>
		
</div>
</div>
</article>

