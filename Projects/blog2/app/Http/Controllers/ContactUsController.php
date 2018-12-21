<?php 
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;
use Mail;
use Validator;
use DB;
 
class ContactUsController extends Controller
{
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactUsPage()
   {
       return view('/emails/contact');
   }

   public function send(Request $request)
   {
   		
    	//Phải khai báo lại theo tên từ hệ thống 
    	$messages = [
		    'required' => 'Trường :attribute bắt buộc nhập.',
		    'email'    => 'Trường :attribute phải có định dạng email'
		];

		// Một số validator mặc định
		// $validator = Validator::make($request->all(), [
  //           'name'     => 'required|max:255',
  //           'email'    => 'required|email'
  //           'password' => 'required|numeric|min:6|confirmed',
  //           'website'  => 'sometimes|required|url'
  //       ], $messages);

   		// $request->all();
       	$this->validate($request, [
	        'name' => 'required',
	        'email' => 'required|email',
	        'message' => 'required'
        ], $messages);
   		// return view('home');

   		Mail::send('emails.contact-message', [
   			'msg' => $request->message
   		], function ($mail) use($request){
   			$mail->from($request->email, $request->name);
   			$mail->to('admin@yahoo.com')->subject('Contact Message');
   			// $mail->attach();
   		});

   		return redirect()->back()->with('flash_message', 'Thanks for contacting us!');
   }
 
  //  /**
  //   * Show the application dashboard.
  //   *
  //   * @return \Illuminate\Http\Response
  //   */
  //  public function contactSaveData(Request $request)
  //  {
  //      $this->validate($request, [
  //       'name' => 'required',
  //       'email' => 'required|email',
		// 'subject'=>'required',
  //       'message' => 'required'
  //       ]);
 
  //      ContactUS::create($request->all());
 
  //      return back()->with('success', 'Thanks for contacting us!');
  //  }


}
