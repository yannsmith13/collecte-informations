{{-- IDENTITÉ GRAPHIQUE & MÉDIAS --}}
<div class="form-big-section" id="medias">
    <h2 class="big-title">Identité graphique & Médias</h2>

    <div class="form-section">
        <h3 class="small-title">Identité graphique</h3>
        <p class="text-sm">
            Avez-vous déjà une charte graphique, un logo ? Parlez-nous de votre univers graphique et de ce qu'il
            représente pour vous, de comment il s'adresse à votre cible.
            <br>Vous n'en avez pas ? Dites nous comment vous l'imaginez.
        </p>

        <div class="form-group mb-4">
            <label for="graph-description">Votre univers graphique:</label>
            <textarea class="form-control" name="graph-description" id="" cols="30" rows="5">{{ $customer->graph->description ? $customer->graph->description : old('graph-description') }}
            </textarea>
            @error('graph-description')
                <div class="text-danger text-sm">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="form-section">
        <h3 class="small-title">Images</h3>
        <div class="form-group">
            <label for="images" class="form-label">Si vous avez des images à nous transmettre, qui puissent nous aider à identifier votre univers graphique ou que que souhaitez voir apparaître sur votre futur site, merci de les charger ici:</label>
            <input type="file" class="form-control" id="images-input" name="images[]" placeholder="Choisissez vos images">
            @error('images')
                <div class="text-danger text-sm">{{ $message }}</div>
            @enderror
        </div>
        <div class="images-preview" id="images-preview">
            @if (count($customer->images) > 0)
                @foreach ($customer->images as $img)
                    <img src="{{ asset($img->path) }}" >
                @endforeach
            @endif
        </div>
    </div>
</div>