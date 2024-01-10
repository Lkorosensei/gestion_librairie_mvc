<div>
    <h1>Par Localite</h1>
    <select name="" id="">
        <option value="">Sélectionner une Localité</option>
        <?php  foreach($fournisseurs as $f ): ?>
            
                <option value=""><?=$f->Localite?></option>
            
        <?php endforeach; ?>

    </select>

    <button>Rechercher</button>

</div>            
              