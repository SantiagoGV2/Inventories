
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
                <h3>INSPECCION ESCALERAS</h3>
                <hr>
                <form class="frmlr" id="formulario">
                    
                    <div class=" mb-2 row">
                        <div class="form-floating col-md-6 mb-2">
                            <input type="text" class="form-control" id="trabajo-esc" placeholder=".">
                            <label for="trabajo-esc">Trabajo</label>
                        </div>
                        <div class="form-floating col-md-6 mb-2">                      
                            <input type="date" class="form-control" id="fecha-esc" placeholder=".">
                            <label for="fecha-esc">Fecha</label>
                        </div>  
                    </div>
                    
                    <div class=" mb-2 row">
                        <div class="form-floating col-md-6 mb-2">
                            <input type="text" class="form-control" id="ubicacion-esc" placeholder=".">
                            <label for="ubicacion-esc">Ubicacion</label>
                        </div>
                        <div class="form-floating col-md-6 mb-2">                      
                            <input type="time" class="form-control" id="hora-esc" placeholder=".">
                            <label for="hora-esc">Hora</label>
                        </div>  
                    </div>

                    <div class=" mb-2 row">
                        <div class="form-floating col-md-6 mb-2">
                            <input type="text" class="form-control" id="nombre-esc" placeholder=".">
                            <label for="nombre-esc">Nombre</label>
                        </div>
                        <div class="form-floating col-md-6 mb-2">                      
                            <input type="text" class="form-control" id="usuario-esc" placeholder=".">
                            <label for="usuario-esc">Usuario </label>
                        </div>  
                    </div>

                    <div class=" mb-2 row">
                        <div class="form-floating col-md-6 mb-2">
                            <input type="text" class="form-control" id="kit-esc" placeholder=".">
                            <label for="kit-esc">Kit de carretera</label>
                        </div>
                        <div class="form-floating col-md-6 mb-2">                      
                            <input type="text" class="form-control" id="area-esc" placeholder=".">
                            <label for="area-esc">Area</label>
                        </div>  
                    </div>
                    <hr>
                    <h3>Partes a examinar</h3>
                    <hr>


                    <!--Largueros (en buen estado)-->
                    <div class="row row-cols-1 row-cols-md-2 mb-2">
                        <div class="col ">
                            <div>
                                <p class="text-center">Largueros (en buen estado)</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="largueros" class="form-check-input" id="largueros-bien">
                                    <label for="largueros-bien" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="largueros" class="form-check-input" id="largueros-mal">
                                    <label for="largueros-mal" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="larg-obs">Observaciones</label>
                                <textarea class="form-control" id="larg-obs" rows="2"></textarea>
                              </div>
                        </div>       
                    </div>
                    <hr>
                    <!--Peldaños (antideslizantes, no torcidos y en buen estado)-->
                    <div class="row row-cols-1 row-cols-md-2 mb-2">
                        <div class="col">
                            <div>
                                <p class="text-center">Peldaños (antideslizantes, no torcidos y en buen estado)</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="Peldaños" class="form-check-input"
                                        id="Peldaños-bien">
                                    <label for="Peldaños-bien" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="Peldaños" class="form-check-input" id="Peldaños-mal">
                                    <label for="Peldaños-mal" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="form-group">
                                <label for="pel-obs">Observaciones</label>
                                <textarea class="form-control" id="pel-obs" rows="2"></textarea>
                              </div>
                        </div>   
                    </div>
                    <hr>
                    <!--Unión de peldaños y largueros-->
                    <div class="row row-cols-1 row-cols-md-2 mb-2">
                        <div class="col ">
                            <div>
                                <p class="text-center">Unión de peldaños y largueros</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="Union" class="form-check-input"
                                        id="Union-bien">
                                    <label for="Union-bien" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="Union" class="form-check-input" id="Union-mal">
                                    <label for="Union-mal" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="union-obs">Observaciones</label>
                                <textarea class="form-control" id="union-obs" rows="2"></textarea>
                              </div>
                        </div>       
                    </div>
                    <hr>
                    <!--Zapatas antideslizantes-->
                    <div class="row row-cols-1 row-cols-md-2 mb-2">
                        <div class="col">
                            <div>
                                <p class="text-center">Zapatas antideslizantes</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="Zapatas" class="form-check-input"
                                        id="Zapatas-bien">
                                    <label for="Zapatas-bien" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="Zapatas" class="form-check-input" id="Zapatas-mal">
                                    <label for="Zapatas-mal" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="zap-obs">Observaciones</label>
                                <textarea class="form-control" id="zap-obs" rows="2"></textarea>
                              </div>
                        </div>       
                    </div>
                    <hr>
                    <!--Piezas de ajuste (tornillos, pernos, otros)-->
                    <div class="row row-cols-1 row-cols-md-2 mb-2">
                        <div class="col ">
                            <div>
                                <p class="text-center">Piezas de ajuste (tornillos, pernos, otros)</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="Piezas" class="form-check-input"
                                        id="Piezas-bien">
                                    <label for="Piezas-bien" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="Piezas" class="form-check-input" id="Piezas-mal">
                                    <label for="Piezas-mal" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="pie-obs">Observaciones</label>
                                <textarea class="form-control" id="pie-obs" rows="2"></textarea>
                              </div>
                        </div>   
                    </div>
                    <br>
                    <hr>
                    <!--Aseo de escalera (libre de sustancias deslizantes)-->
                    <div class="row row-cols-1 row-cols-md-2 mb-2">
                        <div class="col ">
                            <div>
                                <p class="text-center">Aseo de escalera (libre de sustancias deslizantes)</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="Aseo" class="form-check-input"
                                        id="Aseo-bien">
                                    <label for="Aseo-bien" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="Aseo" class="form-check-input" id="Aseo-mal">
                                    <label for="Aseo-mal" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="aseo-obs">Observaciones</label>
                                <textarea class="form-control" id="aseo-obs" rows="2"></textarea>
                              </div>
                        </div>       
                    </div>
                    <hr>
                    <!--Identificación legible en la escalera -->
                    <div class="row row-cols-1 row-cols-md-2 mb-2">
                        <div class="col ">
                            <div>
                                <p class="text-center">Identificación legible en la escalera</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="Identificacion" class="form-check-input"
                                        id="Identificacion-bien">
                                    <label for="Identificacion-bien" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="Identificacion" class="form-check-input" id="Identificacion-mal">
                                    <label for="Identificacion-mal" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="idn-obs">Observaciones</label>
                                <textarea class="form-control" id="idn-obs" rows="2"></textarea>
                              </div>
                        </div>       
                    </div>
                    <hr>
                    <!--Cuenta con señalización de seguridad en peldaño-->
                    <div class="row row-cols-1 row-cols-md-2 mb-2">
                        <div class="col ">
                            <div>
                                <p class="text-center">Cuenta con señalización de seguridad en peldaño</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="Cuenta" class="form-check-input"
                                        id="Cuenta-bien">
                                    <label for="Cuenta-bien" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="Cuenta" class="form-check-input" id="Cuenta-mal">
                                    <label for="Cuenta-mal" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="cuenta-obs">Observaciones</label>
                                <textarea class="form-control" id="cuenta-obs" rows="2"></textarea>
                              </div>
                        </div>       
                    </div>
                    <hr>
                    <!--Brazos de unión anti-apertura (aplica para escaleras tipo tijera)-->
                    <div class="row row-cols-1 row-cols-md-2 mb-2">
                        <div class="col ">
                            <div>
                                <p class="text-center">Brazos de unión anti-apertura (aplica para escaleras tipo tijera)</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="Brazos" class="form-check-input"
                                        id="Brazos-bien">
                                    <label for="Brazos-bien" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="Brazos" class="form-check-input" id="Brazos-mal">
                                    <label for="Brazos-mal" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="brazos-obs">Observaciones</label>
                                <textarea class="form-control" id="brazos-obs" rows="2"></textarea>
                              </div>
                        </div>       
                    </div>
                    <hr>
                    <!--Ganchos traba peldaños (aplica en tijeras extensibles)-->
                    <div class="row row-cols-1 row-cols-md-2 mb-2">
                        <div class="col ">
                            <div>
                                <p class="text-center">Ganchos traba peldaños (aplica en tijeras extensibles)</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="Ganchos" class="form-check-input"
                                        id="Ganchos-bien">
                                    <label for="Ganchos-bien" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="Ganchos" class="form-check-input" id="Ganchos-mal">
                                    <label for="Ganchos-mal" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="gan-obs">Observaciones</label>
                                <textarea class="form-control" id="gan-obs" rows="2"></textarea>
                              </div>
                        </div>   
                            
                    </div>
                    <hr>
                    <!--Guías externas para unión de largueros (aplica a tijeras extensibles) -->
                    <div class="row row-cols-1 row-cols-md-2 mb-2">
                        <div class="col ">
                            <div>
                                <p class="text-center">Guías externas para unión de largueros (aplica a tijeras extensibles)</p>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="Guias" class="form-check-input"
                                        id="Guias-bien">
                                    <label for="Guias-bien" class="form-check-label">Bien</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="Guias" class="form-check-input" id="Guias-mal">
                                    <label for="Guias-mal" class="form-check-label">Mal</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="form-group">
                                <label for="guias-obs">Observaciones</label>
                                <textarea class="form-control" id="guias-obs" rows="2"></textarea>
                              </div>
                        </div>   
                    </div>
                                       
                    <hr>
                    <div class="row row-cols-2  mb-2">
                        <div class="col">
                            <div class="form-group">
                                <label for="esc-obs">Observaciones</label>
                                <textarea class="form-control" id="esc-obs" rows="2" placeholder=" ESCALERA APTA PARA SER USADA (SI) / (NO)"></textarea>
                              </div>
                        </div>
                        <div class="form-group">
                            <label for="esc-jus">Justificacion</label>
                            <textarea class="form-control" id="esc-jus" rows="2"></textarea>
                          </div>
                    </div>
                    <hr>
                    <label for="inspector-esc">RESPONSABLE DE LA INSPECCIÓN</label>
                    <input type="text" class="form-control" id="inspector-esc">
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
