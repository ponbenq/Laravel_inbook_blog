<?php

    //to tell that this file belong where we describe
    namespace App\Http\Controllers;

    use App\Models\posts;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Mail;
    class PagesController extends Controller{
        
        public function getIndex(){
            #inside the function we'll process variable data or params
            #talk to the model
            #receive from the model
            #compile or process data from the medel if needed
            #pass that data to the correct view


            $post = posts::select('*')->orderBy('created_at', 'desc')->paginate(3);
            
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

        public function postContact(Request $request){
            $this->validate($request, [
                'email' => 'required|email',
                'subject' => 'min:3',
                'message' => 'min:10']);
    
            $data = array(
                'email' => $request->email,
                'subject' => $request->subject,
                'bodyMessage' => $request->message
                );
    
            Mail::send('emails.contact', $data, function($message) use ($data){
                $message->from($data['email']);
                $message->to('hello@devmarketer.io');
                $message->subject($data['subject']);
            });
            // Mail::to('wichitpon045@gmail.com')->send($data['bodyMessage']);
    
            session()->flash('success', 'Your Email was Sent!');
    
            return redirect('/');
        }
    }

?>