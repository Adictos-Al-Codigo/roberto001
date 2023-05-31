@include('plantilla.header')


@include('plantilla.navSuperior')

<form action="{{ url('Save') }}"class="form" method="POST" style="width: 430px; position: relative; left: 300px;">
    @csrf
    <!-- Nombre de la fruta -->
    <label for="nombre_fruta">Nombre de la Fruta</label>
    <input type="text" id="nombre_fruta" class="form-control">
    <!-- Cantidad -->
    <label for="cantidad">Cantidad</label>
    <input type="number" id="cantidad" class="form-control">
    <!-- Proveedor -->
    <label for="proveedor">Proveedor</label>
    <input type="text" id="proveedor" class="form-control">
    <button type="submit" href="{{url('prueba')}}" class="btn btn-primary mt-2">Registrar</button>
</form>

  <table class="table" style="width: 700px; position: relative; left: 300px;">
    <thead>
      <tr>
        <th scope="col"># de Fruta</th>
        <th scope="col">Nombre de la Fruta</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Proveedor</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      {{-- @foreach (frutas as $fruta)
      <tr>
        <th scope="row">1</th>
        <td>{{$fruta['nombre_fruta']}}</td>
        <td>{{$fruta['cantidad']}}</td>
        <td>{{$fruta['proveedor']}}</td>
        <td>
            <a class="ml-4" href=""><i class="bi bi-trash-fill"></i></a>
        </td>
      </tr>
      @endforeach --}}
    </tbody>
  </table>


@include('plantilla.sidebar') 