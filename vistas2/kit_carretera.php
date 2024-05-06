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
            <h3>INSPECCION KIT CARRETERA</h3>
            <hr>
            <form class="frmlr" id="formulario">

                <div class=" mb-2 row">
                    <div class="form-floating col-md-6 mb-2">
                        <input type="text" class="form-control" id="trabajo-kit" placeholder=".">
                        <label for="trabajo-kit">Trabajo</label>
                    </div>
                    <div class="form-floating col-md-6 mb-2">
                        <input type="date" class="form-control" id="fecha-kit" placeholder=".">
                        <label for="fecha-kit">Fecha</label>
                    </div>
                </div>

                <div class=" mb-2 row">
                    <div class="form-floating col-md-6 mb-2">
                        <input type="text" class="form-control" id="ubi-kit" placeholder=".">
                        <label for="ubi-kit">Ubicacion</label>
                    </div>
                    <div class="form-floating col-md-6 mb-2">
                        <input type="time" class="form-control" id="hora-kit" placeholder=".">
                        <label for="hora-kit">Hora</label>
                    </div>
                </div>

                <div class=" mb-2 row">
                    <div class="form-floating col-md-6 mb-2">
                        <input type="text" class="form-control" id="nombre-kit" placeholder=".">
                        <label for="nombre-kit">Nombre</label>
                    </div>
                    <div class="form-floating col-md-6 mb-2">
                        <input type="text" class="form-control" id="usuario-kit" placeholder=".">
                        <label for="usuario-kit">Usuario </label>
                    </div>
                </div>

                <div class=" mb-2 row">
                    <div class="form-floating col-md-6 mb-2">
                        <input type="text" class="form-control" id="kcar-kit" placeholder=".">
                        <label for="kcar-kit">Kit de carretera</label>
                    </div>
                    <div class="form-floating col-md-6 mb-2">
                        <input type="text" class="form-control" id="area-kit" placeholder=".">
                        <label for="area-kit">Area</label>
                    </div>
                </div>
                <hr>
                <h3>Partes a examinar</h3>
                <hr>


                <!--Dos tacos-->
                <div class="row row-cols-1 row-cols-md-3 mb-2">
                    <div class="col ">
                        <div>
                            <p class="text-center">Dos tacos</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="tacos" class="form-check-input" id="tacos-bien">
                                <label for="tacos-bien" class="form-check-label">Bien</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="tacos" class="form-check-input" id="tacos-mal">
                                <label for="tacos-mal" class="form-check-label">Mal</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label for="numeroTacos" class="form-label">Cantidad</label>
                            <select class="form-select" id="numeroTacos">
                                <option value="0">Seleccione una opcion</option>
                                <option value="1">1</option>
                                <option value="2">2</option>


                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label for="cambio-taco" class="form-label">Cambio</label>
                            <select class="form-select" id="cambio-taco">
                                <option selected>Necesita cambio?</option>
                                <option value="1">Si</option>
                                <option value="2">No</option>

                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <!--GATO-->
                <div class="row row-cols-1 row-cols-md-3 mb-2">
                    <div class="col">
                        <div>
                            <p class="text-center">Gato</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="gato" class="form-check-input" id="gato-bien">
                                <label for="gato-bien" class="form-check-label">Bien</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="gato" class="form-check-input" id="gato-mal">
                                <label for="gato-mal" class="form-check-label">Mal</label>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div>
                            <label for="numeroGato" class="form-label">Cantidad</label>
                            <select class="form-select" id="numeroGato">
                                <option value="0">Seleccione una opcion</option>
                                <option value="1">1</option>
                                <option value="2">2</option>


                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label for="cambio-gato" class="form-label">Cambio</label>
                            <select class="form-select" id="cambio-gato">
                                <option selected>Necesita cambio?</option>
                                <option value="1">Si</option>
                                <option value="2">No</option>

                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <!--Dos señales de carretera en forma de triángulo-->
                <div class="row row-cols-1 row-cols-md-3 mb-2">
                    <div class="col ">
                        <div>
                            <p class="text-center">Dos señales de carretera en forma de triángulo</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="señales" class="form-check-input" id="señales-bien">
                                <label for="señales-bien" class="form-check-label">Bien</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="señales" class="form-check-input" id="señales-mal">
                                <label for="señales-mal" class="form-check-label">Mal</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label for="numeroseñales" class="form-label">Cantidad</label>
                            <select class="form-select" id="numeroseñales">
                                <option value="0">Seleccione una opcion</option>
                                <option value="1">1</option>
                                <option value="2">2</option>


                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label for="cambio-señales" class="form-label">Cambio</label>
                            <select class="form-select" id="cambio-señales">
                                <option selected>Necesita cambio?</option>
                                <option value="1">Si</option>
                                <option value="2">No</option>

                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <!--Caja de herramienta-->
                <div class="row row-cols-1 row-cols-md-3 mb-2">
                    <div class="col">
                        <div>
                            <p class="text-center">Caja de herramienta básica con: alicate, set de destornilladores, llaves de expansión y llaves fijas.</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="herramientas" class="form-check-input" id="herramientas-bien">
                                <label for="herramientas-bien" class="form-check-label">Bien</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="herramientas" class="form-check-input" id="herramientas-mal">
                                <label for="herramientas-mal" class="form-check-label">Mal</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label for="numeroherramientas" class="form-label">Cantidad</label>
                            <select class="form-select" id="numeroherramientas">
                                <option value="0">Seleccione una opcion</option>
                                <option value="1">1</option>
                                <option value="2">2</option>

                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label for="cambio-herramientas" class="form-label">Cambio</label>
                            <select class="form-select" id="cambio-herramientas">
                                <option selected>Necesita cambio?</option>
                                <option value="1">Si</option>
                                <option value="2">No</option>

                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <!--Llanta de repuesto-->
                <div class="row row-cols-1 row-cols-md-3 mb-2">
                    <div class="col ">
                        <div>
                            <p class="text-center">Llanta de repuesto</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Llanta" class="form-check-input" id="Llanta-bien">
                                <label for="Llanta-bien" class="form-check-label">Bien</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Llanta" class="form-check-input" id="Llanta-mal">
                                <label for="Llanta-mal" class="form-check-label">Mal</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label for="numeroLlanta" class="form-label">Cantidad</label>
                            <select class="form-select" id="numeroLlanta">
                                <option value="0">Seleccione una opcion</option>
                                <option value="1">1</option>
                                <option value="2">2</option>


                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label for="cambio-llanta" class="form-label">Cambio</label>
                            <select class="form-select" id="cambio-llanta">
                                <option selected>Necesita cambio?</option>
                                <option value="1">Si</option>
                                <option value="2">No</option>

                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <!--Chaleco reflectivo-->
                <div class="row row-cols-1 row-cols-md-3 mb-2">
                    <div class="col ">
                        <div>
                            <p class="text-center">Chaleco reflectivo</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Chaleco" class="form-check-input" id="Chaleco-bien">
                                <label for="Chaleco-bien" class="form-check-label">Bien</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Chaleco" class="form-check-input" id="Chaleco-mal">
                                <label for="Chaleco-mal" class="form-check-label">Mal</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label for="numeroChaleco" class="form-label">Cantidad</label>
                            <select class="form-select" id="numeroChaleco">
                                <option value="0">Seleccione una opcion</option>
                                <option value="1">1</option>
                                <option value="2">2</option>


                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label for="cambio-chaleco" class="form-label">Cambio</label>
                            <select class="form-select" id="cambio-chaleco">
                                <option selected>Necesita cambio?</option>
                                <option value="1">Si</option>
                                <option value="2">No</option>

                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <!--Botiquin completo -->
                <div class="row row-cols-1 row-cols-md-3 mb-2">
                    <div class="col ">
                        <div>
                            <p class="text-center">Botiquin completo</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Botiquin" class="form-check-input" id="Botiquin-bien">
                                <label for="Botiquin-bien" class="form-check-label">Bien</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Botiquin" class="form-check-input" id="Botiquin-mal">
                                <label for="Botiquin-mal" class="form-check-label">Mal</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label for="numeroBotiquin" class="form-label">Cantidad</label>
                            <select class="form-select" id="numeroBotiquin">
                                <option value="0">Seleccione una opcion</option>
                                <option value="1">1</option>
                                <option value="2">2</option>


                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label for="cambio-botiquin" class="form-label">Cambio</label>
                            <select class="form-select" id="cambio-botiquin">
                                <option selected>Necesita cambio?</option>
                                <option value="1">Si</option>
                                <option value="2">No</option>

                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-2  mb-2">
                    <div class="col">
                        <div class="form-group">
                            <label for="kit-obs">Observaciones</label>
                            <textarea class="form-control" id="kit-obs" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kit-jus">Justificacion</label>
                        <textarea class="form-control" id="kit-jus" rows="3"></textarea>
                    </div>
                </div>
                <hr>
                <label for="inspector-kit">RESPONSABLE DE LA INSPECCIÓN</label>
                <input type="text" class="form-control" id="inspector-kit">
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