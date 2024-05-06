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
            <h3>INSPECCION EQUIPOS TRABAJO SEGURO EN ALTURA</h3>
            <hr>
            <form class="frmlr" id="formulario" name="Alturas">

                <div class="form-floating row-cols-1 ">
                    <input type="date" class="form-control" id="fecha-alt" placeholder="    ">
                    <label for="fecha-alt">Fecha</label>
                </div>
                <hr>
                <h5>Diligencie los equipos requeridos para la tarea a realizar</h5>
                <h6>Sino requiere digite "No aplica" ó "N/A"</h6>
                <hr>
                <h4 class="text-center">CONDICIÓN DEL EQUIPO DE TRABAJO EN SEGURO EN ALTURAS</h4>
                <hr>
                <h4 class="text-center">Arnes</h4>
                <hr>
                <div class="row row-cols-1 row-cols-md-3 ">
                    <div class="col">
                        <div class="form-floating ">
                            <input type="text" class="form-control" id="marca-arnes" placeholder=".">
                            <label for="marca-arnes">Marca</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating ">
                            <input type="text" class="form-control" id="modelo-arnes" placeholder=".">
                            <label for="modelo-arnes">Modelo</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating ">
                            <input type="text" class="form-control" id="ref-arnes" placeholder=".">
                            <label for="ref-arnes">Referencia</label>
                        </div>
                    </div>

                </div>

                <hr>
                <h6>EVALUAR AUSENCIA DE LAS SIGUIENTES CONDICIONES</h6>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 ">

                    <div class="col">
                        <div>
                            <p class="text-center">Tejido o correa</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="tejido" class="form-check-input" id="tejido-si">
                                <label for="tejido-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="tejido" class="form-check-input" id="tejido-no">
                                <label for="tejido-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="tejido" class="form-check-input" id="tejido-na">
                                <label for="tejido-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="tejido-obs">Observaciones</label>
                            <textarea class="form-control" id="tejido-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 ">

                    <div class="col">
                        <div>
                            <p class="text-center">Fibras externas cortadas, desgastadas, desgarradas</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="fecd" class="form-check-input" id="fecd-si">
                                <label for="fecd-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="fecd" class="form-check-input" id="fecd-no">
                                <label for="fecd-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="fecd" class="form-check-input" id="fecd-na">
                                <label for="fecd-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="fecd-obs">Observaciones</label>
                            <textarea class="form-control" id="fecd-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 ">

                    <div class="col">
                        <div>
                            <p class="text-center">Cortes o rotura del tejido o costuras</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="crtc" class="form-check-input" id="crtc-si">
                                <label for="crtc-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="crtc" class="form-check-input" id="crtc-no">
                                <label for="crtc-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="crtc" class="form-check-input" id="crtc-na">
                                <label for="crtc-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="crtc-obs">Observaciones</label>
                            <textarea class="form-control" id="crtc-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 ">

                    <div class="col">
                        <div>
                            <p class="text-center">Fisura</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="fisura" class="form-check-input" id="fisura-si">
                                <label for="fisura-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="fisura" class="form-check-input" id="fisura-no">
                                <label for="fisura-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="fisura" class="form-check-input" id="fisura-na">
                                <label for="fisura-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="fisura-obs">Observaciones</label>
                            <textarea class="form-control" id="fisura-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 ">

                    <div class="col">
                        <div>
                            <p class="text-center">Estiramiento excesivo (elongación de la riata)</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="esex" class="form-check-input" id="esex-si">
                                <label for="esex-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="esex" class="form-check-input" id="esex-no">
                                <label for="esex-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="esex" class="form-check-input" id="esex-na">
                                <label for="esex-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="esex-obs">Observaciones</label>
                            <textarea class="form-control" id="esex-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 ">

                    <div class="col">
                        <div>
                            <p class="text-center">Deterioro general</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="detege" class="form-check-input" id="detege-si">
                                <label for="detege-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="detege" class="form-check-input" id="detege-no">
                                <label for="detege-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="detege" class="form-check-input" id="detege-na">
                                <label for="detege-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="detege-obs">Observaciones</label>
                            <textarea class="form-control" id="detege-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 ">

                    <div class="col">
                        <div>
                            <p class="text-center">Corrosión o desgaste por exposición a ácidos o productos químicos</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="cdeapq" class="form-check-input" id="cdeapq-si">
                                <label for="cdeapq-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="cdeapq" class="form-check-input" id="cdeapq-no">
                                <label for="cdeapq-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="cdeapq" class="form-check-input" id="cdeapq-na">
                                <label for="cdeapq-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="cdeapq-obs">Observaciones</label>
                            <textarea class="form-control" id="cdeapq-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 ">

                    <div class="col">
                        <div>
                            <p class="text-center">Quemaduras o fibras derretidas.</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="quemfd" class="form-check-input" id="quemfd-si">
                                <label for="quemfd-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="quemfd" class="form-check-input" id="quemfd-no">
                                <label for="quemfd-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="quemfd" class="form-check-input" id="quemfd-na">
                                <label for="quemfd-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="quemfd-obs">Observaciones</label>
                            <textarea class="form-control" id="quemfd-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 ">

                    <div class="col">
                        <div>
                            <p class="text-center">Decoloración del material</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="decolor" class="form-check-input" id="decolor-si">
                                <label for="decolor-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="decolor" class="form-check-input" id="decolor-no">
                                <label for="decolor-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="decolor" class="form-check-input" id="decolor-na">
                                <label for="decolor-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="decolor-obs">Observaciones</label>
                            <textarea class="form-control" id="decolor-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2">

                    <div class="col">
                        <div>
                            <p class="text-center">Presencia de moho</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="moho" class="form-check-input" id="moho-si">
                                <label for="moho-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="moho" class="form-check-input" id="moho-no">
                                <label for="moho-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="moho" class="form-check-input" id="moho-na">
                                <label for="moho-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="moho-obs">Observaciones</label>
                            <textarea class="form-control" id="moho-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <h6 class="text-center">Costuras</h6>
                <br>
                <hr>
                <div class="row row-cols-1 row-cols-md-2">

                    <div class="col">
                        <div>
                            <p class="text-center">Cortaduras</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="cort" class="form-check-input" id="cort-si">
                                <label for="cort-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="cort" class="form-check-input" id="cort-no">
                                <label for="cort-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="cort" class="form-check-input" id="cort-na">
                                <label for="cort-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="cort-obs">Observaciones</label>
                            <textarea class="form-control" id="cort-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 " id="costrras">

                    <div class="col">
                        <div>
                            <p class="text-center">deshilachamiento</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="deshil" class="form-check-input" id="deshil-si">
                                <label for="deshil-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="deshil" class="form-check-input" id="deshil-no">
                                <label for="deshil-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="deshil" class="form-check-input" id="deshil-na">
                                <label for="deshil-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="deshil-obs">Observaciones</label>
                            <textarea class="form-control" id="deshil-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 ">

                    <div class="col">
                        <div>
                            <p class="text-center">Hilos faltantes</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="hilofal" class="form-check-input" id="hilofal-si">
                                <label for="hilofal-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="hilofal" class="form-check-input" id="hilofal-no">
                                <label for="hilofal-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="hilofal" class="form-check-input" id="hilofal-na">
                                <label for="hilofal-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="hilofal-obs">Observaciones</label>
                            <textarea class="form-control" id="hilofal-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 ">

                    <div class="col">
                        <div>
                            <p class="text-center">Quemaduras</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="quema" class="form-check-input" id="quema-si">
                                <label for="quema-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="quema" class="form-check-input" id="quema-no">
                                <label for="quema-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="quema" class="form-check-input" id="quema-na">
                                <label for="quema-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="quema-obs">Observaciones</label>
                            <textarea class="form-control" id="quema-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 ">

                    <div class="col">
                        <div>
                            <p class="text-center">Exposición a productos químicos</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="expq" class="form-check-input" id="expq-si">
                                <label for="expq-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="expq" class="form-check-input" id="expq-no">
                                <label for="expq-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="expq" class="form-check-input" id="expq-na">
                                <label for="expq-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="expq-obs">Observaciones</label>
                            <textarea class="form-control" id="expq-obs" rows="1"></textarea>
                        </div>
                    </div>
                </div>
                <br>

                <hr>
                <h6 class="text-center">ARGOLLAS EN "D", ANILLOS, HEBILLAS Y REMACHES</h6>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 ">

                    <div class="col">
                        <div>
                            <p class="text-center">Deformaciones (dobladuras, etc.)</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="defdo" class="form-check-input" id="defdo-si">
                                <label for="defdo-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="defdo" class="form-check-input" id="defdo-no">
                                <label for="defdo-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="defdo" class="form-check-input" id="defdo-na">
                                <label for="defdo-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="defdo-obs">Observaciones</label>
                            <textarea class="form-control" id="defdo-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 ">

                    <div class="col">
                        <div>
                            <p class="text-center">Picaduras o grietas</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="picgri" class="form-check-input" id="picgri-si">
                                <label for="picgri-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="picgri" class="form-check-input" id="picgri-no">
                                <label for="picgri-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="picgri" class="form-check-input" id="picgri-na">
                                <label for="picgri-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="picgri-obs">Observaciones</label>
                            <textarea class="form-control" id="picgri-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 ">

                    <div class="col">
                        <div>
                            <p class="text-center">Presenta desgaste</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="presdes" class="form-check-input" id="presdes-si">
                                <label for="presdes-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="presdes" class="form-check-input" id="presdes-no">
                                <label for="presdes-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="presdes" class="form-check-input" id="presdes-na">
                                <label for="presdes-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="presdes-obs">Observaciones</label>
                            <textarea class="form-control" id="presdes-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 ">

                    <div class="col">
                        <div>
                            <p class="text-center">Corrosión u oxidación</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="corox" class="form-check-input" id="corox-si">
                                <label for="corox-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="corox" class="form-check-input" id="corox-no">
                                <label for="corox-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="corox" class="form-check-input" id="corox-na">
                                <label for="corox-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="corox-obs">Observaciones</label>
                            <textarea class="form-control" id="corox-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 ">

                    <div class="col">
                        <div>
                            <p class="text-center">Cuenta con la etiqueta de certificación</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="clec" class="form-check-input" id="clec-si">
                                <label for="clec-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="clec" class="form-check-input" id="clec-no">
                                <label for="clec-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="clec" class="form-check-input" id="clec-na">
                                <label for="clec-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="clec-obs">Observaciones</label>
                            <textarea class="form-control" id="clec-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <h4 class="text-center">Mosqueton</h4>
                <hr>
                <div class="row row-cols-1 row-cols-md-3 ">
                    <div class="col">
                        <div class="form-floating ">
                            <input type="text" class="form-control" id="marca-mos" placeholder=".">
                            <label for="marca-mos">Marca</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating ">
                            <input type="text" class="form-control" id="modelo-mos" placeholder=".">
                            <label for="modelo-mos">Modelo</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating ">
                            <input type="text" class="form-control" id="ref-mos" placeholder=".">
                            <label for="ref-mos">Referencia</label>
                        </div>
                    </div>

                </div>
                <br>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 ">

                    <div class="col">
                        <div>
                            <p class="text-center">Deformaciones (dobladuras,etc)</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="defmo" class="form-check-input" id="defmo-si">
                                <label for="defmo-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="defmo" class="form-check-input" id="defmo-no">
                                <label for="defmo-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="defmo" class="form-check-input" id="defmo-na">
                                <label for="defmo-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="defmo-obs">Observaciones</label>
                            <textarea class="form-control" id="defmo-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 ">

                    <div class="col">
                        <div>
                            <p class="text-center">Bloqueo (ajuste excesivo) de los mosquetones en cierres de seguridad.</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="bmcs" class="form-check-input" id="bmcs-si">
                                <label for="bmcs-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="bmcs" class="form-check-input" id="bmcs-no">
                                <label for="bmcs-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="bmcs" class="form-check-input" id="bmcs-na">
                                <label for="bmcs-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="bmcs-obs">Observaciones</label>
                            <textarea class="form-control" id="bmcs-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 ">

                    <div class="col">
                        <div>
                            <p class="text-center">Grietas o picaduras</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="gripi" class="form-check-input" id="gripi-si">
                                <label for="gripi-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="gripi" class="form-check-input" id="gripi-no">
                                <label for="gripi-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="gripi" class="form-check-input" id="gripi-na">
                                <label for="gripi-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="gripi-obs">Observaciones</label>
                            <textarea class="form-control" id="gripi-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 ">

                    <div class="col">
                        <div>
                            <p class="text-center">Resortes (detectar fallas)</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="redefa" class="form-check-input" id="redefa-si">
                                <label for="redefa-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="redefa" class="form-check-input" id="redefa-no">
                                <label for="redefa-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="redefa" class="form-check-input" id="redefa-na">
                                <label for="redefa-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="redefa-obs">Observaciones</label>
                            <textarea class="form-control" id="redefa-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 ">

                    <div class="col">
                        <div>
                            <p class="text-center">Freno (hacer prueba)</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="frepru" class="form-check-input" id="frepru-si">
                                <label for="frepru-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="frepru" class="form-check-input" id="frepru-no">
                                <label for="frepru-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="frepru" class="form-check-input" id="frepru-na">
                                <label for="frepru-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="frepru-obs">Observaciones</label>
                            <textarea class="form-control" id="frepru-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 ">

                    <div class="col">
                        <div>
                            <p class="text-center">Deterioro general.</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="degemo" class="form-check-input" id="degemo-si">
                                <label for="degemo-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="degemo" class="form-check-input" id="degemo-no">
                                <label for="degemo-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="degemo" class="form-check-input" id="degemo-na">
                                <label for="degemo-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="degemo-obs">Observaciones</label>
                            <textarea class="form-control" id="degemo-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 ">

                    <div class="col">
                        <div>
                            <p class="text-center">Corrosión</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="corromo" class="form-check-input" id="corromo-si">
                                <label for="corromo-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="corromo" class="form-check-input" id="corromo-no">
                                <label for="corromo-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="corromo" class="form-check-input" id="corromo-na">
                                <label for="corromo-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="corromo-obs">Observaciones</label>
                            <textarea class="form-control" id="corromo-obs" rows="1"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 ">

                    <div class="col">
                        <div>
                            <p class="text-center">Presencia de moho.</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="premoh" class="form-check-input" id="premoh-si">
                                <label for="premoh-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="premoh" class="form-check-input" id="premoh-no">
                                <label for="premoh-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="premoh" class="form-check-input" id="premoh-na">
                                <label for="premoh-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="premoh-obs">Observaciones</label>
                            <textarea class="form-control" id="premoh-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <h4 class="text-center">Eslinga en Y</h4>
                <hr>
                <div class="row row-cols-1 row-cols-md-3 mb-2">
                    <div class="col">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="marca-esl" placeholder=".">
                            <label for="marca-esl">Marca</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="modelo-esl" placeholder=".">
                            <label for="modelo-esl">Modelo</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="ref-esl" placeholder=".">
                            <label for="ref-esl">Referencia</label>
                        </div>
                    </div>

                </div>
                <br>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Fibras externas cortadas, desgastadas y desgarradas </p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="fecdds" class="form-check-input" id="fecdds-si">
                                <label for="fecdds-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="fecdds" class="form-check-input" id="fecdds-no">
                                <label for="fecdds-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="fecdds" class="form-check-input" id="fecdds-na">
                                <label for="fecdds-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="fecdds-obs">Observaciones</label>
                            <textarea class="form-control" id="fecdds-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Cortes o rotura del tejido o costuras</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="corrottej" class="form-check-input" id="corrottej-si">
                                <label for="corrottej-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="corrottej" class="form-check-input" id="corrottej-no">
                                <label for="corrottej-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="corrottej" class="form-check-input" id="corrottej-na">
                                <label for="corrottej-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="corrottej-obs">Observaciones</label>
                            <textarea class="form-control" id="corrottej-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Ajuste de los mosquetones en cierres de seguridad</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="ajmosci" class="form-check-input" id="ajmosci-si">
                                <label for="ajmosci-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="ajmosci" class="form-check-input" id="ajmosci-no">
                                <label for="ajmosci-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="ajmosci" class="form-check-input" id="ajmosci-na">
                                <label for="ajmosci-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="ajmosci-obs">Observaciones</label>
                            <textarea class="form-control" id="ajmosci-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Estiramiento excesivo</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="estiex" class="form-check-input" id="estiex-si">
                                <label for="estiex-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="estiex" class="form-check-input" id="estiex-no">
                                <label for="estiex-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="estiex" class="form-check-input" id="estiex-na">
                                <label for="estiex-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="estiex-obs">Observaciones</label>
                            <textarea class="form-control" id="estiex-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>

                <br>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">deformaciones (dobladuras, etc.)</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="defordoesl" class="form-check-input" id="defordoesl-si">
                                <label for="defordoesl-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="defordoesl" class="form-check-input" id="defordoesl-no">
                                <label for="defordoesl-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="defordoesl" class="form-check-input" id="defordoesl-na">
                                <label for="defordoesl-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="defordoesl-obs">Observaciones</label>
                            <textarea class="form-control" id="defordoesl-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Quemaduras o fibras derretidas</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="quemesl" class="form-check-input" id="quemesl-si">
                                <label for="quemesl-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="quemesl" class="form-check-input" id="quemesl-no">
                                <label for="quemesl-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="quemesl" class="form-check-input" id="quemesl-na">
                                <label for="quemesl-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="quemesl-obs">Observaciones</label>
                            <textarea class="form-control" id="quemesl-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Puntos o áreas duras o brillantes indican daño por exposición al calor o a radiación UV</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="padbidec" class="form-check-input" id="padbidec-si">
                                <label for="padbidec-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="padbidec" class="form-check-input" id="padbidec-no">
                                <label for="padbidec-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="padbidec" class="form-check-input" id="padbidec-na">
                                <label for="padbidec-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="padbidec-obs">Observaciones</label>
                            <textarea class="form-control" id="padbidec-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Corrosión en partes metálicas</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="corrometal" class="form-check-input" id="corrometal-si">
                                <label for="corrometal-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="corrometal" class="form-check-input" id="corrometal-no">
                                <label for="corrometal-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="corrometal" class="form-check-input" id="corrometal-na">
                                <label for="corrometal-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="corrometal-obs">Observaciones</label>
                            <textarea class="form-control" id="corrometal-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Presencia de moho</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="presmoho" class="form-check-input" id="presmoho-si">
                                <label for="presmoho-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="presmoho" class="form-check-input" id="presmoho-no">
                                <label for="presmoho-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="presmoho" class="form-check-input" id="presmoho-na">
                                <label for="presmoho-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="presmoho-obs">Observaciones</label>
                            <textarea class="form-control" id="presmoho-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Presencia de sustancias químicas en partes metálicas y en las reatas</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="presusqui" class="form-check-input" id="presusqui-si">
                                <label for="presusqui-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="presusqui" class="form-check-input" id="presusqui-no">
                                <label for="presusqui-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="presusqui" class="form-check-input" id="presusqui-na">
                                <label for="presusqui-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="presusqui-obs">Observaciones</label>
                            <textarea class="form-control" id="presusqui-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Cuenta con la etiqueta de certificación.</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="cueneticer" class="form-check-input" id="cueneticer-si">
                                <label for="cueneticer-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="cueneticer" class="form-check-input" id="cueneticer-no">
                                <label for="cueneticer-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="cueneticer" class="form-check-input" id="cueneticer-na">
                                <label for="cueneticer-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="cueneticer-obs">Observaciones</label>
                            <textarea class="form-control" id="cueneticer-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <h4 class="text-center">Eslinga de posicionamiento </h4>
                <br>
                <hr>
                <div class="row row-cols-1 row-cols-md-3 mb-2">
                    <div class="col">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="marca-eslp" placeholder=".">
                            <label for="marca-eslp">Marca</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="modelo-eslp" placeholder=".">
                            <label for="modelo-eslp">Modelo</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="ref-eslp" placeholder=".">
                            <label for="ref-eslp">Referencia</label>
                        </div>
                    </div>

                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Fibras externas cortadas, desgastadas y desgarradas</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="fecdeslp" class="form-check-input" id="fecdeslp-si">
                                <label for="fecdeslp-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="fecdeslp" class="form-check-input" id="fecdeslp-no">
                                <label for="fecdeslp-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="fecdeslp" class="form-check-input" id="fecdeslp-na">
                                <label for="fecdeslp-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="fecdeslp-obs">Observaciones</label>
                            <textarea class="form-control" id="fecdeslp-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Cortes o rootura del tejido o costuras</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="crtceslp" class="form-check-input" id="crtceslp-si">
                                <label for="crtceslp-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="crtceslp" class="form-check-input" id="crtceslp-no">
                                <label for="crtceslp-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="crtceslp" class="form-check-input" id="crtceslp-na">
                                <label for="crtceslp-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="crtceslp-obs">Observaciones</label>
                            <textarea class="form-control" id="crtceslp-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Ajuste de los mosquetones en cierres de seguridad</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="amcseslp" class="form-check-input" id="amcseslp-si">
                                <label for="amcseslp-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="amcseslp" class="form-check-input" id="amcseslp-no">
                                <label for="amcseslp-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="amcseslp" class="form-check-input" id="amcseslp-na">
                                <label for="amcseslp-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="amcseslp-obs">Observaciones</label>
                            <textarea class="form-control" id="amcseslp-obs" rows="1"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Estiramiento excesivo</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="eexeslp" class="form-check-input" id="eexeslp-si">
                                <label for="eexeslp-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="eexeslp" class="form-check-input" id="eexeslp-no">
                                <label for="eexeslp-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="eexeslp" class="form-check-input" id="eexeslp-na">
                                <label for="eexeslp-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="eexeslp-obs">Observaciones</label>
                            <textarea class="form-control" id="eexeslp-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">deformaciones (dobladuras, etc.)</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="defeslp" class="form-check-input" id="defeslp-si">
                                <label for="defeslp-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="defeslp" class="form-check-input" id="defeslp-no">
                                <label for="defeslp-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="defeslp" class="form-check-input" id="defeslp-na">
                                <label for="defeslp-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="defeslp-obs">Observaciones</label>
                            <textarea class="form-control" id="defeslp-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Quemaduras o fibras derretidas.</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="quemfeslp" class="form-check-input" id="quemfeslp-si">
                                <label for="quemfeslp-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="quemfeslp" class="form-check-input" id="quemfeslp-no">
                                <label for="quemfeslp-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="quemfeslp" class="form-check-input" id="quemfeslp-na">
                                <label for="quemfeslp-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="quemfeslp-obs">Observaciones</label>
                            <textarea class="form-control" id="quemfeslp-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Puntos o áreas duras o brillantes indican daño por exposición al calor o a radiación UV</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="padbeslp" class="form-check-input" id="padbeslp-si">
                                <label for="padbeslp-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="padbeslp" class="form-check-input" id="padbeslp-no">
                                <label for="padbeslp-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="padbeslp" class="form-check-input" id="padbeslp-na">
                                <label for="padbeslp-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="padbeslp-obs">Observaciones</label>
                            <textarea class="form-control" id="padbeslp-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Corrosión en partes metálicas</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="cpmeslp" class="form-check-input" id="cpmeslp-si">
                                <label for="cpmeslp-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="cpmeslp" class="form-check-input" id="cpmeslp-no">
                                <label for="cpmeslp-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="cpmeslp" class="form-check-input" id="cpmeslp-na">
                                <label for="cpmeslp-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="cpmeslp-obs">Observaciones</label>
                            <textarea class="form-control" id="cpmeslp-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Presencia de moho</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="pmeslp" class="form-check-input" id="pmeslp-si">
                                <label for="pmeslp-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="pmeslp" class="form-check-input" id="pmeslp-no">
                                <label for="pmeslp-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="pmeslp" class="form-check-input" id="pmeslp-na">
                                <label for="pmeslp-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="pmeslp-obs">Observaciones</label>
                            <textarea class="form-control" id="pmeslp-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Presencia de sustancias químicas en partes metálicas y en las reatas.</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="psqpmeslp" class="form-check-input" id="psqpmeslp-si">
                                <label for="psqpmeslp-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="psqpmeslp" class="form-check-input" id="psqpmeslp-no">
                                <label for="psqpmeslp-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="psqpmeslp" class="form-check-input" id="psqpmeslp-na">
                                <label for="psqpmeslp-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="psqpmeslp-obs">Observaciones</label>
                            <textarea class="form-control" id="psqpmeslp-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Cuenta con la etiqueta de certificación.</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="cdceslp" class="form-check-input" id="cdceslp-si">
                                <label for="cdceslp-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="cdceslp" class="form-check-input" id="cdceslp-no">
                                <label for="cdceslp-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="cdceslp" class="form-check-input" id="cdceslp-na">
                                <label for="cdceslp-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="cdceslp-obs">Observaciones</label>
                            <textarea class="form-control" id="cdceslp-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <h4 class="text-center">Linea de vida</h4>
                <hr>
                <div class="row row-cols-1 row-cols-md-3 mb-2">
                    <div class="col">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="marca-lv" placeholder=".">
                            <label for="marca-lv">Marca</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="modelo-lv" placeholder=".">
                            <label for="modelo-lv">Modelo</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="ref-lv" placeholder=".">
                            <label for="ref-lv">Referencia</label>
                        </div>
                    </div>

                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Deformaciones (dobladuras,etc)</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="deflv" class="form-check-input" id="deflv-si">
                                <label for="deflv-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="deflv" class="form-check-input" id="deflv-no">
                                <label for="deflv-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="deflv" class="form-check-input" id="deflv-na">
                                <label for="deflv-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="deflv-obs">Observaciones</label>
                            <textarea class="form-control" id="deflv-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Picaduras o grietas</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="picgrilv" class="form-check-input" id="picgrilv-si">
                                <label for="picgrilv-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="picgrilv" class="form-check-input" id="picgrilv-no">
                                <label for="picgrilv-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="picgrilv" class="form-check-input" id="picgrilv-na">
                                <label for="picgrilv-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="picgrilv-obs">Observaciones</label>
                            <textarea class="form-control" id="picgrilv-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Presenta desgaste</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="pdeslv" class="form-check-input" id="pdeslv-si">
                                <label for="pdeslv-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="pdeslv" class="form-check-input" id="pdeslv-no">
                                <label for="pdeslv-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="pdeslv" class="form-check-input" id="pdeslv-na">
                                <label for="pdeslv-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="pdeslv-obs">Observaciones</label>
                            <textarea class="form-control" id="pdeslv-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">corrosión u oxidación.</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="corrooxilv" class="form-check-input" id="corrooxilv-si">
                                <label for="corrooxilv-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="corrooxilv" class="form-check-input" id="corrooxilv-no">
                                <label for="corrooxilv-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="corrooxilv" class="form-check-input" id="corrooxilv-na">
                                <label for="corrooxilv-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="corrooxilv-obs">Observaciones</label>
                            <textarea class="form-control" id="corrooxilv-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Fibras externas cortadas, desgastadas y desgarradas.</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="fecdlv" class="form-check-input" id="fecdlv-si">
                                <label for="fecdlv-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="fecdlv" class="form-check-input" id="fecdlv-no">
                                <label for="fecdlv-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="fecdlv" class="form-check-input" id="fecdlv-na">
                                <label for="fecdlv-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="fecdlv-obs">Observaciones</label>
                            <textarea class="form-control" id="fecdlv-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Cortes o rotura del tejido o costuras.</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="crtclv" class="form-check-input" id="crtclv-si">
                                <label for="crtclv-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="crtclv" class="form-check-input" id="crtclv-no">
                                <label for="crtclv-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="crtclv" class="form-check-input" id="crtclv-na">
                                <label for="crtclv-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="crtclv-obs">Observaciones</label>
                            <textarea class="form-control" id="crtclv-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Ajuste de los mosquetones en cierres de seguridad.</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="amcslv" class="form-check-input" id="amcslv-si">
                                <label for="amcslv-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="amcslv" class="form-check-input" id="amcslv-no">
                                <label for="amcslv-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="amcslv" class="form-check-input" id="amcslv-na">
                                <label for="amcslv-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="amcslv-obs">Observaciones</label>
                            <textarea class="form-control" id="amcslv-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Estiramiento excesivo.</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="estiexlv" class="form-check-input" id="estiexlv-si">
                                <label for="estiexlv-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="estiexlv" class="form-check-input" id="estiexlv-no">
                                <label for="estiexlv-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="estiexlv" class="form-check-input" id="estiexlv-na">
                                <label for="estiexlv-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="estiexlv-obs">Observaciones</label>
                            <textarea class="form-control" id="estiexlv-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Quemaduras o fibras derretidas.</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="quemfiblv" class="form-check-input" id="quemfiblv-si">
                                <label for="quemfiblv-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="quemfiblv" class="form-check-input" id="quemfiblv-no">
                                <label for="quemfiblv-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="quemfiblv" class="form-check-input" id="quemfiblv-na">
                                <label for="quemfiblv-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="quemfiblv-obs">Observaciones</label>
                            <textarea class="form-control" id="quemfiblv-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Puntos o áreas duras o brillantes indican daño por exposición al calor o a radiación UV.</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="padbidecrlv" class="form-check-input" id="padbidecrlv-si">
                                <label for="padbidecrlv-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="padbidecrlv" class="form-check-input" id="padbidecrlv-no">
                                <label for="padbidecrlv-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="padbidecrlv" class="form-check-input" id="padbidecrlv-na">
                                <label for="padbidecrlv-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="padbidecrlv-obs">Observaciones</label>
                            <textarea class="form-control" id="padbidecrlv-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">corrosión en partes metálicas</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="corromelv" class="form-check-input" id="corromelv-si">
                                <label for="corromelv-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="corromelv" class="form-check-input" id="corromelv-no">
                                <label for="corromelv-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="corromelv" class="form-check-input" id="corromelv-na">
                                <label for="corromelv-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="corromelv-obs">Observaciones</label>
                            <textarea class="form-control" id="corromelv-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Presencia de moho.</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="pmoholv" class="form-check-input" id="pmoholv-si">
                                <label for="pmoholv-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="pmoholv" class="form-check-input" id="pmoholv-no">
                                <label for="pmoholv-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="pmoholv" class="form-check-input" id="pmoholv-na">
                                <label for="pmoholv-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="pmoholv-obs">Observaciones</label>
                            <textarea class="form-control" id="pmoholv-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Presencia de sustancias químicas en partes metálicas y en las reatas..</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="psquimlv" class="form-check-input" id="psquimlv-si">
                                <label for="psquimlv-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="psquimlv" class="form-check-input" id="psquimlv-no">
                                <label for="psquimlv-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="psquimlv" class="form-check-input" id="psquimlv-na">
                                <label for="psquimlv-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="psquimlv-obs">Observaciones</label>
                            <textarea class="form-control" id="psquimlv-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Cuenta con la etiqueta de certificación.</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="etiquetalv" class="form-check-input" id="etiquetalv-si">
                                <label for="etiquetalv-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="etiquetalv" class="form-check-input" id="etiquetalv-no">
                                <label for="etiquetalv-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="etiquetalv" class="form-check-input" id="etiquetalv-na">
                                <label for="etiquetalv-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="etiquetalv-obs">Observaciones</label>
                            <textarea class="form-control" id="etiquetalv-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Se protege de las aristas vivas de muros (contacto con bordes contundentes).</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="pavmlv" class="form-check-input" id="pavmlv-si">
                                <label for="pavmlv-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="pavmlv" class="form-check-input" id="pavmlv-no">
                                <label for="pavmlv-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="pavmlv" class="form-check-input" id="pavmlv-na">
                                <label for="pavmlv-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="pavmlv-obs">Observaciones</label>
                            <textarea class="form-control" id="pavmlv-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Cuenta con la etiqueta de certificación.</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="ccelv" class="form-check-input" id="ccelv-si">
                                <label for="ccelv-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="ccelv" class="form-check-input" id="ccelv-no">
                                <label for="ccelv-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="ccelv" class="form-check-input" id="ccelv-na">
                                <label for="ccelv-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="ccelv-obs">Observaciones</label>
                            <textarea class="form-control" id="ccelv-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <h4 class="text-center">Manilas de seguridad</h4>
                <hr>
                <br>
                <div class="row row-cols-1 row-cols-md-3 mb-2">
                    <div class="col">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="marca-ms" placeholder=".">
                            <label for="marca-ms">Marca</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="modelo-ms" placeholder=".">
                            <label for="modelo-ms">Modelo</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="ref-ms" placeholder=".">
                            <label for="ref-ms">Referencia</label>
                        </div>
                    </div>

                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Presenta desgaste</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="pdms" class="form-check-input" id="pdms-si">
                                <label for="pdms-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="pdms" class="form-check-input" id="pdms-no">
                                <label for="pdms-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="pdms" class="form-check-input" id="pdms-na">
                                <label for="pdms-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="pdms-obs">Observaciones</label>
                            <textarea class="form-control" id="pdms-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <br>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Fibras externas cortadas, desgastadas y desgarradas</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="fecdms" class="form-check-input" id="fecdms-si">
                                <label for="fecdms-si" class="form-check-label">Si</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input type="radio" name="fecdms" class="form-check-input" id="fecdms-no">
                                <label for="fecdms-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="fecdms" class="form-check-input" id="fecdms-na">
                                <label for="fecdms-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col">
                        <div class="form-group">
                            <label for="fecdms-obs">Observaciones</label>
                            <textarea class="form-control" id="fecdms-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Cortes o rotura del tejido o costuras.</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="crtcms" class="form-check-input" id="crtcms-si">
                                <label for="crtcms-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="crtcms" class="form-check-input" id="crtcms-no">
                                <label for="crtcms-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="crtcms" class="form-check-input" id="crtcms-na">
                                <label for="crtcms-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col">
                        <div class="form-group">
                            <label for="crtcms-obs">Observaciones</label>
                            <textarea class="form-control" id="crtcms-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <br>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Quemaduras o fibras derretidas</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="quemfdms" class="form-check-input" id="quemfdms-si">
                                <label for="quemfdms-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="quemfdms" class="form-check-input" id="quemfdms-no">
                                <label for="quemfdms-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="quemfdms" class="form-check-input" id="quemfdms-na">
                                <label for="quemfdms-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="quemfdms-obs">Observaciones</label>
                            <textarea class="form-control" id="quemfdms-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Presencia de moho</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="pmohoms" class="form-check-input" id="pmohoms-si">
                                <label for="pmohoms-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="pmohoms" class="form-check-input" id="pmohoms-no">
                                <label for="pmohoms-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="pmohoms" class="form-check-input" id="pmohoms-na">
                                <label for="pmohoms-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="pmohoms-obs">Observaciones</label>
                            <textarea class="form-control" id="pmohoms-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 mb-3">

                    <div class="col">
                        <div>
                            <p class="text-center">Cuenta con la etiqueta de certificación.</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="ccems" class="form-check-input" id="ccems-si">
                                <label for="ccems-si" class="form-check-label">Si</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="ccems" class="form-check-input" id="ccems-no">
                                <label for="ccems-no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="ccems" class="form-check-input" id="ccems-na">
                                <label for="ccems-na" class="form-check-label">N/A</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col">
                        <div class="form-group">
                            <label for="ccems-obs">Observaciones</label>
                            <textarea class="form-control" id="ccems-obs" rows="2"></textarea>
                        </div>
                    </div>
                </div>
                <br>

                <!--**************************************************************************-->
                <hr>
                <div class="row row-cols-2  mb-2">
                    <div class="col">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="proyecto" placeholder=".">
                            <label for="proyecto">Proyecto</label>
                        </div>
                    </div>
                    <br>
                    <div class="col">
                        <div class="form-floating mb-2">
                            <input type="date" class="form-control" id="fechauso" placeholder=".">
                            <label for="fechauso">Fecha de uso</label>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="row row-cols-2 mb-2">
                    <div class="col">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="nombreInspeccion" placeholder=".">
                            <label for="nombreInspeccion">Nombre de quien inspecciono</label>
                        </div>
                    </div>
                    <br>
                    <div class="col">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="nombreTrabajador" placeholder=".">
                            <label for="nombreTrabajador">Nombre del Trabajador</label>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="row row-cols-2">
                    <div class="col">
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="cargoInspeccion" placeholder=".">
                            <label for="cargoInspeccion">Cargo</label>
                        </div>
                    </div>
                    <br>
                    <div class="col">
                        <div class="form-floating ">
                            <input type="text" class="form-control" id="cargoTabajador" placeholder=".">
                            <label for="cargoTabajador">Cargo</label>
                        </div>
                    </div>
                </div>
                <br>
                <br>
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