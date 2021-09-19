<?php

namespace App\Controllers;
use CodeIgniter\Controller; 
use App\Models\PatientModel; 
use App\Models\SymptomsModel; 
use App\Models\PrescriptionModel; 

// use App\Libraries\App_services;
// import configurations
use Config\Services;
use Config\Database;
class Home extends BaseController
{   
    public function __construct()
	{
		helper(['form', 'url', 'date', 'email']);
        // $this->app_services = new App_services();
	}

    public function index()
    {
        $data['title'] = 'Livinus - Malaria diagnosis and prescription system';
        $symptoms_model = new SymptomsModel();
        $data['Plasmodium_Malaria']  = $symptoms_model->getAllCondition(array('malaria_type' => 'Plasmodium Malaria'));
        $data['Plasmodium_Ovale'] = $symptoms_model->getAllCondition(array('malaria_type' => 'Plasmodium Ovale'));
        $data['Plasmodium_Vivax'] = $symptoms_model->getAllCondition(array('malaria_type' => 'Plasmodium Vivax'));
        $data['Plasmodium_Falciparum'] = $symptoms_model->getAllCondition(array('malaria_type' => 'Plasmodium Falciparum'));

        
        // echo "<pre>";
        // print_r ($data['Plasmodium_Malaria']);
        // echo "</pre>"; die;
        
        echo view('landing/home', $data);
    }

    public function diagnose(){
        if (!$this->request->isAJAX()){
            exit('No direct allowed');
        }
		$email = \config\Services::email();

        if ($this->request->getMethod() == 'post') {
            $symptoms = $this->request->getVar('symptoms');
            #create empty array for them
            $malaria_types = [];
            $submitted_symptoms = [];
            $symptoms = $this->request->getVar('symptoms'); 
            if ($this->request->getVar('symptoms') != null) {
                #split the symptoms from the type and push into a new array for each
                foreach ($symptoms as $row) {
                    $value = explode("_", $row);
                    array_push($submitted_symptoms, $value[0]);
                    array_push($malaria_types, $value[1]);
                }
                $data['submitted_symptoms'] = $submitted_symptoms;

                $tmp = array_count_values($malaria_types);
                #initialize all values to zero in case no occurence
                $symptoms1 = 0;
                $symptoms2 = 0;
                $symptoms3 = 0;
                $symptoms4 = 0;

                #check if user selected malaria type in checkbox
                if(in_array('Plasmodium Malaria', $malaria_types)){
                    $symptoms1 = $tmp['Plasmodium Malaria'];
                }elseif(in_array('Plasmodium Ovale', $malaria_types)){
                    $symptoms2 = $tmp['Plasmodium Ovale'];
                }elseif(in_array('Plasmodium Vivax', $malaria_types)){
                    $symptoms3 = $tmp['Plasmodium Vivax'];
                }elseif(in_array('Plasmodium Falciparum', $malaria_types)){
                    $symptoms4 = $tmp['Plasmodium Falciparum'];
                }

                
                #check the highest occured value in the check
                if ($symptoms1 > $symptoms2 && $symptoms1 > $symptoms3 && $symptoms1 > $symptoms4) {
                    $malaria_type =  'Plasmodium Malaria';
                } elseif ($symptoms2 > $symptoms1 && $symptoms2 > $symptoms3 && $symptoms2 > $symptoms4) {
                    $malaria_type =  'Plasmodium Ovale';
                } elseif ($symptoms3 > $symptoms1 && $symptoms3 > $symptoms2 && $symptoms3 > $symptoms4) {
                    $malaria_type =  'Plasmodium Vivax';
                } elseif ($symptoms4 > $symptoms1 && $symptoms4 > $symptoms2 && $symptoms4 > $symptoms4) {
                    $malaria_type =  'Plasmodium Falciparum';
                } else {
                    $malaria_type = 'normal malaria';
                }
                $data['malaria_type'] = $malaria_type;
            }
            // 
            // var_dump($malaria_type); die;

            $data = [
                'name' => $this->request->getVar('name'),
                'phone' => $this->request->getVar('phone'),
                'email' => $this->request->getVar('email'),
                'symptoms' => (!empty($this->request->getVar('symptoms'))) ? json_encode($submitted_symptoms) : 'none',
                'message' => (!empty($this->request->getVar('message'))) ? $this->request->getVar('message') : 'none',
                'malaria_type' => (!empty($malaria_type)) ? $malaria_type : 'none',
                'result' => (!empty($malaria_type)) ? 'Positive' : 'Negative',
                'keep_updated' => (!empty($this->request->getVar('updated'))) ? $this->request->getVar('updated') : 'off',
            ]; 
           
            $PatientModel = new PatientModel();
            $PatientModel->insert($data);
            $patient_id = $PatientModel->getInsertID();

           
            try {
                $to = $this->request->getVar('email');
                $subject = 'Your Malaria Diagnosis';
                $reason = 'Info';
                $message = 'Dear '.$this->request->getVar('name').',<br><br> You have successfully submitted your diagnosis. <br><br> Our health practitioner will contact you soon.<br>
                <br> 
                </a><br>Be Safe,<br> 
                Livinus MDPS';

                #call send_mail helper
                send_mail($to, $subject, $reason, $message);
            } catch (\Exception $e) {
                die($e->getMessage());
            }
        
            echo json_encode(array('status' => 'success', 'patient_id' => $patient_id));
            
        }
    }

    public function result($id){
        $data['title'] = 'Livinus - Malaria diagnosis and prescription system';

        // var_dump($id); die;
        if(empty($id)){
            return redirect()->to(base_url());
        }
        $PatientModel = new PatientModel();
        $prescription_model = new PrescriptionModel();

        $patient = $PatientModel->getOne(array('patient_id' => $id));

        if(!$patient){
            return redirect()->to(base_url());
        }else{
            $data['patient'] = $patient;

            // $values = [];
            // $submitted_symptoms = [];
            $symptoms = $patient->symptoms;
            $symptoms = json_decode($symptoms); 
            $submitted_symptoms = json_decode($patient->symptoms);
            $prescription = $prescription_model->getOne(array('malaria_type' => $patient->malaria_type));
            $data['submitted_symptoms'] = $submitted_symptoms;
            $data['prescription'] = $prescription;
            
            try {
                $to = $patient->email;
                $subject = 'Your Malaria Diagnosis';
                $reason = 'Result';
                $message = 'Dear '.$this->request->getVar('name').',<br><br> Here is a copy of your diagnosis result. <br>
                <br> 
                <table>
                    <tbody>
                        <tr>
                            <td>Email:</td>
                            <td>'.$patient->email.'</td>
                        </tr>                  
                        <tr>
                            <td>Malaria Type:</td>
                            <td>'.$patient->malaria_type.'</td>
                        </tr>
                        <tr>
                            <td>Prescription:</td>
                            <td>'. $prescription->prescription.'</td>
                        </tr>
                        <tr>
                            <td>Result:</td>
                            <td>'.$patient->result.'
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                </a><br>Be Safe,<br> 
                Livinus MDPS';

                #call send_mail helper
                send_mail($to, $subject, $reason, $message);
            } catch (\Exception $e) {
                die($e->getMessage());
            }

            echo view('landing/result', $data);
        }
      
    }
}
