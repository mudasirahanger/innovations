<?php
namespace App\Http\Controllers;

use App\Models\Departments;
use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\Universities;
use \Mpdf\Mpdf as PDF; 
use App\Models\User;

class UploadController extends Controller
{

    public function index()
    {
       
        $user_id = Auth::id();

        $profile = Profile::select('*')
        ->where('user_id',$user_id)
        ->get()->toArray();      

        $uni =  Universities::select('*')
        ->where('uni_id',$profile[0]['uni_id'])
        ->get()->toArray();

        $dept = Departments::select('*')
        ->where('dept_id',$profile[0]['dept_id'])
        ->get()->toArray();
         
        $university =  $uni[0]['name'];
        $uni_id =  $uni[0]['uni_id'];
        $department = $dept[0]['name'];
        $dept_id = $dept[0]['dept_id'];

    


        return view('add')->with(array('title'=>'Add Innovation','university'=> $university ,'uni_id' => $uni_id , 'department' => $department ,'dept_id' => $dept_id));
    }

   
   public function store(Request $request) {
      
    $request->validate([
        'heading_innovator' =>  ['required', 'string', 'max:255'],
        'name_innovator' => ['required', 'string', 'max:255'],
        'email_innovator' => 'required|email|max:225',
        'phone_innovator' => ['required', 'string', 'max:255'],
        'about' => ['required', 'string'],
        'innovation_type' => ['required', 'string'],
        'photo' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        'photo_innovation' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        'photo_innovation1' => 'image|mimes:png,jpg,jpeg|max:2048',
        'photo_innovation2' => 'image|mimes:png,jpg,jpeg|max:2048',
        'photo_innovation3' => 'image|mimes:png,jpg,jpeg|max:2048',
    ]);
    
    $name = $request->file('photo')->getClientOriginalName();   
    $photo_innovation_name = $request->file('photo_innovation')->getClientOriginalName();
    
    if(!empty($request->file('photo_innovation1'))){
        $photo_innovation_name1 = $request->file('photo_innovation1')->getClientOriginalName();
        $photo_innovation_path1 =  $request->photo_innovation->storeAs('images/photo_innovation', $photo_innovation_name1);
    } else {
        $photo_innovation_path1 = '';
    }
    if(!empty($request->file('photo_innovation2'))){
        $photo_innovation_name2 = $request->file('photo_innovation2')->getClientOriginalName();
        $photo_innovation_path2 =  $request->photo_innovation->storeAs('images/photo_innovation', $photo_innovation_name2);
    } else {
        $photo_innovation_path2 = '';
    }
    if(!empty($request->file('photo_innovation3'))){
        $photo_innovation_name3 = $request->file('photo_innovation3')->getClientOriginalName();
        $photo_innovation_path3 =  $request->photo_innovation->storeAs('images/photo_innovation', $photo_innovation_name3);
    } else {
        $photo_innovation_path3 = '';
    }
   
    // Store in Storage Folder
    $path =  $request->photo->storeAs('images/photo', $name);  
    $photo_innovation_path =  $request->photo_innovation->storeAs('images/photo_innovation', $photo_innovation_name); 

    $innovation_id = rand(100000,9000000);

    if(!empty($request->patentno)){
    $patentno = $request->patentno;
    } else {
    $patentno = '';
    }
    
    $upload = Upload::create([
        'innovation_id' => $innovation_id,
        'user_id' => $request->user_id,
        'name_innovator' => $request->name_innovator,
        'email_innovator' => $request->email_innovator,
        'phone_innovator' => $request->phone_innovator,
        'heading_innovator' => $request->heading_innovator,
        'about' => $request->about,  
        'uni_id' => $request->uni_id,      
        'dept_id' => $request->dept_id,
        'patentno' => $patentno,
        'innovation_type' => $request->innovation_type,
        'status' => 'pending',
        'photo' => $path,
        'photo_innovation' => $photo_innovation_path,
        'photo_innovation1' => $photo_innovation_path1,
        'photo_innovation2' => $photo_innovation_path2,
        'photo_innovation3' => $photo_innovation_path3

    ]);

    return redirect('add')->with('success', 'Innovation Added Successfully');


   }

  
   public function view($innovation_id)
   {
        
        $user_id = Auth::id();       
        $role_id = Auth::user()->role_id;  

        if($role_id == 1){
            $where = [                     
                     ['innovation_id','=',$innovation_id]
                    ];
        } else {
            $where = [
                ['user_id','=', $user_id],
                ['innovation_id','=',$innovation_id]
               ];
        }

        $uploads = Upload::select('*')
                           ->where($where)
                           ->get()->toArray();

       $uni_name =   Universities::getUnivName($uploads[0]['uni_id']);
       $dept_name =  Departments::getDeptName($uploads[0]['dept_id']);
                           
       return view('view')->with(array('title'=>'View Innovations Detials','datas'=>$uploads , 'uni_name' => $uni_name , 'dept_name' => $dept_name));
   }

   public function publicView($innovation_id)
   {
        if(!empty($innovation_id)) {
       
        $where = [                   
                     ['innovation_id','=',$innovation_id]
                    ];

        $uploads = Upload::select('*')
                           ->where($where)
                           ->get()->toArray();

       $uni_name =   Universities::getUnivName($uploads[0]['uni_id']);
       $dept_name =  Departments::getDeptName($uploads[0]['dept_id']);
                           
       return view('view')->with(array('title'=>'View Innovations Detials','datas'=>$uploads , 'uni_name' => $uni_name , 'dept_name' => $dept_name));
      
        } else {
       return abort(404);

        }
    
    }

   public function print($innovation_id)
   {
        
        $user_id = Auth::id();       
        $role_id = Auth::user()->role_id;  

        if($role_id == 1){
            $where = [                     
                     ['innovation_id','=',$innovation_id]
                    ];
        } else {
            $where = [
                ['user_id','=', $user_id],
                ['innovation_id','=',$innovation_id]
               ];
        }

        $uploads = Upload::select('*')
                           ->where($where)
                           ->get()->toArray();

       $uni_name =   Universities::getUnivName($uploads[0]['uni_id']);
       $dept_name =  Departments::getDeptName($uploads[0]['dept_id']);
                           
       $html =  view('components.pdf')->with(array('title'=>'View Innovations Detials','datas'=>$uploads , 'uni_name' => $uni_name , 'dept_name' => $dept_name));
      
       $namepdf = $innovation_id.'.pdf';

        // Setup a filename 
        $documentFileName =  $namepdf;  //"fun.pdf";
 
        // Create the mPDF document
        $document = new PDF( [
            'mode' => 'utf-8',
            'format' => 'A4',
            'margin_header' => '3',
            'margin_top' => '10',
            'margin_bottom' => '20',
            'margin_footer' => '2',
        ]);     
 
        // Set some header informations for output
        $header = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$documentFileName.'"'
        ];
 
        // Write some simple Content
        $document->WriteHTML($html);
       // $document->WriteHTML('<p>Write something, just for fun!</p>');
         
        // Save PDF on your public storage 
        // Storage::disk('pdf')->put($documentFileName, $document->Output($documentFileName, "S"));
         
        // // Get file back from storage with the give header informations
        // return Storage::disk('pdf')->download($documentFileName, 'Request', $header); //
   
   
       return $document->Output($documentFileName, 'I');
   
   
    }

   public function approveInn(Request $request) {

    if(!empty($request->upload_id)){        
        
      Upload::UpdateInnv($request);   
        
    }

    $redirect =  'view/' . $request->innovation_id;
     
    return redirect($redirect)->with('success', 'Innovation Approved Successfully');
   }

   
   public function search(Request $request) {

    $data = [];
    $results = [];

    if($request->method() == 'POST') {
        $request->validate([
            'heading_innovator' => ['required', 'string']
        ]);
        
        if(isset($request->heading_innovator) && !empty($request->heading_innovator)){
            $heading_innovator = $request->heading_innovator;
            $heading_innovator = htmlspecialchars($heading_innovator, ENT_QUOTES, 'UTF-8'); 
        } else {
            $heading_innovator = '';
        }       
         
         if(!empty($heading_innovator)) {
          $results = Upload::where('status', "Approved")
                                 ->orWhere('heading_innovator', 'like', "%$heading_innovator%")
                                 ->get();
         } else {
          $results = '';
         }         
       }


    $records = Universities::all();
    $records_dept = Departments::all();
    $data['universities'] = $records;
    $data['departments'] = $records_dept;

    return view('search' , ['title' => 'Search','data' => $data ,'results' => $results]);

   }
    
   public function remove($id,$type)
   {
        if(!empty($type) && $type == 'invs') { 
         $uni = Upload::findOrFail($id);
         $uni->delete();
         return redirect()->route('dashboard')->with('success', 'Deleted Successfully');
        } else if(!empty($type) && $type == 'users'){
           $dept = User::findOrFail($id);
           $dept->delete();
           return redirect()->route('dashboard')->with('success', 'Deleted Successfully');
        }       
   }


}