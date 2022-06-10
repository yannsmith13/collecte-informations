@extends('adminlte::page')

@section('title', 'Index Formulaires')

@section('content_header')
    <div class="container d-flex justify-content-between">
        <h1>Index</h1>
        <form action="" method="post">
            @csrf
            <button type="submit" class="btn btn-primary">Nouveau formulaire client</button>
        </form>
    </div>
@stop

@section('content')
    @if (Session::has('infos'))
        <div class="container">
            <div class="alert alert-success">{{ Session::get('infos') }}</div>
        </div>
    @endif

    <div class="container">
        <table class="table table-striped">
            <thead class="">
                <tr>
                    <th>Client</th>
                    <th class="text-center">Dernière mise à jour</th>
                    
                    <th class="text-center">Lien vers le formulaire</th>
                    <th class="text-center">URL</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        
                        <td>
                            @if ($customer->prenom || $customer->nom)
                                {{ $customer->prenom }} {{ $customer->nom }}
                            @else
                                <span class="text-danger">Nouveau formulaire</span>
                            @endif
                        </td>

                        <td class="text-center">
                            {{ $customer->date_update() }}
                        </td>

                        <td class="text-center">
                            <a target="_blank" href="{{ route('form.index', $customer) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="svg-table" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                                </svg>
                            </a>
                        </td>
                        <td class="text-center ">
                            <span class="link-to-copy  cursor-pointer" title="clic pour pour copier dans le presse-papier">
                                {{ $customer->link_form() }}
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        

        <div class="pagination">
            {{ $customers->links() }}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/temp.css') }}">
@stop

@section('js')
    <script>
        // Copy Link to clipboard
        const linksToCopy = document.querySelectorAll('.link-to-copy');
        linksToCopy.forEach((link) => {
            link.addEventListener('click', () => {
                console.log(link.innerText)
                let originalText = link.innerText;
                link.innerText = "Copié !";
                link.classList.add('copied');
                navigator.clipboard.writeText(originalText);
                setTimeout(() => {
                    link.innerText = originalText;
                    link.classList.remove('copied');
                }, 1250);
            })
        })
    </script>
@stop
