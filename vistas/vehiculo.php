
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
                <h3>INSPECCION VEHICULO</h3>
                <hr>
                <form class="frmlr" id="formulario">
                    
                    <div class="form-floating row-cols-1 mb-2">                      
                        <input type="date" class="form-control" id="fecha-car" placeholder=".">
                        <label for="fecha-car">Fecha</label>
                    </div> 
                    <div class=" mb-2 row">
                        <div class="form-floating col-md-6 mb-2">                      
                            <input type="text" class="form-control" id="conductor-car" placeholder=".">
                            <label for="conductor-car">Nombre de conductor</label>
                        </div> 
                        <div class="form-floating col-md-6 mb-2">
                            <input type="text" class="form-control" id="nombre-car" placeholder=".">
                            <label for="nombre-car">Nombre de propietario</label>
                        </div>
                        <div class="form-floating col-md-6 mb-2">
                            <input type="number" class="form-control" id="tel-car" placeholder=".">
                            <label for="tel-car">Telefono de conductor</label>
                        </div>
                         
                    </div>
                    <div class=" mb-2 row">
                        <div class="form-floating col-md-6 mb-2">
                            <input type="text" class="form-control" id="car-car" placeholder=".">
                            <label for="car-car">Vehiculo</label>
                        </div>
                        <div class="form-floating col-md-6 mb-2">                      
                            <input type="text" class="form-control" id="placa-car" placeholder=".">
                            <label for="placa-car">Placa</label>
                        </div>
                        <div class="form-floating col-md-6 mb-2">                      
                            <input type="text" class="form-control" id="color-car" placeholder=".">
                            <label for="color-car">Color</label>
                        </div>
                        
                    </div>
                    <div class=" mb-2 row">
                        <div class="form-floating col-md-6 mb-2">
                            <input type="text" class="form-control" id="licencia-car" placeholder=".">
                            <label for="licencia-car">No DE LICENCIA CONDUCTOR</label>
                        </div>
                        <div class="form-floating col-md-6 mb-2">                      
                            <input type="text" class="form-control" id="km-car" placeholder=".">
                            <label for="km-car">KILOMETRAJE REVISIÓN</label>
                        </div> 
                        <div class="form-floating col-md-6 mb-2">                      
                            <input type="date" class="form-control" id="fvl-car" placeholder=".">
                            <label for="fvl-car">Vencimiento_licencia</label>
                        </div> 
                    </div>
                    <br>
                    <br>
                    <hr>
                    <br>
                    <br>
                    <div class="row row-cols-1 row-cols-md-4 mb-2">
                        <div class="col">
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="floatingInputSede" placeholder=".">
                                <label for="floatingInputSede">SEDE</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="floatingInputSupervisor" placeholder=".">
                                <label for="floatingInputSupervisor">SUPERVISOR</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="floatingInputArea" placeholder=".">
                                <label for="floatingInputArea">AREA</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="floatingInputDependencia" placeholder=".">
                                <label for="floatingInputDependencia">DEPENDENCIA</label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row row-cols-1 row-cols-md-2 mb-2">
                        <div class="col">
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="floatingInputCambioAceiteUltimo" placeholder=".">
                                <label for="floatingInputCambioAceiteUltimo">CAMBIO ACEITE ULTIMO:</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="floatingInputCambioAceiteProximo" placeholder=".">
                                <label for="floatingInputCambioAceiteProximo">CAMBIO ACEITE PROXIMO:</label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h4>Estado del vehiculo</h4>
                    <hr>
                    <div class="container">
                        <div class="row row-cols-2">
                            <div class="col">
                                <div>
                                    <h4 class="text-center">Lado Derecho</h4>
                                </div>
                                <hr>
                                <div class="col">
                                    <div>
                                        <p class="text-center">RIN TRASERO</p>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="rint" class="form-check-input"
                                                id="rint-si">
                                            <label for="rint-si" class="form-check-label">Bien</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="rint" class="form-check-input" id="rint-no">
                                            <label for="rint-no" class="form-check-label">Mal</label>
                                        </div>

                                    </div>
                                    <hr>
                                    <div>
                                        <p class="text-center">LLANTA TRASERA</p>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="llantat" class="form-check-input"
                                                id="llantat-si">
                                            <label for="llantat-si" class="form-check-label">Bien</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="llantat" class="form-check-input" id="llantat-no">
                                            <label for="llantat-no" class="form-check-label">Mal</label>
                                        </div>

                                    </div>
                                    <hr>
                                    <div>
                                        <p class="text-center">PUERTA TRASERA</p>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="puertat" class="form-check-input"
                                                id="puertat-si">
                                            <label for="puertat-si" class="form-check-label">Bien</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="puertat" class="form-check-input" id="puertat-no">
                                            <label for="puertat-no" class="form-check-label">Mal</label>
                                        </div>

                                    </div>
                                    <hr>
                                    <div>
                                        <p class="text-center">RIN DELANTERO</p>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="rind" class="form-check-input"
                                                id="rind-si">
                                            <label for="rind-si" class="form-check-label">Bien</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="rind" class="form-check-input" id="rind-no">
                                            <label for="rind-no" class="form-check-label">Mal</label>
                                        </div>

                                    </div>
                                    <hr>
                                    <div>
                                        <p class="text-center">LLANTA DELANTERA</p>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="llantad" class="form-check-input"
                                                id="llantad-si">
                                            <label for="llantad-si" class="form-check-label">Bien</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="llantad" class="form-check-input" id="llantad-no">
                                            <label for="llantad-no" class="form-check-label">Mal</label>
                                        </div>

                                    </div>
                                    <hr>
                                    <div>
                                        <p class="text-center">PUERTA DELANTERA</p>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="puertad" class="form-check-input"
                                                id="puertad-si">
                                            <label for="puertad-si" class="form-check-label">Bien</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="puertad" class="form-check-input" id="puertad-no">
                                            <label for="puertad-no" class="form-check-label">Mal</label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div>
                                        <p class="text-center">RETROVISOR</p>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="retrovisor" class="form-check-input"
                                                id="retrovisor-si">
                                            <label for="retrovisor-si" class="form-check-label">Bien</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="retrovisor" class="form-check-input" id="retrovisor-no">
                                            <label for="retrovisor-no" class="form-check-label">Mal</label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div>
                                        <p class="text-center">STOP RH</p>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="stop" class="form-check-input"
                                                id="stop-si">
                                            <label for="stop-si" class="form-check-label">Bien</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="stop" class="form-check-input" id="stop-no">
                                            <label for="stop-no" class="form-check-label">Mal</label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div>
                                        <p class="text-center">DIRECCIONAL RH</p>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="direccional" class="form-check-input"
                                                id="direccional-si">
                                            <label for="direccional-si" class="form-check-label">Bien</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="direccional" class="form-check-input" id="direccional-no">
                                            <label for="direccional-no" class="form-check-label">Mal</label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div>
                                        <p class="text-center">LUZ REVERSO</p>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="luzr" class="form-check-input"
                                                id="luzr-si">
                                            <label for="luzr-si" class="form-check-label">Bien</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="luzr" class="form-check-input" id="luzr-no">
                                            <label for="luzr-no" class="form-check-label">Mal</label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div>
                                        <p class="text-center">LUZ DE LA PLACA</p>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="luzp" class="form-check-input"
                                                id="luzp-si">
                                            <label for="luzp-si" class="form-check-label">Bien</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="luzp" class="form-check-input" id="luzp-no">
                                            <label for="luzp-no" class="form-check-label">Mal</label>
                                        </div>
                                    </div>
                                    <br>
                                    <hr>
                                    <div>
                                        <p class="text-center">CARPA</p>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="carpa" class="form-check-input"
                                                id="carpa-si">
                                            <label for="carpa-si" class="form-check-label">Bien</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="carpa" class="form-check-input" id="carpa-no">
                                            <label for="carpa-no" class="form-check-label">Mal</label>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="col">
                                <div>
                                    <h4 class="text-center">Lado izquierdo</h4>
                                </div>
                                <hr>
                                <div class="col">
                                    <div>
                                        <p class="text-center">RIN TRASERO</p>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="rintl" class="form-check-input"
                                                id="rintl-si">
                                            <label for="rintl-si" class="form-check-label">Bien</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="rintl" class="form-check-input" id="rintl-no">
                                            <label for="rintl-no" class="form-check-label">Mal</label>
                                        </div>

                                    </div>
                                    <hr>
                                    <div>
                                        <p class="text-center">LLANTA TRASERA</p>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="llantatl" class="form-check-input"
                                                id="llantatl-si">
                                            <label for="llantatl-si" class="form-check-label">Bien</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="llantatl" class="form-check-input" id="llantatl-no">
                                            <label for="llantatl-no" class="form-check-label">Mal</label>
                                        </div>

                                    </div>
                                    <hr>
                                    <div>
                                        <p class="text-center">PUERTA TRASERA</p>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="puertatl" class="form-check-input"
                                                id="puertatl-si">
                                            <label for="puertatl-si" class="form-check-label">Bien</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="puertatl" class="form-check-input" id="puertatl-no">
                                            <label for="puertatl-no" class="form-check-label">Mal</label>
                                        </div>

                                    </div>
                                    <hr>
                                    <div>
                                        <p class="text-center">RIN DELANTERO</p>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="rindl" class="form-check-input"
                                                id="rindl-si">
                                            <label for="rindl-si" class="form-check-label">Bien</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="rindl" class="form-check-input" id="rindl-no">
                                            <label for="rindl-no" class="form-check-label">Mal</label>
                                        </div>

                                    </div>
                                    <hr>
                                    <div>
                                        <p class="text-center">LLANTA DELANTERA</p>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="llantadl" class="form-check-input"
                                                id="llantadl-si">
                                            <label for="llantadl-si" class="form-check-label">Bien</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="llantadl" class="form-check-input" id="llantadl-no">
                                            <label for="llantadl-no" class="form-check-label">Mal</label>
                                        </div>

                                    </div>
                                    <hr>
                                    <div>
                                        <p class="text-center">PUERTA DELANTERA</p>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="puertadl" class="form-check-input"
                                                id="puertadl-si">
                                            <label for="puertadl-si" class="form-check-label">Bien</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="puertadl" class="form-check-input" id="puertadl-no">
                                            <label for="puertadl-no" class="form-check-label">Mal</label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div>
                                        <p class="text-center">RETROVISOR</p>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="retrovisorl" class="form-check-input"
                                                id="retrovisorl-si">
                                            <label for="retrovisorl-si" class="form-check-label">Bien</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="retrovisorl" class="form-check-input" id="retrovisorl-no">
                                            <label for="retrovisorl-no" class="form-check-label">Mal</label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div>
                                        <p class="text-center">FAROL RH</p>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="farol" class="form-check-input"
                                                id="farol-si">
                                            <label for="farol-si" class="form-check-label">Bien</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="farol" class="form-check-input" id="farol-no">
                                            <label for="farol-no" class="form-check-label">Mal</label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div>
                                        <p class="text-center">DIRECCIONAL RH</p>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="direccionall" class="form-check-input"
                                                id="direccionall-si">
                                            <label for="direccionall-si" class="form-check-label">Bien</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="direccionall" class="form-check-input" id="direccionall-no">
                                            <label for="direccionall-no" class="form-check-label">Mal</label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div>
                                        <p class="text-center">PERSIANA</p>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="PERSIANA" class="form-check-input"
                                                id="PERSIANA-si">
                                            <label for="PERSIANA-si" class="form-check-label">Bien</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="PERSIANA" class="form-check-input" id="PERSIANA-no">
                                            <label for="PERSIANA-no" class="form-check-label">Mal</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <hr>
                    <h4>Parte superior</h4>
                    <hr>
                    <div class="row row-cols-2 mb-2">
                        <div class="col">
                            <div>
                                <p class="text-center">Techo</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="techo" class="form-check-input"
                                        id="techo-si">
                                    <label for="techo-si" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="techo" class="form-check-input" id="techo-no">
                                    <label for="techo-no" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <p class="text-center">Porta escaleras</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="portae" class="form-check-input"
                                        id="portae-si">
                                    <label for="portae-si" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="portae" class="form-check-input" id="portae-no">
                                    <label for="portae-no" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <hr>
                    <h4>Parte interna</h4>
                    <hr>
                    <div class="row row-cols-3 mb-2">
                        <div class="col">
                            <div>
                                <p class="text-center">Silla conductor</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="sillac" class="form-check-input"
                                        id="sillac-si">
                                    <label for="sillac-si" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="sillac" class="form-check-input" id="sillac-no">
                                    <label for="sillac-no" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <p class="text-center">Silla pasajero</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="sillap" class="form-check-input"
                                        id="sillap-si">
                                    <label for="sillap-si" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="sillap" class="form-check-input" id="sillap-no">
                                    <label for="sillap-no" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>  
                        <div class="col">
                            <div>
                                <p class="text-center">Silla trasera</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="sillat" class="form-check-input"
                                        id="sillat-si">
                                    <label for="sillat-si" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="sillat" class="form-check-input" id="sillat-no">
                                    <label for="sillat-no" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row row-cols-2 mb-2">
                        <div class="col">
                            <div>
                                <p class="text-center">Cinturon de seguridad RH</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="cinrh" class="form-check-input"
                                        id="cinrh-si">
                                    <label for="cinrh-si" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="cinrh" class="form-check-input" id="cinrh-no">
                                    <label for="cinrh-no" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <p class="text-center">Cinturon de seguridad LH</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="cinlh" class="form-check-input"
                                        id="cinlh-si">
                                    <label for="cinlh-si" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="cinlh" class="form-check-input" id="cinlh-no">
                                    <label for="cinlh-no" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>  
                        
                    </div>
                    <hr>
                    <div class="row row-cols-2 mb-2">
                        <div class="col">
                            <div>
                                <p class="text-center">Cauchos pedales</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="caup" class="form-check-input"
                                        id="caup-si">
                                    <label for="caup-si" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="caup" class="form-check-input" id="caup-no">
                                    <label for="caup-no" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <p class="text-center">Caja herramientas</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="cajah" class="form-check-input"
                                        id="cajah-si">
                                    <label for="cajah-si" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="cajah" class="form-check-input" id="cajah-no">
                                    <label for="cajah-no" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>  
                        
                    </div>
                    <hr>
                    <h4>Situacion</h4>
                    <hr>
                    <div class="row row-cols-2 mb-2">
                        <div class="col">
                            <div>
                                <p class="text-center">Mantenimiento mecanico</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="manm" class="form-check-input"
                                        id="manm-si">
                                    <label for="manm-si" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="manm" class="form-check-input" id="manm-no">
                                    <label for="manm-no" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <p class="text-center">Mantenimiento latoneria</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="manl" class="form-check-input"
                                        id="manl-si">
                                    <label for="manl-si" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="manl" class="form-check-input" id="manl-no">
                                    <label for="manl-no" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>  
                        
                    </div>
                    <hr>
                    <div class="row row-cols-2 mb-2">
                        <div class="col">
                            <div>
                                <p class="text-center">Mantenimiento aseo</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="mana" class="form-check-input"
                                        id="mana-si">
                                    <label for="mana-si" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="mana" class="form-check-input" id="mana-no">
                                    <label for="mana-no" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <p class="text-center">Conductor ausente</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="cona" class="form-check-input"
                                        id="cona-si">
                                    <label for="cona-si" class="form-check-label">Si</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="cona" class="form-check-input" id="cona-no">
                                    <label for="cona-no" class="form-check-label">No</label>
                                </div>
                            </div>
                        </div>  
                        
                    </div>
                    <br>
                    <hr>
                    <h4>Documentos</h4>
                    <hr>
                    <div class="row row-cols-1 row-cols-md-2 mb-3">
                        
                        <div class="col">
                            <div>
                                <p class="text-center">Seguro obligatorio</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="seguro" class="form-check-input"
                                        id="seguro-si">
                                    <label for="seguro-si" class="form-check-label">Vigente</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="seguro" class="form-check-input" id="seguro-no">
                                    <label for="seguro-no" class="form-check-label">Vencido</label>
                                </div>

                            </div>
                        </div>
                        <div class="col">
                            <label for="fechav-seg">Fecha de vencimiento</label>
                            <input type="date" class="form-control" id="fechav-seg">
                        </div>
                    </div>
                    <hr>
                    <div class="row row-cols-1 row-cols-md-2 mb-3">
                        
                        <div class="col">
                            <div>
                                <p class="text-center">Tarjeta de propiedad</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="tarjeta" class="form-check-input"
                                        id="tarjeta-si">
                                    <label for="tarjeta-si" class="form-check-label">Vigente</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="tarjeta" class="form-check-input" id="tarjeta-no">
                                    <label for="tarjeta-no" class="form-check-label">Vencido</label>
                                </div>

                            </div>
                        </div>
                        <div class="col">
                            <label for="fechav-tar">Fecha de vencimiento</label>
                            <input type="date" class="form-control" id="fechav-tar">
                        </div>
                    </div>
                    <hr>
                    <div class="row row-cols-1 row-cols-md-2 mb-3">
                        
                        <div class="col">
                            <div>
                                <p class="text-center">Seguro contractual</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="segc" class="form-check-input"
                                        id="segc-si">
                                    <label for="segc-si" class="form-check-label">Vigente</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="segc" class="form-check-input" id="segc-no">
                                    <label for="segc-no" class="form-check-label">Vencido</label>
                                </div>

                            </div>
                        </div>
                        <div class="col">
                            <label for="fechav-segc">Fecha de vencimiento</label>
                            <input type="date" class="form-control" id="fechav-segc">
                        </div>
                    </div>
                    <hr>
                    <div class="row row-cols-1 row-cols-md-2 mb-3">
                        
                        <div class="col">
                            <div>
                                <p class="text-center">Seguro extracontractual</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="sege" class="form-check-input"
                                        id="sege-si">
                                    <label for="sege-si" class="form-check-label">Vigente</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="sege" class="form-check-input" id="sege-no">
                                    <label for="sege-no" class="form-check-label">Vencido</label>
                                </div>

                            </div>
                        </div>
                        <div class="col">
                            <label for="fechav-sege">Fecha de vencimiento</label>
                            <input type="date" class="form-control" id="fechav-sege">
                        </div>
                    </div>
                    <hr>
                    <div class="row row-cols-1 row-cols-md-2 mb-3">
                        
                        <div class="col">
                            <div>
                                <p class="text-center">Revision tecnomecanica</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="Revtec" class="form-check-input"
                                        id="Revtec-si">
                                    <label for="Revtec-si" class="form-check-label">Vigente</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="Revtec" class="form-check-input" id="Revtec-no">
                                    <label for="Revtec-no" class="form-check-label">Vencido</label>
                                </div>

                            </div>
                        </div>
                        <div class="col">
                            <label for="fechav-Revtec">Fecha de vencimiento</label>
                            <input type="date" class="form-control" id="fechav-Revtec">
                        </div>
                    </div>
                    <hr>
                    
                    <p class="h5">/////Copia de cedeula y licencia de conduccion/////</p>
                    <!--**************************************************************************-->                          
                    <hr>
                    <BR></BR>
                    <div class="row row-cols-2  mb-2">
                        <div class="col">
                            <div class="form-group">
                                <label for="car-obs">Observaciones</label>
                                <textarea class="form-control" id="car-obs" rows="1"></textarea>
                              </div>
                        </div>
                        <div>
                            <p class="text-center">Conforme</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="conf" class="form-check-input"
                                    id="conf-si">
                                <label for="conf-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="conf" class="form-check-input" id="conf-no">
                                <label for="conf-no" class="form-check-label">No</label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    
                    
                    <div class="row row-cols-1 mb-2">
                        <div class="col signature-container">
                            <p>Firma empleado</p>
                            <canvas  class="w-95" id="signature-pad"></canvas>
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
