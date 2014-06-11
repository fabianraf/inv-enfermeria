<?php
class AlimentosBaresTableSeeder extends Seeder {
public function run()
    {
        // !!! All existing users are deleted !!!
        DB::table('alimentos_bares')->delete();

        AlimentoBares::create(array(
            'nombre'  => 'Banchis',
            'porciones' => '1 funda pequeña',
            'tipo_de_alimento_bares_id' => '1',            
        ));


        AlimentoBares::create(array(
            'nombre'  => 'Cueritos',
            'porciones' => '1 funda pequeña',
            'tipo_de_alimento_bares_id' => '1',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Jalapeños',
            'porciones' => '1 funda pequeña',
            'tipo_de_alimento_bares_id' => '1',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Lays artesanales',
            'porciones' => '1 funda pequeña',
            'tipo_de_alimento_bares_id' => '1',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Nachos',
            'porciones' => '1 funda pequeña',
            'tipo_de_alimento_bares_id' => '1',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Papas fritas (funda)',
            'porciones' => '1 funda pequeña',
            'tipo_de_alimento_bares_id' => '1',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Platanitos',
            'porciones' => '1 funda pequeña',
            'tipo_de_alimento_bares_id' => '1',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Rufles',
            'porciones' => '1 funda pequeña',
            'tipo_de_alimento_bares_id' => '1',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Tornaditos',
            'porciones' => '1 funda pequeña',
            'tipo_de_alimento_bares_id' => '1',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Tortolines',
            'porciones' => '1 funda pequeña',
            'tipo_de_alimento_bares_id' => '1',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Tostitos',
            'porciones' => '1 funda pequeña',
            'tipo_de_alimento_bares_id' => '1',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Hanuta',
            'porciones' => '1 unidad',
            'tipo_de_alimento_bares_id' => '2',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Milkyway',
            'porciones' => '1 unidad',
            'tipo_de_alimento_bares_id' => '2',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Twix',
            'porciones' => '1 unidad',
            'tipo_de_alimento_bares_id' => '2',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Nutella',
            'porciones' => '1 unidad',
            'tipo_de_alimento_bares_id' => '2',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Manicho',
            'porciones' => '1 unidad',
            'tipo_de_alimento_bares_id' => '2',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Crunch',
            'porciones' => '1 unidad',
            'tipo_de_alimento_bares_id' => '2',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Kínder',
            'porciones' => '1 unidad',
            'tipo_de_alimento_bares_id' => '2',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Chocochips',
            'porciones' => '1 paquete pequeño',
            'tipo_de_alimento_bares_id' => '3',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Galapaguitos',
            'porciones' => '1 paquete pequeño',
            'tipo_de_alimento_bares_id' => '3',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Galletas amor',
            'porciones' => '1 paquete pequeño',
            'tipo_de_alimento_bares_id' => '3',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Galletas coco',
            'porciones' => '1 paquete pequeño',
            'tipo_de_alimento_bares_id' => '3',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Galletas festival',
            'porciones' => '1 paquete pequeño',
            'tipo_de_alimento_bares_id' => '3',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Galletas Konitos',
            'porciones' => '1 paquete pequeño',
            'tipo_de_alimento_bares_id' => '3',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Galletas maría',
            'porciones' => '1 paquete pequeño',
            'tipo_de_alimento_bares_id' => '3',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Galletas muecas',
            'porciones' => '1 paquete pequeño',
            'tipo_de_alimento_bares_id' => '3',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Oreo',
            'porciones' => '1 paquete pequeño',
            'tipo_de_alimento_bares_id' => '3',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Casero',
            'porciones' => '1 unidad',
            'tipo_de_alimento_bares_id' => '4',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Chocoempastado',
            'porciones' => '1 unidad',
            'tipo_de_alimento_bares_id' => '4',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Corneto',
            'porciones' => '1 unidad',
            'tipo_de_alimento_bares_id' => '4',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Cremositos',
            'porciones' => '1 unidad',
            'tipo_de_alimento_bares_id' => '4',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Donuts',
            'porciones' => '1 unidad',
            'tipo_de_alimento_bares_id' => '4',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Frutare',
            'porciones' => '1 unidad',
            'tipo_de_alimento_bares_id' => '4',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Gemelos',
            'porciones' => '1 unidad',
            'tipo_de_alimento_bares_id' => '4',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Gigante',
            'porciones' => '1 unidad',
            'tipo_de_alimento_bares_id' => '4',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Magnum',
            'porciones' => '1 unidad',
            'tipo_de_alimento_bares_id' => '4',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Miniyog',
            'porciones' => '1 unidad',
            'tipo_de_alimento_bares_id' => '4',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Polito',
            'porciones' => '1 unidad',
            'tipo_de_alimento_bares_id' => '4',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Sanduche',
            'porciones' => '1 unidad',
            'tipo_de_alimento_bares_id' => '4',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Vasito',
            'porciones' => '1 unidad',
            'tipo_de_alimento_bares_id' => '4',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Ciclon',
            'porciones' => '1 botella',
            'tipo_de_alimento_bares_id' => '5',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Clipton',
            'porciones' => '1 botella',
            'tipo_de_alimento_bares_id' => '5',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Fuzetea',
            'porciones' => '1 botella',
            'tipo_de_alimento_bares_id' => '5',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Gaseosas (coca cola, fanta, sprite, fiora fresa)',
            'porciones' => '1 botella pequeña',
            'tipo_de_alimento_bares_id' => '5',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Gatorade',
            'porciones' => '1 botella',
            'tipo_de_alimento_bares_id' => '5',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Jugo del valle',
            'porciones' => '1 unidad',
            'tipo_de_alimento_bares_id' => '5',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Jugo pulp',
            'porciones' => '1 unidad',
            'tipo_de_alimento_bares_id' => '5',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Monster',
            'porciones' => '1 unidad',
            'tipo_de_alimento_bares_id' => '5',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Natura',
            'porciones' => '1 unidad',
            'tipo_de_alimento_bares_id' => '5',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Nestea',
            'porciones' => '1 unidad',
            'tipo_de_alimento_bares_id' => '5',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'V220',
            'porciones' => '1 unidad',
            'tipo_de_alimento_bares_id' => '5',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Agua aromática',
            'porciones' => '1 taza',
            'tipo_de_alimento_bares_id' => '6',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Café con crema batida y canela',
            'porciones' => '1 taza',
            'tipo_de_alimento_bares_id' => '6',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Capuchino vainilla',
            'porciones' => '1 taza',
            'tipo_de_alimento_bares_id' => '6',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Chocolate con crema y canela',
            'porciones' => '1 taza',
            'tipo_de_alimento_bares_id' => '6',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Chocolate en leche',
            'porciones' => '1 taza',
            'tipo_de_alimento_bares_id' => '6',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Milo',
            'porciones' => '1 taza',
            'tipo_de_alimento_bares_id' => '6',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Mokaccino',
            'porciones' => '1 taza',
            'tipo_de_alimento_bares_id' => '6',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Nescafé',
            'porciones' => '1 taza',
            'tipo_de_alimento_bares_id' => '6',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Avena alpina',
            'porciones' => '1 unidad',
            'tipo_de_alimento_bares_id' => '7',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Leche de soya',
            'porciones' => '1 unidad',
            'tipo_de_alimento_bares_id' => '7',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Nesquik',
            'porciones' => '1 unidad',
            'tipo_de_alimento_bares_id' => '7',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Toni mix',
            'porciones' => '1 onza',
            'tipo_de_alimento_bares_id' => '7',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Yogurmet',
            'porciones' => '1 unidad',
            'tipo_de_alimento_bares_id' => '7',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Alitas BBQ',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Arroz con mariscos',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Arroz con pollo',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Brownie',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Burritos',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Canguil',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Ceviche mixto',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Cevichochos',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Chaulafan',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Cheescake',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Chifles',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Choripan',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Churrasco',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Cono mixto',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Crepes de banano flambeado',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Crepes de berenjena',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Crepes de boloñesa',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Crepes de carne al vino',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Crepes de frutillas flambeadas',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Crepes de jamón y queso',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Crepes de jamón, queso y huevo',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Crepes de jamón, queso y salsa de champiñones',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Crepes de mozzarella y salsa de champiñones',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Crepes de nutella',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Crepes de pescado y camarón',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Crepes de pollo al curry',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Crepes de pollo en salsa blanca',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Crepes de pollo en salsa de champiñones',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Crepes de tocino, huevo, cebolla y queso',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Crepes de tomate, mozzarella y albahaca',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Crunches',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Cuero',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Empanada chilena',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Empanada colombiana',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Empanada de verde',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Empanada de viento',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Ensalada de atún, mayonesa, apio, pimiento, lechuga y tomate',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Ensalada de frutas',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Ensalada de pasta al pesto, pollo salteado, lechuga y tomate',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Ensalada de pollo, pavo, queso mozzarella y cheddar, aguacate, lechuga, 
                            tomate y cebolla morada',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Ensalada de tocino, jamón, queso, pollo, tomate y lechuga',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Ensalada de tomate, mozzarella, aceite de oliva y albahaca',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Ensalada Santa fé (queso mozzarella y cheddar, lechuga, tomate, cebolla, 
                            culantro, aguacate, frejol, maíz dulce, tortilla y BBQ',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Ensalada vegetariana',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Filete de pollo a la plancha',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Filete de res a la plancha',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Fritada',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Hamburguesa con queso',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Hot dog',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Mote con chicharrón',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Nachos con queso',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Pan de chocolate',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Papas fritas',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Pastel de chocolate',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Pescado a la plancha',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Pescado apanado',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Pescado en salsa de mariscos',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Pizza',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Pizza de jamón y champiñones',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Pizza de jamón y queso',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Pizza de jamón y salami',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Pizza de queso',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Pizza de salami',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Pollo al horno',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Pollo en salsa de champiñones',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Pollo a la mostaza y miel (tocino, queso cheddar, lechuga, tomate, cebolla, 
                            mostaza y miel)',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Quesadillas',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Quiche de champiñones',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Quiche de jamón, queso crema y huevo',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Quimbolito',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Salchipapas',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Sánduche de queso y champiñones',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Sánduche Amelie (pollo, lechuga y salsa de orégano ',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Sánduche Beef especial (roast beef, queso cheddar y mozzarella, 
                            hongos y cebolla)',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Sánduche Club (pollo, jamón, queso, huevo, lechuga y tomate',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Sánduche Croq (jamón, queso y huevo)',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Sánduche de jamón y queso',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Sánduche de pernil',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Sanduche de pollo',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Sánduche de pollo carbonara (tocino, pollo, queso mozzarella y hongos)',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Sánduche de pollo monterrey (pollo, tocino, queso cheddar y culantro)',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Sánduche de pollo, jamón, queso y huevo',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Sanduche de tomate y mozzarella',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Sánduche Notre (lomo, queso, cebolla y pimiento) ',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Sánduche Philly roast beef (roast beef, queso mozzarella y suizo, cebolla 
                            y pimiento)',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Sánduche de pollo con mostaza y miel (pollo, tocino, queso cheddar, lechuga, 
                            tomate y cebolla)',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Seco de carne',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Seco de pollo',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Spaguetti al pesto',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Spaguetti boloñesa',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Spaguetti carbonara',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Spaguetti de pollo y champiñones',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Torta de maduro',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Torta de naranja',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Torta de zanahoria',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Tostado',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));

        AlimentoBares::create(array(
            'nombre'  => 'Tres leches',
            'porciones' => '',
            'tipo_de_alimento_bares_id' => '8',            
        ));


    }
}