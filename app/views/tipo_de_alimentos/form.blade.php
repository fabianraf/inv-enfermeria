  <div class="form-group">
    {{ Form::label('nombre', 'Nombre',array('class' => 'col-sm-2 control-label')); }}
    <div class="col-sm-6">
      {{ Form::text('nombre', $tipo_de_alimento->nombre, array('class' => 'form-control', 'placeholder' => 'nombre' )); }}
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Save</button>
    </div>
  </div>