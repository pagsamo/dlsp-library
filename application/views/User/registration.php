<div class="container">
    <div class="row">
        <h1>DLSP Library</h1>
        <h3>Registration form</h3>


        <?php if(validation_errors()): ?>
            <div class="red lighten-3">
                <div class="container">
                    <div class="row" style="padding-top:10px">
                        <?php echo validation_errors(); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php echo form_open('user/register'); ?>

        <label for="username">Username:</label>
        <input type="text" name="username" value="<?php echo set_value('username'); ?>">
        <label for="password">Password:</label>
        <input type="password" name="password">
        <label for="repeat_password">Repeat Password:</label>
        <input type="password" name="repeat_password">
        <label for="last_name">Last name:</label>
        <input type="text" name="last_name" value="<?php echo set_value('last_name'); ?>">
        <label for="first_name">First name:</label>
        <input type="text" name="first_name" value="<?php echo set_value('first_name'); ?>">
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo set_value('email'); ?>">
        <input type="submit" name="submit" value="Register" class="waves-effect waves-light btn">
    </div>
</div>


</form>
