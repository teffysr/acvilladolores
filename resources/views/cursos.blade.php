@extends('layout')
@section('content')
    <header class="text-white text-center bg-image-contact">
        <div class="masthead-title">
            <h1 class="masthead-heading text-uppercase mb-0">Cursos</h1>
        </div>

    </header>
    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <div class="row">
                <div id="editor" style="color: #1a252f">This is some sample content.</div>
            </div>
        </div>
    </section>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection

