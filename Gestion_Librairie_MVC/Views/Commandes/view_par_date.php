<div>
    <h1>Par Date</h1>
    <select name="" id="">
    <option value="">Sélectionner une Date :</option>
        <?php  foreach($commandes as $c ): ?>
            
                <option value=""><?=$c->Date_achat?></option>
            
        <?php endforeach; ?>

    </select>

    <button>Rechercher</button>

</div>            
              