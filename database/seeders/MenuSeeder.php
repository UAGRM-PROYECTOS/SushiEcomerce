<?php

namespace Database\Seeders;

use App\Models\Producto;
use App\Models\Tamano;
use App\Models\Categoria;
use App\Models\Descuento;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $premium = Categoria::create([
            'nombre' => 'PREMIUM'
        ]);

        $normales = Categoria::create([
            'nombre' => 'NORMALES'
        ]);
        $vegetariano = Categoria::create([
            'nombre' => 'VEGETARIANO'
        ]);
        $especial = Categoria::create([
            'nombre' => 'ESPECIAL'
        ]);

        $pequeño = Tamano::create([
            'nombre' => 'PEQUEÑA'
        ]);

        $grande = Tamano::create([
            'nombre' => 'GRANDE'
        ]);
        $cero = Descuento::create([
            'descuento' => 0.0
        ]);
        $diez = Descuento::create([
            'descuento' => 0.1
        ]);
        $cintuenta = Descuento::create([
            'descuento' => 0.5
        ]);

        //Productos especiales
        Producto::create([
            'nombre' => 'SALMÓN SUPREME - GRANDE',
            'precio' => 18.00,
            'imagen_url' => 'https://res.cloudinary.com/drjvgyusx/image/upload/v1717995598/SalmonSupreme_lduorv.jpg',
            'descripcion' => 'SALMÓN, AGUACATE Y QUESO CREMA.',
            'tamano_id' => $grande->id,
            'categoria_id' => $especial->id,
            'descuento_id' => $diez->id
        ]);
        
        Producto::create([
            'nombre' => 'SALMÓN SUPREME - PEQUEÑO',
            'precio' => 12.00,
            'imagen_url' => 'https://res.cloudinary.com/drjvgyusx/image/upload/v1717995599/salmonsupremepeq_ht1yhj.jpg',
            'descripcion' => 'SALMÓN, AGUACATE Y QUESO CREMA.',
            'tamano_id' => $pequeño->id,
            'categoria_id' => $especial->id,
            'descuento_id' => $diez->id
        ]);
        
        Producto::create([
            'nombre' => 'TUNA DELIGHT - GRANDE',
            'precio' => 20.00,
            'imagen_url' => 'https://res.cloudinary.com/drjvgyusx/image/upload/v1717995598/tunadel_njqzss.jpg',
            'descripcion' => 'ATÚN, PEPINO Y SALSA DE ANGUILA.',
            'tamano_id' => $grande->id,
            'categoria_id' => $premium->id,
            'descuento_id' => $diez->id
        ]);
        
        Producto::create([
            'nombre' => 'TUNA DELIGHT - PEQUEÑO',
            'precio' => 14.00,
            'imagen_url' => 'https://res.cloudinary.com/drjvgyusx/image/upload/v1717995598/tunadelipe_ua3qhf.jpg',
            'descripcion' => 'ATÚN, PEPINO Y SALSA DE ANGUILA.',
            'tamano_id' => $pequeño->id,
            'categoria_id' => $premium->id,
            'descuento_id' => $diez->id
        ]);
        
        Producto::create([
            'nombre' => 'TEMPURA ROLL - GRANDE',
            'precio' => 22.00,
            'imagen_url' => 'https://res.cloudinary.com/drjvgyusx/image/upload/v1717995598/tempurarollgrande_vgfouz.jpg',
            'descripcion' => 'LANGOSTA TEMPURADA, AGUACATE Y MAYONESA PICANTE.',
            'tamano_id' => $grande->id,
            'categoria_id' => $normales->id,
            'descuento_id' => $cero->id
        ]);
        
        Producto::create([
            'nombre' => 'TEMPURA ROLL - PEQUEÑO',
            'precio' => 16.00,
            'imagen_url' => 'https://res.cloudinary.com/drjvgyusx/image/upload/v1717995598/tempurarollpe_gdoi5s.jpg',
            'descripcion' => 'LANGOSTA TEMPURADA, AGUACATE Y MAYONESA PICANTE.',
            'tamano_id' => $pequeño->id,
            'categoria_id' => $especial->id,
            'descuento_id' => $cintuenta->id
        ]);
        
        Producto::create([
            'nombre' => 'VEGGIE ROLL - GRANDE',
            'precio' => 15.00,
            'imagen_url' => 'https://res.cloudinary.com/drjvgyusx/image/upload/v1717995598/vegguirollgrande_avo4gj.jpg',
            'descripcion' => 'ZANAHORIA, PEPINO Y AGUACATE.',
            'tamano_id' => $grande->id,
            'categoria_id' => $normales->id,
            'descuento_id' => $cero->id
        ]);
        
        Producto::create([
            'nombre' => 'VEGGIE ROLL - PEQUEÑO',
            'precio' => 10.00,
            'imagen_url' => 'https://res.cloudinary.com/drjvgyusx/image/upload/v1717995599/Vegguirollpe_cfooxu.jpg',
            'descripcion' => 'ZANAHORIA, PEPINO Y AGUACATE.',
            'tamano_id' => $pequeño->id,
            'categoria_id' => $vegetariano->id,
            'descuento_id' => $diez->id
        ]);
        
        Producto::create([
            'nombre' => 'DRAGON ROLL - GRANDE',
            'precio' => 24.00,
            'imagen_url' => 'https://res.cloudinary.com/drjvgyusx/image/upload/v1717995598/dragonroollgr_yepadj.jpg',
            'descripcion' => 'ANGUILA, AGUACATE Y CAVIAR.',
            'tamano_id' => $grande->id,
            'categoria_id' => $premium->id,
            'descuento_id' => $cintuenta->id
        ]);
        
        Producto::create([
            'nombre' => 'DRAGON ROLL - PEQUEÑO',
            'precio' => 18.00,
            'imagen_url' => 'https://res.cloudinary.com/drjvgyusx/image/upload/v1717995598/dragonroolpe_knlmf3.jpg',
            'descripcion' => 'ANGUILA, AGUACATE Y CAVIAR.',
            'tamano_id' => $normales->id,
            'categoria_id' => $premium->id,
            'descuento_id' => $cero->id
        ]);
        
    }
}
