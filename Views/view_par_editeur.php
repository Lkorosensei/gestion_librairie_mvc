<div>
    <h1>Par Editeur</h1>
    <select name="" id="">
        <option value="">Sélectionner un Editeur</option>
        <?php  foreach($livres as $l ): ?>
            
                <option value=""><?=$l->Editeur?></option>
            
        <?php endforeach; ?>

    </select>

    <button>Rechercher</button>

</div>            
              