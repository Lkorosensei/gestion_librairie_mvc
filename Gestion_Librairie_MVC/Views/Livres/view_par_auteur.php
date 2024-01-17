<div>
    <h1>Par Auteur</h1>
    <select name="" id="">
    <option value="">Sélectionner un Auteur</option>
        <?php  foreach($livres as $l ): ?>
            
                <option value=""><?=$l->Nom_auteur?> <?=$l->Prenom_auteur?> </option>
            
        <?php endforeach; ?>

    </select>

    <button>Rechercher</button>

</div>            
              