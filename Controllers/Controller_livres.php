<?php

class Controller_livres extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

    public function action_all_livres()
    {
        $m=Model::get_model();
        $data=['livres'=>$m->get_all_livres()];
        $this->render("all_livres",$data);

    }

    public function action_par_titre()
    {
        $m=Model::get_model();
        $data=['livres'=>$m->get_par_titre()];
        $this->render("par_titre",$data);

    }

    public function action_par_auteur()
    {
        $m=Model::get_model();
        $data=['livres'=>$m->get_par_auteur()];
        $this->render("par_auteur",$data);

    }

    public function action_par_editeur()
    {
        $m=Model::get_model();
        $data=['livres'=>$m->get_par_editeur()];
        $this->render("par_editeur",$data);

    }
}