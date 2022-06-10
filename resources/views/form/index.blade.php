@extends('layouts.form')

@section('content')
    @if (Session::has('infos'))
        <div class="container">
            <div class="alert alert-success">{{ Session::get('infos') }}</div>
        </div>
    @endif

    <div class="summary form-section">
        <a href="#presentation">Présentation</a>
        <a href="#medias">Médias</a>
        <a href="#society">Votre entreprise, votre produit</a>
        <a href="#others">Informations additionnelles</a>
    </div>

    <div>
        <a href="{{ route('form.pdf', $customer) }}">Télécharger le document</a>
    </div>

    <div class="form-wrapper">
        <form action="{{ route('form.store') }}" method="post" enctype='multipart/form-data'>
            @csrf
            {{-- Customer --}}
            <input type="hidden" name="customer" value="{{ $customer->id }}">


            {{-- PRESENTATION - CLIENTS - ENTREPRISE - PROJET --}}
            @include('form.partials.presentation')


            {{-- IDENTITÉ GRAPHIQUE & MÉDIAS --}}
            @include('form.partials.graphism')



            {{-- VOTRE ENTREPRISE? VOS PRODUITS --}}
            @include('form.partials.offer')



            {{-- AUTRES - Inspirations --}}
            @include('form.partials.others')


            {{-- SUBMIT --}}
            <div class="btn-container">
                <button class="btn btn-primary btn-lg">Enregistrer</button>
            </div>

        </form>


    </div>
@endsection


@section('js')
    <script>

// POURQUOI UN SITE WEB
        const otherReasonInput = document.getElementById('other-reasons');
        const otherReasonDetails = document.getElementById('other-reasons-details');

        if (otherReasonInput.checked) {
            otherReasonDetails.style.display = "block";
        } else {
            otherReasonDetails.style.display = "none";
        }

        otherReasonInput.addEventListener('change', function() {
            if (this.checked) {
                otherReasonDetails.style.display = "block";
            } else {
                otherReasonDetails.style.display = "none";
            }
        })

// IMAGES PREVIEW
        const imagesInput = document.getElementById('images-input');
        const previewImages = document.getElementById('images-preview');

        let displayImages = function(input, container) {
            if ( input.files ) {
                var filesAmount = input.files.length;
                for(i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        let img = document.createElement('img');
                        img.setAttribute('src', event.target.result);
                        container.appendChild(img);
                    }
                    reader.readAsDataURL(input.files[i])
                }
            }
        }

        imagesInput.addEventListener('change', function() {
            displayImages(this, previewImages);
        })


    </script>
@endsection
