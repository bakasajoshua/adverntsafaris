<?php
	$form_attributes = array('class' => 'form-group', 'id' => 'myform');
	$first_name = array(
        'name'          => 'first_name',
        'id'            => 'first_name',
        'placeholder'   => 'First Name',
        'required'	=> 'true'
	);
	$last_name = array(
        'name'          => 'last_name',
        'id'            => 'last_name',
        'placeholder'   => 'Last Name',
        'required'	=> 'true'
	);
        $location = array(
        'name'          => 'location',
        'id'            => 'location',
        'placeholder'   => 'Town',
        'required'      => 'true'
        );
	$email_field = array(
	'type'		=> 'email',
        'name'          => 'email_address',
        'id'            => 'email_address',
        'placeholder'   => 'Email Address',
        'required'		=> 'true'
	);
	$password_field = array(
	'name'          => 'password',
        'id'            => 'password',
        'placeholder'   => 'Password',
        'required'	=> 'true'
	);
	$confirm_password = array(
	'name'          => 'confirm_password',
        'id'            => 'confirm_password',
        'placeholder'   => 'Confirm Password',
        'required'	=> 'true'
	);
	$button = array(
        'name'          => 'button',
        'id'            => 'button',
        'class'         => 'button',
        'value'         => 'true',
        'type'          => 'submit',
        'content'       => 'SIGN UP'
);

?>
<div>
	<?php echo form_open(base_url().'signup/registration', $form_attributes);?>
		<?php echo form_input($first_name); ?>
		<?php echo form_input($last_name); ?>
                <?php echo form_input($location); ?>
		<?php echo form_input($email_field); ?>
		<?php echo form_password($password_field); ?>
		<?php echo form_password($confirm_password); ?>
		<?php echo form_button($button);?>
	<?php echo form_close();?>
</div>
