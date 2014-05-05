<tr id="tipo-de-alimento-{{ $index }}">
	<td>{{ $index }}</td>
	<td>{{ $tipo_de_alimento->nombre }}</td>
	<td colspan="3">{{ HTML::linkRoute('tipo_de_alimentos.edit', "Editar", array($tipo_de_alimento->id) ) }} | 
									{{ HTML::linkRoute('tipo_de_alimentos.destroy', "Borrar", array($tipo_de_alimento->id) ) }} |
									{{ HTML::linkRoute('tipo_de_alimentos.destroy', "Alimentos", array($tipo_de_alimento->id) ) }}
	</td>
	
</tr>