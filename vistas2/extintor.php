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
            <h3>INSPECCION EXTINTOR</h3>
            <hr>
            <form class="frmlr" id="formulario">

                <div class=" mb-2 row">
                    <div class="form-floating col-md-6 mb-2">
                        <input type="date" class="form-control" id="fecha-esc" placeholder=".">
                        <label for="fecha-esc">Fecha</label>
                    </div>
                    <div class="form-floating col-md-6 mb-2">
                        <input type="time" class="form-control" id="hora-esc" placeholder=".">
                        <label for="hora-esc">Hora</label>
                    </div>


                </div>

                <div class=" mb-2 row">
                    <div class="form-floating col-md-6 mb-2">
                        <input type="text" class="form-control" id="ubicacion-esc" placeholder=".">
                        <label for="ubicacion-esc">Area/Unidad Operativa</label>
                    </div>
                    <div class="form-floating col-md-6 mb-2">
                        <input type="text" class="form-control" id="trabajo-esc" placeholder=".">
                        <label for="trabajo-esc">Localidad</label>
                    </div>
                </div>

                <div class=" mb-2 row">
                    <div class="form-floating col-md-6 mb-2">
                        <input type="text" class="form-control" id="nombre-esc" placeholder=".">
                        <label for="nombre-esc">Inspeccion Realizada Por:</label>
                    </div>
                    <div class="form-floating col-md-6 mb-2">
                        <input type="text" class="form-control" id="usuario-esc" placeholder=".">
                        <label for="usuario-esc">Nombre Responsable Cuadrilla: </label>
                    </div>
                </div>

                <div class=" mb-2 row">
                    <div class="form-floating col-md-6 mb-2">
                        <input type="text" class="form-control" id="kit-esc" placeholder=".">
                        <label for="kit-esc">Placa</label>
                    </div>
                    <div class="form-floating col-md-6 mb-2">
                        <input type="date" class="form-control" id="area-esc" placeholder=".">
                        <label for="area-esc">Fecha de Vencimiento:</label>
                    </div>
                </div>
                <hr>
                <h3>Partes a examinar</h3>
                <hr>


                <!--Largueros (en buen estado)-->
                <div class="row row-cols-1 row-cols-md-2 mb-2">
                    <div class="col ">
                        <div>
                            <p class="text-center">Manometro</p>
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
                            <p class="text-center">Pasador de Seguridad</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Peldaños" class="form-check-input" id="Peldaños-bien">
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
                            <p class="text-center">Boquilla</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Union" class="form-check-input" id="Union-bien">
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
                            <p class="text-center">Manija</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Zapatas" class="form-check-input" id="Zapatas-bien">
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
                            <p class="text-center">Cilindro</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Piezas" class="form-check-input" id="Piezas-bien">
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
                            <p class="text-center">Pintura</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Aseo" class="form-check-input" id="Aseo-bien">
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
                            <p class="text-center">Señalización</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Identificacion" class="form-check-input" id="Identificacion-bien">
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
                            <p class="text-center">Ubicacion</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Cuenta" class="form-check-input" id="Cuenta-bien">
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
                            <p class="text-center">Visibilidad</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Brazos" class="form-check-input" id="Brazos-bien">
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
                            <p class="text-center">Acceso al Extintor</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="Ganchos" class="form-check-input" id="Ganchos-bien">
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
                <div class="row row-cols-2  mb-2">
                    <div class="col aextn">
                        <div class="select is-rounded  select is-medium">
                            <select name="lenguajes" id="lang">
                                <option value="Agente Extintor">Agente Extintor</option>
                                <option value="Multiproposito">ABC Multiproposito</option>
                                <option value="CO2">CO2</option>
                                <option value="Solkaflam">Solkaflam</option>
                                <option value="Agua">Agua Presurizada</option>
                            </select>
                        </div>
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
                        <p>Firma Responsable Inspeccion</p>
                        <canvas id="signature-pad" class="w-95"></canvas>
                        <p>Firma Responsable de la Cuadrilla</p>
                        <canvas id="signature-pad2" class="w-95"></canvas>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<button class=" btn btn-success d-grid gap-2 col-6 mx-auto m-2" id="clear-button1" onclick="clearSignature1()">Limpiar</button>
<button class=" btn btn-primary d-grid gap-2 col-6 mx-auto m-2" href="#" id="exportPdf" onclick="exportToPdf()">Guardar</button>