<?php
class EtiquetasTableSeeder extends Seeder {
public function run()
	{
		DB::table('etiquetas')->delete();

        //Control de manipulación de alimentos e higiene de los comedores de la PUCE - Manipulacion alimentos
        $etiquetas = ["Usa uniforme completo", "Usa mandil limpio", "Usa gorro", "Usa mascarilla", "Usa guantes",
                        "Usa desinfectante de manos", "Uñas cortas y limpias", "Uñas sin esmalte", "Sin maquillaje",
                        "Pelo recogido", "Sin joyas", "Sin colonia", "Afeitado y sin bigote", "Carné de Salud actualizado",
                        "Certificado de Vacuna Hepatitis A", "Certificado de Vacuna Hepatitis B", ];
        foreach($etiquetas as $key => $etiqueta){
            Etiqueta::create(array(
                'titulo'  => $etiqueta,
                'identificador' => 'encuesta_control_higiene_personal',
                'posicion' => $key
            ));
        }


        //Control de manipulación de alimentos e higiene de los comedores de la PUCE
         $etiquetas = ["Lavado de manos con técnica y frecuencia adecuadas", "Lavado y desinfección de legumbres y frutas",
                        "Ensaladas se conservan frescas para servir en las próximas 4 horas", "Alimentos preparados para servir en las próximas 4 horas, conservados a 65ºC",
                        "Cocción de carnes o pescados a más de 90ºC"];

        foreach($etiquetas as $key => $etiqueta){
            Etiqueta::create(array(
                'titulo'  => $etiqueta,
                'identificador' => 'emc_manipulacion_alimentos',
                'posicion' => $key
            ));
        }
       
        //Control de manipulación de alimentos e higiene de los comedores de la PUCE - Productos Alimenticios
        $etiquetas = ["Borrego", "Embutidos", "Huevos", "Mariscos", "Pescado", "Pollo y pavo", "Res", 
                    "Vísceras", "Crema de leche", "Leche", "Queso", "Yogur", "Aceite cocina", "Aceite ensalada",
                    "Achiote", "Mantequilla", "Margarina", "Mayonesa", "Vegetales (todos)", "Frutas (todas)", "Tubérculos: papa, zanahoria balnca, camote",
                    "Granos y Cereales (todos)", "Enlatados (todos)", "Aliños", "Azúcares: blanca, morena, panela, chocolate"];
        foreach($etiquetas as $key => $etiqueta){
            Etiqueta::create(array(
                'titulo'  => $etiqueta,
                'identificador' => 'emc_productos_alimenticios',
                'posicion' => $key
            ));
        }

        //Control de manipulación de alimentos e higiene de los comedores de la PUCE - Control Plagas
        $etiquetas = ["Fumigación", "Desratización"];
        foreach($etiquetas as $key => $etiqueta){
            Etiqueta::create(array(
                'titulo'  => $etiqueta,
                'identificador' => 'emc_control_plagas',
                'posicion' => $key
            ));
        }        

        //Control de manipulación de alimentos e higiene de los comedores de la PUCE - Area Cocina 1
        $etiquetas = ["Asistentes de cocina", "Campana extractora de olores", "Canastilla escurridora de utensilios",
                        "Cocina 1", "Cocina 2", "Horno", "Iluminación", "Mesones de trabajo", "Microondas", "Paredes",
                        "Piso", "Plancha freidora (eléctrica)", "Protector de ventanas", "Purificador de agua", 
                        "Refrigerador", "Selfservice", "Tablas plásticas de colores",
                        "Utensilios de cocina", "Ventanas", "Ventilación"];
        foreach($etiquetas as $key => $etiqueta){
            Etiqueta::create(array(
                'titulo'  => $etiqueta,
                'identificador' => 'emc_area_cocina_1',
                'posicion' => $key
            ));
        }     

        //Control de manipulación de alimentos e higiene de los comedores de la PUCE - Area Cocina 2
        $etiquetas = ["Ausencia de insectos y roedores", "Extintor de fuego con carga no caducada", "Tacho de basura con tapa, funda plástica y etiquetado",
                        "Tanque de gas fuera del área de cocina", "Uso de desinfectantes para limpieza de pisos y paredes", 
                        "Uso de paños desinfectado para limpieza de mesones y equipos de cocina"];
        foreach($etiquetas as $key => $etiqueta){
            Etiqueta::create(array(
                'titulo'  => $etiqueta,
                'identificador' => 'emc_area_cocina_2',
                'posicion' => $key
            ));
        }        

        //Control de manipulación de alimentos e higiene de los comedores de la PUCE - Area Comedor 1
        $etiquetas = ["Iluminación", "Manteles", "Mesas", "Paredes", "Piso", "Protector de ventanas", "Sillas",
                        "Ventanas", "Ventilación"];
        foreach($etiquetas as $key => $etiqueta){
            Etiqueta::create(array(
                'titulo'  => $etiqueta,
                'identificador' => 'emc_area_comedor_1',
                'posicion' => $key
            ));
        }

        //Control de manipulación de alimentos e higiene de los comedores de la PUCE - Area Comedor 2
        $etiquetas = ["Ausencia de insectos y roedores", "Tacho de basura con tapa, funda plástica y etiquetado", 
                        "Uso de desinfectantes para limpieza de pisos y paredes", "Uso de paños desinfectado para limpieza de mesones y equipos de cocina"];
        foreach($etiquetas as $key => $etiqueta){
            Etiqueta::create(array(
                'titulo'  => $etiqueta,
                'identificador' => 'emc_area_comedor_2',
                'posicion' => $key
            ));
        }

        //Control de manipulación de alimentos e higiene de los comedores de la PUCE - AREA DE BODEGA DE ALIMENTOS 1
        $etiquetas = ["Congelador 1", "Congelador 2", "Estanterias", "Paredes", "Piso", "Protector de ventanas",
                        "Refrigerador 1", "Refrigerador 2", "Ventanas", "Ventilación"];
        foreach($etiquetas as $key => $etiqueta){
            Etiqueta::create(array(
                'titulo'  => $etiqueta,
                'identificador' => 'emc_area_bodega_alimentos_1',
                'posicion' => $key
            ));
        }

        //Control de manipulación de alimentos e higiene de los comedores de la PUCE - AREA DE BODEGA DE ALIMENTOS 2
        $etiquetas = ["Alimentos con: fecha de elaboración y vencimiento, registro sanitario y sello de calidad", "Alimentos ordenados por fecha de caducidad",
                        "Congelador a -18° C", "Congelador a 15 cm del suelo", "Refrigerador entre 1° a 4° C", "Uso de desinfectantes para limpieza de pisos y paredes",
                        "Uso de paños desechables y desinfectantes para limpieza de equipos (estantería, refrigeradora, congelador)"];
        foreach($etiquetas as $key => $etiqueta){
            Etiqueta::create(array(
                'titulo'  => $etiqueta,
                'identificador' => 'emc_area_bodega_alimentos_2',
                'posicion' => $key
            ));
        }

        //Control de manipulación de alimentos e higiene de los comedores de la PUCE - AREA DE VESTIDOR 1
        $etiquetas = ["Area", "Cancel", "Cortinas de ducha", "Ducha 1", "Ducha 2", "Iluminación", "Paredes", "Piso", 
                        "Protector de ventana", "Ventana", "Ventilación"];
        foreach($etiquetas as $key => $etiqueta){
            Etiqueta::create(array(
                'titulo'  => $etiqueta,
                'identificador' => 'emc_area_vestidor_1',
                'posicion' => $key
            ));
        }

        //Control de manipulación de alimentos e higiene de los comedores de la PUCE - AREA DE VESTIDOR 2
        $etiquetas = ["Uso de desinfectante para limpieza del vestidor en general"];
        foreach($etiquetas as $key => $etiqueta){
            Etiqueta::create(array(
                'titulo'  => $etiqueta,
                'identificador' => 'emc_area_vestidor_2',
                'posicion' => $key
            ));
        }

        //Control de manipulación de alimentos e higiene de los comedores de la PUCE - AREA DE ALMACENAJE DE MATERIALES DE LIMPIEZA 1
        $etiquetas = ["Area", "Paredes", "Piso", "Protector de ventana", "Ventana", "Ventilación", "Estanterias"];
        foreach($etiquetas as $key => $etiqueta){
            Etiqueta::create(array(
                'titulo'  => $etiqueta,
                'identificador' => 'emc_area_almacenaje_materiales_limpieza_1',
                'posicion' => $key
            ));
        }

        //Control de manipulación de alimentos e higiene de los comedores de la PUCE - AREA DE ALMACENAJE DE MATERIALES DE LIMPIEZA 2
        $etiquetas = ["Envases etiquetados"];
        foreach($etiquetas as $key => $etiqueta){
            Etiqueta::create(array(
                'titulo'  => $etiqueta,
                'identificador' => 'emc_area_almacenaje_materiales_limpieza_2',
                'posicion' => $key
            ));
        }

        //Control de manipulación de alimentos e higiene de los bares de la PUCE - Manipulacion alimentos
        $etiquetas = ["Lavado de manos con técnica y frecuencia adecuadas", "Lavado y desinfección de legumbres y frutas",
                    "Alimentos se conservan frescos para servir durante el día"];
        foreach($etiquetas as $key => $etiqueta){
            Etiqueta::create(array(
                'titulo'  => $etiqueta,
                'identificador' => 'emb_manipulacion_alimentos',
                'posicion' => $key
            ));
        }

        //Control de manipulación de alimentos e higiene de los bares de la PUCE - Productos Alimenticios
        $etiquetas = ["Snacks", "Chocolates", "Galletas", "Helados", "Bebidas azucaradas", "Bebidas calientes",
                        "Bebidas lácteas", "Productos procesados"];
        foreach($etiquetas as $key => $etiqueta){
            Etiqueta::create(array(
                'titulo'  => $etiqueta,
                'identificador' => 'emb_productos_alimenticios',
                'posicion' => $key
            ));
        }

        //Control de manipulación de alimentos e higiene de los bares de la PUCE - Control de Plagas
        $etiquetas = ["Fumigación", "Desratización"];
        foreach($etiquetas as $key => $etiqueta){
            Etiqueta::create(array(
                'titulo'  => $etiqueta,
                'identificador' => 'emb_control_plagas',
                'posicion' => $key
            ));
        }

        //Control de manipulación de alimentos e higiene de los bares de la PUCE - Area del Bar 1
        $etiquetas = ["Asistentes de cocina", "Campana extractora de olores", "Canastilla escurridora de utensilios",
                        "Cocina 1", "Cocina 2", "Horno", "Iluminación", "Mesones de trabajo", "Microondas", "Paredes", 
                        "Piso", "Plancha freidora (eléctrica)", "Protector de ventanas", "Purificador de agua", "Refrigerador",
                        "Selfservice", "Tablas plásticas de colores", "Utensilios de cocina", "Ventanas", "Ventilación"];
        foreach($etiquetas as $key => $etiqueta){
            Etiqueta::create(array(
                'titulo'  => $etiqueta,
                'identificador' => 'emb_area_bar_1',
                'posicion' => $key
            ));
        }

        //Control de manipulación de alimentos e higiene de los bares de la PUCE - Area del Bar 2
        $etiquetas = ["Ausencia de insectos y roedores", "Extintor de fuego con carga no caducada", "Tacho de basura con tapa, funda plástica y etiquetado",
                        "Tanque de gas fuera del área de cocina", "Uso de desinfectantes para limpieza de pisos y paredes",
                        "Uso de paños desinfectado para limpieza de mesones y equipos de cocina"];
        foreach($etiquetas as $key => $etiqueta){
            Etiqueta::create(array(
                'titulo'  => $etiqueta,
                'identificador' => 'emb_area_bar_2',
                'posicion' => $key
            ));
        }

        //Control de manipulación de alimentos e higiene de los bares de la PUCE - Area del Comedor 1
        $etiquetas = ["Iluminación", "Mesas", "Paredes", "Piso", "Protector de ventanas", "Sillas",
                        "Ventanas", "Ventilación"];
        foreach($etiquetas as $key => $etiqueta){
            Etiqueta::create(array(
                'titulo'  => $etiqueta,
                'identificador' => 'emb_area_comedor_1',
                'posicion' => $key
            ));
        }

        //Control de manipulación de alimentos e higiene de los bares de la PUCE - Area del Comedor 2
        $etiquetas = ["Ausencia de insectos y roedores", "Tacho de basura con tapa, funda plástica y etiquetado", 
                        "Uso de desinfectantes para limpieza de pisos y paredes", "Uso de paños desinfectado para limpieza de mesones y equipos de cocina"];
        foreach($etiquetas as $key => $etiqueta){
            Etiqueta::create(array(
                'titulo'  => $etiqueta,
                'identificador' => 'emb_area_comedor_2',
                'posicion' => $key
            ));
        }

        //Control de manipulación de alimentos e higiene de los bares de la PUCE - AREA DE ALMACENAJE DE MATERIALES DE LIMPIEZA 1
        $etiquetas = ["Area", "Paredes", "Piso", "Protector de ventana", "Ventana", "Ventilación", "Estanterias"];
        foreach($etiquetas as $key => $etiqueta){
            Etiqueta::create(array(
                'titulo'  => $etiqueta,
                'identificador' => 'emb_area_almacenaje_materiales_limpieza_1',
                'posicion' => $key
            ));
        }

        //Control de manipulación de alimentos e higiene de los bares de la PUCE - AREA DE ALMACENAJE DE MATERIALES DE LIMPIEZA 2
        $etiquetas = ["Envases etiquetados"];
        foreach($etiquetas as $key => $etiqueta){
            Etiqueta::create(array(
                'titulo'  => $etiqueta,
                'identificador' => 'emb_area_almacenaje_materiales_limpieza_2',
                'posicion' => $key
            ));
        }


	}

}
