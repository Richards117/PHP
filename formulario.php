<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <titulo>Formulario</titulo>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
</head>
<body>

    <?php
        include('conexion.php');
    ?>

    <header>
        <div class="container text-center mt-5">
            <h1>Formulario</h1>
        </div>
    </header>

    <section class="d-flex justify-content-center">
        <div class="col-md-5">
            <div class="mb-3 mt-3">
                <!--INICIO FORMULARIO-->
                <form action="store.php" method="POST">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="ej:Clio">
                    </div>
                    <div class="mb-3">
                        <label for="modelo" class="form-label">Modelo</label>
                        <input type="text" name="modelo" class="form-control" placeholder="ej:2002">
                    </div>
                    <div class="mb-3">
                        <label for="marca" class="form-label">Marca</label>
                        <input type="text" name="marca" class="form-control"  placeholder="ej:Ford">
                    </div>
                    <div class="mb-3">
                        <label for="tipo" class="form-label">Tipo</label>
                        <select class="form-select" name="tipo">
                            <option selected value="Carro">Carro</option>
                            <option value="Ford">Ford</option>
                            <option value="Chevrolet">Chevrolet</option>
                            <option value="Renault">Renault</option>
                            <option value="Nissan">Nissan</option>
                            <option value="BMW">BMW</option>
                            <option value="Otro">Otro</option>
                          </select>
                    </div>
                    <div class="mb-3">
                       <p>Formato</p> 
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="formato" value="electronico" checked>
                            <label class="form-check-label" for="formato">
                              Gasolina
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="formato" value="fisico">
                            <label class="form-check-label" for="formato">
                              Disiel
                            </label>
                          </div>  
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <a class="btn btn-link m-md-5" href="index.php" role="button">Regresar a pagina principal</a>

                </form>
            </div>
        </div>
        
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>