@extends('layout')
@section('content')
    <header class="text-white text-center bg-image-contact">
        <div class="masthead-title">
            <h1 class="masthead-heading text-uppercase mb-0">Contacto</h1>
        </div>

    </header>
    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="e-lead font-weight-bold">Escribinos</h3>
                    <div class="border-bottom width-20px border-blue"></div>
                    <form class="form-border mt-4 mb-5" method="post" action="{{ route('contact.send') }}" id="formContact">
                        {{ csrf_field() }}
                        <div class="form-group mt-4">
                            <label class="form-label" for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="name" required>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="pais">País</label>
                            <input type="text" class="form-control" id="pais" name="country">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="consulta" required>Consulta</label>
                            <textarea class="form-control" id="consulta" rows="3" name="message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" id="sendContact">Enviar</button>
                        @if(\Illuminate\Support\Facades\Session::has('message_sent'))
                            <script>
                                Swal.fire(
                                    '{{ \Illuminate\Support\Facades\Session::get('message_sent') }}!',
                                    '',
                                    'success'
                                )
                            </script>
                        @endif
                    </form>

                </div>
                <div class="col-sm-6">
                    <h3 class="e-lead font-weight-bold">Contactanos</h3>
                    <div class="border-bottom width-20px border-blue"></div>
                    <p class="mt-4 text-lead"><a class="btn btn-outline-dark btn-social-small mx-1" target="_blank" href="{{ $contact->facebook_link }}"><i
                                class="fab fa-fw fa-facebook-f"></i></a> {{ $contact->facebook_name }}
                    </p>
                    <p class="mt-4 text-lead"><a class="btn btn-outline-dark btn-social-small mx-1" target="_blank" href="{{ $contact->instagram_link }}"><i
                                class="fab fa-fw fa-instagram"></i></a> {{ $contact->instagram_name }}</p>
                    <p class="mt-4 text-lead"><a class="btn btn-outline-dark btn-social-small mx-1" href="#!"><i
                                class="fas fa-phone-alt"></i></a> {{ $contact->main_phone }}/ {{ $contact->secundary_phone }}</p>
                    <h3 class="e-lead font-weight-bold mt-5">Dónde estamos</h3>
                    <div class="border-bottom width-20px border-blue"></div>
                    <p class="mt-4 text-lead fon">{{ $contact->main_address }}</p>
                    <p class="mt-4 text-lead">{{ $contact->secundary_address }}</p>

                    <div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3385.917352858968!2d-65.19697824952735!3d-31.936001128679695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x942cd36323983851%3A0x8673667926436550!2sGral.%20Paz%20199%2C%20Villa%20Sarmiento%2C%20C%C3%B3rdoba!5e0!3m2!1ses!2sar!4v1606189317937!5m2!1ses!2sar"
                            width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
