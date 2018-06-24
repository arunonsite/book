<article>
<div class="container">
        <div class="row">
<div id='login_form'>
        <form action='<?php echo base_url();?>index.php/home/process' method='post' name='process'>
            <h2>User Login</h2>
            <br />     
		<?php if(isset($msg)) { echo $msg; } ?>    			
            <label for='username'>Username</label>
            <input type='text' name='username' required id='username'  /><br />
        
            <label for='password'>Password</label>
            <input type='password' name='password' required  id='password'  /><br />                            
        
            <input type='Submit' value='Login' />            
        </form>
</div>
</div>
</div>
</article>
