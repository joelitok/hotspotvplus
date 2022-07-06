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
                        <h4 class="card-title col-10">Liste des mifis</h4>
                        {{-- data-toggle="modal" data-target="#exampleModal" --}}
                        <button class="btn btn-outline-primary mb-4" data-toggle="modal" data-target="#exampleModal">
                            Ajouter
                        </button>
                    </div>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Nouveau mifi</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{ url('/admin/mifi_add_save') }}"
                                        enctype="multipart/form-data">
                                        @csrf
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
                                                <div class="form-group row">
                            
                
                                                    <div class="col-lg-3">
                                                        <label class="col-form-label">Nom : </label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input class="form-control" maxlength="25" type="text"
                                                            name="mifi_name" required>
                                                    </div>
                                                </div>

                                                
                                                
                                                <div class="form-group row">
                                                    <div class="col-lg-3">
                                                        <label class="col-form-label">Nom vue:</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input class="form-control" type="text" name="mifi_name_search"
                                                            required>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <div class="col-lg-3">
                                                        <label class="col-form-label">numéro de série:</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input class="form-control" type="text" name="mifi_serial_number"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-3">
                                                        <label class="col-form-label">Marque:</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input class="form-control" type="text" name="mifi_marque"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-3">
                                                        <label class="col-form-label">Mots de passe:</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input class="form-control" type="text" name="mifi_password"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-3">
                                                        <label class="col-form-label">Numéro de puce:</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input class="form-control" type="text" name="mifi_puce_number"
                                                            required>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-lg-3">
                                                        <label class="col-form-label">Date:</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input class="form-control" type="text" name="mifi_date_begin_use"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-3">
                                                        <label class="col-form-label">Image</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input class="form-control" name="mifi_image" type="file"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-lg-3">
                                                </div>
                                                <div class="col-lg-8">
                                                    <input type="submit" value="Enregistrer" class="btn btn-success">
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












                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                        <tr>
                                            <th>Ordre #</th>
                                            <th>Image</th>
                                            <th>Nom</th>
                                            <th>Date de création</th>
                                            <th>Status</th>
                                            <th> Attribué à</th>
                                            <th colspan="3" style="text-align:center">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($mifis)
                                            @forelse ($mifis as $mifi)

                                                <tr>
                                                    <td>{{ $inc }}</td>
                                                    <td><img src="{{asset('mifi_images/'.$mifi->mifi_image)}}">
                                                    </td>
                                                    <td>{{ $mifi->mifi_name }}</td>
                                                    <td>{{ $mifi->created_at->format('d/m/Y   H:i:s') }}</td>

                                                    <td>
                                                        @if ($mifi->mifi_status == 1)
                                                            <label class="badge badge-success"> Louer</label>
                                                        @else
                                                            <label class="badge badge-danger"> Non Louer</label>
                                                        @endif

                                                    </td>
                                            <td>
                                                                                       
                                                @if($mifi->id_user_attributed_mifi=='0')
                                                <a href="" data-toggle="modal" data-target="#exampleModal1{{$mifi->id}}"> attributed</a>  
                                                @else 
                                                @foreach($user_attributed as $order)
                                                        @if($order->id==$mifi->id_user_attributed_mifi)
                                                        <label>{{$order->order_name}}</label>   
                                                        @endif
                                                @endforeach
                                                @endif
                                            </td>



                                              <td>
                                                @if($mifi->id_user_attributed_mifi!='0')
                                                <a title="ne plus attribuer" href="{{ url('/admin/reset_attributed_mifi_to_user/'. $mifi->id)}}"
                                                    id="unlocatemifi">  <i class="ti-share-alt" aria-hidden="true"></i></a>
                                                    @else
                                                       <i class="ti-archive" aria-hidden="true"></i> 
                                                @endif        
                                                </td> 
                                                <td> <a href="" data-toggle="modal" data-target="#exampleModal2{{$mifi->id}}">  <i class="ti-pencil" aria-hidden="true"></i></a>  
                                                </td>
                                                <td>
                                                        <a title="Supprimer"
                                                            href="{{ url('/admin/delete_mifi/'. $mifi->id) }}"
                                                            id="delete">
                                                            <i class="ti-trash"></i></a>
                                                    </td>
                                                    

                
{{-- start attrbuted mifi --}}
<div class="modal fade" id="exampleModal1{{$mifi->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
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
            <form method="post" action="{{ url('/admin/attributed_add_save') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Mifi:</label>
                            </div>
                            <div class="col-lg-8">
                                <input class="form-control" name="id_mifi"  value="{{$mifi->id}}" type="hidden" required>
                                <input class="form-control"  value="{{$mifi->mifi_name}}" type="text" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Utilisateurs:</label>
                            </div>
                            <div class="col-lg-8">
                                <select class="form-control" name="id_order">
                                    @forelse ($user_not_attributed as $user)
                                         <option value="{{$user->id}}">{{$user->order_name}}</option> 
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
                            @isset($user_not_attributed[0])
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
{{-- end attributed mifi --}}





{{-- start update wifi --}}
<div class="modal fade" id="exampleModal2{{$mifi->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">modifier le mifi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{ url('/admin/mifi_update_save') }}"
                enctype="multipart/form-data">
                @csrf
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
                        <input type="hidden" name="id" value="{{$mifi->id}}">

                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Nom : </label>
                            </div>
                            <div class="col-lg-8">
                                <input class="form-control"  type="text"
                                    name="mifi_name"  value="{{$mifi->mifi_name}}" required>
                            </div>
                        </div>

                        
                        
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Nom vue:</label>
                            </div>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" name="mifi_name_search" value="{{$mifi->mifi_name_search}}"
                                    required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">numéro de série:</label>
                            </div>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" name="mifi_serial_number" value="{{$mifi->mifi_serial_number}}"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Marque:</label>
                            </div>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" name="mifi_marque" value="{{$mifi->mifi_marque}}"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Mots de passe:</label>
                            </div>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" name="mifi_password" value="{{$mifi->mifi_password}}"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Numéro de puce:</label>
                            </div>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" name="mifi_puce_number" value="{{$mifi->mifi_puce_number}}"
                                    required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Date:</label>
                            </div>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" name="mifi_date_begin_use" value="{{$mifi->mifi_date_begin_use}}"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Image</label>
                            </div>
                            <div class="col-lg-8">
                                <input class="form-control" name="mifi_image" type="file" value="{{$mifi->mifi_image}}"
                                    required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-3">
                        </div>
                        <div class="col-lg-8">
                            <input type="submit" value="Envoyer" class="btn btn-success">
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







{{-- end update wifi --}}


























                                                </tr>
                                                <input type="hidden" value="{{ $inc = $inc + 1 }}">




                                            @empty
                                                <tr>
                                                    <td colspan="6" style="text-align: center">
                                                        <H1> Aucun mifi Ajouter</H1>
                                                    </td>
                                                </tr>

                                            @endforelse

                                        @endif



                                    </tbody>
                                </table>
                                {{ $mifis->links('pagination.paginatelinks') }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
        @include('admin.include.footer')
    </div>
@endsection
