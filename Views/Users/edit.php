<h1>Editar usuario</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" id="name" placeholder="Introduce un nombre" name="name" value ="<?php if (isset($user["name"])) echo $user["name"];?>">
    </div>

    <div class="form-group">
        <label for="email">Correo electrónico</label>
        <input type="text" class="form-control" id="email" placeholder="Introduce un correo electrónico" name="email" value ="<?php if (isset($user["email"])) echo $user["email"];?>">
    </div>

    <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="text" class="form-control" id="password" placeholder="Introduce una contraseá" name="password" value ="<?php if (isset($user["password"])) echo $user["password"];?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>