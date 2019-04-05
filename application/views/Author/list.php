<div class="container">
    <div class="row">
        <h1>Authors</h1>
        <?php if(validation_errors()): ?>
            <div class="red lighten-3">
                <div class="container">
                    <div class="row" style="padding-top:10px">
                        <?php echo validation_errors(); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php echo form_open('/author'); ?>
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name">
        <label for="last_name">First Name</label>
        <input type="text" name="first_name">
        <input type="submit" name="submit" value="Add Author" class="waves-effect waves-light btn">
        </form>
        <table>
            <thead>
            <tr>
                <th>id</th>
                <th>Last Name</th>
                <th>First Name</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($authors as $a): ?>
                <tr>
                    <td><?php echo $a['id']; ?></td>
                    <td><?php echo $a['first_name']; ?></td>
                    <td><?php echo $a['last_name']; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>