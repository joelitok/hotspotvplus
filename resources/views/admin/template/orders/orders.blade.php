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
        
                                            <th>Image</th>
                                            <th>User</th>
                                            <th>Nom du forfait</th>
                                            <th>Ville</th>
                                            <th>Période</th>
                                            <th>Date de l'opération</th>
                                            <th style="text-align:center">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($orders)
                                            @forelse ($orders as $order)
                                         
                                                <tr>
                                                    
                                                    <td><img src="{{asset('frontend/images/logo1.jpg')}}">
                                                    </td>
                                                    <td>{{ $order->order_name }}</td>
                                                    <td>{{ $order->order_forfait_name }}</td>
                                                    <td>{{ $order->order_city }}</td>
                                                     <td> Du__{{$order->order_periode}} </td>
                                                    <td>{{ $order->created_at->format('d/m/Y   H:i:s') }}</td>
                                                    <td>
                                                        <a title="Supprimer"
                                                            href="{{ url('/admin/delete_order/' . $order->id) }}"
                                                            id="delete">
                                                            <i class="ti-trash"></i></a>
                                                    </td>
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
