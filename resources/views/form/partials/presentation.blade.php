{{-- PRESENTATION --}}
<div class="form-big-section" id="presentation">
    <h2 class="big-title">Présentation</h2>

    <div class="form-section">
        {{-- Données personnelles --}}
        <h3 class="small-title">Données personnelles</h3>
        <div class="mb-4 row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="prenom">Prénom:</label>
                    <input type="text" name="prenom" class="form-control"
                        value="{{ $customer->prenom ? $customer->prenom : old('prenom') }}">
                    @error('prenom')
                        <div class="text-danger text-sm">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="nom">Nom:</label>
                    <input type="text" name="nom" class="form-control"
                        value="{{ $customer->nom ? $customer->nom : old('nom') }}">
                    @error('nom')
                        <div class="text-danger text-sm">{{ $message }}</div>
                    @enderror
                </div>
            </div>

        </div>

        <div class="row mb-4">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tel">Numéro de Téléphone:</label>
                    <input type="tel" name="tel" class="form-control"
                        value="{{ $customer->tel ? $customer->tel : old('tel') }}">
                    @error('tel')
                        <div class="text-danger text-sm">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Adresse email:</label>
                    <input type="email" name="email" class="form-control"
                        value="{{ $customer->email ? $customer->email : old('email') }}">
                    @error('email')
                        <div class="text-danger text-sm">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>


    {{-- Entreprise --}}
    <div class="form-section">
        <h3 class="small-title">Votre entreprise</h3>

        <div class="form-group mb-4">
            <label for="society_name">Nom de votre entreprise:</label>
            <input type="text" name="society_name" class="form-control"
                value="{{ $customer->society_name ? $customer->society_name : old('society_name') }}">
            @error('society_name')
                <div class="text-danger text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="row mb-4">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="society_tel">Numéro de Téléphone professionnel:</label>
                    <input type="tel" name="society_tel" class="form-control"
                        value="{{ $customer->society_tel ? $customer->society_tel : old('society_tel') }}">
                    @error('society_tel')
                        <div class="text-danger text-sm">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="society_email">Adresse email professionnelle:</label>
                    <input type="text" name="society_email" class="form-control"
                        value="{{ $customer->society_email ? $customer->society_email : old('society_email') }}">
                    @error('society_email')
                        <div class="text-danger text-sm">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="adresse">Adresse:</label>
                    <input type="text" name="adresse" class="form-control"
                        value="{{ $customer->adresse ? $customer->adresse : old('adresse') }}">
                    @error('adresse')
                        <div class="text-danger text-sm">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="adresse2">Adresse (ligne 2):</label>
                    <input type="text" name="adresse2" class="form-control"
                        value="{{ $customer->adresse2 ? $customer->adresse2 : old('adresse2') }}">
                    @error('adresse2')
                        <div class="text-danger text-sm">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="zip">Code postal:</label>
                    <input type="text" name="zip" class="form-control"
                        value="{{ $customer->zip ? $customer->zip : old('zip') }}">
                    @error('zip')
                        <div class="text-danger text-sm">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="city">Ville:</label>
                    <input type="text" name="city" class="form-control"
                        value="{{ $customer->city ? $customer->city : old('city') }}">
                    @error('city')
                        <div class="text-danger text-sm">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="siret">N° de SIRET:</label>
                    <input type="text" name="siret" class="form-control"
                        value="{{ $customer->siret ? $customer->siret : old('siret') }}">
                    @error('siret')
                        <div class="text-danger text-sm">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="tva">N° de TVA:</label>
                    <input type="text" name="tva" class="form-control"
                        value="{{ $customer->tva ? $customer->tva : old('tva') }}">
                    @error('tva')
                        <div class="text-danger text-sm">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>


    <div class="form-section">
        {{-- Liens réseaux & web --}}
        <h3 class="small-title">Réseaux sociaux & Web</h3>
        <p class="text-sm">Liens vers vos réseaux sociaux existants, sites webs...</p>

        <div class="form-group cke-textarea">
            <label for="reseaux_sociaux">Liens vers vos réseaux sociaux:</label>
            <textarea class="form-control" name="reseaux_sociaux" id="reseaux-sociaux" cols="30" rows="5">{{ $customer->reseaux_sociaux ? $customer->reseaux_sociaux : old('reseaux_sociaux') }}
            </textarea>
            @error('reseaux_sociaux')
                <div class="text-danger text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group cke-textarea">
            <label for="sites_webs">Liens vers vos sites web:</label>
            <textarea class="form-control" name="sites_webs" id="sites-web" cols="30" rows="5">{{ $customer->sites_webs ? $customer->sites_webs : old('sites_webs') }}
            </textarea>
            @error('sites_webs')
                <div class="text-danger text-sm">{{ $message }}</div>
            @enderror
        </div>
    </div>


    <div class="form-section">
        {{-- Nom de domaine et hébergement --}}
        <h3 class="small-title">Nom de domaine & Hébergement</h3>

        <div class="form-group mb-4">
            <label for="wished_domain">Nom de domaine souhaité pour votre futur site:</label>
            <input type="text" name="wished_domain" class="form-control"
                value="{{ $customer->wished_domain ? $customer->wished_domain : old('wished_domain') }}">
            @error('wished_domain')
                <div class="text-danger text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="hosting" value="true"
                @if ($customer->hosting) checked @endif>
            <label class="form-check-label" for="hosting">
                J'ai déjà une solution d'hébergement pour mon futur site web.
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="hosting" value="false"
                @if (!$customer->hosting) checked @endif>
            <label class="form-check-label" for="hosting">
                Je n'ai pas de solution d'hébergement pour mon futur site web.
            </label>
        </div>
    </div>


    <div class="form-section">
        {{-- Budget --}}
        <h3 class="small-title">Budget</h3>

        <div class="form-group mb-4">
            <label for="budget">Budget alloué à votre projet:</label>
            <input type="text" name="budget" class="form-control"
                value="{{ $customer->budget ? $customer->budget : old('budget') }}">
            @error('budget')
                <div class="text-danger text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="wished_prestations">Quelles prestations souhaitez-vous englober dans ce budget ?</label>
            <textarea type="text" name="wished_prestations" class="form-control">{{ $customer->wished_prestations ? $customer->wished_prestations : old('wished_prestations') }}
            </textarea>
            @error('wished_prestations')
                <div class="text-danger text-sm">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="form-section">
        <h3 class="small-title">Pourquoi un site web ?</h3>
        <p class="text-sm">Un site web répond généralement à des objectifs bien précis. Dans votre cas et
            pour votre activité, nous aimerions savoir quels sont vos objectifs.<br>Cochez les cases qui
            correspondent :</p>
        @foreach ($reasons as $reason)
            <div class="form-check mb-4">
                <input type="checkbox" class="form-check-input" name="reasons[]" value="{{ $reason->id }}"
                @if (in_array($reason->id, $customer_reasons)) checked @endif />
                <label for="reasons" class="form-check-label">{{ $reason->description }}</label>
            </div>
        @endforeach

        <div class="form-check mb-4">
            <input type="checkbox" class="form-check-input" id="other-reasons" name="reasons[]"
            value="{{ $other_reasons->id }}" 
            @if (in_array($other_reasons->id, $customer_reasons)) checked @endif />
            <label for="reasons" class="form-check-label">{{ $other_reasons->description }}</label>
        </div>

        <div class="form-group">
            <textarea class="form-control" name="other-reasons" id="other-reasons-details" cols="30" rows="5"
                placeholder="Détaillez au maximum les objectifs que vous souhaitez atteindre grâce à votre site">{{ $customer->other_reasons ? $customer->other_reasons : old('other_reasons') }}
            </textarea>
        </div>
        @error('reasons')
            <div class="text-danger text-sm">{{ $message }}</div>
        @enderror
    </div>


</div>
