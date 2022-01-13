<?php
    class Data extends CI_Controller{
        function index(){
            echo "haiiii";
        }

        function user(){
           $this->load->view('v_user');
        }
   
        function profile(){
            $this->load->view('v_profile');
        }

        function umur(){
            $this->load->view('v_umur');
        }

        function alamat(){
            $this->load->view('v_alamat');
        }

    }
?>