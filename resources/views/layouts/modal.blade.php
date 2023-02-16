
    {{ csrf_field() }}
    <div class="modal fade text-left" id="exampleModal_pendientes" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Prestamos pendientes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>                    
                </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <table id="modal_pendientes" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id prestamo</th>
                            <th>Solicitante</th>
                            <th>Contacto</th>
                            <th>Cargo</th>
                            <th>Responasable</th>
                            <th>Equipos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <strong id="id"></strong>  
                        <strong id="solicitante"></strong>  
                        <strong id="contacto"></strong>  
                        <strong id="cargo"></strong>  
                        <strong id="responsable"></strong> 
                        <strong id="equipos"></strong>  
                    </tbody>
                </table>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <button type="button" class="btn grey btn btn-success" data-dismiss="modal">Atras</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
