<?php

namespace App\Controllers;
use App\Models\AdminModel;
use App\Models\CleanClientModel;
use App\Models\ClientModel;
use App\Models\UserModel;


class Home extends BaseController
{
    //le nom index ,, qu'on va appeler dans le Routes 
    public function index(): string
    {
        $model = new UserModel();
        $data['livres'] = $model->findAll();

        //nom du fichier .php ou on va afficher 
        return view('liste', $data);
    }

    public function delete($id)
    {
        $model = new UserModel();
        $model->delete($id);
        //$data['livres'] = $model->findAll();
        return redirect()->to('liste');
    }

    public function ajoutLivre(): string
    {
        return view('ajoutLivre');
    }



    public function AddLivre()
    {
        $model = new UserModel();
        $model->save([
            'titre' => $this->request->getPost('titre'),
            'auteur' => $this->request->getPost('auteur'),
            'dateCreation' => $this->request->getPost('dateCreation')
        ]);
        return redirect()->to('liste');
    }

    public function edit($id)
    {
        $model = new UserModel();
        $data['livres'] = $model->find($id);

        return view('modifierLivre', $data); // Affiche le formulaire de modification
    }

    public function update($id)
    {
        $model = new UserModel();
        $model->update($id, [
            'titre' => $this->request->getPost('titre'),
            'auteur' => $this->request->getPost('auteur'),
            'dateCreation' => $this->request->getPost('dateCreation')
        ]);
        return redirect()->to('/');
    }

    public function home(): string
    {
        $model = new UserModel();
        $modelAdmin = new AdminModel();
        // $dataAdmin['user'] = $modelAdmin->find($);
        $dataLivre['livres'] = $model->findAll();

        return view('home', $dataLivre);
    }

    public function homme($idAdmin)
    {
        $modelAdmin = new AdminModel();
        $dataAdmin['user'] = $modelAdmin->find($idAdmin);
        return view('home', $idAdmin);
    }

    public function AddClient()
    {
        $model = new ClientModel();
        $modelLivre = new UserModel();
        $titreLivre = $this->request->getPost('book');
        $dataLivre = $modelLivre->where('titre', $titreLivre)->first();
        if ($dataLivre) {
            // Enregistrer les informations du client
            $model->save([
                'livre' => $titreLivre,
                'nom' => $this->request->getPost('nom'),
                'adresse' => $this->request->getPost('adresse'),
                'tel' => $this->request->getPost('tel'),
                'date_emprunt' => $this->request->getPost('dateEmprunt'),
            ]);

            // Mettre à jour la disponibilité du livre
            $modelLivre->update($dataLivre['id'], [
                'disponibilite' => 0
            ]);

            return redirect()->to('listeClient');
        } else {
            // Gérer le cas où le livre n'a pas été trouvé
            return redirect()->back()->with('error', 'Livre non trouvé.');
        }
    }

    public function listeClient()
    {
        $model = new ClientModel();
        $data['client'] = $model->findAll();

        return view('listeClient', $data);
    }

    public function deleteClient($id)
    {
        $model = new ClientModel();
        $modelLivre = new UserModel();
        $client = $model->find($id);
        $dataLivre = $modelLivre->where('titre',$client['livre'])->first();

        $modelLivre->update($dataLivre['id'],[
            'disponibilite' => 1
        ]);

        $model->delete($id);

        return redirect()->to('listeClient');
    }

    public function login()
    {
        return view('login');
    }

    public function loginClick()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $model = new AdminModel();
        $user = $model->where('username', $username)->first();
        // $pathHome = 'home/'.$user['id'];
        if ($user['password'] == $password) {
            session()->set('isLoggedIn', true);
            session()->set('userData', $user);

            return redirect()->to('home');
        } else {
            return redirect()->to('/');
        }

    }

    public function signIn()
    {
        return view('signIn');
    }

    public function signInClick()
    {
        $model = new AdminModel();
        $model->save([
            'username' => $this->request->getPost('user name'),
            'password' => $this->request->getPost('password'),
        ]);
        return redirect()->to('/');
    }

    public function accueil()
    {
        return view('home');
    }

    public function RendreLivre($ids){
        $modelClient = new ClientModel();
        $modelLivre = new UserModel();
        $modelCleanClient = new CleanClientModel();

        list($idClient, $titreLivre) = explode('-', $ids);

        $dataLivre = $modelLivre->where('titre', $titreLivre)->first();
        $dataClient = $modelClient->find($idClient);

        $modelLivre->update($dataLivre['id'], [
            'disponibilite' => 1
        ]);

        $modelCleanClient->save([
            'nom' => $dataClient['nom'],
            'livre' => $dataClient['livre'],
            'date' => date('Y-m-d')
        ]);

        $modelClient->delete($idClient);
        $data = [
            'clientclean' => $modelCleanClient->findAll()
        ];

        return redirect()->to('listeCleanClient');
    }

    public function listeCleanClient(){
        $model = new CleanClientModel();
        $data['clientclean'] = $model->findAll();

        return view('listeCleanClient',$data);
    }
}

