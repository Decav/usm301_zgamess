@extends("layouts.master")

@section("contenido")
    <div class="row">
        <div class="col-lg-5 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header bg-warning text-white">
                    <span>Registrar Juego</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nombre-txt" class="form-label">Nombre</label>
                        <input type="text" id="nombre-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="descripcion-txt" class="form-label">Descripcion</label>
                        <input type="text" id="descripcion-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="fecha-txt" class="form-label">Fecha Lanzamiento</label>
                        <input type="date" id="fecha-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="precio-txt" class="form-label">Precio</label>
                        <input type="number" id="precio-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="apto-txt" class="form-label">Apto para niños?</label>
                        <input type="check" id="nombre-txt" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection