<?php

    //to tell that this file belong where we describe
    namespace App\Http\Controllers;

    use App\Models\posts;

    class PagesController extends Controller{
        
        public function getIndex(){
            #inside the function we'll process variable data or params
            #talk to the model
            #receive from the model
            #compile or process data from the medel if needed
            #pass that data to the correct view


            $post = posts::all();
            return view('pages.welcome')->with('post', $post);
        }

        public function getAbout(){
            $first = 'Wichit';
            $last = 'Pukrongthong';

            $full = $first . " " .$last;
            $email = 'wichit@pukrongthong.com';

            $data = [];
            $data['fullname'] = $full;
            $data['email'] = $email;
            $data['first'] = $first;

            return view('pages.about', ['data' => $data]);
        }

        public function getContact(){
            return view('pages.contact');
        }
    }

?>