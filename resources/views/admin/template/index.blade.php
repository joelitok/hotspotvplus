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
                        <h4 class="card-title col-10">Utilisateurs</h4>
                         <button class="btn btn-outline-primary mb-4" data-toggle="modal" data-target="#exampleModal">
                            Ajouter
                         </button>
                    </div>
                  
                  
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Nouveau Utilisateur</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{ url('/admin/add_admin') }}"
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
                                                        <input class="form-control" type="text"
                                                            name="name" required>
                                                    </div>
                                                </div>
                                             
                                              
                                                <div class="form-group row">
                                                    <div class="col-lg-3">
                                                        <label class="col-form-label">Email :</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input class="form-control" type="email" name="email"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-3">
                                                        <label class="col-form-label">Ville</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input class="form-control" name="city" type="text"
                                                            required>
                                                    </div>
                                                </div>
    
                                                <div class="form-group row">
                                                    <div class="col-lg-3">
                                                        <label class="col-form-label">Téléphone</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input class="form-control" name="phone" type="text"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-3">
                                                        <label class="col-form-label">Genre :</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <select class="form-control" name="gender">
                                                            <option value="Mr">Homme</option>
                                                            <option value="Mme">Femme</option>
                                                        </select>
                                                        
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-3">
                                                        <label class="col-form-label">Mots de passe :</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input class="form-control" name="password" type="text"
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

                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">

                                    <thead>
                                        <tr>
                                            <th>Ordre #</th>
                                            <th>Image</th>
                                            <th>name</th>
                                            <th> email</th>
                                            <th>Date de création</th>
                                            <th>Status</th>
                                            <th colspan="3" style="text-align:center">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($admins)
                                            @forelse ($admins as $admin)

                                                <tr>
                                                    <td>{{ $inc }}</td>
                                                    <td><img src="{{asset('backend/images/logo1.jpg')}}">
                                                    </td>
                                                    <td>{{ $admin->name }}</td>
                                                    <td>{{ $admin->email }}</td>
                                                    <td>{{ $admin->created_at->format('d/m/Y   H:i:s') }}</td>

                                                    <td>
                                                        @if ($admin->status == 1)
                                                            <label class="badge badge-success"> Activé</label>
                                                        @else
                                                            <label class="badge badge-danger"> Desactivé</label>
                                                        @endif

                                                    </td>
                                                  

                                                    <td>
                                                        <a title="Supprimer"
                                                            href="{{ url('/admin/delete_admin/' . $admin->id) }}"
                                                            id="delete">
                                                            <i class="ti-trash"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="" data-toggle="modal" data-target="#exampleModal2{{$admin->id}}"><i class="ti-eye"></i></a>
                                             
                                                  </td>
                                                    <td>
                                                        @if ($admin->status == 1)
                                                            <button class="btn btn-outline-warning"
                                                                onclick="window.location='{{ url('/admin/disable_admin/' . $admin->id) }}'">
                                                                Désactiver
                                                            </button>
                                                        @else
                                                            <button class="btn btn-outline-success"
                                                                onclick="window.location='{{ url('/admin/enable_admin/' . $admin->id) }}'">
                                                              Activer
                                                            </button>
                                                        @endif
                                                    </td>


{{-- start updated admin user --}}
<div class="modal fade" id="exampleModal2{{$admin->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">modifier un Utilisateur</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{ url('/admin/update_admin') }}"
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
                        <input type="hidden" name="id" value="{{$admin->id}}">
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Nom : </label>
                            </div>
                            <div class="col-lg-8">
                                <input class="form-control" type="text"
                                  value="{{$admin->name}}"  name="name" required>
                            </div>
                        </div>
                     
                      
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Email :</label>
                            </div>
                            <div class="col-lg-8">
                                <input class="form-control" type="email" name="email"
                                 value="{{$admin->email}}"   required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Ville</label>
                            </div>
                            <div class="col-lg-8">
                                <input class="form-control" name="city" type="text"
                                  value="{{$admin->city}}"  required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Téléphone</label>
                            </div>
                            <div class="col-lg-8">
                                <input class="form-control" name="phone" type="text"
                                 value="{{$admin->phone}}"   required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Genre :</label>
                            </div>
                            <div class="col-lg-8">
                                <select class="form-control" name="gender">
                                    @if($admin->gender=='Mr')
                                    <option value="Mr">Homme</option>  
                                    @else 
                                    <option value="Mme">Femme</option>
                                    @endif
                                </select>
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Mots de passe :</label>
                            </div>
                            <div class="col-lg-8">
                                <input class="form-control" name="password" type="text"
                                        value="{{$admin->password}}"   required>
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

{{-- end updated admin user  --}}








                                                </tr>
                                                <input type="hidden" value="{{ $inc = $inc + 1 }}">


                                            @empty
                                                <tr>
                                                    <td colspan="6" style="text-align: center">
                                                        <H1> Aucun admin Ajouter</H1>
                                                    </td>
                                                </tr>

                                            @endforelse

                                        @endif


                                    </tbody>
                                </table>
                                {{ $admins->links('pagination.paginatelinks') }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
        @include('admin.include.footer')
    </div>
@endsection
