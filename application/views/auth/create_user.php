<div class='mainInfo'>

	<h1>Create User</h1>
	<p>Please enter the users information below.</p>
	
	<div id="infoMessage"><?php echo $message;?></div>
	
    <?php echo form_open("auth/create_user");?>
      <p>�m�W:<br />
      <?php echo form_input($user_name);?>
      </p>
      
      <p>�κ�:<br />
      <?php echo form_input($user_nickname);?>
      </p>
      
      <p>���q:<br />
      <?php echo form_input($company);?>
      </p>
      
      <p>E-mail:<br />
      <?php echo form_input($email);?>
      </p>
      
      <p>�q��:<br />
      <?php echo form_input($phone1);?>-<?php echo form_input($phone2);?>-<?php echo form_input($phone3);?>
      </p>
      
      <p>�п�J�K�X:<br />
      <?php echo form_input($password);?>
      </p>
      
      <p>�A����J�K�X:<br />
      <?php echo form_input($password_confirm);?>
      </p>
      
      
      <p><?php echo form_submit('submit', 'Create User');?></p>

      
    <?php echo form_close();?>

</div>
