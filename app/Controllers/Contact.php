<?php 
namespace App\Controllers;
use App\Models\FormModel;
use CodeIgniter\Controller;

class Contact extends Controller
{
    public function index() {
        echo view('parts/header', ['title' => 'Liste des annonces']);
        echo view('contact');
        /* echo view('parts/footer'); */
    }
 
    public function formValidation() {
        helper(['form', 'url']);
        
        $input = $this->validate([
            'name' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'phone' => 'required|numeric|max_length[10]',
            'message' => 'required|min_length[5]'
        ]);

        $formModel = new Contact();
 
        /* if (!$input) {
            echo view('contact_form', [
                'validation' => $this->validator
            ]);
        } else {
            $formModel->save([
                'name' => $this->request->getVar('name'),
                'email'  => $this->request->getVar('email'),
                'phone'  => $this->request->getVar('phone'),
                'message'  => $this->request->getVar('message')
            ]);          

            return $this->response->redirect(site_url('/contact')); */
        }
    }
}