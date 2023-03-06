@extends('Admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row" style="margin-top: 7%;">
                    <div class="col-md-12">
                        <div class="row">
                        </div>
                         <div class="card card-primary card-outline">
                            <div class="card-header">
                                <button type="button" class="btn btn-warning text-white"  data-toggle="modal" data-target="#modal-lg">
                                    Generer un rapport
                                </button>

                            </div>
                            <div class="card-body">
 
                            @isset($rapport)
                            <button onclick="myPrintFunction()" class="btn btn-warning ml-6 text-white"> <i class="fa fa-print text-white" aria-hidden="true"></i> imprimer</button>
                            <button onclick="CreatePdffromHtml()" class="btn btn-warning ml-6 text-white"> <i class="fa fa-download text-white" aria-hidden="true"></i> telecharger</button>
                            @endisset
                        
                                <div class="modal fade" id="modal-lg">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Filtrer par date</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card">
                                                    <div class="card-body">

                                                        <!-- /Filter -->
                                                        <div class="card" id="">
                                                            <div class="pb-0 card-body">
                                                                <form action="{{ route('search') }}" method="POST">
                                                                    @csrf
                                                                    <div class="row">
                                    
                                                                        <div class="mr-3 col-lg-4 col-sm-6 col-12">
                                    
                                                                            <div class="form-group">
                                                                                <div class="input-groupicon">
                                                                                 <span class=" color-orange font-bold mr-2">Du </span>  <input type="date" name="date_from" >
                                                                                    {{-- <div class="addonset">
                                                                                    <img src="assets/img/icons/calendars.svg" alt="img">
                                                                                </div> --}}
                                                                                </div>
                                                                            </div>
                                                                        </div> 
                                                                        <div class="mr-3 col-lg-4 col-sm-6 col-12">
                                                                            <div class="form-group">
                                                                                <div class="input-groupicon">
                                                                               <span   class=" color-orange font-bold mr-2">Au</span>   <input type="date" name="date_to">
                                                                                    {{-- <div class="addonset">
                                                                                    <img src="assets/img/icons/calendars.svg" alt="img">
                                                                                </div> --}}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-1 col-sm-6 col-12 ms-auto">
                                                                            <div class="form-group">
                                                                                <button class="btn btn-filters ms-auto" type="submit"
                                                                                   ><i class="fa fa-search color-orange" aria-hidden="true"></i></button>
                                                                            </div>
                                                                        </div>
                                    
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /Filter -->
                                    
                                                    <!-- /Filter -->
                                    
                                    
                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                               
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
                        </div> --
                    </div>
                </div>



                <div class="row bb html-content">

                    <!-- /.col -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                @isset($rapport)
                                <h2 class="card-title">rappot du <span class="text-bold">{{$rapport['from']}}</span> au <span class="text-bold">{{$rapport['to']}}</span> </h2>
                                @endisset
                              

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
                                            <th>Entrée</th>
                                            <th>Sorties</th>
                                            <th>Solde</th>
                                            <th>Total</th>
                                    </thead>
                                    <tbody>
                                      @isset($rapport)
                                      @foreach ($rapport['results'] as $key => $item)
                                      <tr>
                                          <td>{{$key+1}}</td>
                                          <td>{{$item->name}}</td>
                                          <td>{{$item->entries}}</td>
                                          <td>{{$item->outputs}}</td>
                                          <td>{{$item->old_quantity}}</td>
                                          <td>{{$item->outputs * $item->vente}}</td>
                                     </tr> 
                                 
                                     
                                      @endforeach

                                      @endisset
                                  

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
