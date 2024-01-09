<div>
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>

    <h1>Par Localite</h1>
    <select name="" id="">

        <?php  foreach($fournisseurs as $f ): ?>
            
                <option value=""><?=$f->Localite?></option>
            
        <?php endforeach; ?>

    </select>

</div>            
              