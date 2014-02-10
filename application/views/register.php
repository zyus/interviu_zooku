<!-- Including template header -->
<?php include_once('header.php');?>

<div class="register-zone">
	<?php echo $registration_success; ?>
	
	<h3><b> Register: </b></h3>
	<!-- creating the form header that submits to the register controller-->
	<?php echo form_open("register"); ?>
		<ul>
			<li>
				<label for="firstname">User first name:<span class="req_field">*</span></label>
				<!-- on fail submit we print the error/warning message -->
				<?php echo form_error('firstname'); ?><br/>
				<!-- we create the form input with the fields:
						1) input type
						2) input name
						3) input id
						4) input placeholder
						5) input value (this field will have the value that was previously submitted)
				-->
				<?php echo form_input(array('type'=>'text',
											'name'=>'firstname',
									        'id'=>'firstname',
									        'placeholder'=>'First name',
									        'value'=>set_value('firstname'))
									        ); ?>
			</li>
			<li>
				<label for="lastname">User last name:<span class="req_field">*</span></label>
				<!-- same as above -->
				<?php echo form_error('lastname'); ?><br/>
				<!-- same as above -->
				<?php echo form_input(array('type'=>'text',
											'name'=>'lastname',
									        'id'=>'lastname',
									        'placeholder'=>'Last name',
									        'value'=>set_value('lastname'))
									        ); ?>
			</li>
			<li>
				<label for="useremail">User email:<span class="req_field">*</span></label>
				<!-- same as above -->
				<?php echo form_error('useremail'); ?><br/>
				<!-- same as above -->
				<?php echo form_input(array('type'=>'email',
											'name'=>'useremail',
									        'id'=>'useremail',
									        'placeholder'=>'Email',
									        'value'=>set_value('useremail'))
									        ); ?>
			</li>
			<li>
				<label for="userwebsite">User website:<span class="req_field">*</span></label>
				<!-- same as above -->
				<?php echo form_error('userwebsite'); ?><br/>
				<!-- same as above -->
				<?php echo form_input(array('type'=>'url',
											'name'=>'userwebsite',
									        'id'=>'userwebsite',
									        'placeholder'=>'Website',
									        'value'=>set_value('userwebsite'))
									        ); ?>
			</li>
			<li class="submit-width">
				<!--  we create the form submit input with the fields:
						1) input type  : 'submit'
						1) input name  : 'submit'
						1) input class : 'btn btn-primary'{ bootstrap button primary display }
						1) input value : "Submit"
				-->
				<?php echo form_input(array('type'=>'submit',
											'class'=>'btn btn-primary',
											'name'=>'submit',
									        'value'=>'Submit')
									        ); ?>
			</li>
		</ul>
	<!-- closing the form -->
	<?php echo form_close(); ?>
</div>

<!-- Including template footer -->
<?php include_once('footer.php');?>