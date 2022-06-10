<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/temp.css') }}">

    <style>
        body {
            margin: 1rem;
        }
        .container {
            max-width: 70rem;
            margin-left: auto;
            margin-right: auto;
        }
        .logo-container {
            position: relative;
            width: 100%;
            height: 100px;
        }
        .logo-container img {
            width: 380px;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        .section {
            margin-bottom: 5rem;
        }
        .sub-section {
            margin-bottom: 2rem;
        }
        .section h2 {
            color: #ed213a;
        }
        .section h4 {
            display: inline;
            color: #0064fe;
        }
        .section p {
            display: inline;
        }
        .block-inline {
            display: inline;
        }
        .textarea {
            
        }
    </style>
    <title>PDF</title>
</head>
<body style="background: white;">
    <div class="container">
        <div class="logo-container">
            <img src="{{ asset('images/logo-mcts.jpg') }}" style="margin: auto">
        </div>
    
        <div class="section">
            <h2>Présentation</h2>
    
            <div class="sub-section">
                @if ($customer->nom) 
                <div class="block-inline">
                    <h4>Nom: </h4>
                    <p>{{ $customer->nom }}</p>
                </div>
                @endif
    
                <br>
    
                @if ($customer->prenom) 
                <div class="block-inline">
                    <h4>Prénom: </h4>
                    <p>{{ $customer->prenom }}</p>
                </div>
                @endif
    
                <br>
                
                @if ($customer->tel) 
                <div class="block-inline">
                    <h4>N° de téléphone: </h4>
                    <p>{{ $customer->tel }}</p>
                </div>
                @endif
    
                <br>
    
                @if ($customer->email) 
                <div class="block-inline">
                    <h4>Email personnel: </h4>
                    <p>{{ $customer->email }}</p>
                </div>
                @endif
    
                <br>
            </div>
    
            <div class="sub-section">
                @if ($customer->society_name) 
                <div class="block-inline">
                    <h4>Nom de la société: </h4>
                    <p>{{ $customer->society_name }}</p>
                </div>
                @endif
    
                <br>
    
                @if ($customer->society_tel) 
                <div class="block-inline">
                    <h4>N° de téléphone professionnel: </h4>
                    <p>{{ $customer->society_tel }}</p>
                </div>
                @endif
    
                <br>
                
                @if ($customer->society_email) 
                <div class="block-inline">
                    <h4>Email professionnel: </h4>
                    <p>{{ $customer->society_email }}</p>
                </div>
                @endif
    
                <br>
    
            </div>
    
            <div class="sub-section">
                @if ($customer->adresse) 
                <div class="block-inline">
                    <h4>Adresse: </h4>
                    <p>{{ $customer->adresse }}</p>
                </div>
                @endif
    
                <br>
    
                @if ($customer->adresse2) 
                <div class="block-inline">
                    <h4>Adresse (ligne 2): </h4>
                    <p>{{ $customer->adresse2 }}</p>
                </div>
                @endif
    
                <br>
                
                @if ($customer->zip) 
                <div class="block-inline">
                    <h4>Code postal: </h4>
                    <p>{{ $customer->zip }}</p>
                </div>
                @endif
    
                <br>
    
                @if ($customer->city) 
                <div class="block-inline">
                    <h4>Ville: </h4>
                    <p>{{ $customer->city }}</p>
                </div>
                @endif
    
                <br>
    
            </div>
    
            <div class="sub-section">
                @if ($customer->siret) 
                <div class="block-inline">
                    <h4>N° de Siret: </h4>
                    <p>{{ $customer->siret }}</p>
                </div>
                @endif
    
                <br>
    
                @if ($customer->tva) 
                <div class="block-inline">
                    <h4>N° de TVA intracommunautaire: </h4>
                    <p>{{ $customer->tva }}</p>
                </div>
                @endif
    
                <br>
            </div>
    
            <div class="sub-section">
                @if ($customer->reseaux_sociaux) 
                <div class="block-inline">
                    <h4>Réseaux sociaux existants: </h4>
                    <p>{!! $customer->reseaux_sociaux !!}</p>
                </div>
                @endif
    
                <br>
    
                @if ($customer->sites_web) 
                <div class="block-inline">
                    <h4>Sites web existants: </h4>
                    <p class="textarea">{{ $customer->sites_web }}</p>
                </div>
                @endif
    
                <br>
    
                @if ($customer->wished_domain) 
                <div class="block-inline">
                    <h4>Nom de domaine souhaité: </h4>
                    <p>{{ $customer->wished_domain }}</p>
                </div>
                @endif
    
                <br>
    
                @if ($customer->hosting) 
                <div class="block-inline">
                    <p >J'ai déjà une solution d'hébergement</p>
                </div>
                @else
                    <p>Je n'ai pas encore de solution d'hébergement</p>
                @endif
                <br>
            </div>
    
            <div class="sub-section">
                @if ($customer->budget) 
                    <div class="block-inline">
                        <h4>Budget approximatif: </h4>
                        <p>{{ $customer->budget }}</p>
                    </div>
                    @endif
                <br>
    
                @if ($customer->wished_prestations) 
                    <div class="block-inline">
                        <h4>Prestations englobées dans le wished_prestations: </h4>
                        <p class="textarea">{{ $customer->wished_prestations }}</p>
                    </div>
                    @endif
                <br>
            </div>
    
            <div class="sub-section">
                <h4>Pourquoi un site web ?</h4>
                <ul>
                    @foreach ($customer->reasons->where('id', '!=', 1) as $reason)
                        <li>{{ $reason->description }}</li>
                    @endforeach
                    @if ($customer->other_reasons)
                    <li class="textarea">{{ $customer->other_reasons }}</li>
                    @endif
                </ul>
            </div>
    
        </div>

        <div class="section">
            <h2>Identité graphique et médias</h2>

            <div class="sub-section">
                @if ($customer->graph->description) 
                <div class="block-inline">
                    <h4>Votre univers graphique: </h4>
                    <p>{{ $customer->graph->description }}</p>
                </div>
                @endif
    
                <br>
            </div>
        </div>

        <div class="section">
            <h2>Votre entreprise, vos produits</h2>

            <div class="sub-section">
                @if ($customer->detail->history) 
                <div class="block-inline">
                    <h4>Votre histoire: </h4>
                    <p>{{ $customer->detail->history }}</p>
                </div>
                @endif
    
                <br>
            </div>

            <div class="sub-section">
                @if ($customer->detail->offer_presentation) 
                <div class="block-inline">
                    <h4>Présentation de vos produits, offres, services: </h4>
                    <p>{{ $customer->detail->offer_presentation }}</p>
                </div>
                @endif
    
            </div>


            <div class="sub-section">
                @if ($customer->detail->offer_price) 
                <div class="block-inline">
                    <h4>Tarifs des services proposés: </h4>
                    <p>{{ $customer->detail->offer_price }}</p>
                </div>
                @endif
    
                <br>
            </div>


            <div class="sub-section">
                @if ($customer->detail->offer_qualities) 
                <div class="block-inline">
                    <h4>Qualités de vos produits, offres, services: </h4>
                    <p>{{ $customer->detail->offer_qualities }}</p>
                </div>
                @endif
    
                <br>
            </div>

            <div class="sub-section">
                @if ($customer->detail->target_audience) 
                <div class="block-inline">
                    <h4>Clientèle cible: </h4>
                    <p>{{ $customer->detail->target_audience }}</p>
                </div>
                @endif
    
                <br>
            </div>

            <div class="sub-section">
                @if ($customer->detail->society_moral) 
                <div class="block-inline">
                    <h4>Valeurs et qualités de votre entreprise, votre marque: </h4>
                    <p>{{ $customer->detail->society_moral }}</p>
                </div>
                @endif
    
                <br>
            </div>

            <div class="sub-section">
                @if ($customer->detail->offer_list) 
                <div class="block-inline">
                    <h4>Produits, services, spécialités, compétences: </h4>
                    <p>{{ $customer->detail->offer_list }}</p>
                </div>
                @endif
    
                <br>
            </div>

            <div class="sub-section">
                @if ($customer->detail->activity_area) 
                <div class="block-inline">
                    <h4>Zone d'activité, secteur d’intervention: </h4>
                    <p>{{ $customer->detail->activity_area }}</p>
                </div>
                @endif
    
                <br>
            </div>
        </div>

        <div class="section">
            <h2>Informations additionnelles</h2>
            <div class="sub-section">
                @if ($customer->inspiration->description) 
                <div class="block-inline">
                    <h4>Inspirations: </h4>
                    <p>{{ $customer->inspiration->description }}</p>
                </div>
                @endif
    
                <br>
            </div>

            <div class="sub-section">
                @if ($customer->additionnal_informations) 
                <div class="block-inline">
                    <h4>Notes complémentaires: </h4>
                    <p>{{ $customer->additionnal_informations }}</p>
                </div>
                @endif
    
                <br>
            </div>
        </div>
    </div>
</body>
</html>