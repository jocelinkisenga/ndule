@extends('Admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">




                <div class="row mb-2">
                    <div class="col-sm-4">
                        <div class="mt-4">
                            <button class="btn btn-background font-bold   btn-flat" style=" color:white" type="button" data-toggle="modal"
                                data-target="#edit">
                                <i class="fas fa-edit fa-lg mr-2"></i>
                                Modifier
                            </button>


                        </div>

                    </div>
                    <div class="col-sm-4">
                        <div class="mt-4">
                            <button class="btn btn-background font-bold  btn-flat" style=" color:white" type="button" data-toggle="modal"
                                data-target="#quantity">
                                <i class="fas fa-edit fa-lg mr-2"></i>
                                Ajouter la quantité
                            </button>

                            {{-- <div class="btn btn-default btn-lg btn-flat">
                <i class="fas fa-heart fa-lg mr-2"></i>
               Ajouter des images
              </div> --}}
                        </div>

                    </div>
                    <div class="col-sm-4">
                        <div class="mt-4">
                            <button class="btn btn-background font-bold  btn-flat" style=" color:white" type="button" data-toggle="modal"
                                data-target="#image">
                                <i class="fas fa-edit fa-lg mr-2"></i>
                                Ajouter une image
                            </button>

                            {{-- <div class="btn btn-default btn-lg btn-flat">
                <i class="fas fa-heart fa-lg mr-2"></i>
               Ajouter des images
              </div> --}}
                        </div>

                    </div>
                    
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card card-solid">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3 class="d-inline-block d-sm-none">{{$product->name}}</h3>
                            <div class="col-12">
                                <img src="{{ asset('storage/uploads/' . $product->image->first()["path"]) }}" class="product-image"
                                    alt="Product Image">
                            </div>
                            <div class="col-12 product-image-thumbs">


                                @foreach ($product->image  as $key => $image)
                                <div class="product-image-thumb active {{$key+1}}"><img
                                    src="{{ asset('storage/uploads/' . $image->path) }}" alt="Product Image"></div>
                                @endforeach
                            </div>
                        </div>

                        <div class="col-12 col-sm-6">

                            <h3 class="my-3">{{ $product->name }}</h3>
                            <p>{{$product->description}}.</p>

                            <hr>
                            <h4></h4>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">

                            </div>

                            <h4 class="mt-3"> <small></small></h4>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">

                            </div>


                            <div class="bg-gray py-2 px-3 mt-4">
                                <h4 class="mb-0">
                                    quantité : {{ $product->old_quantity }} pc
                                </h4>
                                <h4 class="mb-0">
                                    prix de vente : {{ $product->price }} $
                                </h4>


                                <h4 class="mt-0">
                                    <small></small>
                                </h4>
                            </div>


                            <div class="mt-4 product-share">

                        
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>


    {{-- modal edit --}}
    <div class="modal fade" id="edit">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modifier le produit</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                                <form action="{{ route('admin.updateProduct') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <input type="hidden" name="product_id" value="{{$product->id}}"/>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nom du produit</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                            value="{{$product->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">prix de vente</label>
                                        <input type="text" name="price" class="form-control" id="exampleInputPassword1"
                                            value="{{$product->price}}">
                                    </div>
                                     <div class="form-group">
                                    <label for="exampleInputFile">image principale </label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input" multiple
                                                id="exampleInputFile">
                                            <label class="custom-file-label"
                                                for="exampleInputFile">choisir une image</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                    
                                    <div class="form-group">
                                      <label for="exampleInputFile">selectionner une catégorie</label>
                                   
                                        <select class="custom-select" name="category_id" id="">
                                          <option value="{{$product->categorie->id}}" selected>{{$product->categorie->name}}</option>
                                          @foreach ($categories as  $item)
                                              <option value="{{$item->id}}">{{$item->name}}</option>
                                          @endforeach
                                   
                                        </select>
                                      
                                  </div>
                                  <div class="form-group">
                                    <label for="my-input">description</label>
                                    <textarea name="description" id="my-input" class="form-control" type="text" value="{{$product->description}}" ></textarea>
                                  </div>
                            </div>
                            <!-- /.card-body -->



                        </div>
                        <!-- /.card -->

                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
                    <button type="submit" class="btn btn-primary">enregistrer</button>
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="quantity">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title">Ajouter la quantité</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                              <form action="{{ route('admin.updateQuantity') }}" method="POST" enctype="multipart/form-data">
                                  @csrf
                                  <input type="hidden" name="product_id" value="{{$product->id}}">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">prix d'achat</label>
                                      <input type="text" name="price" class="form-control" id="exampleInputEmail1"
                                          placeholder="">
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputPassword1">quantité</label>
                                      <input type="text" name="quantity" class="form-control" id="exampleInputPassword1"
                                          placeholder="">
                                  </div>

                          </div>
                          <!-- /.card-body -->



                      </div>
                      <!-- /.card -->

                  </div>
              </div>
              <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
                  <button type="submit" class="btn btn-primary">enregistrer</button>
              </div>
              </form>
          </div>
          <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
  </div>


  {{-- add image --}}
  <div class="modal fade" id="image">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ajouter la quantité</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                            <form action="{{ route('add_image') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                <div class="form-group">
                                    <label for="exampleInputFile">selectionner vos images</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="image[]" class="custom-file-input" multiple
                                                id="exampleInputFile">
                                            <label class="custom-file-label"
                                                for="exampleInputFile">choisir une image</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <!-- /.card-body -->



                    </div>
                    <!-- /.card -->

                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">fermer</button>
                <button type="submit" class="btn btn-primary">enregistrer</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

    <!-- /.modal-dialog -->
    </div>

    {{-- end modal edit --}}
@endsection
