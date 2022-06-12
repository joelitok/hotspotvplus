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
                                            <th colspan="2" style="text-align:center">action</th>
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
