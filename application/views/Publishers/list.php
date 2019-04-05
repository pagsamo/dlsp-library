<div class="container">
    <div class="row">
        <h1>Publishers</h1>
        <?php if(validation_errors()): ?>
            <div class="red lighten-3">
                <div class="container">
                    <div class="row" style="padding-top:10px">
                        <?php echo validation_errors(); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php echo form_open('/publisher'); ?>
            <label for="name">Name</label>
            <input type="text" name="name">
            <input type="submit" name="submit" value="Add Publisher" class="waves-effect waves-light btn">
         </form>
    <table>
        <thead>
        <tr>
            <th>id</th>
            <th>Name</th>a
        </tr>
        </thead>
        <tbody>
        <?php foreach($publishers as $p): ?>
            <tr>
                <td><?php echo $p['id']; ?></td>
                <td><?php echo $p['name']; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    </div>
</div>