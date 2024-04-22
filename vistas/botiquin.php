<style>
.signature-container {
    display: flex;
    flex-direction: column;
    align-items: center;
  
}

.sgp{
    display: flex;
}
#signature-pad {
    border: 2px solid #000;
}

#signature-pad2 {
    border: 2px solid #000;
}

#contenedor{
    display: flex;
    
}
#columna{              
    padding: 200px;
    background-color: #000;                                                                                               
    margin: 0 auto;
}

* {
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-size: 16px;
    background: #fff;
    font-family: "Roboto";
}

.wrap {
    width: 90%;
    max-width: 1000px;
    margin: 0 20px;
    /*margin: auto;*/
}

.formulario h2 {
    font-size: 16px;
    color: #001F3F;
    margin-bottom: 20px;
    margin-left: 20px;
}

.formulario > div {
    padding: 20px 0;
    border-bottom: 1px solid #ccc;
}

.primer{
    display: flex;
}

</style>
<div class="container mt-4">
        <div class="row">
            <div id="content" class="col">
                <h3>INSPECCION BOTIQUIN</h3>
                <hr>
                <form class="frmlr" id="formulario">
                    
                    <div class="mb-2 row">
                        <div class="form-floating col-md-6 mb-2">
                            <input type="text" class="form-control" id="trabajoInput" placeholder=".">
                            <label for="trabajoInput">Trabajo</label>
                        </div>
                        <div class="form-floating col-md-6 mb-2">
                            <input type="date" class="form-control" id="fechaInput" placeholder=".">
                            <label for="fechaInput">Fecha</label>
                        </div>
                    </div>
                    
                    <div class="mb-2 row">
                        <div class="form-floating col-md-6 mb-2">
                            <input type="text" class="form-control" id="ubicacionInput" placeholder=".">
                            <label for="ubicacionInput">Ubicacion</label>
                        </div>
                        <div class="form-floating col-md-6 mb-2">
                            <input type="time" class="form-control" id="horaInput" placeholder=".">
                            <label for="horaInput">Hora</label>
                        </div>
                    </div>
                    
                    <div class="mb-2 row">
                        <div class="form-floating col-md-6 mb-2">
                            <input type="text" class="form-control" id="nombreInput" placeholder=".">
                            <label for="nombreInput">Nombre</label>
                        </div>
                        <div class="form-floating col-md-6 mb-2">
                            <input type="text" class="form-control" id="usuarioInput" placeholder=".">
                            <label for="usuarioInput">Usuario</label>
                        </div>
                    </div>
                    
                    <div class="mb-2 row">
                        <div class="form-floating col-md-6 mb-2">
                            <input type="text" class="form-control" id="kitInput" placeholder=".">
                            <label for="kitInput">Kit de carretera</label>
                        </div>
                        <div class="form-floating col-md-6 mb-2">
                            <input type="text" class="form-control" id="areaInput" placeholder=".">
                            <label for="areaInput">Area</label>
                        </div>
                    </div>
                    <hr>
                    <h3>Partes a examinar</h3>
                    <hr>


                    <!--GASAS LIMPIAS PAQUETE X 20-->
                    <div class="row row-cols-1 row-cols-md-3 mb-2">
                        <div class="col">
                            <div>
                                <p class="text-center">GASAS LIMPIAS PAQUETE X 20</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="gasas" class="form-check-input" id="gasas-bien">
                                    <label for="gasas-bien" class="form-check-label ">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="gasas" class="form-check-input" id="gasas-mal">
                                    <label for="gasas-mal" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="numerogasas" class="form-label">Cantidad</label>
                                <select class="form-select" id="numerogasas">
                                    <option value="0">Seleccione una opcion</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="cambio-gasas" class="form-label">Cambio</label>
                                <select class="form-select" id="cambio-gasas">
                                    <option selected>Necesita cambio?</option>
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                </select>
                            </div>
                        </div>    
                    </div>
                    <hr>
                    <!--ESPARADRAPO DE TELA ROLLO de 4-->
                    <div class="row row-cols-1 row-cols-md-3 mb-3">
                        <div class="col">
                            <div>
                                <p class="text-center">ESPARADRAPO DE TELA ROLLO DE 4</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="esparadrapo" class="form-check-input" id="esparadrapo-bien">
                                    <label for="esparadrapo-bien" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="esparadrapo" class="form-check-input" id="esparadrapo-mal">
                                    <label for="esparadrapo-mal" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col">
                            <div>
                                <label for="numeroesparadrapo" class="form-label">Cantidad</label>
                                <select class="form-select" id="numeroesparadrapo">
                                    <option value="0">Seleccione una opcion</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div>
                                <label for="cambio-esparadrapo" class="form-label">Cambio</label>
                                <select class="form-select" id="cambio-esparadrapo">
                                    <option selected>Necesita cambio?</option>
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <hr>
                    <!--BAJALENGUAS X20 UND-->
                    <div class="row row-cols-1 row-cols-md-3 mb-3">
                        <div class="col ">
                            <div>
                                <p class="text-center">BAJALENGUAS X20 UND</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="baja" class="form-check-input"
                                        id="baja-bien">
                                    <label for="baja-bien" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="baja" class="form-check-input" id="baja-mal">
                                    <label for="baja-mal" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="numerobaja" class="form-label">Cantidad</label>
                                <select class="form-select" id="numerobaja">
                                    <option value="0">Seleccione una opcion</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                                                       
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="cambio-baja" class="form-label">Cambio</label>
                                <select class="form-select" id="cambio-baja">
                                    <option selected>Necesita cambio?</option>
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                
                                </select>
                            </div>
                        </div>    
                    </div>
                    <hr>
                    <!--GUANTES DE LATEX PARA EXAMEN-->
                    <div class="row row-cols-1 row-cols-md-3 mb-3">
                        <div class="col">
                            <div>
                                <p class="text-center">GUANTES DE LATEX PARA EXAMEN</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="guantes" class="form-check-input"
                                        id="guantes-bien">
                                    <label for="guantes-bien" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="guantes" class="form-check-input" id="guantes-mal">
                                    <label for="guantes-mal" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="numeroguantes" class="form-label">Cantidad</label>
                                <select class="form-select" id="numeroguantes">
                                    <option value="0">Seleccione una opcion</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                               
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="cambio-guantes" class="form-label">Cambio</label>
                                <select class="form-select" id="cambio-guantes">
                                    <option selected>Necesita cambio?</option>
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                
                                </select>
                            </div>
                        </div>    
                    </div>
                    <hr>
                    <!--VENDA ELÁSTICA 2 X 5 YARDAS-->
                    <div class="row row-cols-1 row-cols-md-3 mb-3">
                        <div class="col ">
                            <div>
                                <p class="text-center">VENDA ELÁSTICA 2 X 5 YARDAS</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="venda" class="form-check-input"
                                        id="venda-bien">
                                    <label for="venda-bien" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="venda" class="form-check-input" id="venda-mal">
                                    <label for="venda-mal" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="numerovenda" class="form-label">Cantidad</label>
                                <select class="form-select" id="numerovenda">
                                    <option value="0">Seleccione una opcion</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                                        
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="cambio-venda" class="form-label">Cambio</label>
                                <select class="form-select" id="cambio-venda">
                                    <option selected>Necesita cambio?</option>
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                
                                </select>
                            </div>
                        </div>    
                    </div>
                    <hr>
                    <!--VENDA ELÁSTICA 3 X 5 YARDAS-->
                    <div class="row row-cols-1 row-cols-md-3 mb-3">
                        <div class="col ">
                            <div>
                                <p class="text-center">VENDA ELÁSTICA 3 X 5 YARDAS</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="venda3x5" class="form-check-input"
                                        id="venda3x5-bien">
                                    <label for="venda3x5-bien" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="venda3x5" class="form-check-input" id="venda3x5-mal">
                                    <label for="venda3x5-mal" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="numerovenda3x5" class="form-label">Cantidad</label>
                                <select class="form-select" id="numerovenda3x5">
                                    <option value="0">Seleccione una opcion</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                                         
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="cambio-venda3x5" class="form-label">Cambio</label>
                                <select class="form-select" id="cambio-venda3x5">
                                    <option selected>Necesita cambio?</option>
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                
                                </select>
                            </div>
                        </div>    
                    </div>
                    <hr>
                    <!--VENDA ELÁSTICA 5 X 5 YARDAS -->
                    <div class="row row-cols-1 row-cols-md-3 mb-3">
                        <div class="col ">
                            <div>
                                <p class="text-center">VENDA ELÁSTICA 5 X 5 YARDAS</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="venda5x5" class="form-check-input"
                                        id="venda5x5-bien">
                                    <label for="venda5x5-bien" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="venda5x5" class="form-check-input" id="venda5x5-mal">
                                    <label for="venda5x5-mal" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="numerovenda5x5" class="form-label">Cantidad</label>
                                <select class="form-select" id="numerovenda5x5">
                                    <option value="0">Seleccione una opcion</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                
                           
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="cambio-venda5x5" class="form-label">Cambio</label>
                                <select class="form-select" id="cambio-venda5x5">
                                    <option selected>Necesita cambio?</option>
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                
                                </select>
                            </div>
                        </div>    
                    </div>
                    <hr>
                    <!--YODOPOVIDONA (JABÓN QUIRÚRGICO)-->
                    <div class="row row-cols-1 row-cols-md-3 mb-3">
                        <div class="col ">
                            <div>
                                <p class="text-center">YODOPOVIDONA(JABÓN QUIRÚRGICO)</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="yodo" class="form-check-input"
                                        id="yodo-bien">
                                    <label for="yodo-bien" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="yodo" class="form-check-input" id="yodo-mal">
                                    <label for="yodo-mal" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="numeroyodo" class="form-label">Cantidad</label>
                                <select class="form-select" id="numeroyodo">
                                    <option value="0">Seleccione una opcion</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                
                           
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="cambio-yodo" class="form-label">Cambio</label>
                                <select class="form-select" id="cambio-yodo">
                                    <option selected>Necesita cambio?</option>
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                
                                </select>
                            </div>
                        </div>    
                    </div>
                    <hr>
                    <!--SOLUCIÓN SALINA 250 cc ó 500 cc-->
                    <div class="row row-cols-1 row-cols-md-3 mb-3">
                        <div class="col ">
                            <div>
                                <p class="text-center">SOLUCIÓN SALINA 250 cc ó 500 cc</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="solucion" class="form-check-input"
                                        id="solucion-bien">
                                    <label for="solucion-bien" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="solucion" class="form-check-input" id="solucion-mal">
                                    <label for="solucion-mal" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="numerosolucion" class="form-label">Cantidad</label>
                                <select class="form-select" id="numerosolucion">
                                    <option value="0">Seleccione una opcion</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                
                           
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="cambio-solucion" class="form-label">Cambio</label>
                                <select class="form-select" id="cambio-solucion">
                                    <option selected>Necesita cambio?</option>
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                
                                </select>
                            </div>
                        </div>    
                    </div>
                    <hr>
                    <!--TERMÓMETRO DE MERCURIO O DIGITAL -->
                    <div class="row row-cols-1 row-cols-md-3 mb-3">
                        <div class="col ">
                            <div>
                                <p class="text-center">TERMÓMETRO DE MERCURIO O DIGITAL</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="termometro" class="form-check-input"
                                        id="termometro-bien">
                                    <label for="termometro-bien" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="termometro" class="form-check-input" id="termometro-mal">
                                    <label for="termometro-mal" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="numerotermometro" class="form-label">Cantidad</label>
                                <select class="form-select" id="numerotermometro">
                                    <option value="0">Seleccione una opcion</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                  
                           
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="cambio-termometro" class="form-label">Cambio</label>
                                <select class="form-select" id="cambio-termometro">
                                    <option selected>Necesita cambio?</option>
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                
                                </select>
                            </div>
                        </div>    
                    </div>
                    <hr>
                    <!--ALCOHOL ANTISÉPTICO FRASCO POR 275 ml -->
                    <div class="row row-cols-1 row-cols-md-3 mb-3">
                        <div class="col ">
                            <div>
                                <p class="text-center">ALCOHOL ANTISÉPTICO FRASCO POR 275 ml</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="alcohol" class="form-check-input"
                                        id="alcohol-bien">
                                    <label for="alcohol-bien" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="alcohol" class="form-check-input" id="alcohol-mal">
                                    <label for="alcohol-mal" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="numeroalcohol" class="form-label">Cantidad</label>
                                <select class="form-select" id="numeroalcohol">
                                    <option value="0">Seleccione una opcion</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                   
                           
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="cambio-alcohol" class="form-label">Cambio</label>
                                <select class="form-select" id="cambio-alcohol">
                                    <option selected>Necesita cambio?</option>
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                
                                </select>
                            </div>
                        </div>    
                    </div>
                    <hr>
                    <!--LINTERNA-->
                    <div class="row row-cols-1 row-cols-md-3 mb-3">
                        <div class="col ">
                            <div>
                                <p class="text-center">LINTERNA</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="linterna" class="form-check-input"
                                        id="linterna-bien">
                                    <label for="linterna-bien" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="linterna" class="form-check-input" id="linterna-mal">
                                    <label for="linterna-mal" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="numerolinterna" class="form-label">Cantidad</label>
                                <select class="form-select" id="numerolinterna">
                                    <option value="0">Seleccione una opcion</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                 
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="cambio-linterna" class="form-label">Cambio</label>
                                <select class="form-select" id="cambio-linterna">
                                    <option selected>Necesita cambio?</option>
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                
                                </select>
                            </div>
                        </div>    
                    </div>
                    <hr>
                    <!--PILAS DE REPUESTO-->
                    <div class="row row-cols-1 row-cols-md-3 mb-3">
                        <div class="col ">
                            <div>
                                <p class="text-center">PILAS DE REPUESTO</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="pilas" class="form-check-input"
                                        id="pilas-bien">
                                    <label for="pilas-bien" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="pilas" class="form-check-input" id="pilas-mal">
                                    <label for="pilas-mal" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="numeropilas" class="form-label">Cantidad</label>
                                <select class="form-select" id="numeropilas">
                                    <option value="0">Seleccione una opcion</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    
                           
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="cambio-pilas" class="form-label">Cambio</label>
                                <select class="form-select" id="cambio-pilas">
                                    <option selected>Necesita cambio?</option>
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                
                                </select>
                            </div>
                        </div>    
                    </div>
                    <hr>
                    <!--TIJERA SENCILLA-->
                    <div class="row row-cols-1 row-cols-md-3 mb-3">
                        <div class="col ">
                            <div>
                                <p class="text-center">TIJERA SENCILLA</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="tijera" class="form-check-input"
                                        id="tijera-bien">
                                    <label for="tijera-bien" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="tijera" class="form-check-input" id="tijera-mal">
                                    <label for="tijera-mal" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="numerotijera" class="form-label">Cantidad</label>
                                <select class="form-select" id="numerotijera">
                                    <option value="0">Seleccione una opcion</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                               
                           
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="cambio-tijera" class="form-label">Cambio</label>
                                <select class="form-select" id="cambio-tijera">
                                    <option selected>Necesita cambio?</option>
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                
                                </select>
                            </div>
                        </div>    
                    </div>
                    <hr>
                    <!--MANUAL DE PRIMEROS AUXILIOS-->
                    <div class="row row-cols-1 row-cols-md-3 mb-3">
                        <div class="col ">
                            <div>
                                <p class="text-center">MANUAL DE PRIMEROS AUXILIOS</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="manual" class="form-check-input"
                                        id="manual-bien">
                                    <label for="manual-bien" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="manual" class="form-check-input" id="manual-mal">
                                    <label for="manual-mal" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="numeromanual" class="form-label">Cantidad</label>
                                <select class="form-select" id="numeromanual">
                                    <option value="0">Seleccione una opcion</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                
                           
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="cambio-manual" class="form-label">Cambio</label>
                                <select class="form-select" id="cambio-manual">
                                    <option selected>Necesita cambio?</option>
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                
                                </select>
                            </div>
                        </div>    
                    </div>
                    <hr>
                    <!--ALGODÓN PAQ X 25 GR-->
                    <div class="row row-cols-1 row-cols-md-3 mb-3">
                        <div class="col ">
                            <div>
                                <p class="text-center">ALGODÓN PAQ X 25 GR</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="algodon" class="form-check-input"
                                        id="algodon-bien">
                                    <label for="algodon-bien" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="algodon" class="form-check-input" id="algodon-mal">
                                    <label for="algodon-mal" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="numeroalgodon" class="form-label">Cantidad</label>
                                <select class="form-select" id="numeroalgodon">
                                    <option value="0">Seleccione una opcion</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                 
                           
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="cambio-algodon" class="form-label">Cambio</label>
                                <select class="form-select" id="cambio-algodon">
                                    <option selected>Necesita cambio?</option>
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                
                                </select>
                            </div>
                        </div>    
                    </div>
                    <hr>
                    <!--CURA UNIDAD-->
                    <div class="row row-cols-1 row-cols-md-3 mb-3">
                        <div class="col ">
                            <div>
                                <p class="text-center">CURA UNIDAD</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="cura" class="form-check-input"
                                        id="cura-bien">
                                    <label for="cura-bien" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="cura" class="form-check-input" id="cura-mal">
                                    <label for="cura-mal" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="numerocura" class="form-label">Cantidad</label>
                                <select class="form-select" id="numerocura">
                                    <option value="0">Seleccione una opcion</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                   
                           
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="cambio-cura" class="form-label">Cambio</label>
                                <select class="form-select" id="cambio-cura">
                                    <option selected>Necesita cambio?</option>
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                
                                </select>
                            </div>
                        </div>    
                    </div>
                    <hr>
                    <!--TAPABOCAS-->
                    <div class="row row-cols-1 row-cols-md-3 mb-3">
                        <div class="col ">
                            <div>
                                <p class="text-center">TAPABOCAS</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="tapabocas" class="form-check-input"
                                        id="tapabocas-bien">
                                    <label for="tapabocas-bien" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="tapabocas" class="form-check-input" id="tapabocas-mal">
                                    <label for="tapabocas-mal" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="numerotapabocas" class="form-label">Cantidad</label>
                                <select class="form-select" id="numerotapabocas">
                                    <option value="0">Seleccione una opcion</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    
                           
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <label for="cambio-tapabocas" class="form-label">Cambio</label>
                                <select class="form-select" id="cambio-tapabocas">
                                    <option selected>Necesita cambio?</option>
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                
                                </select>
                            </div>
                        </div>    
                    </div>
                    <br>
                    <hr>
                    <div class="row row-cols-2  mb-2">
                        <div class="col">
                            <div class="form-group">
                                <label for="bot-obs">Observaciones</label>
                                <textarea class="form-control" id="bot-obs" rows="3"></textarea>
                              </div>
                        </div>
                        <div class="form-group">
                            <label for="bot-jus">Justificacion</label>
                            <textarea class="form-control" id="bot-jus" rows="3"></textarea>
                          </div>
                    </div>
                    <hr>
                    <br>
                    <label for="inspector-bot">RESPONSABLE DE LA INSPECCIÓN</label>
                    <input type="text" class="form-control" id="inspector-bot">
                    <hr>
                    
                    <div class="row row-cols-1 mb-2">
                        <div class="col signature-container">
                            <p>Firma empleado</p>
                            <canvas id="signature-pad" class="w-95"></canvas>
                            <p>Firma supervisor</p>
                            <canvas id="signature-pad2" class="w-95"></canvas>
                        </div>
                    
                        
                    </div>
                    
                    
                    
                    
                </form>
                
            </div>
            
            
        </div>
    </div>
    <button class=" btn btn-success d-grid gap-2 col-6 mx-auto m-2" id="clear-button1" onclick="clearSignature1()">Limpiar</button>
    <button class=" btn btn-primary d-grid gap-2 col-6 mx-auto m-2" href="#" id="exportPdf" onclick="exportToPdf()">Guardar</button>
