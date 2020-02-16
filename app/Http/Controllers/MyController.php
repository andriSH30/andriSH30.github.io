<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class MyController extends Controller
{

    private $allData = array();

    public function halamanAbout(){
        return view('about');
    }

    public function addData(Request $data){
        $this->validate($data,[
            'inputNama' => 'required',
            'inputPassword' => 'required',
            'id'=> 'required'
        ]);


        $id = $data->input('id');
        $nama = $data->input('inputNama');
        $password = $data->input('inputPassword');

        array_push(
            $this->allData,
            array(
                'ID'        => $id,
                'nama'      => $nama,
                'password'  => $password
            )
        );

        // print_r($this->allData);

        return view('about',['newData' =>$data, 'allData' =>$this->allData]);
        
    }
}
