@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">

                <div class="row" style="margin-top: 7%;">
                    <div class="col-md-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">

                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-background font-bold" style="color:white" data-toggle="modal" data-target="#modal-lg">
                                    Ajouter une catégorie
                                </button>

                                <div class="modal fade" id="modal-lg">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Ajouter une catégorie</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-md-12">
                                                    <!-- general form elements -->
                                                    <div class="card card-primary">

                                                        <!-- /.card-header -->
                                                        <!-- form start -->
                                                      
                                                            <div class="card-body">
                                                              <form action="{{route('create-categorie')}}" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Nom de la catégorie</label>
                                                                    <input type="text" name="name" class="form-control"
                                                                        id="exampleInputEmail1" placeholder="">
                                                                </div>
                                                            </div>
                                                            <!-- /.card-body -->


                                                      
                                                    </div>
                                                    <!-- /.card -->

                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">fermer</button>
                                                <button type="submit" class="btn btn-primary">enregistrer</button>
                                            </div>
                                          </form>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <br />
                                <br />
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>



                <div class="row bb">

                    <!-- /.col -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Listes des categories</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right"
                                            placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>nom</th>
                                            <th>éditer</th>
                                            <th>supprimer</th>
                                    </thead>
                                    <tbody>
                                       @foreach($categories as $key => $item)
                                       <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$item->name}}</td>
                                            <td><a href=""><i class="fa fa-edit text-success" aria-hidden="true"></i></a></td>
                                            @if($item->visible == true)
                                            <td><a href=""><i class="fa fa-window-close text-danger" aria-hidden="true"></i></a></td>
                                            @else
                                            <td><a href=""><i class="fa fa-edit  text-primary" aria-hidden="true"></i> restore</a></td>
                                            @endif
                                           
                                       </tr> 
                                   
                                       @endforeach


                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>

            </div>
    </div>
@endsection
