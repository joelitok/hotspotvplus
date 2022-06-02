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
                        <h4 class="card-title col-10">Liste des Sliders</h4>
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
                                    <h5 class="modal-title" id="exampleModalLabel">Nouveau slider</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{ url('/admin/slider_add_save') }}"
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
                                                        <label class="col-form-label">Title : </label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input class="form-control" maxlength="25" type="text"
                                                            name="slider_title" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-3">
                                                        <label class="col-form-label">Description:</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input class="form-control" type="text" name="slider_description"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-3">
                                                        <label class="col-form-label">Image</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input class="form-control" name="slider_image" type="file"
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
                                            <th>titre</th>
                                            <th>Date de création</th>
                                            <th>Status</th>
                                            <th colspan="3" style="text-align:center">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($sliders)
                                            @forelse ($sliders as $slider)

                                                <tr>
                                                    <td>{{ $inc }}</td>
                                                    <td><img
                                                            src="/slider_images/{{$slider->slider_image}}">
                                                    </td>
                                                    <td>{{ $slider->slider_title }}</td>
                                                    <td>{{ $slider->created_at->format('d/m/Y   H:i:s') }}</td>

                                                    <td>
                                                        @if ($slider->slider_status == 1)
                                                            <label class="badge badge-success"> Activé</label>
                                                        @else
                                                            <label class="badge badge-danger"> Desactivé</label>
                                                        @endif

                                                    </td>
                                                    <td>
                                                        <a title="Modifier"
                                                            onclick="window.location='{{ url('/admin/slider_update_save/' . $slider->id) }}'">
                                                            <i class="ti-pencil-alt"> </i></a>
                                                    </td>

                                                    <td>
                                                        <a title="Supprimer"
                                                            href="{{ url('/admin/delete_slider/' . $slider->id) }}"
                                                            id="delete">
                                                            <i class="ti-trash"></i></a>
                                                    </td>
                                                    <td>
                                                        @if ($slider->slider_status == 1)
                                                            <button class="btn btn-outline-warning"
                                                                onclick="window.location='{{ url('/admin/disable_slider/' . $slider->id) }}'">
                                                                désactiver
                                                            </button>
                                                        @else
                                                            <button class="btn btn-outline-success"
                                                                onclick="window.location='{{ url('/admin/enable_slider/' . $slider->id) }}'">
                                                                activer
                                                            </button>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <input type="hidden" value="{{ $inc = $inc + 1 }}">


                                            @empty
                                                <tr>
                                                    <td colspan="6" style="text-align: center">
                                                        <H1> Aucun slider Ajouter</H1>
                                                    </td>
                                                </tr>

                                            @endforelse

                                        @endif


                                    </tbody>
                                    
                                </table>
                                {{ $sliders->links('pagination.paginatelinks') }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
        @include('admin.include.footer')
    </div>
@endsection
