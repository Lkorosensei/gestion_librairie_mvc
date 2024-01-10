<div>
    <h1>Par Pays</h1>
    <select name="" id="">
        <option value="">Sélectionner un Pays</option>
        <?php  foreach($fournisseurs as $f ): ?>
            
                <option value=""><?=$f->Pays?></option>
            
        <?php endforeach; ?>

    </select>

    <button>Rechercher</button>

</div>            
              