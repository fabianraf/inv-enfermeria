<?php
class EncabezadoPreguntasEncuestasTableSeeder extends Seeder {
public function run()
    {
        // !!! All existing users are deleted !!!
        DB::table('encabezado_preguntas_encuestas')->delete();

        /*CONTROL DE HIGIENE DEL PERSONAL DE BARES Y COMEDORES DE LA PUCE*/
        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => '',
            'subgrupo'  => '',
            'pregunta'  => 'Nombres',
            'tipo_encuesta_id'  => '1'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => '',
            'subgrupo'  => '',
            'pregunta'  => 'Cargo',
            'tipo_encuesta_id'  => '1'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => '',
            'subgrupo'  => '',
            'pregunta'  => 'Usa uniforme completo ',
            'tipo_encuesta_id'  => '1'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => '',
            'subgrupo'  => '',
            'pregunta'  => 'Usa mandil limpio',
            'tipo_encuesta_id'  => '1'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => '',
            'subgrupo'  => '',
            'pregunta'  => 'Usa gorro',
            'tipo_encuesta_id'  => '1'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => '',
            'subgrupo'  => '',
            'pregunta'  => 'Usa mascarilla',
            'tipo_encuesta_id'  => '1'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => '',
            'subgrupo'  => '',
            'pregunta'  => 'Usa guantes',
            'tipo_encuesta_id'  => '1'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => '',
            'subgrupo'  => '',
            'pregunta'  => 'Usa desinfectante de manos',
            'tipo_encuesta_id'  => '1'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => '',
            'subgrupo'  => '',
            'pregunta'  => 'Uñas cortas y limpias',
            'tipo_encuesta_id'  => '1'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => '',
            'subgrupo'  => '',
            'pregunta'  => 'Uñas sin esmalte',
            'tipo_encuesta_id'  => '1'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => '',
            'subgrupo'  => '',
            'pregunta'  => 'Sin Maquillaje',
            'tipo_encuesta_id'  => '1'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => '',
            'subgrupo'  => '',
            'pregunta'  => 'Pelo Recogido',
            'tipo_encuesta_id'  => '1'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => '',
            'subgrupo'  => '',
            'pregunta'  => 'Sin Joyas',
            'tipo_encuesta_id'  => '1'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => '',
            'subgrupo'  => '',
            'pregunta'  => 'Sin colonia',
            'tipo_encuesta_id'  => '1'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => '',
            'subgrupo'  => '',
            'pregunta'  => 'Afeitado y sin bigote',
            'tipo_encuesta_id'  => '1'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => '',
            'subgrupo'  => '',
            'pregunta'  => 'Carné de Salud actualizado',
            'tipo_encuesta_id'  => '1'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => '',
            'subgrupo'  => '',
            'pregunta'  => 'Certificado de Vacuna Hepatitis A y B',
            'tipo_encuesta_id'  => '1'
        ));

        /*CONTROL DE MANIPULACIÓN DE ALIMENTOS E HIGIENE DE LOS COMEDORES DE LA PUCE*/
        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'MANIPULACIÓN DE ALIMENTOS',
            'subgrupo'  => '',
            'pregunta'  => 'Lavado de manos con técnica y frecuencia adecuadas',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'MANIPULACIÓN DE ALIMENTOS',
            'subgrupo'  => '',
            'pregunta'  => 'Lavado y desinfección de legumbres y frutas',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'MANIPULACIÓN DE ALIMENTOS',
            'subgrupo'  => '',
            'pregunta'  => 'Ensaladas se conservan frescas para servir en las próximas 4 horas',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'MANIPULACIÓN DE ALIMENTOS',
            'subgrupo'  => '',
            'pregunta'  => 'Alimentos preparados para servir en las proximas 4 horas, conservados a 65 ºC',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'MANIPULACIÓN DE ALIMENTOS',
            'subgrupo'  => '',
            'pregunta'  => 'Cocción de carnes o pescados a más de 90ºC',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'PRODUCTOS ALIMENTICIOS',
            'subgrupo'  => 'Carnicos',
            'pregunta'  => 'Borrego',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'PRODUCTOS ALIMENTICIOS',
            'subgrupo'  => 'Carnicos',
            'pregunta'  => 'Embutidos',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'PRODUCTOS ALIMENTICIOS',
            'subgrupo'  => 'Carnicos',
            'pregunta'  => 'Huevos',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'PRODUCTOS ALIMENTICIOS',
            'subgrupo'  => 'Carnicos',
            'pregunta'  => 'Mariscos',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'PRODUCTOS ALIMENTICIOS',
            'subgrupo'  => 'Carnicos',
            'pregunta'  => 'Pescado',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'PRODUCTOS ALIMENTICIOS',
            'subgrupo'  => 'Carnicos',
            'pregunta'  => 'Pollo y pavo',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'PRODUCTOS ALIMENTICIOS',
            'subgrupo'  => 'Carnicos',
            'pregunta'  => 'Res',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'PRODUCTOS ALIMENTICIOS',
            'subgrupo'  => 'Carnicos',
            'pregunta'  => 'Vísceras',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'PRODUCTOS ALIMENTICIOS',
            'subgrupo'  => 'Lácteos',
            'pregunta'  => 'Crema de leche',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'PRODUCTOS ALIMENTICIOS',
            'subgrupo'  => 'Lácteos',
            'pregunta'  => 'Leche',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'PRODUCTOS ALIMENTICIOS',
            'subgrupo'  => 'Lácteos',
            'pregunta'  => 'Queso',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'PRODUCTOS ALIMENTICIOS',
            'subgrupo'  => 'Lácteos',
            'pregunta'  => 'Yogur',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'PRODUCTOS ALIMENTICIOS',
            'subgrupo'  => 'Grasas',
            'pregunta'  => 'Aceite cocina',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'PRODUCTOS ALIMENTICIOS',
            'subgrupo'  => 'Grasas',
            'pregunta'  => 'Aceite ensalada',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'PRODUCTOS ALIMENTICIOS',
            'subgrupo'  => 'Grasas',
            'pregunta'  => 'Achiote',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'PRODUCTOS ALIMENTICIOS',
            'subgrupo'  => 'Grasas',
            'pregunta'  => 'Mantequilla',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'PRODUCTOS ALIMENTICIOS',
            'subgrupo'  => 'Grasas',
            'pregunta'  => 'Margarina',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'PRODUCTOS ALIMENTICIOS',
            'subgrupo'  => 'Grasas',
            'pregunta'  => 'Mayonesa',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'PRODUCTOS ALIMENTICIOS',
            'subgrupo'  => '',
            'pregunta'  => 'Vegetales (todos)',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'PRODUCTOS ALIMENTICIOS',
            'subgrupo'  => '',
            'pregunta'  => 'Frutas (todas)',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'PRODUCTOS ALIMENTICIOS',
            'subgrupo'  => '',
            'pregunta'  => 'Tubérculos: papa, zanahoria blanca, camote',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'PRODUCTOS ALIMENTICIOS',
            'subgrupo'  => '',
            'pregunta'  => 'Granos y Cereales (todos)',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'PRODUCTOS ALIMENTICIOS',
            'subgrupo'  => '',
            'pregunta'  => 'Enlatados (todos)',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'PRODUCTOS ALIMENTICIOS',
            'subgrupo'  => '',
            'pregunta'  => 'Aliños',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'PRODUCTOS ALIMENTICIOS',
            'subgrupo'  => '',
            'pregunta'  => 'Azúcares: blanca, morena, panela, chocolate',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'CONTROL DE PLAGAS',
            'subgrupo'  => '',
            'pregunta'  => 'Fumigación',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'CONTROL DE PLAGAS',
            'subgrupo'  => '',
            'pregunta'  => 'Desratización',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COCINA',
            'subgrupo'  => '',
            'pregunta'  => 'Asistentes de cocina',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COCINA',
            'subgrupo'  => '',
            'pregunta'  => 'Campana extractora de olores',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COCINA',
            'subgrupo'  => '',
            'pregunta'  => 'Canastilla escurridora de utensilios',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COCINA',
            'subgrupo'  => '',
            'pregunta'  => 'Cocina 1',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COCINA',
            'subgrupo'  => '',
            'pregunta'  => 'Cocina 2',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COCINA',
            'subgrupo'  => '',
            'pregunta'  => 'Horno',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COCINA',
            'subgrupo'  => '',
            'pregunta'  => 'Iluminación',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COCINA',
            'subgrupo'  => '',
            'pregunta'  => 'Mesones de trabajo',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COCINA',
            'subgrupo'  => '',
            'pregunta'  => 'Microondas',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COCINA',
            'subgrupo'  => '',
            'pregunta'  => 'Paredes',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COCINA',
            'subgrupo'  => '',
            'pregunta'  => 'Piso',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COCINA',
            'subgrupo'  => '',
            'pregunta'  => 'Plancha freidora (eléctrica)',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COCINA',
            'subgrupo'  => '',
            'pregunta'  => 'Protector de ventanas',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COCINA',
            'subgrupo'  => '',
            'pregunta'  => 'Purificador de agua',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COCINA',
            'subgrupo'  => '',
            'pregunta'  => 'Refrigerador',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COCINA',
            'subgrupo'  => '',
            'pregunta'  => 'Selfservice',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COCINA',
            'subgrupo'  => '',
            'pregunta'  => 'Tablas plásticas de colores',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COCINA',
            'subgrupo'  => '',
            'pregunta'  => 'Utensilios de cocina',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COCINA',
            'subgrupo'  => '',
            'pregunta'  => 'Ventanas',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COCINA',
            'subgrupo'  => '',
            'pregunta'  => 'Ventilación',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COCINA',
            'subgrupo'  => '',
            'pregunta'  => 'Ausencia de insectos y roedores',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COCINA',
            'subgrupo'  => '',
            'pregunta'  => 'Extintor de fuego con carga no caducada',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COCINA',
            'subgrupo'  => '',
            'pregunta'  => 'Tacho de basura con tapa, funda plástica y etiquetado',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COCINA',
            'subgrupo'  => '',
            'pregunta'  => 'Tanque de gas fuera del área de cocina',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COCINA',
            'subgrupo'  => '',
            'pregunta'  => 'Uso de desinfectantes para limpieza de pisos y paredes',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COCINA',
            'subgrupo'  => '',
            'pregunta'  => 'Uso de paños desinfectado para limpieza de mesones y equipos de cocina',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COMEDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Iluminación',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COMEDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Manteles',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COMEDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Mesas',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COMEDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Paredes',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COMEDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Piso',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COMEDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Protector de ventanas',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COMEDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Sillas',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COMEDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Ventanas',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COMEDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Ventilación',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COMEDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Ausencia de insectos y roedores',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COMEDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Tacho de basura con tapa, funda plástica y etiquetado',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COMEDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Uso de desinfectantes para limpieza de pisos y paredes',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COMEDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Uso de paños desinfectado para limpieza de mesones y equipos de cocina',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BODEGA DE ALIMENTOS',
            'subgrupo'  => '',
            'pregunta'  => 'Congelador 1',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BODEGA DE ALIMENTOS',
            'subgrupo'  => '',
            'pregunta'  => 'Congelador 2',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BODEGA DE ALIMENTOS',
            'subgrupo'  => '',
            'pregunta'  => 'Estanterías',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BODEGA DE ALIMENTOS',
            'subgrupo'  => '',
            'pregunta'  => 'Paredes',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BODEGA DE ALIMENTOS',
            'subgrupo'  => '',
            'pregunta'  => 'Piso',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BODEGA DE ALIMENTOS',
            'subgrupo'  => '',
            'pregunta'  => 'Protector de ventanas',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BODEGA DE ALIMENTOS',
            'subgrupo'  => '',
            'pregunta'  => 'Refrigerador 1',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BODEGA DE ALIMENTOS',
            'subgrupo'  => '',
            'pregunta'  => 'Refrigerador 2',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BODEGA DE ALIMENTOS',
            'subgrupo'  => '',
            'pregunta'  => 'Ventanas',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BODEGA DE ALIMENTOS',
            'subgrupo'  => '',
            'pregunta'  => 'Ventilación',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BODEGA DE ALIMENTOS',
            'subgrupo'  => '',
            'pregunta'  => 'Alimentos con: fecha de elaboración y vencimiento, registro sanitario y sello de calidad',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BODEGA DE ALIMENTOS',
            'subgrupo'  => '',
            'pregunta'  => 'Alimentos ordenados por fecha de caducidad',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BODEGA DE ALIMENTOS',
            'subgrupo'  => '',
            'pregunta'  => 'Congelador a -18º C',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BODEGA DE ALIMENTOS',
            'subgrupo'  => '',
            'pregunta'  => 'Estanterías a 15 cm del suelo',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BODEGA DE ALIMENTOS',
            'subgrupo'  => '',
            'pregunta'  => 'Refrigerador entre 1º a 4 º C',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BODEGA DE ALIMENTOS',
            'subgrupo'  => '',
            'pregunta'  => 'Uso de desinfectantes para limpieza de pisos y paredes',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BODEGA DE ALIMENTOS',
            'subgrupo'  => '',
            'pregunta'  => 'Uso de paños desechables y desinfectante para limpieza de equipos (estantería, refrigeradora, congelador)',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE VESTIDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Área',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE VESTIDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Cancel',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE VESTIDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Cortinas de ducha',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE VESTIDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Ducha 1',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE VESTIDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Ducha 2',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE VESTIDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Iluminación',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE VESTIDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Paredes',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE VESTIDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Piso',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE VESTIDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Protector de ventana',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE VESTIDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Ventana',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE VESTIDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Ventilación',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE VESTIDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Uso de desinfectante para limpieza del vestidor en general',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE ALMACENAJE DE MATERIALES DE LIMPIEZA',
            'subgrupo'  => '',
            'pregunta'  => 'Área',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE ALMACENAJE DE MATERIALES DE LIMPIEZA',
            'subgrupo'  => '',
            'pregunta'  => 'Paredes',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE ALMACENAJE DE MATERIALES DE LIMPIEZA',
            'subgrupo'  => '',
            'pregunta'  => 'Piso',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE ALMACENAJE DE MATERIALES DE LIMPIEZA',
            'subgrupo'  => '',
            'pregunta'  => 'Protector de ventana',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE ALMACENAJE DE MATERIALES DE LIMPIEZA',
            'subgrupo'  => '',
            'pregunta'  => 'Ventana',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE ALMACENAJE DE MATERIALES DE LIMPIEZA',
            'subgrupo'  => '',
            'pregunta'  => 'Ventilación',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE ALMACENAJE DE MATERIALES DE LIMPIEZA',
            'subgrupo'  => '',
            'pregunta'  => 'Estanterías',
            'tipo_encuesta_id'  => '2'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE ALMACENAJE DE MATERIALES DE LIMPIEZA',
            'subgrupo'  => '',
            'pregunta'  => 'Envases etiquetados',
            'tipo_encuesta_id'  => '2'
        ));

        /*CONTROL DE MANIPULACIÓN DE ALIMENTOS E HIGIENE DE LOS BARES DE LA PUCE*/
        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'MANIPULACIÓN DE ALIMENTOS',
            'subgrupo'  => '',
            'pregunta'  => 'Lavado de manos con técnica y frecuencia adecuadas',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'MANIPULACIÓN DE ALIMENTOS',
            'subgrupo'  => '',
            'pregunta'  => 'Lavado y desinfección de legumbres y frutas',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'MANIPULACIÓN DE ALIMENTOS',
            'subgrupo'  => '',
            'pregunta'  => 'Alimentos se conservan frescos para servir durante el día',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'PRODUCTOS ALIMENTICIOS',
            'subgrupo'  => '',
            'pregunta'  => 'Snacks',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'PRODUCTOS ALIMENTICIOS',
            'subgrupo'  => '',
            'pregunta'  => 'Chocolates',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'PRODUCTOS ALIMENTICIOS',
            'subgrupo'  => '',
            'pregunta'  => 'Galletas',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'PRODUCTOS ALIMENTICIOS',
            'subgrupo'  => '',
            'pregunta'  => 'Helados',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'PRODUCTOS ALIMENTICIOS',
            'subgrupo'  => '',
            'pregunta'  => 'Bebidas azucaradas',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'PRODUCTOS ALIMENTICIOS',
            'subgrupo'  => '',
            'pregunta'  => 'Bebidas calientes',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'PRODUCTOS ALIMENTICIOS',
            'subgrupo'  => '',
            'pregunta'  => 'Bebidas lácteas',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'PRODUCTOS ALIMENTICIOS',
            'subgrupo'  => '',
            'pregunta'  => 'Productos procesados',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'CONTROL DE PLAGAS',
            'subgrupo'  => '',
            'pregunta'  => 'Fumigación',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'CONTROL DE PLAGAS',
            'subgrupo'  => '',
            'pregunta'  => 'Desratización',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BAR',
            'subgrupo'  => '',
            'pregunta'  => 'Asistentes de cocina',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BAR',
            'subgrupo'  => '',
            'pregunta'  => 'Bandejas plásticas',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BAR',
            'subgrupo'  => '',
            'pregunta'  => 'Iluminación',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BAR',
            'subgrupo'  => '',
            'pregunta'  => 'Mesones de trabajo',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BAR',
            'subgrupo'  => '',
            'pregunta'  => 'Microondas',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BAR',
            'subgrupo'  => '',
            'pregunta'  => 'Paredes',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BAR',
            'subgrupo'  => '',
            'pregunta'  => 'Piso',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BAR',
            'subgrupo'  => '',
            'pregunta'  => 'Refrigerador',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BAR',
            'subgrupo'  => '',
            'pregunta'  => 'Selfservice',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BAR',
            'subgrupo'  => '',
            'pregunta'  => 'Utensilios de cocina',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BAR',
            'subgrupo'  => '',
            'pregunta'  => 'Ventanas',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BAR',
            'subgrupo'  => '',
            'pregunta'  => 'Ventilación',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BAR',
            'subgrupo'  => '',
            'pregunta'  => 'Ausencia de insectos y roedores',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BAR',
            'subgrupo'  => '',
            'pregunta'  => 'Extintor de fuego con carga no caducada',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BAR',
            'subgrupo'  => '',
            'pregunta'  => 'Tacho de basura con tapa, funda plástica y etiquetado',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BAR',
            'subgrupo'  => '',
            'pregunta'  => 'Uso de desinfectantes para limpieza de pisos y paredes',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE BAR',
            'subgrupo'  => '',
            'pregunta'  => 'Uso de paños desinfectado para limpieza de mesones y equipos de cocina',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COMEDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Iluminación',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COMEDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Mesas',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COMEDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Paredes',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COMEDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Piso',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COMEDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Protector de ventanas',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COMEDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Sillas',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COMEDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Ventanas',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COMEDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Ventilación',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COMEDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Ausencia de insectos y roedores',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COMEDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Tacho de basura con tapa, funda plástica y etiquetado',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COMEDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Uso de desinfectantes para limpieza de pisos y paredes',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE COMEDOR',
            'subgrupo'  => '',
            'pregunta'  => 'Uso de paños desinfectado para limpieza de mesones y equipos de cocina',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE ALMACENAJE DE MATERIALES DE LIMPIEZA',
            'subgrupo'  => '',
            'pregunta'  => 'Área',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE ALMACENAJE DE MATERIALES DE LIMPIEZA',
            'subgrupo'  => '',
            'pregunta'  => 'Paredes',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE ALMACENAJE DE MATERIALES DE LIMPIEZA',
            'subgrupo'  => '',
            'pregunta'  => 'Piso',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE ALMACENAJE DE MATERIALES DE LIMPIEZA',
            'subgrupo'  => '',
            'pregunta'  => 'Protector de ventana',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE ALMACENAJE DE MATERIALES DE LIMPIEZA',
            'subgrupo'  => '',
            'pregunta'  => 'Ventana',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE ALMACENAJE DE MATERIALES DE LIMPIEZA',
            'subgrupo'  => '',
            'pregunta'  => 'Ventilación',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE ALMACENAJE DE MATERIALES DE LIMPIEZA',
            'subgrupo'  => '',
            'pregunta'  => 'Estanterías',
            'tipo_encuesta_id'  => '3'
        ));

        EncabezadoPreguntasEncuestas::create(array(
            'encabezado'  => 'ÁREA DE ALMACENAJE DE MATERIALES DE LIMPIEZA',
            'subgrupo'  => '',
            'pregunta'  => 'Envases etiquetados',
            'tipo_encuesta_id'  => '3'
        ));



    }
}