@extends('app')

@section('content')
<section class="py-5">
			  <div class="container my-5">
				  <div class="row justify-content-center">
					  <div class="col-lg-6">
						  <div class="mb-3">
	
	
							<div class="hero-text text-white">
								<div class="hero-text-tablecell">
									<div class="single-testimonial-slider">
										<div class="client-avater">
                                        <img src="assets/img/avaters/avatar3.png" alt="">
                                        <img src="/{{ Auth::user()->chemin_avatar }}" width="500px">
										</div>
										<div class="client-meta">
											<h3 class="text-white">Pseudo <span class="text-white">{{ Auth::user()->name }}</span></h3>
											<span id="mail">{{ Auth::user()->email }}</span>
											<p class="testimonial-body">
												" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
											</p>
											<div class="last-icon">
												<i class="fas fa-quote-right"></i>
											</div>
											<div class="hero-btns">
												<a href="profil.html" class="boxed-btn">Modifier le profil</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
	
	
					  </div>
				  </div>
			  </div>
		  </section>

<!-- <div class="row"> 
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Mon Profil</h2>
            </div>

        </div>
    </div>
     
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
              {{ Auth::user()->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>email:</strong>
                {{ Auth::user()->email }}
            </div>
        </div>
    </div>
 -->
@endsection
