<?php
    class Login extends Controller{
        public function index()
        {       
            $data['judul'] ='Login'; 
            $this->view('login/index', $data);
            
        }

        public function login(){
            $data = $this->model('User_model')->getUser($_POST['email'], $_POST['password'], $_POST['role']);
            // var_dump($data);
            
            if (isset($data[0])){
                if ($data[0]['role'] == 'laboran') {
                    session_start();
                    $_SESSION["username"] = $data['username'];
                    $_SESSION["role"] = $data['role'];
                    Flasher::setFlash('Berhasil', 'Anda Berhasil Login', 'success');
                    header("Location: " . BASEURL . "/Dash");
                }
            
    
                 else {
                    
                    echo 'Hi, ' . $data["username"] . ' | ' . $data['role'] . ' | ' . $data["password"];
                    session_start();
                    $_SESSION["username"] = $data['username'];
                    $_SESSION["role"] = $data['role'];
                    header("Location: " . BASEURL . "/Home");
                   
                }
            } else {
                    Flasher::setFlash('Gagal', 'nama_user / Password Salah', 'danger');
                    header("Location: " . BASEURL . "/login");
            }
        }
        
        public function logout(){
            
            unset($_SESSION["user"]);
            session_destroy();
            header("Location: " . BASEURL);
        }
    }  

?>