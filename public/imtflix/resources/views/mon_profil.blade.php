@extends('app')

@section('content')
<div class="hero-area hero-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 offset-lg-2 text-center">
                <div class="hero-text">
                    <div class="hero-text-tablecell">
                        <div class="single-testimonial-slider">
                            <div class="client-avater">
                                <img src="{{ $user->chemin_avatar }}" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>Pseudo <span>{{ $user->nom }} {{ $user->prenom }}</span></h3>
                                <span id="mail">{{ $user->email }}</span>
                                <p class="testimonial-body">
                                    e Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
                                </p>
                                <div class="last-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                                <div class="hero-btns">
                                    <a href="" class="boxed-btn">Modifier le profil</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end hero area -->
@endsection
