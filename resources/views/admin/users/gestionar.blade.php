@extends('admin.layouts.app')
@section('content')
<div class="page-inner">
    <h1 class="text-center"><b>Gestionar usuarios</b></h1>
    <div class="mt-4">
        @component('components.table')
            @slot('thead')
                <th>N°</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Acciones</th>
            @endslot
            @slot('tbody')
                @foreach ($users as $user)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>Ver - Editar - Eliminar</td>
                    </tr>
                @endforeach
            @endslot
        @endcomponent
    </div>
</div>
@endsection
