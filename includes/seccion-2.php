<section class="seccion-normal mx-auto">
    <div>
        <h2 class="text-center pb-1">El Equipo</h2>
        <h4 class="text-center pb-1">Los que van a tratar tu empresa con la importancia que se merece</h4>
    </div>
    <div>
        <hr class="custom-hr">
    </div>

    <div class="row row-cols-1 row-cols-md-2 g-4 p-5">
        <?php 
        $equipo = [
            [
                'nombre' => 'Carlos Sánchez',
                'descripcion' => 'El generador de soluciones',
                'imagen' => 'carlos-sanchez.jpg',
                'alt' => 'Carlos Sánchez'
            ],
            [
                'nombre' => 'Roberto Martínez González',
                'descripcion' => 'El estratega',
                'imagen' => 'roberto-seo.jpg',
                'alt' => 'Roberto Martínez'
            ],
            [
                'nombre' => 'Rosario Aznar',
                'descripcion' => 'La experta en Organización',
                'imagen' => 'rosario.jpg',
                'alt' => 'Rosario Aznar'
            ],
            [
                'nombre' => 'Sandra Santos',
                'descripcion' => 'La fanática del código',
                'imagen' => 'sandra-santos.jpg',
                'alt' => 'Sandra Santos'
            ]
        ];

        foreach ($equipo as $miembro): ?>
            <div class="col">
                <div class="card h-100">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $miembro['imagen']; ?>" 
                         class="card-img-top" 
                         alt="<?php echo $miembro['alt']; ?>">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo $miembro['nombre']; ?></h5>
                        <p class="card-text text-center"><?php echo $miembro['descripcion']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>