<?php

class Controller_commandes extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

    public function action_all_commandes()
    {
        $m=Model::get_model();
        $data=['commandes'=>$m->get_all_commandes()];
        $this->render("all_commandes",$data);

    }

    public function action_par_editeur_commandes()
    {
        // echo "je suis dans l'action du controller ";
        $m=Model::get_model();
        $data=['commandes'=>$m->get_par_editeur_commandes()];
        $this->render("par_editeur_commandes",$data);
        
    }


    public function action_par_fournisseur()
    {
        $m=Model::get_model();
        $data=['commandes'=>$m->get_par_fournisseur()];
        $this->render("par_fournisseur",$data);

    }


    public function action_par_date()
    {
        $m=Model::get_model();
        $data=['commandes'=>$m->get_par_date()];
        $this->render("par_date",$data);

    }

    
}