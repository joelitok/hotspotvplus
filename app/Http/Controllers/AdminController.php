<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //CRUD operation in slider
    
    //add slider
    public function add_slider(){


    }

  public function home(){
  return view('admin.template.index');
   }

    //read all sliders
    public function read_all_sliders(){

    }

    //delete sliders
    public function delete_slider(){

    }

    //update sliders
    public function update_slider(){

    }



//CRUD operation in services
    //add service
    public function add_service(){


    }

    //read all services
    public function read_all_services(){

    }

    //delete sliders
    public function delete_service(){

    }

    //update sliders
    public function update_service(){

    }



       //CRUD in service cout
        //add service
        public function add_service_cout(){


        }
    
        //read all services
        public function read_all_service_couts(){
    
        }
    
        //delete sliders
        public function delete_service_cout(){
    
        }
    
        //update sliders
        public function update_service_cout(){
    
        }

         
        //CRUD in user
        //add user
        public function add_user(){

        }

        //delete user
        public function delete_user(){

        }

        //read alls users
        public function  read_all_users(){

        }
        

        //login user
        public function login(){

        }







}
