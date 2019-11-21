<h1>Ingreso</h1>
<form>
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


    <div class="form-group form-check">
        <label class="form-check-label">
            <input class="form-check-input" type="checkbox"> Remember me
        </label>
    </div>
    <button type="submit" class="btn btn-success">Ingresar</button>
</form>