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
            <h3>INSPECCION EPPs</h3>
            <br>
            <hr>
            <form class="frmlr" id="formulario">

                <div class=" mb-2 row">
                    <div class="form-floating col-md-6 mb-2">
                        <input type="text" class="form-control" id="nombre-epp" placeholder=".">
                        <label class="text" for="nombre-epp">Nombre</label>
                    </div>
                    <div class="form-floating col-md-6 mb-2">
                        <input type="date" class="form-control" id="fecha-epp" placeholder=".">
                        <label for="fecha-epp">Fecha</label>
                    </div>
                </div>
                <br>
                <hr>
                <h3>Partes a examinar (uso y estado)</h3>
                <hr>
                <br>

                <!--CASCO DE SEGURIDAD DIELECTRICO CON TRES PUNTOS-->
                <div class="row row-cols-1 row-cols-md-3 mb-2">
                    <div class="col ">
                        <div>
                            <p class="text-center">CASCO DE SEGURIDAD DIELECTRICO CON TRES PUNTOS</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="casco" class="form-check-input" id="casco-si">
                                <label for="casco-si" class="form-check-label">Si uso</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="casco" class="form-check-input" id="casco-no">
                                <label for="casco-no" class="form-check-label">No uso</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label for="est-casco" class="form-label">Estado</label>
                            <select class="form-select" id="est-casco">
                                <option value="0">Seleccione una opcion</option>
                                <option value="1">Bueno</option>
                                <option value="2">Malo</option>
                                <option value="2">No requiere</option>

                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="casco-obs">Observaciones</label>
                            <textarea class="form-control" id="casco-obs" rows="2"></textarea>
                        </div>
                    </div>

                </div>
                <hr>
                <!--LENTES DE SEGURIDAD CON FILTRO UV-->
                <div class="row row-cols-1 row-cols-md-3 mb-2">
                    <div class="col">
                        <div>
                            <p class="text-center">LENTES DE SEGURIDAD CON FILTRO UV</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="lentes" class="form-check-input" id="lentes-si">
                                <label for="lentes-si" class="form-check-label">Si uso</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="lentes" class="form-check-input" id="lentes-no">
                                <label for="lentes-no" class="form-check-label">No uso</label>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div>
                            <label for="est-lentes" class="form-label">Estado</label>
                            <select class="form-select" id="est-lentes">
                                <option value="0">Seleccione una opcion</option>
                                <option value="1">Bueno</option>
                                <option value="2">Malo</option>
                                <option value="2">No requiere</option>

                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="lentes-obs">Observaciones</label>
                            <textarea class="form-control" id="lentes-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <!--LENTES DE SEGURIDAD CLARAS-->
                <div class="row row-cols-1 row-cols-md-3 mb-2">
                    <div class="col ">
                        <div>
                            <p class="text-center">LENTES DE SEGURIDAD CLARAS</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="lsc" class="form-check-input" id="lsc-si">
                                <label for="lsc-si" class="form-check-label">Si uno</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="lsc" class="form-check-input" id="lsc-no">
                                <label for="lsc-no" class="form-check-label">No uso</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label for="est-lsc" class="form-label">Estado</label>
                            <select class="form-select" id="est-lsc">
                                <option value="0">Seleccione una opcion</option>
                                <option value="1">Bueno</option>
                                <option value="2">Malo</option>
                                <option value="2">No requiere</option>

                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="lsc-obs">Observaciones</label>
                            <textarea class="form-control" id="lsc-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <!--TAPA BOCAS INDUSTRIAL-->
                <div class="row row-cols-1 row-cols-md-3 mb-2">
                    <div class="col">
                        <div>
                            <p class="text-center">TAPA BOCAS INDUSTRIAL</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="tapa" class="form-check-input" id="tapa-si">
                                <label for="tapa-si" class="form-check-label">Si uso</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="tapa" class="form-check-input" id="tapa-no">
                                <label for="tapa-no" class="form-check-label">No uso</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label for="est-tapa" class="form-label">Estado</label>
                            <select class="form-select" id="est-tapa">
                                <option value="0">Seleccione una opcion</option>
                                <option value="1">Bueno</option>
                                <option value="2">Malo</option>
                                <option value="2">No requiere</option>

                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="tapa-obs">Observaciones</label>
                            <textarea class="form-control" id="tapa-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <!--PROTECTOR AUDITIVO INSER-->
                <div class="row row-cols-1 row-cols-md-3 mb-2">
                    <div class="col ">
                        <div>
                            <p class="text-center">PROTECTOR AUDITIVO INSER</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="protector" class="form-check-input" id="protector-si">
                                <label for="protector-si" class="form-check-label">Si uso</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="protector" class="form-check-input" id="protector-no">
                                <label for="protector-no" class="form-check-label">No uso</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label for="est-protector" class="form-label">Estado</label>
                            <select class="form-select" id="est-protector">
                                <option value="0">Seleccione una opcion</option>
                                <option value="1">Bueno</option>
                                <option value="2">Malo</option>
                                <option value="2">No requiere</option>

                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="protector-obs">Observaciones</label>
                            <textarea class="form-control" id="protector-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <!--RESPIRADOR CON FILTRO-->
                <div class="row row-cols-1 row-cols-md-3 mb-2">
                    <div class="col ">
                        <div>
                            <p class="text-center">RESPIRADOR CON FILTRO</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="respirador" class="form-check-input" id="respirador-si">
                                <label for="respirador-si" class="form-check-label">Si uso</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="respirador" class="form-check-input" id="respirador-no">
                                <label for="respirador-no" class="form-check-label">No uso</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label for="est-respirador" class="form-label">Estado</label>
                            <select class="form-select" id="est-respirador">
                                <option value="0">Seleccione una opcion</option>
                                <option value="1">Bueno</option>
                                <option value="2">Malo</option>
                                <option value="2">No requiere</option>

                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="respirador-obs">Observaciones</label>
                            <textarea class="form-control" id="respirador-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <!--GUANTES CARNAZA -->
                <div class="row row-cols-1 row-cols-md-3 mb-2">
                    <div class="col ">
                        <div>
                            <p class="text-center">GUANTES CARNAZA</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Guantes" class="form-check-input" id="Guantes-si">
                                <label for="Guantes-si" class="form-check-label">Si uso</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Guantes" class="form-check-input" id="Guantes-no">
                                <label for="Guantes-no" class="form-check-label">No uso</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label for="est-guantes" class="form-label">Estado</label>
                            <select class="form-select" id="est-guantes">
                                <option value="0">Seleccione una opcion</option>
                                <option value="1">Bueno</option>
                                <option value="2">Malo</option>
                                <option value="2">No requiere</option>

                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="Guantes-obs">Observaciones</label>
                            <textarea class="form-control" id="Guantes-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <br>
                <!--**************************************************************************-->
                <hr>
                <div class="row row-cols-2  mb-2">
                    <div class="col">
                        <div class="form-group">
                            <label for="epp-obs">Observaciones</label>
                            <textarea class="form-control" id="epp-obs" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="col">
                        <div>
                            <label for="est-epp" class="form-label">Estado</label>
                            <select class="form-select" id="est-epp">
                                <option value="0">Seleccione una opcion</option>
                                <option value="1">Instruccion</option>
                                <option value="2">Motivacion</option>
                                <option value="2">Cambio epp</option>
                                <option value="2">Capacitacion</option>
                                <option value="2">Otros</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <div class="row row-cols-2  mb-2">
                    <div>
                        <label for="inspector-epp">RESPONSABLE DE LA INSPECCIÓN</label>
                        <input type="text" class="form-control" id="inspector-epp">
                    </div>
                    <div>
                        <div>
                            <label for="cargo-epp">Cargo</label>
                            <input type="text" class="form-control" id="cargo-epp">
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <br>
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