<div class="container">
    <div class="row">
        <h1>DLSP Library</h1>
        <?php if(validation_errors()): ?>
            <div class="red lighten-3">
                <div class="container">
                    <div class="row" style="padding-top:10px">
                        <?php echo validation_errors(); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if(isset($user_validation_error)): ?>
            <div class="red lighten-3">
                <div class="container">
                    <div class="row" style="padding-top:10px">
                        <?php echo "<p>".$user_validation_error."</p>" ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php echo form_open('/'); ?>
        <label for="username">Username/Student-ID:</label>
        <input type="text" name="username" value="<?php set_value('username'); ?>">
        <label for="password">Password:</label>
        <input type="password" name="password">
        <input type="submit" name="submit" value="Login" class="waves-effect waves-light btn">
    </div>
</div>


</form>
