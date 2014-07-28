<?php
class AlimentosTableSeeder extends Seeder {
public function run()
    {
        // !!! All existing rows are deleted !!!
        DB::table('alimentos')->delete();

        Alimento::create(array(
            'nombre'  => 'Arroz',
            'porciones' => '½ taza',
            'tipo_de_alimento_id' => '1',           
        ));

        Alimento::create(array(
            'nombre'  => 'Canguil',
            'porciones' => '1 taza',
            'tipo_de_alimento_id' => '1',      
        ));

        Alimento::create(array(
            'nombre'  => 'Choclo desgranado',
            'porciones' => '1 taza',
            'tipo_de_alimento_id' => '1',
        ));

        Alimento::create(array(
            'nombre'  => 'Choclo en tuza',
            'porciones' => '1 unidad mediana',
            'tipo_de_alimento_id' => '1',
        ));

        Alimento::create(array(
            'nombre'  => 'Maíz tostado',
            'porciones' => '½ taza',
            'tipo_de_alimento_id' => '1',
        ));

        Alimento::create(array(
            'nombre'  => 'Pan de dulce',
            'porciones' => '1 unidad mediana',
            'tipo_de_alimento_id' => '1',
        ));

        Alimento::create(array(
            'nombre'  => 'Pan de sal',
            'porciones' => '1 unidad mediana',
            'tipo_de_alimento_id' => '1',
        ));

        Alimento::create(array(
            'nombre'  => 'Pan integral',
            'porciones' => '1 unidad mediana',
            'tipo_de_alimento_id' => '1',
        ));

        Alimento::create(array(
            'nombre'  => 'Supan',
            'porciones' => '2 rebanadas',
            'tipo_de_alimento_id' => '1',
        ));

        Alimento::create(array(
            'nombre'  => 'Tallarín',
            'porciones' => '½ taza',
            'tipo_de_alimento_id' => '1',
        ));

        Alimento::create(array(
            'nombre'  => 'Tostadas medianas',
            'porciones' => '4 unidades',
            'tipo_de_alimento_id' => '1',
        ));

        Alimento::create(array(
            'nombre'  => 'Papa',
            'porciones' => '1 unidad pequeña',
            'tipo_de_alimento_id' => '2',
        ));

        Alimento::create(array(
            'nombre'  => 'Remolacha',
            'porciones' => '½ taza',
            'tipo_de_alimento_id' => '2',
        ));

        Alimento::create(array(
            'nombre'  => 'Yuca',
            'porciones' => '1 unidad pequeña',
            'tipo_de_alimento_id' => '2',
        ));

        Alimento::create(array(
            'nombre'  => 'Zanahoria',
            'porciones' => '½ taza',
            'tipo_de_alimento_id' => '2',
        ));

        Alimento::create(array(
            'nombre'  => 'Zanahoria blanca',
            'porciones' => '½ taza',
            'tipo_de_alimento_id' => '2',
        ));

        Alimento::create(array(
            'nombre'  => 'Acelga',
            'porciones' => '½ taza',
            'tipo_de_alimento_id' => '3',
        ));

        Alimento::create(array(
            'nombre'  => 'Brócoli',
            'porciones' => '½ taza',
            'tipo_de_alimento_id' => '3',
        ));

        Alimento::create(array(
            'nombre'  => 'Espinaca',
            'porciones' => '½ taza',
            'tipo_de_alimento_id' => '3',
        ));

        Alimento::create(array(
            'nombre'  => 'Lechuga',
            'porciones' => '½ taza',
            'tipo_de_alimento_id' => '3',
        ));

        Alimento::create(array(
            'nombre'  => 'Vainitas',
            'porciones' => '¼ de taza',
            'tipo_de_alimento_id' => '3',
        ));

        Alimento::create(array(
            'nombre'  => 'Champiñones',
            'porciones' => '½ taza',
            'tipo_de_alimento_id' => '4',
        ));

        Alimento::create(array(
            'nombre'  => 'Col morada',
            'porciones' => '½ taza',
            'tipo_de_alimento_id' => '4',
        ));

        Alimento::create(array(
            'nombre'  => 'Pepinillo',
            'porciones' => '½ taza',
            'tipo_de_alimento_id' => '4',
        ));

        Alimento::create(array(
            'nombre'  => 'Pimientos',
            'porciones' => '½ taza',
            'tipo_de_alimento_id' => '4',
        ));

        Alimento::create(array(
            'nombre'  => 'Rábano',
            'porciones' => '½ taza',
            'tipo_de_alimento_id' => '4',
        ));

        Alimento::create(array(
            'nombre'  => 'Tomate riñón',
            'porciones' => '½ taza',
            'tipo_de_alimento_id' => '4',
        ));

        Alimento::create(array(
            'nombre'  => 'Durazno',
            'porciones' => '1 unidad',
            'tipo_de_alimento_id' => '5',
        ));

        Alimento::create(array(
            'nombre'  => 'Frutillas',
            'porciones' => '½ taza',
            'tipo_de_alimento_id' => '5',
        ));

        Alimento::create(array(
            'nombre'  => 'Mandarina',
            'porciones' => '1 unidad',
            'tipo_de_alimento_id' => '5',
        ));

        Alimento::create(array(
            'nombre'  => 'Mango',
            'porciones' => '1 unidad',
            'tipo_de_alimento_id' => '5',
        ));

        Alimento::create(array(
            'nombre'  => 'Manzana',
            'porciones' => '1 unidad',
            'tipo_de_alimento_id' => '5',
        ));

        Alimento::create(array(
            'nombre'  => 'Melón',
            'porciones' => '½ taza',
            'tipo_de_alimento_id' => '5',
        ));

        Alimento::create(array(
            'nombre'  => 'Naranja',
            'porciones' => '1 unidad',
            'tipo_de_alimento_id' => '5',
        ));

        Alimento::create(array(
            'nombre'  => 'Orito',
            'porciones' => '1 unidad',
            'tipo_de_alimento_id' => '5',
        ));

        Alimento::create(array(
            'nombre'  => 'Papaya',
            'porciones' => '½ taza',
            'tipo_de_alimento_id' => '5',
        ));

        Alimento::create(array(
            'nombre'  => 'Plátano',
            'porciones' => '1 unidad',
            'tipo_de_alimento_id' => '5',
        ));

        Alimento::create(array(
            'nombre'  => 'Aguacate',
            'porciones' => '¼ de unidad',
            'tipo_de_alimento_id' => '6',
        ));

        Alimento::create(array(
            'nombre'  => 'Limón',
            'porciones' => '1 unidad',
            'tipo_de_alimento_id' => '6',
        ));

        Alimento::create(array(
            'nombre'  => 'Pera',
            'porciones' => '1 unidad',
            'tipo_de_alimento_id' => '6',
        ));

        Alimento::create(array(
            'nombre'  => 'Piña',
            'porciones' => '1 taza',
            'tipo_de_alimento_id' => '6',
        ));

        Alimento::create(array(
            'nombre'  => 'Sandía',
            'porciones' => '1 taza',
            'tipo_de_alimento_id' => '6',
        ));

        Alimento::create(array(
            'nombre'  => 'Uvas',
            'porciones' => '12 unidades',
            'tipo_de_alimento_id' => '6',
        ));

        Alimento::create(array(
            'nombre'  => 'Babaco',
            'porciones' => '1 vaso',
            'tipo_de_alimento_id' => '7',
        ));

        Alimento::create(array(
            'nombre'  => 'Frutilla',
            'porciones' => '1 vaso',
            'tipo_de_alimento_id' => '7',
        ));

        Alimento::create(array(
            'nombre'  => 'Guanábana',
            'porciones' => '1 vaso',
            'tipo_de_alimento_id' => '7',
        ));

        Alimento::create(array(
            'nombre'  => 'Limonada',
            'porciones' => '1 vaso',
            'tipo_de_alimento_id' => '7',
        ));

        Alimento::create(array(
            'nombre'  => 'Mango',
            'porciones' => '1 vaso',
            'tipo_de_alimento_id' => '7',
        ));

        Alimento::create(array(
            'nombre'  => 'Maracuyá',
            'porciones' => '1 vaso',
            'tipo_de_alimento_id' => '7',
        ));

        Alimento::create(array(
            'nombre'  => 'Melón',
            'porciones' => '1 vaso',
            'tipo_de_alimento_id' => '7',
        ));

        Alimento::create(array(
            'nombre'  => 'Mora',
            'porciones' => '1 vaso',
            'tipo_de_alimento_id' => '7',
        ));

        Alimento::create(array(
            'nombre'  => 'Naranja en agua',
            'porciones' => '1 vaso',
            'tipo_de_alimento_id' => '7',
        ));

        Alimento::create(array(
            'nombre'  => 'Naranja pura',
            'porciones' => '1 vaso',
            'tipo_de_alimento_id' => '7',
        ));

        Alimento::create(array(
            'nombre'  => 'Naranjilla',
            'porciones' => '1 vaso',
            'tipo_de_alimento_id' => '7',
        ));

        Alimento::create(array(
            'nombre'  => 'Papaya',
            'porciones' => '1 vaso',
            'tipo_de_alimento_id' => '7',
        ));

        Alimento::create(array(
            'nombre'  => 'Piña',
            'porciones' => '1 vaso',
            'tipo_de_alimento_id' => '7',
        ));

        Alimento::create(array(
            'nombre'  => 'Tomate de árbol',
            'porciones' => '1 vaso',
            'tipo_de_alimento_id' => '7',
        ));

        Alimento::create(array(
            'nombre'  => 'Carne de res',
            'porciones' => '1 onza',
            'tipo_de_alimento_id' => '8',
        ));

        Alimento::create(array(
            'nombre'  => 'Cerdo',
            'porciones' => '1 onza',
            'tipo_de_alimento_id' => '8',
        ));

        Alimento::create(array(
            'nombre'  => 'Pollo',
            'porciones' => '1 onza',
            'tipo_de_alimento_id' => '8',
        ));

        Alimento::create(array(
            'nombre'  => 'Pechuga',
            'porciones' => '1 onza',
            'tipo_de_alimento_id' => '8',
        ));

        Alimento::create(array(
            'nombre'  => 'Pierna',
            'porciones' => '1 unidad',
            'tipo_de_alimento_id' => '8',
        ));

        Alimento::create(array(
            'nombre'  => 'Alas',
            'porciones' => '1 onza',
            'tipo_de_alimento_id' => '8',
        ));

        Alimento::create(array(
            'nombre'  => 'Pavo',
            'porciones' => '1 onza',
            'tipo_de_alimento_id' => '8',
        ));

        Alimento::create(array(
            'nombre'  => 'De gallina',
            'porciones' => '1 unidad',
            'tipo_de_alimento_id' => '9',
        ));

        Alimento::create(array(
            'nombre'  => 'Atún',
            'porciones' => '¼ taza',
            'tipo_de_alimento_id' => '10',
        ));

        Alimento::create(array(
            'nombre'  => 'Camarón',
            'porciones' => '6 unidades medianas',
            'tipo_de_alimento_id' => '10',
        ));

        Alimento::create(array(
            'nombre'  => 'Corvina',
            'porciones' => '1 onza',
            'tipo_de_alimento_id' => '10',
        ));

        Alimento::create(array(
            'nombre'  => 'Sardina',
            'porciones' => '¼ taza',
            'tipo_de_alimento_id' => '10',
        ));

        Alimento::create(array(
            'nombre'  => 'Tilapia',
            'porciones' => '1 onza',
            'tipo_de_alimento_id' => '10',
        ));

        Alimento::create(array(
            'nombre'  => 'Almendras',
            'porciones' => '6 unidades',
            'tipo_de_alimento_id' => '11',
        ));

        Alimento::create(array(
            'nombre'  => 'Arveja',
            'porciones' => '½ taza',
            'tipo_de_alimento_id' => '11',
        ));

        Alimento::create(array(
            'nombre'  => 'Arveja tierna',
            'porciones' => '½ taza',
            'tipo_de_alimento_id' => '11',
        ));

        Alimento::create(array(
            'nombre'  => 'Chochos',
            'porciones' => '½ taza',
            'tipo_de_alimento_id' => '11',
        ));

        Alimento::create(array(
            'nombre'  => 'Fréjol',
            'porciones' => '½ taza',
            'tipo_de_alimento_id' => '11',
        ));

        Alimento::create(array(
            'nombre'  => 'Fréjol tierno',
            'porciones' => '½ taza',
            'tipo_de_alimento_id' => '11',
        ));

        Alimento::create(array(
            'nombre'  => 'Garbanzo',
            'porciones' => '½ taza',
            'tipo_de_alimento_id' => '11',
        ));

        Alimento::create(array(
            'nombre'  => 'Habas tiernas',
            'porciones' => '½ taza',
            'tipo_de_alimento_id' => '11',
        ));

        Alimento::create(array(
            'nombre'  => 'Lenteja',
            'porciones' => '½ taza',
            'tipo_de_alimento_id' => '11',
        ));

        Alimento::create(array(
            'nombre'  => 'Maní',
            'porciones' => '10 unidades',
            'tipo_de_alimento_id' => '11',
        ));

        Alimento::create(array(
            'nombre'  => 'Mote',
            'porciones' => '½ taza',
            'tipo_de_alimento_id' => '11',
        ));

        Alimento::create(array(
            'nombre'  => 'Nueces',
            'porciones' => '3 unidades',
            'tipo_de_alimento_id' => '11',
        ));

        Alimento::create(array(
            'nombre'  => 'Semillas de girasol',
            'porciones' => '15-20 unidades',
            'tipo_de_alimento_id' => '11',
        ));

        Alimento::create(array(
            'nombre'  => 'Yogurt dieta/light',
            'porciones' => '1 taza',
            'tipo_de_alimento_id' => '12',
        ));

        Alimento::create(array(
            'nombre'  => 'Leche descremada',
            'porciones' => '1 taza',
            'tipo_de_alimento_id' => '12',
        ));

        Alimento::create(array(
            'nombre'  => 'Leche deslactosada',
            'porciones' => '1 taza',
            'tipo_de_alimento_id' => '12',
        ));

        Alimento::create(array(
            'nombre'  => 'Leche entera',
            'porciones' => '1 taza',
            'tipo_de_alimento_id' => '12',
        ));

        Alimento::create(array(
            'nombre'  => 'Leche semidescremada',
            'porciones' => '1 taza',
            'tipo_de_alimento_id' => '12',
        ));

        Alimento::create(array(
            'nombre'  => 'Queso cheddar',
            'porciones' => '1 onza',
            'tipo_de_alimento_id' => '12',
        ));

        Alimento::create(array(
            'nombre'  => 'Queso fresco',
            'porciones' => '1 onza',
            'tipo_de_alimento_id' => '12',
        ));

        Alimento::create(array(
            'nombre'  => 'Queso mozarella',
            'porciones' => '1 onza',
            'tipo_de_alimento_id' => '12',
        ));

        Alimento::create(array(
            'nombre'  => 'Queso ricotta',
            'porciones' => '1 onza',
            'tipo_de_alimento_id' => '12',
        ));

        Alimento::create(array(
            'nombre'  => 'Queso suizo',
            'porciones' => '1 onza',
            'tipo_de_alimento_id' => '12',
        ));

        Alimento::create(array(
            'nombre'  => 'Yogurt entero',
            'porciones' => '1 taza',
            'tipo_de_alimento_id' => '12',
        ));

        Alimento::create(array(
            'nombre'  => 'Plátano maduro',
            'porciones' => '¼ de unidad',
            'tipo_de_alimento_id' => '13',
        ));

        Alimento::create(array(
            'nombre'  => 'Plátano verde',
            'porciones' => '¼ de unidad',
            'tipo_de_alimento_id' => '13',
        ));

        Alimento::create(array(
            'nombre'  => 'Aceite de girasol',
            'porciones' => '1 cucharadita',
            'tipo_de_alimento_id' => '14',
        ));

        Alimento::create(array(
            'nombre'  => 'Aceite de palma',
            'porciones' => '1 cucharadita',
            'tipo_de_alimento_id' => '14',
        ));

        Alimento::create(array(
            'nombre'  => 'Aceite de oliva',
            'porciones' => '1 cucharadita',
            'tipo_de_alimento_id' => '14',
        ));

        Alimento::create(array(
            'nombre'  => 'Mantequilla',
            'porciones' => '1 cucharadita',
            'tipo_de_alimento_id' => '14',
        ));

        Alimento::create(array(
            'nombre'  => 'Margarina',
            'porciones' => '1 cucharadita',
            'tipo_de_alimento_id' => '14',
        ));

        Alimento::create(array(
            'nombre'  => 'Mayonesa',
            'porciones' => '1 cucharadita',
            'tipo_de_alimento_id' => '14',
        ));

        Alimento::create(array(
            'nombre'  => 'Queso crema',
            'porciones' => '1 cucharadita',
            'tipo_de_alimento_id' => '14',
        ));

        Alimento::create(array(
            'nombre'  => 'Azúcar blanca',
            'porciones' => '1 cucharadita',
            'tipo_de_alimento_id' => '15',
        ));

        Alimento::create(array(
            'nombre'  => 'Azúcar morena',
            'porciones' => '1 cucharadita',
            'tipo_de_alimento_id' => '15',
        ));

        Alimento::create(array(
            'nombre'  => 'Cocoa',
            'porciones' => '1 cucharadita',
            'tipo_de_alimento_id' => '15',
        ));

        Alimento::create(array(
            'nombre'  => 'Gaseosas (coca cola, fanta, sprite, fiora fresa)',
            'porciones' => '1 vaso',
            'tipo_de_alimento_id' => '15',
        ));

        Alimento::create(array(
            'nombre'  => 'Mermelada',
            'porciones' => '1 cucharadita',
            'tipo_de_alimento_id' => '15',
        ));

        Alimento::create(array(
            'nombre'  => 'Miel',
            'porciones' => '1 cucharadita',
            'tipo_de_alimento_id' => '15',
        ));

        Alimento::create(array(
            'nombre'  => 'Fuzetea',
            'porciones' => '1 vaso',
            'tipo_de_alimento_id' => '16',
        ));

        Alimento::create(array(
            'nombre'  => 'Natura',
            'porciones' => '1 vaso',
            'tipo_de_alimento_id' => '16',
        ));

        Alimento::create(array(
            'nombre'  => 'Nestea',
            'porciones' => '1 vaso',
            'tipo_de_alimento_id' => '16',
        ));

        Alimento::create(array(
            'nombre'  => 'Doritos',
            'porciones' => '1 funda pequeña',
            'tipo_de_alimento_id' => '17',
        ));

        Alimento::create(array(
            'nombre'  => 'Cachitos',
            'porciones' => '1 funda pequeña',
            'tipo_de_alimento_id' => '17',
        ));

        Alimento::create(array(
            'nombre'  => 'Cereal',
            'porciones' => '½ taza',
            'tipo_de_alimento_id' => '17',
        ));

        Alimento::create(array(
            'nombre'  => 'Cueritos',
            'porciones' => '1 funda pequeña',
            'tipo_de_alimento_id' => '17',
        ));

        Alimento::create(array(
            'nombre'  => 'Galletas amor',
            'porciones' => '4 unidades',
            'tipo_de_alimento_id' => '17',
        ));

        Alimento::create(array(
            'nombre'  => 'Galletas oreo',
            'porciones' => '1 paquete',
            'tipo_de_alimento_id' => '17',
        ));

        Alimento::create(array(
            'nombre'  => 'Galletas Ritz',
            'porciones' => '1 paquete',
            'tipo_de_alimento_id' => '17',
        ));

        Alimento::create(array(
            'nombre'  => 'Jalapeños',
            'porciones' => '1 funda pequeña',
            'tipo_de_alimento_id' => '17',
        ));

        Alimento::create(array(
            'nombre'  => 'Nachos',
            'porciones' => '1 funda pequeña',
            'tipo_de_alimento_id' => '17',
        ));

        Alimento::create(array(
            'nombre'  => 'Nutella',
            'porciones' => '1 cucharadita',
            'tipo_de_alimento_id' => '17',
        ));

        Alimento::create(array(
            'nombre'  => 'Papas fritas (funda)',
            'porciones' => '1 funda pequeña',
            'tipo_de_alimento_id' => '17',
        ));

        Alimento::create(array(
            'nombre'  => 'Pizza',
            'porciones' => '1 slide',
            'tipo_de_alimento_id' => '17',
        ));

        Alimento::create(array(
            'nombre'  => 'Tostitos',
            'porciones' => '1 funda pequeña',
            'tipo_de_alimento_id' => '17',
        ));

                 
    }
}