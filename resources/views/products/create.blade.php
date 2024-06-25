<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('index.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="name" id="name"
                            aria-describedby="helpId" placeholder="Ingrese el nombre" required/>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Descripción</label>
                        <input type="text" class="form-control" name="description" id="description"
                            aria-describedby="helpId" placeholder="Ingrese la descripcion" required/>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Precio</label>
                        <input type="number" class="form-control" name="price" id="price"
                            aria-describedby="helpId" placeholder="Ingrese el precio" required/>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Imagen</label>
                        <input type="file" class="form-control" name="image" id="image"
                            aria-describedby="helpId" required/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
            </form>
        </div>
    </div>
</div>
