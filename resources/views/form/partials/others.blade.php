{{-- AUTRES - Inspirations --}}
<div class="form-big-section" id="others">
    <h2 class="big-title">Informations additionnelles</h2>

    <div class="form-section">
        <h3 class="small-title">Inspirations</h3>
        <p class="text-sm">Vous avez sans doute déjà effectué quelques recherches sur le web pour chercher l’inspiration : <br>concurrence, sites web sur lesquels vous avez aimé naviguer, applications et fonctionnalités que vous aimeriez pouvoir retrouver sur votre site… N’hésitez pas à insérer des liens vers ces sites web en nous précisant ce que vous aimez ou n’aimez pas.</p>
        <div class="form-group">
            <label for="inspiration">Vos inspirations:</label>
            <textarea class="form-control" name="inspiration" id="" cols="30" rows="5">{{ $customer->inspiration->description ? $customer->inspiration->description : old('inspiration') }}</textarea>
            @error('inspiration')
                <div class="text-danger text-sm">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="form-section">
        <h3 class="small-title">Comment avez-vous entendu parler de nous ?</h3>

        <div class="form-group">
            <label for="how_mcts">Nous aimerions savoir comment vous nous avez connu. Vous nous en dites un peu plus ?</label>
            <textarea class="form-control" name="how_mcts" id="" cols="30" rows="5">{{ $customer->how_mcts ? $customer->how_mcts : old('how_mcts') }}</textarea>
            @error('how_mcts')
                <div class="text-danger text-sm">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="form-section">
        <h3 class="small-title">Une ou deux dernières choses à ajouter ? C'est le moment</h3>

        <div class="form-group">
            <label for="additionnal_informations">Complément d'information: </label>
            <textarea class="form-control" name="additionnal_informations" id="" cols="30" rows="5">{{ $customer->additionnal_informations ? $customer->additionnal_informations : old('additionnal_informations') }}</textarea>
            @error('additionnal_informations')
                <div class="text-danger text-sm">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>