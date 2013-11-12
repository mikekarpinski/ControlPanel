<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Control Panel - - AMCS Internet</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url('media/admin/css/reset.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('media/admin/css/main.css'); ?>">
        <script src="<?php echo base_url('media/admin/js/jquery-2.0.3.min.js'); ?>"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div id = "wrapper">
        	<div id = "loginbox">
        		<?php echo form_open('admin/check_login');?>
        		<table>
        			<tr>
        				<td><?php echo form_label('Login', 'login');?></td>
        				<td><?php echo form_input(array('name' => 'login', 'id' =>'input_login'));?></td>
        			</tr>
        			<tr>
        				<td><?php echo form_label('Password', 'password');?></td>
        				<td><?php echo form_password(array('name' => 'password','id' =>'input_password')); ?></td>
        			</tr>
                    <?php
                    if(!empty($error)) { ?>

                    <tr>
                        <td colspan = "2" class="center" ><?php echo $error; ?></td>
                    </tr>

                    <?php }?>
        			<tr>
        				<td colspan = "2" class="center" ><?php echo form_submit("login_button","Login"); ?></td>
        			</tr>
        		</table>
        		<?php echo form_close(); ?>
        	</div>
        </div>	
        <script src="<?php echo base_url('media/admin/js/main.js'); ?>"></script>
    </body>
</html>
