<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class FileUploadController extends Controller
{
    //
    public function index(){
        return view('file-upload');
    }
    public function fileUpload(Request $req){
     
      //dd($req->list);
      $this->validate($req,['list-name'=>'required|max:255'
        
        ]);
       $array = Excel::toArray(new UsersImport, $req->file);
       
       $row_names = $array[0][0];
       $check_array = $array[0];
       //dd($array);
      // print_r($check_array);
       $name_index = "";
       $first_index = "";
       $last_index = "";
      
       
       foreach($row_names as $key=>$value){
          
           similar_text("Name",$value,$name_percent);
           similar_text("First Name",$value,$first_name_percent);
           similar_text("Last Name",$value,$last_name_percent);
       
         // print_r($percent);
          if($name_percent > 80){
          //  print_r($value);
           // print_r($name_percent);
           // print_r($key);
            
            $name_index = $key;
          }
          if($first_name_percent > 80){
          //  print_r($value);
          //  print_r($first_name_percent);
           // print_r($key);
            $first_index = $key;
          }
          if($last_name_percent > 80){
          //  print_r($value);
          //  print_r($last_name_percent);
          // print_r($key);
            $last_index = $key;
          }
         
         
       }
       $size_count = sizeof($array);
       foreach($check_array as $key=>$value){
             //print_r($value);
             if($key !== 0){
                foreach($value as $second_key=>$second){
                    if($second_key === $first_index){
                     //print_r($second);
                    }
                    if($second_key === $last_index){
                       // print_r($second);
                    }
                    if($second_key === $name_index){
                       // print_r($second);
                    }
                    if (filter_var($second, FILTER_VALIDATE_EMAIL)) {
                        print_r($second);
                        if(isset($value[$first_index])){
                            print_r($value[$first_index]);
                        }
                        if(isset($value[$last_index])){
                            print_r($value[$last_index]);
                        }
                       
                        
                      }
                     //  print_r($[$first_index]);
                    //  print_r($second[$last_index]);
                  }
             }
             
       }

      // print_r($name_index);
      // print_r($first_index);
      // print_r($last_index);
      

    }
}
