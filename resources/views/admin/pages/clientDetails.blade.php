@extends('Admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">

                <div class="row" style="margin-top: 7%;">
                    <div class="col-md-12">
                        <div class="row">
                       

                        </div>

                    </div>
                </div>



                <div class="row bb">

                    <!-- /.col -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Listes des commandes du client <strong> {{$client->name}}</strong></h3>

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
                                            <th>noms</th>
                                            <th>telephone</th>
                                            <th>montant</th>
                                            <th>date paiement</th>
                                    </thead>
                                    <tbody>
                                      
                                        @foreach ($orders as $key => $order )
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$order->nickname}} {{$order->suname}}</td>
                                            <td>{{$order->phone}}</td>
                                            <td>{{$order->amount}} $</td>
                                            <td>{{$order->paid_at}}</td>
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
