<style>
    .signature-container {
        display: flex;
        flex-direction: column;
        align-items: center;

    }

    .sgp {
        display: flex;
    }

    #signature-pad {
        border: 2px solid #000;
    }

    #signature-pad2 {
        border: 2px solid #000;
    }

    #contenedor {
        display: flex;

    }

    #columna {
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

    .formulario>div {
        padding: 20px 0;
        border-bottom: 1px solid #ccc;
    }

    .primer {
        display: flex;
    }
</style>
<div class="container mt-4">
    <div class="row">
        <div id="content" class="col">
            <h3>INSPECCION MOTOCICLETA</h3>
            <hr>
            <form class="frmlr" id="formulario">

                <div class=" mb-2 row">
                    <div class="form-floating col-md-6 mb-2">
                        <input type="date" class="form-control" id="fecha-moto" placeholder=".">
                        <label for="fecha-moto">Fecha</label>
                    </div>
                    <div class="form-floating col-md-6 mb-2">
                        <input type="text" class="form-control" id="depen-moto" placeholder=".">
                        <label for="depen-moto">Dependencia</label>
                    </div>

                </div>
                <div class=" mb-2 row">
                    <div class="form-floating col-md-6 mb-2">
                        <input type="text" class="form-control" id="nombre-moto" placeholder=".">
                        <label for="nombre-moto">Nombre</label>
                    </div>
                    <div class="form-floating col-md-6 mb-2">
                        <input type="text" class="form-control" id="regi-moto" placeholder=".">
                        <label for="regi-moto">Registro</label>
                    </div>
                </div>
                <div class=" mb-2 row">
                    <div class="form-floating col-md-6 mb-2">
                        <input type="text" class="form-control" id="ofi-moto" placeholder=".">
                        <label for="ofi-moto">Oficio</label>
                    </div>
                    <div class="form-floating col-md-6 mb-2">
                        <input type="text" class="form-control" id="jefe-moto" placeholder=".">
                        <label for="jefe-moto">Jefe inmediato</label>
                    </div>
                </div>


                <hr>


                <div class="row row-cols-1 row-cols-md-3 mb-2">
                    <div class="col">
                        <div>
                            <p class="text-center">Licencia de conduccion</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Licencia" class="form-check-input" id="Licencia-si">
                                <label for="Licencia-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Licencia" class="form-check-input" id="Licencia-no">
                                <label for="Licencia-no" class="form-check-label">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <label for="placa-moto">Placa N°</label>
                        <input type="text" class="form-control" id="placa-moto">
                    </div>
                    <div class="col">
                        <label for="cilin-moto">Cilindraje</label>
                        <input type="text" class="form-control" id="cilin-moto">
                    </div>
                </div>
                <br>
                <hr>
                <div class="row row-cols-1 row-cols-md-4 mb-2">

                    <div class="col">
                        <div>
                            <p class="text-center">Casco en buen estado?</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="cne" class="form-check-input" id="cne-si">
                                <label for="cne-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="cne" class="form-check-input" id="cne-no">
                                <label for="cne-no" class="form-check-label">No</label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col">
                        <div>
                            <p class="text-center">Debidamente identificado?</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="debIdn" class="form-check-input" id="debIdn-si">
                                <label for="debIdn-si" class="form-check-label ">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="debIdn" class="form-check-input" id="debIdn-no">
                                <label for="debIdn-no" class="form-check-label">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <p class="text-center">Gafas en buen estado?</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="gbe" class="form-check-input" id="gbe-si">
                                <label for="gbe-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="gbe" class="form-check-input" id="gbe-no">
                                <label for="gbe-no" class="form-check-label">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <label for="qtgt-moto">Que tipo de gafas tiene?</label>
                        <input type="text" class="form-control" id="qtgt-moto">
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-3 mb-2">
                    <div class="col">
                        <div>
                            <p class="text-center">Utiliza botas de cuero y antideslizantes?</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="ubca" class="form-check-input" id="ubca-si">
                                <label for="ubca-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="ubca" class="form-check-input" id="ubca-no">
                                <label for="ubca-no" class="form-check-label">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <p class="text-center">Guantes en buen estado?</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="gube" class="form-check-input" id="gube-si">
                                <label for="gube-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="gube" class="form-check-input" id="gube-no">
                                <label for="gube-no" class="form-check-label">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <label for="qtgut-moto">Que tipo de guantes tiene?</label>
                        <input type="text" class="form-control" id="qtgut-moto">
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-2">
                    <div class="col">
                        <div>
                            <p class="text-center">Posee impermeable?</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="impermeable" class="form-check-input" id="impermeable-si">
                                <label for="impermeable-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="impermeable" class="form-check-input" id="impermeable-no">
                                <label for="impermeable-no" class="form-check-label">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="impermeable-est">En que estado se encuentra?</label>
                            <textarea class="form-control" id="impermeable-est" rows="1"></textarea>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <h3>Partes a examinar</h3>
                <hr>


                <!--Sistema de embrague-->
                <div class="row row-cols-1 row-cols-md-2 mb-2">
                    <div class="col ">
                        <div>
                            <p class="text-center">Sistema de embrague</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="embrague" class="form-check-input" id="embrague-si">
                                <label for="embrague-si" class="form-check-label">Bien</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="embrague" class="form-check-input" id="embrague-no">
                                <label for="embrague-no" class="form-check-label">Mal</label>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="embrague-obs">Observaciones</label>
                            <textarea class="form-control" id="embrague-obs" rows="1"></textarea>
                        </div>
                    </div>

                </div>
                <hr>
                <!--Retrovisores-->
                <div class="row row-cols-1 row-cols-md-2 mb-2">
                    <div class="col">
                        <div>
                            <p class="text-center">Retrovisores</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Retrovisores" class="form-check-input" id="Retrovisores-si">
                                <label for="Retrovisores-si" class="form-check-label">Bien</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Retrovisores" class="form-check-input" id="Retrovisores-no">
                                <label for="Retrovisores-no" class="form-check-label">Mal</label>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="Retrovisores-obs">Observaciones</label>
                            <textarea class="form-control" id="Retrovisores-obs" rows="1"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <!--Pito-->
                <div class="row row-cols-1 row-cols-md-2 mb-2">
                    <div class="col ">
                        <div>
                            <p class="text-center">Pito</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Pito" class="form-check-input" id="Pito-si">
                                <label for="Pito-si" class="form-check-label">Bien</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Pito" class="form-check-input" id="Pito-no">
                                <label for="Pito-no" class="form-check-label">Mal</label>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="Pito-obs">Observaciones</label>
                            <textarea class="form-control" id="Pito-obs" rows="1"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <!--Comandos-->
                <div class="row row-cols-1 row-cols-md-2 mb-2">
                    <div class="col">
                        <div>
                            <p class="text-center">Comandos</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Comando" class="form-check-input" id="Comando-si">
                                <label for="Comando-si" class="form-check-label">Bien</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Comando" class="form-check-input" id="Comando-no">
                                <label for="Comando-no" class="form-check-label">Mal</label>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="Comando-obs">Observaciones</label>
                            <textarea class="form-control" id="Comando-obs" rows="1"></textarea>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <!--Direccionales-->
                <div class="row row-cols-1 row-cols-md-2 mb-2">
                    <div class="col ">
                        <div>
                            <p class="text-center">Direccionales</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Direccionales" class="form-check-input" id="Direccionales-si">
                                <label for="Direccionales-si" class="form-check-label">Bien</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Direccionales" class="form-check-input" id="Direccionales-no">
                                <label for="Direccionales-no" class="form-check-label">Mal</label>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="Direccionales-obs">Observaciones</label>
                            <textarea class="form-control" id="Direccionales-obs" rows="1"></textarea>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <!--Luz trasera-->
                <div class="row row-cols-1 row-cols-md-2 mb-2">
                    <div class="col ">
                        <div>
                            <p class="text-center">Luz trasera</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Luz" class="form-check-input" id="Luz-si">
                                <label for="Luz-si" class="form-check-label">Si uso</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Luz" class="form-check-input" id="Luz-no">
                                <label for="Luz-no" class="form-check-label">No uso</label>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="Luz-obs">Observaciones</label>
                            <textarea class="form-control" id="Luz-obs" rows="1"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <br>
                <!--Luz de freno -->
                <div class="row row-cols-1 row-cols-md-2 mb-2">
                    <div class="col ">
                        <div>
                            <p class="text-center">Luz de freno</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="LuzF" class="form-check-input" id="LuzF-si">
                                <label for="LuzF-si" class="form-check-label">Bien</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="LuzF" class="form-check-input" id="LuzF-no">
                                <label for="LuzF-no" class="form-check-label">Mal</label>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="LuzF-obs">Observaciones</label>
                            <textarea class="form-control" id="LuzF-obs" rows="1"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <!--Amortiguadores -->
                <div class="row row-cols-1 row-cols-md-2 mb-2">
                    <div class="col ">
                        <div>
                            <p class="text-center">Amortiguadores</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Amortiguadores" class="form-check-input" id="Amortiguadores-si">
                                <label for="Amortiguadores-si" class="form-check-label">Bien</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Amortiguadores" class="form-check-input" id="Amortiguadores-no">
                                <label for="Amortiguadores-no" class="form-check-label">Mal</label>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="Amortiguadores-obs">Observaciones</label>
                            <textarea class="form-control" id="Amortiguadores-obs" rows="1"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <!--Mofle-->
                <div class="row row-cols-1 row-cols-md-2 mb-2">
                    <div class="col ">
                        <div>
                            <p class="text-center">Mofle</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Mofle" class="form-check-input" id="Mofle-si">
                                <label for="Mofle-si" class="form-check-label">Bien</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Mofle" class="form-check-input" id="Mofle-no">
                                <label for="Mofle-no" class="form-check-label">Mal</label>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="Mofle-obs">Observaciones</label>
                            <textarea class="form-control" id="Mofle-obs" rows="1"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <!--Freno trasero-->
                <div class="row row-cols-1 row-cols-md-2 mb-2">
                    <div class="col ">
                        <div>
                            <p class="text-center">Freno trasero</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="FrenoT" class="form-check-input" id="FrenoT-si">
                                <label for="FrenoT-si" class="form-check-label">Bien</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="FrenoT" class="form-check-input" id="FrenoT-no">
                                <label for="FrenoT-no" class="form-check-label">Mal</label>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="FrenoT-obs">Observaciones</label>
                            <textarea class="form-control" id="FrenoT-obs" rows="1"></textarea>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <!--Llantas y rines-->
                <div class="row row-cols-1 row-cols-md-2 mb-2">
                    <div class="col ">
                        <div>
                            <p class="text-center">Llantas y rines</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="LlantaRin" class="form-check-input" id="LlantaRin-si">
                                <label for="LlantaRin-si" class="form-check-label">Bien</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="LlantaRin" class="form-check-input" id="LlantaRin-no">
                                <label for="LlantaRin-no" class="form-check-label">Mal</label>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="LlantaRin-obs">Observaciones</label>
                            <textarea class="form-control" id="LlantaRin-obs" rows="1"></textarea>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <!--Cadena y tensión -->
                <div class="row row-cols-1 row-cols-md-2 mb-2">
                    <div class="col ">
                        <div>
                            <p class="text-center">Cadena y tensión </p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="CadenaTens" class="form-check-input" id="CadenaTens-si">
                                <label for="CadenaTens-si" class="form-check-label">Bien</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="CadenaTens" class="form-check-input" id="CadenaTens-no">
                                <label for="CadenaTens-no" class="form-check-label">Mal</label>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="CadenaTens-obs">Observaciones</label>
                            <textarea class="form-control" id="CadenaTens-obs" rows="1"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <!--Fugas de aceite o gasolina -->
                <div class="row row-cols-1 row-cols-md-2 mb-2">
                    <div class="col ">
                        <div>
                            <p class="text-center">Fugas de aceite o gasolina</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Fuga" class="form-check-input" id="Fuga-si">
                                <label for="Fuga-si" class="form-check-label">Bien</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Fuga" class="form-check-input" id="Fuga-no">
                                <label for="Fuga-no" class="form-check-label">Mal</label>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="Fuga-obs">Observaciones</label>
                            <textarea class="form-control" id="Fuga-obs" rows="1"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <!--Freno delantero-->
                <div class="row row-cols-1 row-cols-md-2 mb-2">
                    <div class="col ">
                        <div>
                            <p class="text-center">Freno delantero</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="FrenoD" class="form-check-input" id="FrenoD-si">
                                <label for="FrenoD-si" class="form-check-label">Bien</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="FrenoD" class="form-check-input" id="FrenoD-no">
                                <label for="FrenoD-no" class="form-check-label">Mal</label>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="FrenoD-obs">Observaciones</label>
                            <textarea class="form-control" id="FrenoD-obs" rows="1"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <!--Llantas y rines delanteras-->
                <div class="row row-cols-1 row-cols-md-2 mb-2">
                    <div class="col ">
                        <div>
                            <p class="text-center">Llantas y rines delanteras</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="LlantaRd" class="form-check-input" id="LlantaRd-si">
                                <label for="LlantaRd-si" class="form-check-label">Bien</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="LlantaRd" class="form-check-input" id="LlantaRd-no">
                                <label for="LlantaRd-no" class="form-check-label">Mal</label>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="LlantaRd-obs">Observaciones</label>
                            <textarea class="form-control" id="LlantaRd-obs" rows="1"></textarea>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <!--Amortiguadores delanteros-->
                <div class="row row-cols-1 row-cols-md-2 mb-2">
                    <div class="col ">
                        <div>
                            <p class="text-center">Amortiguadores delanteros</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="AmortiguadoresD" class="form-check-input" id="AmortiguadoresD-si">
                                <label for="AmortiguadoresD-si" class="form-check-label">Bien</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="AmortiguadoresD" class="form-check-input" id="AmortiguadoresD-no">
                                <label for="AmortiguadoresD-no" class="form-check-label">Mal</label>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="AmortiguadoresD-obs">Observaciones</label>
                            <textarea class="form-control" id="AmortiguadoresD-obs" rows="1"></textarea>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <!--Luz delantera-->
                <div class="row row-cols-1 row-cols-md-2 mb-2">
                    <div class="col ">
                        <div>
                            <p class="text-center">Luz delantera</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="LuzD" class="form-check-input" id="LuzD-si">
                                <label for="LuzD-si" class="form-check-label">Bien</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="LuzD" class="form-check-input" id="LuzD-no">
                                <label for="LuzD-no" class="form-check-label">Mal</label>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label for="LuzD-obs">Observaciones</label>
                            <textarea class="form-control" id="LuzD-obs" rows="1"></textarea>
                        </div>
                    </div>
                </div>
                <!--**************************************************************************-->
                <hr>
                <div class="row row-cols-2  mb-2">
                    <div class="col">
                        <div class="form-group">
                            <label for="moto-obs">Observaciones</label>
                            <textarea class="form-control" id="moto-obs" rows="1"></textarea>
                        </div>
                    </div>
                    <div>
                        <label for="inspector-moto">RESPONSABLE DE LA INSPECCIÓN</label>
                        <input type="text" class="form-control" id="inspector-moto">
                    </div>
                </div>
                <hr>

                <div class="container">
                    <section id="Images" class="images-cards">
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-xs-12" id="add-photo-container">
                                    <div class="add-new-photo first" id="add-photo">
                                        <span><i class="icon-camera"></i></span>
                                    </div>
                                    <input type="file" multiple id="add-new-photo" name="images[]">
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
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