@csrf
<tr>
    <th>Apellidos</th>
    <td><input type="text" name="cPerApellido" value ="{{old('$persona->cPerApellido',$persona->cPerApellido)}}"></td>
</tr>
<tr>
    <th>Nombre</th>
    <td><input type="text" name="cPerNombre" value ="{{old('$persona->cPerNombre',$persona->cPerNombre)}}"></td>
</tr>
<tr>
    <th>Direccion</th>
    <td><input type="text" name="cPerDireccion"value ="{{old('$persona->cPerDireccion',$persona->cPerDireccion)}}"></td>
</tr>
<tr>
    <th>Fecha de nacimiento</th>
    <td><input type="date" name="dPerFecNac" value ="{{old('$persona->dPerFecNac',$persona->dPerFecNac)}}" ></td>
</tr>
<tr>
    <th>Edad</th>
    <td><input type="number" name="nPerEdad" value ="{{old('$persona->nPerEdad',$persona->nPerEdad)}}"></td>
</tr>
<tr>
    <th>Sueldo</th>
    <td><input type="number" name="nPerSueldo" value ="{{old('$persona->nPerSueldo',$persona->nPerSueldo)}}"></td>
</tr>
<tr>
    <th>Codigo</th>
    <td><input type="number" name="cPerRnd" value ="{{old('$persona->cPerRnd',$persona->cPerRnd)}}"></td>
</tr>
<tr>
    <th>Estado (Ingrese un solo dígito)</th>
    <td><input type="text" name="cPerEstado" value ="{{old('$persona->cPerEstado',$persona->cPerEstado)}}"></td>
</tr>

<tr>
    <td colspan="2" align="center"><button>Guardar</button></td>
</tr>
