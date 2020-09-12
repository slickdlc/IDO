@extends('backoffice.layouts.app')
@section('contenido')
<div class="row">
    <div class="col-12">
        <div class="page-title">
            <div class="title_left">
                <h3>Categoría</h3>
            </div>
            <div class="float-right">
                <button id="btnAgregarCategoria" class="btn btn-outline-primary rounded-circle"data-toggle="tooltip" data-placement="top" title="Añadir categoría"> <i class="fas fa-plus fa-3x"></i></button>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="x_panel tile ">
            <div class="x_title">
                <h2>Categorías</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
            </div>
        </div>
    </div>
</div>
@endsection()
@section('scripts')
 <script src="{{asset('js/admin/categoria/main.js')}}"></script>
@endsection()