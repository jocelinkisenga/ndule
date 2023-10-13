@extends('Admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">

                <div class="row" style="margin-top: 7%;">
                    <div class="col-md-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">

                            </div>
                            {{-- <div class="card-body">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
                                    Ajouter un produit
                                </button>

                                <div class="modal fade" id="modal-lg">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Ajouter un produit</h4>
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
                                                              <form action="" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Nom du produit</label>
                                                                    <input type="text" name="name" class="form-control"
                                                                        id="exampleInputEmail1" placeholder="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputPassword1">prix</label>
                                                                    <input type="text" name="price" class="form-control"
                                                                        id="exampleInputPassword1" placeholder="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputFile">File input</label>
                                                                    <div class="input-group">
                                                                        <div class="custom-file">
                                                                            <input type="file" name="image" class="custom-file-input"
                                                                                id="exampleInputFile">
                                                                            <label class="custom-file-label"
                                                                                for="exampleInputFile">Choose file</label>
                                                                        </div>
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text">Upload</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                  <label for="exampleInputFile">selectionner une catégorie</label>
                                                               
                                                                    <select class="custom-select" name="categorie_id" id="">
                                                                      <option selected>Selectionner une cat...</option>
                                                               
                                                                    </select>
                                                                  
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
                            </div> --}}
                            <!-- /.card -->
                        </div>
                    </div>
                </div>



                <div class="row bb">

                    <!-- /.col -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Listes des commandes</h3>

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
                                            <th>utilisateur</th>
                                            <th>montant</th>
                                            <th>status</th>
                                            <th>Détail</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach ($commandes as $key => $commande )
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$commande->nickname}} {{$commande->suname}}</td>
                                                    <td>{{$commande->amount}} $</td>
                                                    <td>
                                                        @if($commande->status === 0)
                                                        <span style=" background-color:rgb(229, 199, 2); color:white; padding: 3px 4px 3px 4px;">non livré</span>
                                                       @else
                                                       <span style=" background-color:rgb(6, 150, 61); color:white; padding: 3px 4px 3px 4px;">non livré</span>
                                                       @endif
                                                </td>
                                                    <td><a href="{{route('myOrders',['id'=>$commande->id])}}"><i class="fa fa-eye"></i></a> </td>
                                                    <td> <a href="{{route("admin-commandes-update",['id'=>$commande->id])}}"> <i class=" fa fa-save"></i></a></td>
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
