@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Buscador</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form>
                        
                        <div class="form-group" id="form">
                            <label  for="busqueda" class="col-md-6 control-label" >Buscar Usuarios</label>
                        
                            <div class="col-md-6">
                                <input type="text" id="caja" name="busqueda" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                &nbsp;
                            </div>
                            <div class="col-md-6">
                                &nbsp;
                            </div>
                            <div class="col-md-6">
                                &nbsp;
                            </div>
                            <div class="col-md-6" style= "color: red" hidden id="mensajeBuscador">
                                    No se ha ingresado ningun valor
                            </div>

                            <div class="col-md-12">
                                <button type="submit" name="search" id="search" class="btn btn-primary">Buscar</button>
                            </div>    
                            
                        </div>
                        
                    </form>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Listado</div>
                
                <div class="panel-body">
                    <div id="lista">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
