<div class="container">
    <div class="row">
        <h1>DLSP Library</h1>
        <h3>Books</h3>


        <?php if(validation_errors()): ?>
            <div class="red lighten-3">
                <div class="container">
                    <div class="row" style="padding-top:10px">
                        <?php echo validation_errors(); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php echo form_open('books/add'); ?>
        <label for="title">Title</label>
        <input type="text" name="title" value="<?php set_value('title'); ?>">

        <label for="isbn">ISBN</label>
        <input type="text" name="isbn" value="<?php set_value('isbn') ?>">

        <label for="publisher">Publisher</label>
        <select name="publisher" class="browser-default" size="10">
            <?php foreach($publishers as $p): ?>
                <option value="<?php echo $p['id'] ?>"><?php echo $p['name']; ?></option>
            <?php endforeach; ?>
        </select>

        <label for="authors">Authors</label>
        <select name="authors" multiple size="10" class="browser-default">
            <?php foreach($authors as $a): ?>
                <option value="<?php echo $a['id'] ?>"><?php echo $a['last_name'].', '.$a['first_name']; ?></option>
            <?php endforeach; ?>
        </select>

        <label for="price">Price</label>
        <input type="number" name="price" value="<?php set_value('price'); ?>">


        <label for="edition">Edition</label>
        <input type="number" name="edition" value="<?php set_value('edition'); ?>">


        <label for="year">Year</label>
        <input type="number" minlength="4" name="year" value="<?php set_value('year'); ?>">

        <input type="submit" name="submit" value="Submit" class="waves-effect waves-light btn">
        </form>
    </div>
</div>



