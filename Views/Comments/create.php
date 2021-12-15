<h1>Crear comentario</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="body">Comentario</label>
        <input type="text" class="form-control" id="body" placeholder="Introduce un comentario" name="body">
    </div>

    <div class="form-group">
        <label for="users">Usuario</label>
        <select name="user_id" id="users" class="form-control">
        <?php
            foreach($users as $user) {
                echo '<option value='.$user['id'].'>'.$user['name'].'</option>';
            }
        ?>
        </select>
    </div>

    <div class="form-group">
        <label for="posts">Post</label>
        <select name="post_id" id="posts" class="form-control">
        <?php
            foreach($posts as $post) {
                echo '<option value='.$post['id'].'>'.$post['title'].'</option>';
            }
        ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>