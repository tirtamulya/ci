<div id="login_form">
    <h1>Login, Fool!</h1>
    <?php
        echo form_open('login/validate_credentials');
        echo form_input('username', 'Usename');
        echo form_input('password','Password');
        echo form_submit('submit',"Login");
        echo anchor('login/signup', 'Create Account');
    ?>
</div>

<?php $this->load->view('includes/tut_info'); ?>