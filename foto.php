<!doctype html>
<html lang="en">
  <head>
    <title>Fotos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" style="background-color: #F5DCF9;">
      <div class="row mt-4">
        <div class="col">
          <h1> Fotografias digitales</h1>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col"  >
          <div id="seccionResultado">

            <label for="">Cantidad de fotos: </label>
            <input type="text" name="CantidadFotos" id="cantidadFotos">

            <div class="row">
              <div class="col">
                <form action="">
                  <label for="">Tipo de fotos: </label>
                    <select name="tipoFotos" id="tipoFotos" class="form-control">
                      <option value="color">Color</option>
                      <option value="blanco">Blanco/Negro</option>
                      
                    </select>
                </form>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="">Medidas</label>
                  <br>
                  <form action="">
                    <select name="medidaFotos" id="medidaFotos" class="form-control">
                    <option value="tam"> </option>
                    
                      <option value="tam1">3 x 4 </option>
                      <option value="tam2">4 x 6 </option>
                      <option value="tam3">5 x 7 </option>
                      <option value="tam4">6 x 8 </option>
                    </select>
                </form>

              </div>
            </div>
            <div class="row mt-5 ">
              <div class=" col text-center">
                <h5> Cantidad a pagar: </h5> 
                <div id="calcularResultado"></div>
            </div>
                
              </div>
            </div>
            <div class="row">
              <div class="col">
                <button class="btn btn-warning" id="btnCalcular" onclick="calcular()">Aceptar</button>
                <button type="reset" class="btn btn-info" >Limpiar</button>
                <br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="jquery-3.6.0.min.js"></script>
  </body>
</html>
<script>
    

    function calcular(){
      let tipoFoto= $('#tipoFotos').val();
      let medidas =$('#medidaFotos').val();
      let resultado=0;
      let cantidad=$('#cantidadFotos').val();

      if(tipoFoto=="blanco"){
        if (medidas== "tam1") {
         console.log(cantidad);
         console.log(resultado= cantidad * 4.00);

        }else{
          if (medidas=="tam2") {
            console.log(cantidad);
            console.log(resultado= cantidad * 5.20);
            
          }else{
            if (medidas=="tam3") {
              console.log(cantidad);
              console.log(resultado= cantidad * 6.00);
              
            }else{
              if (medidas=="tam4") {
                console.log(cantidad);
                console.log(resultado= cantidad * 7.90);
              }
            }
          }
        }
      }else{
        if (tipoFoto=="color") {
          if (medidas=="tam1") {
            console.log(cantidad);
            console.log(resultado= cantidad * 5.50);

          }else{
            if (medidas=="tam2") {
              console.log(cantidad);
              console.log(resultado= cantidad * 6.20);
            }else{
              if (medidas=="tam3") {
                console.log(cantidad);
                console.log(resultado= cantidad * 7.50);
              }else{
                if (medidas=="tam4") {
                console.log(cantidad);
                console.log(resultado= cantidad * 9.00);
                }
              }
            }
          }
          
        }
      }
      $('#calcularResultado').text(`$${resultado} `);
      
    }
    
   

</script>