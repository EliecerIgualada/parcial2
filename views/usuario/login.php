<div class="container-sm">
    <div class="row">
        <center><div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
                    <?php if($msg != ""){?>    
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Error</strong><?php echo $msg?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php }?> 
                          
            <form action="<?php echo "index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("validar")?>" method="post">
                <div class="mb-3" align ="left">
                    <label for="exampleInputText1"  class="form-label">Usuario</label>
                    <input type="text" class="form-control" name="txtUsuario" id="exampleInputText1" aria-describedby="textHelp" >
                    <div id="textHelp" class="form-text"><?php echo isset($error[0])?$error[0]:""?></div> 

                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="txtPassword" id="exampleInputPassword1" aria-describedby="passwordHelp" >
                    <div id="textHelp" class="form-text"><?php echo isset($error[1])?$error[1]:""?></div>
                </div>
                <div class="form-check" align ="left">
                    <input class="form-check-input" name="chkRecordar" type="checkbox" value="1" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Recordar datos
                    </label>
                </div>                
                <input type="hidden" value="<?php echo seg::getToken()?>" name="token">
                <button type="submit" class="btn btn-success">Entrar</button>
            </form>  
        </div></center>
    </div>
</div>
