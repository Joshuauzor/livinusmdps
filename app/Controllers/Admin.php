<?php

namespace App\Controllers;
use CodeIgniter\Controller; 
use App\Models\PatientModel; 
use App\Models\AdminModel; 
use App\Models\SymptomsModel; 
use App\Models\PrescriptionModel; 

// use App\Libraries\App_services;
// import configurations
use Config\Services;
use Config\Database;
class Admin extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url', 'date', 'email']);
        // $this->app_services = new App_services();
    }

    public function index(){
        $data['title'] = 'Administrator - Malaria diagnosis and prescription system';
        $session = session();
        $email = \config\Services::email();
        
        // echo "<pre>";
        // print_r ($this->request->getPost());
        // echo "</pre>"; die;
        
        if($this->request->getMethod() == 'post'){
            $rules = [
                'email'    => [
                    'rules'  => 'required|valid_email|trim',
                    'errors' => [
                        'required' => 'email is required!'
                    ]
                ],
                'password' => 'required'
            ];

            if(!$this->validate($rules)){
                $data['validation'] = $this->validator;
            }else{
                $admin_model = new AdminModel();
                $user = $admin_model->getOne(array('email' => $this->request->getPost('email')));
                // echo '<pre>'; print_r($user); die;
                if($user){
                    $comparePass = password_verify($this->request->getPost('password'), $user->password);
                    if($comparePass){
                        $sessionData = [ 
                            'username' => $user->username,
                            'email' => $user->email,
                        ];

                        $session->set('user', $sessionData);
                        $session->setFlashdata("success", "Welcome {$user->username}"); 
                        return redirect()->to(base_url('admin/home'));
                                                                                        
                    }
                    else{
                        $session->setFlashdata('error', 'Incorrect email and/or password');
                        return redirect()->to(current_url());
                    }
                }else{
                    $session->setFlashdata('error', 'Incorrect email and/or password');
                    return redirect()->to(current_url());
                }
            }
        }

        echo view('admin/login', $data);
    }


	#register
	public function register(){

        $session = session();
        $email = \config\Services::email();
        $data['title'] = 'Livinus - Malaria diagnosis and prescription system';
        // echo '<pre>';  print_r($data['countries']); die;
        // echo '<pre>'; print_r($data['countries']); '</pre>';
        if($this->request->getMethod() == 'post'){
            $rules = [
                'username' => 'required|string',      
                'email'    => [
                    'rules'  => 'required|valid_email|trim|is_unique[admin.email]',
                    'errors' => [
                        'is_unique' => '{value} is not available!'
                    ]
                ],
                'password' => 'required|min_length[5]'
            ];

            if(!$this->validate($rules)){
                $data['validation'] = $this->validator;
            }else{
                $uuid = md5(str_shuffle('dhabsuhiqooc273vdhab291sncsbajboednvbapwweuowxmmc;ada'));
                $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
                $data = [
                    'uuid' => $uuid,
                    'username' => $this->request->getPost('username', FILTER_SANITIZE_STRING),
                    'email' => $this->request->getPost('email', FILTER_SANITIZE_STRING),
                    'password' => $password,
                ];
                $user_model = new AdminModel();
                $user_model->insert($data);

                try {
                    $to = $this->request->getVar('email');
                    $subject = 'Your Malaria Diagnosis';
                    $reason = 'Info';
                    $message = 'Dear '.$this->request->getVar('name').',<br><br> You have successfully submitted your diagnosis. <br><br> Our health practitioner will send you an email with your result.<br>
                    <br> 
                    </a><br>Be Safe,<br> 
                    Livinus MDPS';

                    #call send_mail helper
                    send_mail($to, $subject, $reason, $message);
                    return redirect()->to(base_url('admin'));

                } catch (\Exception $e) {
                    die($e->getMessage());
                }  

                
                return redirect()->to(base_url('admin/register'));
            }
        }

		echo view('admin/register', $data);
	}

    public function home(){
        $session = session();
        $email = \config\Services::email();
        $PatientModel = new PatientModel();

        $data['title'] = 'Livinus - Malaria diagnosis and prescription system';
        $data['recentDiagnosis'] = $PatientModel->getLimit();
        $data['positive'] = $PatientModel->getAllCondition(array('result' => 'positive'));
        $data['negative'] = $PatientModel->getAllCondition(array('result' => 'negative'));

        echo view('admin/home', $data);
    }

    public function symptoms(){
        $session = session();
        $email = \config\Services::email();
        if(!$session->user)
            return redirect()->to(base_url('admin'));
        
        // echo "<pre>";
        // print_r ();
        // echo "</pre>"; die;
        $symptoms_model = new SymptomsModel();

        $data['title'] = 'Livinus - Malaria diagnosis and prescription system';
        $data['symptoms'] = $symptoms_model->getAll();

        if($this->request->getMethod() == 'post'){
            $rules = [
                'symptoms' => 'required',
                'malaria_type' => 'required'
            ];

            if(!$this->validate($rules)){
                $data['validation'] = $this->validator;
            }else{
                $data = [
                    'symptoms' => $this->request->getVar('symptoms'),
                    'malaria_type' => $this->request->getVar('malaria_type'),
                ];
                $user = $symptoms_model->insert($data);
                $session->setFlashdata('success', 'Symptoms added successfully');
                return redirect()->to(current_url());
            }
        }

        echo view('admin/symptoms', $data);
    }

    public function edit_symptoms(){
        $session = session();
        $email = \config\Services::email();
        if(!$session->user)
            return redirect()->to(base_url('admin'));
        
        // echo "<pre>";
        // print_r ();
        // echo "</pre>"; die;
        $symptoms_model = new SymptomsModel();

       

        if($this->request->getMethod() == 'post'){
            $rules = [
                'symptoms_id' => 'required',
                'symptoms' => 'required',
                'malaria_type' => 'required'
            ];

            if(!$this->validate($rules)){
                $data['validation'] = $this->validator;
            }else{
                $data = [
                    'symptoms' => $this->request->getVar('symptoms'),
                    'malaria_type' => $this->request->getVar('malaria_type'),
                ];
                $user = $symptoms_model->update($this->request->getVar('symptoms_id'), $data);
                $session->setFlashdata('success', 'Symptoms updated successfully');
                return redirect()->to(base_url(('admin/symptoms')));
            }
        }
    }

    public function delete_symptoms(){
        $session = session();
        $email = \config\Services::email();
        if (!$this->request->isAJAX()){
            exit('No direct allowed');
        }
        
        // echo "<pre>";
        // print_r ();
        // echo "</pre>"; die;
        $symptoms_model = new SymptomsModel();

        $symptoms_model->delete_one($this->request->getVar('symptoms_id'));
        echo json_encode(array('status' => 'success'));

    }

    public function positive(){
        $session = session();
        $email = \config\Services::email();
        $PatientModel = new PatientModel();

        $data['title'] = 'Livinus - Malaria diagnosis and prescription system';
        $data['positive'] = $PatientModel->getAllCondition(array('result' => 'positive'));
        
        echo view('admin/positive', $data);
    }

    public function negative(){
        $session = session();
        $email = \config\Services::email();
        $PatientModel = new PatientModel();

        $data['title'] = 'Livinus - Malaria diagnosis and prescription system';
        $data['negative'] = $PatientModel->getAllCondition(array('result' => 'negative'));
        
        echo view('admin/negative', $data);
    }

    // 
    public function prescription(){
        $session = session();
        $email = \config\Services::email();
        if(!$session->user)
            return redirect()->to(base_url('admin'));
        
       
        $prescription_model = new PrescriptionModel();

        $data['title'] = 'Livinus - Malaria diagnosis and prescription system';
        $data['prescription'] = $prescription_model->getAll();

        echo view('admin/prescription', $data);
    }

    public function edit_prescription(){
        $session = session();
        $email = \config\Services::email();
        if(!$session->user)
            return redirect()->to(base_url('admin'));
        
        // echo "<pre>";
        // print_r ();
        // echo "</pre>"; die;
        $prescription_model = new PrescriptionModel();

       

        if($this->request->getMethod() == 'post'){
            $rules = [
                'prescription_id' => 'required',
                'prescription' => 'required',
            ];

            if(!$this->validate($rules)){
                $data['validation'] = $this->validator;
            }else{
                $data = [
                    'prescription' => $this->request->getVar('prescription'),
                ];
                $user = $prescription_model->update($this->request->getVar('prescription_id'), $data);
                $session->setFlashdata('success', 'Prescription updated successfully');
                return redirect()->to(base_url(('admin/prescription')));
            }
        }
    }

    public function delete_prescription(){
        $session = session();
        $email = \config\Services::email();
        if (!$this->request->isAJAX()){
            exit('No direct allowed');
        }
        
        // echo "<pre>";
        // print_r ();
        // echo "</pre>"; die;
        $symptoms_model = new SymptomsModel();

        $symptoms_model->delete_one($this->request->getVar('symptoms_id'));
        echo json_encode(array('status' => 'success'));

    }


    // 

    public function logout(){
        session()->destroy();
        return redirect()->to(base_url('admin'));
    }
	
}