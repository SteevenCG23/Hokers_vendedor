<!-- Modal -->
<div class="modal fade" id="edit{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('index.update', $product->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="name" id="name"
                            aria-describedby="helpId" placeholder="Ingrese el nombre" value="{{$product->name}}"/>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Descripción</label>
                        <input type="text" class="form-control" name="description" id="description"
                            aria-describedby="helpId" placeholder="Ingrese la descripcion" value="{{$product->description}}"/>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Precio</label>
                        <input type="number" class="form-control" name="price" id="price"
                            aria-describedby="helpId" placeholder="Ingrese el precio" value="{{$product->price}}"/>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Imagen</label>
                        <input type="file" class="form-control" name="image" id="image"
                            aria-describedby="helpId" value="{{$product->image}}"/>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
