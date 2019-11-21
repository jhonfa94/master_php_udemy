

<div class="d-flex justify-content-center text-center">


<form class="p-5 b-light" method="post">
    <div class="form-group">
        <label for="nombre">Nombre:</label>

        <div class="input-group">
            <span class="input-group-text">
                <i class="fas fa-user"></i>
            </span>

            <input type="text" class="form-control" id="nombre" name="registroNombre" required>

        </div>

    </div>

    <div class="form-group">
        <label for="email">Email:</label>

        <div class="input-group">
            <span class="input-group-text">
                <i class="fas fa-envelope"></i>
            </span>            
            <input type="email" class="form-control" id="email" name="registroEmail" required>

        </div>

    </div>

    <div class="form-group">
        <label for="pwd">Contraseña:</label>
        <div class="input-group">
            <span class="input-group-text">
                <i class="fas fa-lock"></i>
            </span>

            <input type="password" class="form-control" id="pwd" name="registroPassword" required>            

        </div>
    </div>

    <?php 
        $registro = ControladorFormuario::ctrRegistrar();

        if ($registro == 'ok' || $registro != '') {
            
            echo "
            <script>
                if(window.history.replaceState){
                    window.history.replaceState(null,null,window.location.hre);
                }
            </script>";

            echo "$registro";
            
            echo "<div class='alert alert-success'>
                <p>El usuario fue registrado en el sistema</p>
            </div>";

        }
        
    
    ?>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

</div>