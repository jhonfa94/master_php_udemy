<h1>Registro</h1>

<form>
    <div class="form-group">
        <label for="nombre">Nombre:</label>

        <div class="input-group">
            <span class="input-group-text">
                <i class="fas fa-user"></i>
            </span>

            <input type="text" class="form-control" id="nombre" name="nombre">

        </div>

    </div>

    <div class="form-group">
        <label for="email">Email:</label>

        <div class="input-group">
            <span class="input-group-text">
                <i class="fas fa-envelope"></i>
            </span>            
            <input type="email" class="form-control" id="email" name="email">

        </div>

    </div>

    <div class="form-group">
        <label for="pwd">Contraseña:</label>
        <div class="input-group">
            <span class="input-group-text">
                <i class="fas fa-lock"></i>
            </span>

            <input type="password" class="form-control" id="pwd" name="pwd">           

        </div>
    </div>
   
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>