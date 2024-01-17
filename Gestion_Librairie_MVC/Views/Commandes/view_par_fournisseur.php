<div>
    <h1>Par Fournisseur</h1>
    <select name="" id="">
    <option value="">Sélectionner un Fournisseur</option>
        <?php  
            echo "je suis dans la view";

            foreach($commandes as $c ): ?>
            
                <option value=""><?=$c->Raison_sociale?></option>
            
        <?php endforeach; ?>

    </select>

    <button>Rechercher</button>

</div>            
              
