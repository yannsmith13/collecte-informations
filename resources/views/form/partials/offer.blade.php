{{-- VOTRE ENTREPRISE? VOS PRODUITS --}}
<div class="form-big-section" id="society">
    <h2 class="big-title">Votre entreprise, vos produits</h2>

    <div class="form-section">
        <h3 class="small-title">Votre histoire</h3>
        <p class="text-sm">
            Connaître votre histoire nous permettra de créer du texte pour votre audience et de la toucher en lui offrant la possibilité de s’identifier à vous. Nous aimons aussi connaître nos clients pour leur créer un site qui leur ressemble. Vous n’êtes peut-être pas obligé de tout dire, mais plus vos visiteurs en sauront, plus ils auront confiance en vous.
        </p>

        <div class="form-group">
            <label for="history">Votre histoire:</label>
            <textarea class="form-control" name="history" id="" cols="30" rows="5">{{ $customer->detail->history ? $customer->detail->history : old('history')}}</textarea>
            @error('history')
                <div class="text-danger text-sm">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="form-section">
        <h3 class="small-title">Vos produits, offres, services</h3>

        <div class="form-group mb-lg">
            <label for="offer_presentation">Présentation de vos produits, votre offre, vos services:</label>
            <p class="text-sm text-sm-mb-sm">
                Quels sont vos produits et services, quelles sont leurs particularités, quelles sont les déclinaisons, les formules…
            </p>
            <textarea class="form-control" name="offer_presentation" id="" cols="30" rows="5" placeholder="">{{ $customer->detail->offer_presentation ? $customer->detail->offer_presentation : old('offer_presentation')}}</textarea>
            @error('offer_presentation')
                <div class="text-danger text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-lg">
            <label for="offer_price">Tarifs des services proposés:</label>
            <textarea class="form-control" name="offer_price" id="" cols="30" rows="5">{{ $customer->detail->offer_prices ? $customer->detail->offer_prices : old('offer_price')}}</textarea>
            @error('offer_price')
                <div class="text-danger text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-lg">
            <label for="offer_qualities">Qualités de vos produits, votre offre, vos services:</label>
            <p class="text-sm text-sm-mb-sm">
                Quelle est votre plus-value par rapport à vos concurrents, que souhaitez-vous mettre en avant ? Pourquoi est-ce qu’il faudrait vous choisir vous ?
            </p>
            <textarea class="form-control" name="offer_qualities" id="" cols="30" rows="5" placeholder="">{{ $customer->detail->offer_qualities ? $customer->detail->offer_qualities : old('offer_qualities')}}</textarea>
            @error('offer_qualities')
                <div class="text-danger text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-lg">
            <label for="target_audience">Cible:</label>
            <p class="text-sm text-sm-mb-sm">Décrivez au mieux votre clientèle cible</p>
            <textarea class="form-control" name="target_audience" id="" cols="30" rows="5" placeholder="">{{ $customer->detail->target_audience ? $customer->detail->target_audience : old('target_audience')}}</textarea>
            @error('target_audience')
                <div class="text-danger text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-lg">
            <label for="society_moral">Valeurs et qualités de votre entreprise, votre marque:</label>
            <textarea class="form-control" name="society_moral" id="" cols="30" rows="5">{{ $customer->detail->society_moral ? $customer->detail->society_moral : old('society_moral')}}</textarea>
            @error('society_moral')
                <div class="text-danger text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-lg">
            <label for="offer_list">Produits, services, spécialités, compétences:</label>
            <p class="text-sm text-sm-mb-sm">
                Listez, décrivez et expliquez ce que contiennent les produits ou services que vous pouvez proposer à vos clients. <br>
                N'hésitez pas à être le plus complet et précis possible. Toutes les informations qu'auront vos clients seront autant de données qu'ils n'auront pas besoin d'aller chercher ailleurs.
            </p>
            <textarea class="form-control" name="offer_list" id="" cols="30" rows="5" placeholder="">{{ $customer->detail->offer_list ? $customer->detail->offer_list : old('offer_list')}}</textarea>
            @error('offer_list')
                <div class="text-danger text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-lg">
            <label for="activity_area">Zone d'activité, secteur d’intervention:</label>
            <p class="text-sm text-sm-mb-sm">
                Ciblez-vous une clientèle locale, nationale ou internationale ? <br>
                Est-ce que vous vous déplacez, recevez à domicile ou proposez des interventions en ligne, des activités de pleine nature…
            </p>
            <textarea class="form-control" name="activity_area" id="" cols="30" rows="5" >{{ $customer->detail->activity_area ? $customer->detail->activity_area : old('activity_area')}}</textarea>
            @error('activity_area')
                <div class="text-danger text-sm">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>