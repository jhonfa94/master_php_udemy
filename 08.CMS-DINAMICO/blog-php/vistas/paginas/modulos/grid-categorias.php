<!--=====================================
GRID DE CATEGORÍAS
======================================-->

<div class="container-fluid py-2 py-md-5 bg-white grid">

	<div class="container p-0">

		<div class="d-flex">

			<div class="d-flex flex-column columna1">
			
				<figure class="p-2 photo1" vinculo="<?=$categorias[0]['ruta_categoria']?>" style="background:url(<?=$categorias[0]['img_categoria']?>)">
					
					<p class="text-uppercase p-1 p-md-3 p-xl-4"><?=$categorias[0]['descripcion_categoria']?></p>

				</figure>

				<figure class="p-2 photo2" vinculo="<?=$categorias[4]['ruta_categoria']?>" style="background:url(<?=$categorias[4]['img_categoria']?>)">
					
					<p class="text-uppercase p-1 p-md-3 p-xl-4"><?=$categorias[4]['descripcion_categoria']?></p>

				</figure>

				<figure class="d-block d-md-none p-2 photo6" vinculo="<?=$categorias[5]['ruta_categoria']?>" style="background:url(<?=$categorias[5]['img_categoria']?>)">
					
					<p class="text-uppercase p-1 p-md-3 p-xl-4"><?=$categorias[5]['descripcion_categoria']?></p>

				</figure>

			</div>

			<div class="d-flex flex-column flex-fill columna2">

				<div class="d-block d-md-flex">

					<figure class="p-2 flex-fill photo3" vinculo="<?=$categorias[1]['ruta_categoria']?>" style="background:url(<?=$categorias[1]['img_categoria']?>)">

						<p class="text-uppercase p-1 p-md-3 p-xl-4"><?=$categorias[1]['descripcion_categoria']?></p>
						
					</figure>

					<figure class="p-2 flex-fill photo4" vinculo="<?=$categorias[3]['ruta_categoria']?>" style="background:url(<?=$categorias[3]['img_categoria']?>)">
						
						<p class="text-uppercase p-1 p-md-3 p-xl-4"><?=$categorias[3]['descripcion_categoria']?></p>

					</figure>

				</div>

				<figure class="p-2 photo5" vinculo="<?=$categorias[2]['ruta_categoria']?>" style="background:url(<?=$categorias[2]['img_categoria']?>)">

					<p class="text-uppercase p-1 p-md-3 p-xl-4"><?=$categorias[2]['descripcion_categoria']?></p>
					
				</figure>

			</div>

		</div>

	</div>

</div>