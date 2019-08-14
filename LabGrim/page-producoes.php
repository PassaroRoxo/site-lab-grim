<?php get_header(); ?>
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css'>
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css'>
		<section id="page-producoes" class="overflow-x-hidden">
					
			<!-- begin producoes -->
				<section class="m-t-2p container">
					<div class="producao-title row justify-content-center">
						<h4>PRODUÇÕES</h4>
					</div>
					<p class="m-t-1p"><?php echo get_theme_mod('set_producoes-texto'); ?> </p>
				</section>
			<!-- end producoes -->
			<!-- begin filtro -->
				<section class="m-t-5p container">
					<!-- <div class="row">
						<div class="col-lg-7">
							<div class="row">
						        <div class="col-auto">
						            <button class="btn-search" type="button">
						                <i class="fa fa-search" style="color: #fff;"></i>
						            </button>
						        </div>
						        <div class="col z-index-n-1">
						            <input class="rounded-pill input-search" id="input-search">
						        </div>
						    </div>
					    </div>
					    <div class="col-lg-5">
					    	<div class="btn-group" role="group">
					    		<span class="input-group-text addon-filtro">FILTRAR POR</span>
						    	<div class="styled-select light-gray">
									<select>
										<option>CATEGORIA</option>
										<option>CATEGORIA 2</option>
										<option>CATEGORIA 3</option>
									</select>
								</div>
							</div>
					    </div>
				    </div> -->
				    <div class="row">
						<div class="search-bar col-sm-6 col-md-6 col-12"><?php get_search_form(); ?></div>
						<div class="category-filter col-sm-6 col-md-6 col-12 p-t-3p-xs p-l-6p-xs">
							<div class="row right-float">
								<div class="text-category">
									<h4>Filtrar por</h4>
								</div>
								<div class="dropdown show">
									<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								    	Categoria
								    	<i class="fas fa-chevron-down"></i>
								  	</a>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
										<?php
										$categories = get_categories( array(
										    'orderby' => 'name',
										    'parent'  => 0
										) );
										 
										foreach ( $categories as $category ) {
										    printf( '<a class="dropdown-item" href="%1$s">%2$s</a>',
										        esc_url( get_category_link( $category->term_id ) ),
										        esc_html( $category->name )
										    );
										}
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			<!-- end filtro -->
			<!-- begin galeria -->
				 <section class="m-t-3p container" style="margin-bottom: 15%;">
					<div class="galeria-title d-flex-sm justify-content-center-sm">
						<h6 class="text-galeria left-float m-t-5p-xs m-t-1p-sm">GALERIA</h6>
					</div>
					<!--<div class="container">
					  <div class="row">
					    <div id="carousel" class="carousel slide" data-ride="carousel">
					      <div class="carousel-inner">
					        <div class="carousel-item active">
					          <div class="d-none d-lg-block">
					            <div class="slide-box">
					              <img src="https://picsum.photos/285/200/?image=0&random" alt="First slide">
					              <img src="https://picsum.photos/285/200/?image=1&random" alt="First slide">
					              <img src="https://picsum.photos/285/200/?image=2&random" alt="First slide">
					            </div>
					          </div>
					          <div class="d-none d-md-block d-lg-none">
					            <div class="slide-box">
					              <img src="https://picsum.photos/240/200/?image=0&random" alt="First slide">
					              <img src="https://picsum.photos/240/200/?image=1&random" alt="First slide">
					              <img src="https://picsum.photos/240/200/?image=2&random" alt="First slide">
					            </div>
					          </div>
					          <div class="d-none d-sm-block d-md-none">
					            <div class="slide-box">
					              <img src="https://picsum.photos/270/200/?image=0&random" alt="First slide">
					              <img src="https://picsum.photos/270/200/?image=1&random" alt="First slide">
					            </div>
					          </div>
					          <div class="d-block d-sm-none">
					            <img class="d-block w-100" src="https://picsum.photos/600/400/?image=0&random" alt="First slide">
					          </div>
					        </div>
					        <div class="carousel-item">
					          <div class="d-none d-lg-block">
					            <div class="slide-box">
					              <img src="https://picsum.photos/285/200/?image=4&random" alt="Second slide">
					              <img src="https://picsum.photos/285/200/?image=5&random" alt="Second slide">
					              <img src="https://picsum.photos/285/200/?image=6&random" alt="Second slide">
					            </div>
					          </div>
					          <div class="d-none d-md-block d-lg-none">
					            <div class="slide-box">
					              <img src="https://picsum.photos/240/200/?image=3&random" alt="Second slide">
					              <img src="https://picsum.photos/240/200/?image=4&random" alt="Second slide">
					              <img src="https://picsum.photos/240/200/?image=5&random" alt="Second slide">
					            </div>
					          </div>
					          <div class="d-none d-sm-block d-md-none">
					            <div class="slide-box">
					              <img src="https://picsum.photos/270/200/?image=2&random" alt="Second slide">
					              <img src="https://picsum.photos/270/200/?image=3&random" alt="Second slide">
					            </div>
					          </div>
					          <div class="d-block d-sm-none">
					            <img class="d-block w-100" src="https://picsum.photos/600/400/?image=1&random" alt="Second slide">
					          </div>
					        </div>
					      </div>
					      <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
					        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					        <span class="sr-only">Previous</span>
					      </a>
					      <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
					        <span class="carousel-control-next-icon" aria-hidden="true"></span>
					        <span class="sr-only">Next</span>
					      </a>
					    </div>
					  </div>-->
					<!--<div class="container text-center my-3" id="Multi-img-carousel">
			            <div class="row mx-auto my-auto">
			                <div id="recipeCarousel" class="carousel slide w-100 d-flex" data-ride="carousel">
			                    <div class="carousel-inner w-100" role="listbox">
			                        <div class="carousel-item active">
			                        	<div class="gallery-post">
			                        		<iframe width="250" height="200" src="https://www.youtube.com/embed/av5JD1dfj_c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			                        		<h5 class="post-title m-t-1p">Título da postagem</h5>
			                        		<p class="post-description">Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			                        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad.</p>
			                        	</div>

			                        	<div class="gallery-post">
			                        		<iframe width="250" height="200" src="https://www.youtube.com/embed/av5JD1dfj_c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			                        		<h5 class="post-title m-t-1p">Título da postagem 2</h5>
			                        		<p class="post-description">Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			                        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad.</p>
			                        	</div>

			                        	<div class="gallery-post">
			                        		<iframe width="250" height="200" src="https://www.youtube.com/embed/av5JD1dfj_c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			                        		<h5 class="post-title m-t-1p">Título da postagem 3</h5>
			                        		<p class="post-description">Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			                        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad.</p>
			                        	</div>
			                        </div>
			                        <div class="carousel-item ">
			                            <img class="d-flex col-md-4 img-fluid" src="http://placehold.it/350x180?text=2">
			                        </div>
			                        <div class="carousel-item ">
			                            <img class="d-flex col-md-4 img-fluid" src="http://placehold.it/350x180?text=3">
			                        </div>
			                        <div class="carousel-item">
			                            <img class="d-flex col-md-4 img-fluid" src="http://placehold.it/350x180?text=4">
			                        </div>
			                        <div class="carousel-item">
			                            <img class="d-flex col-md-4 img-fluid" src="http://placehold.it/350x180?text=5">
			                        </div>
			                        <div class="carousel-item">
			                            <img class="d-block col-md-4 img-fluid" src="http://placehold.it/350x180?text=6">
			                        </div>
			                    </div>
			                    <a class="carousel-control-prev control-button" href="#recipeCarousel" role="button" data-slide="prev">
			                        <i class="fa fa-angle-left carousel-icon" aria-hidden="true"></i>
			                        <span class="sr-only">Previous</span>
			                    </a>
			                    <a class="carousel-control-next control-button" href="#recipeCarousel" role="button" data-slide="next">
			                        <i class="fa fa-angle-right carousel-icon" aria-hidden="true"></i>
			                        <span class="sr-only">Next</span>
			                    </a>
			                </div>
			            </div>
			        </div>-->
			        <div class="carousel m-t-1p">
						<div class="gallery-post">
		            		<iframe class="post-video" height="200" src="https://www.youtube.com/embed/av5JD1dfj_c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		            		<div class="post-text">
			            		<h5 class="post-title m-t-1p">Título da postagem</h5>
			            		<p class="post-description">Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			            		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad.</p>
			            	</div>
		            	</div>
						<div class="gallery-post">
		            		<iframe class="post-video" height="200" src="https://www.youtube.com/embed/av5JD1dfj_c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		            		<div class="post-text">
			            		<h5 class="post-title m-t-1p">Título da postagem</h5>
			            		<p class="post-description">Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			            		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad.</p>
			            	</div>
		            	</div>
						<div class="gallery-post">
		            		<iframe class="post-video" height="200" src="https://www.youtube.com/embed/av5JD1dfj_c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		            		<div class="post-text">
			            		<h5 class="post-title m-t-1p">Título da postagem</h5>
			            		<p class="post-description">Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			            		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad.</p>
			            	</div>
		            	</div>
						<div class="gallery-post">
		            		<iframe class="post-video" height="200" src="https://www.youtube.com/embed/av5JD1dfj_c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		            		<div class="post-text">
			            		<h5 class="post-title m-t-1p">Título da postagem</h5>
			            		<p class="post-description">Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			            		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad.</p>
			            	</div>
		            	</div>
						<div class="gallery-post">
		            		<iframe class="post-video" height="200" src="https://www.youtube.com/embed/av5JD1dfj_c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		            		<div class="post-text">
			            		<h5 class="post-title m-t-1p">Título da postagem</h5>
			            		<p class="post-description">Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			            		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad.</p>
			            	</div>
		            	</div>
						<div class="gallery-post">
		            		<iframe class="post-video" height="200" src="https://www.youtube.com/embed/av5JD1dfj_c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		            		<div class="post-text">
			            		<h5 class="post-title m-t-1p">Título da postagem</h5>
			            		<p class="post-description">Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			            		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad.</p>
			            	</div>
		            	</div>
					</div>
				</section> 
			<!-- end galeria -->

			<!-- begin publicacoes -->
					<section class="m-t-3p container" style="margin-bottom: 15%;">
						<div class="publicacoes-title d-flex-sm justify-content-center-sm">
							<h6 class="text-publicacoes left-float m-t-5p-xs m-t-1p-sm">PUBLICAÇÕES</h6>
						</div>
						<div class="carousel-publicacoes m-t-1p">
							<div class="publicacoes-post">
			            		<div class="post-text">
			            			<div class="row m-t-1p">
			            				<div class="col-8">
				            				<h5 class="publicacao-title">Título da postagem</h5>
				            			</div>
			            				<div class="col-4 text-right">
				            				<a class="publicacao-link">VER MAIS</a>
				            			</div>
				            		</div>
				            		<p class="post-description">
				            			Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad. Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad. Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad.
				            		</p>
				            	</div>
			            	</div>
							<div class="publicacoes-post">
			            		<div class="post-text">
			            			<div class="row m-t-1p">
			            				<div class="col-8">
				            				<h5 class="publicacao-title">Título da postagem</h5>
				            			</div>
			            				<div class="col-4 text-right">
				            				<a class="publicacao-link">VER MAIS</a>
				            			</div>
				            		</div>
				            		<p class="post-description">
				            			Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad. Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad. Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad.
				            		</p>
				            	</div>
			            	</div>
							<div class="publicacoes-post">
			            		<div class="post-text">
			            			<div class="row m-t-1p">
			            				<div class="col-8">
				            				<h5 class="publicacao-title">Título da postagem</h5>
				            			</div>
			            				<div class="col-4 text-right">
				            				<a class="publicacao-link">VER MAIS</a>
				            			</div>
				            		</div>
				            		<p class="post-description">
				            			Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad. Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad. Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad.
				            		</p>
				            	</div>
			            	</div>
							<div class="publicacoes-post">
			            		<div class="post-text">
			            			<div class="row m-t-1p">
			            				<div class="col-8">
				            				<h5 class="publicacao-title">Título da postagem</h5>
				            			</div>
			            				<div class="col-4 text-right">
				            				<a class="publicacao-link">VER MAIS</a>
				            			</div>
				            		</div>
				            		<p class="post-description">
				            			Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad. Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad. Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad.
				            		</p>
				            	</div>
			            	</div>
							<div class="publicacoes-post">
			            		<div class="post-text">
			            			<div class="row m-t-1p">
			            				<div class="col-8">
				            				<h5 class="publicacao-title">Título da postagem</h5>
				            			</div>
			            				<div class="col-4 text-right">
				            				<a class="publicacao-link">VER MAIS</a>
				            			</div>
				            		</div>
				            		<p class="post-description">
				            			Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad. Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad. Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad.
				            		</p>
				            	</div>
			            	</div>
							<div class="publicacoes-post">
			            		<div class="post-text">
			            			<div class="row m-t-1p">
			            				<div class="col-8">
				            				<h5 class="publicacao-title">Título da postagem</h5>
				            			</div>
			            				<div class="col-4 text-right">
				            				<a class="publicacao-link">VER MAIS</a>
				            			</div>
				            		</div>
				            		<p class="post-description">
				            			Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad. Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad. Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad.
				            		</p>
				            	</div>
			            	</div>
							<div class="publicacoes-post">
			            		<div class="post-text">
			            			<div class="row m-t-1p">
			            				<div class="col-8">
				            				<h5 class="publicacao-title">Título da postagem</h5>
				            			</div>
			            				<div class="col-4 text-right">
				            				<a class="publicacao-link">VER MAIS</a>
				            			</div>
				            		</div>
				            		<p class="post-description">
				            			Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad. Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad. Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad.
				            		</p>
				            	</div>
			            	</div>
						</div>
						
					</section>
			<!-- end publicacoes -->
		        <script src='https://code.jquery.com/jquery-1.11.0.min.js'></script>
		        <script src='https://code.jquery.com/jquery-migrate-1.2.1.min.js'></script>
		        <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js'></script>
		</section>
<?php get_footer(); ?>