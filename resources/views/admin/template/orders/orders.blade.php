@extends('admin.layouts.appAdmin')
@section('content1')
    <div class="main-panel">
        <div class="content-wrapper">

            <input type="hidden" value="{{ $inc = 1 }}">

            <div class="card">
                @if (Session::has('status'))
                    <div class="alert alert-success">
                        {{ Session::get('status') }}
                        {{ Session::put('status', null) }}
                    </div>
                @endif

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    <div class="row">
                        <h4 class="card-title col-10">Liste des commandes</h4>
                       
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">

                                    <thead>
                                        <tr>
                                            <th>Utilisateurs</th>
                                            <th>Nom du forfait</th>
                                            <th>Ville</th>
                                            <th>Période</th>
                                            <th>Mifi</th>
                                          
                                            <th style="text-align:center" colspan="3">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($orders)
                                            @forelse ($orders as $order)
                                         
                                                <tr>
                                                    <td>{{ $order->order_name }}</td>
                                                    <td>{{ $order->order_forfait_name }}</td>
                                                    <td>{{ $order->order_city }}</td>
                                                     <td>{{$order->order_periode}} </td>
                                                     <td>
                                                
                                                    @if($order->id_mifi_attributed=='0')
                                                    <a href="" data-toggle="modal" data-target="#exampleModal1{{$order->id}}"> attributed</a>  
                                                    @else 
            

                                                    @foreach($mifi_attributed as $mifi)
                                                            @if($mifi->id==$order->id_mifi_attributed)
                                                            <label>{{$mifi->mifi_name}}</label>   
                                                            @endif
                                                    @endforeach
                                                    @endif
                                                     </td>
                                                     <td>
                                                         @if($order->id_mifi_attributed!='0')
                                                         <a title="ne plus attribuer" href="{{ url('/admin/reset_attributed_user_to_mifi/'. $order->id)}}"
                                                            id="unlocatemifi">  <i class="ti-share-alt" aria-hidden="true"></i></a>
                                                        @else
                                                               <i class="ti-archive" aria-hidden="true"></i> 
                                                        @endif 
                                                     </td>
                                                    <td>
                                                        <a title="Supprimer"
                                                            href="{{ url('/admin/delete_order/' . $order->id) }}"
                                                            id="delete">
                                                            <i class="ti-trash"></i></a>
                                                    </td>
                                                    <td>
                                                          <a href="" data-toggle="modal" data-target="#exampleModal2{{$order->id}}"><i class="ti-eye"></i></a>
                                                        
                                                    </td>

{{-- start update wifi --}}
<div class="modal fade" id="exampleModal2{{$order->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Détail de commande </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action=""
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                                   
                                <div class="col-lg-3">
                                    <label class="col-form-label">Nom : </label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control"  type="text"
                                        name="order_name"  value="{{$order->order_name}}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                                   
                                <div class="col-lg-3">
                                    <label class="col-form-label">Email : </label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control"  type="text"
                                        name="order_email"  value="{{$order->order_email}}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                                   
                                <div class="col-lg-3">
                                    <label class="col-form-label">Phone : </label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control"  type="text"
                                        name="order_email"  value="{{$order->order_phone}}" required>
                                </div>
                            </div>
    
                            
                            
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label class="col-form-label">ForFait:</label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" name="order_forfait_name" value="{{ $order->order_forfait_name }}"
                                        required>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label class="col-form-label">Ville:</label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" name="order_city" value="{{ $order->order_city }}"
                                        required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label class="col-form-label">Periode:</label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" name="order_periode" value="{{$order->order_periode}}"
                                        required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label class="col-form-label">Date de l'opération:</label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control" type="text" name="date" value="{{ $order->created_at->format('d/m/Y   H:i:s') }}"
                                        required>
                                </div>
                            </div>
                        </div>
    
                        <div class="form-group row">
                            <div class="col-lg-3">
                            </div>
                            <div class="col-lg-8">
                                <button class="btn btn-danger" data-dismiss="modal"> Fermer
                                </button>
    
                            </div>
                        </div>
    
                    </div>
                </form>
            </div>
    
        </div>
    </div>
    </div>
    
    {{-- start order to adapte mifi --}}
    <div class="modal fade" id="exampleModal1{{$order->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Attribuer mifi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ url('/admin/attributed_add_save2') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Commande:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input class="form-control" name="id_order"  value="{{$order->id}}" type="hidden" required>
                                        <input class="form-control"  value="{{$order->order_name}}" type="text" required>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Mifis:</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <select class="form-control" name="id_mifi">
                                            @forelse ($mifi_not_attributed as $mifi)
                                                 <option value="{{$mifi->id}}">{{$mifi->mifi_name}}</option> 
                                            @empty
                                                 <option> user not found </option>
                                            @endforelse 
                                            
                                        </select>
                                    </div>
                                </div>

                         
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <select class="form-control" name="name_order" hidden>
                                            @forelse ($mifi_not_attributed as $order)
                                                 <option value="{{$order->order_name}}"></option> 
                                            @empty
                                                 <option> user not found </option>
                                            @endforelse 
                                            
                                        </select>
                                    </div>
                                </div>
        
        
        
                            </div>
        
                            <div class="form-group row">
                                <div class="col-lg-3">
                                </div>
                                <div class="col-lg-8">
                                    @isset($mifi_not_attributed[0])
                                    <input type="submit" value="Attribuer" class="btn btn-success">    
                                    @endisset
                                    
                                    
                                   <button class="btn btn-danger" data-dismiss="modal"> Annuler
                                    </button>
        
                                </div>
                            </div>
        
                        </div>
                    </form>
                </div>
        
            </div>
        </div>
        </div>

    {{-- end order to adapte mifi --}}
















                                                </tr>
                                                


                                            @empty
                                                <tr>
                                                    <td colspan="6" style="text-align: center">
                                                        <H1> Aucun order Ajouter</H1>
                                                    </td>
                                                </tr>

                                            @endforelse

                                        @endif


                                    </tbody>
                                </table>
                                {{ $orders->links('pagination.paginatelinks') }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
        @include('admin.include.footer')
    </div>
@endsection
