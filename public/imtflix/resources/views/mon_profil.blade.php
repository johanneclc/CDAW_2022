@extends('app')

@section('content')
<section class="py-5">
			  <div class="container my-5">
				  <div class="row justify-content-center">
					  <div class="col-lg-6">
						  <div class="mb-3">
                          @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                          @endif
	
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
											
											<div class="last-icon">
												<i class="fas fa-quote-right"></i>
											</div>
                                            
											<div class="hero-btns">
												<a href="modifier_profil" class="boxed-btn">Modifier leee profil</a>
                                                <div class="pull-right">
                                                    <a class="btn btn-primary" href="listeMedias"> Back</a>
                                                </div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
	
	
					  </div>
				  </div>
			  </div>


        <form action="{{ route('users.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
     
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>email:</strong>
                    <textarea class="form-control" style="height:150px" name="email" placeholder="Email">{{ Auth::user()->email }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="chemin_avatar" class="form-control" placeholder="chemin_avatar">
                    <img src="/chemin_avatar/{{ Auth::user()->chemin_avatar }}" width="300px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
     
    </form>

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
