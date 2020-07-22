<?php

namespace ELSENOSY\S3GAuthentication\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use ELSENOSY\S3GAuthentication\Mail\S3gSendInvitation;
use ELSENOSY\S3GAuthentication\models\S3gInvitation;
use App\Http\Controllers\Controller;

class S3gInvitationController extends Controller{

    /**
     * Show home form
     */
    public function home(){
        return view('S3GAuthentication::home');
    }

    /**
     * Send invitation link to a mail
     */
    public function send(Request $request){
        // Validation 
        $this->validate($request, [
            'email' => 'required|email'
        ]);

        // Generate token & code 
        $token = sha1(time());
        $code  = random_int(11111111, 99999999);
        $url = route('acceptInvitationCode', $token);
        // Create Invitation 
        S3gInvitation::create([
                                'email' => $request->email, 
                                'code' => $code, 
                                'token' => $token, 
                                ]);
        // Send mail 
        Mail::to($request->email)
        ->send(new S3gSendInvitation($code, $url));
        return back()->withSuccess('Invitation sent!');
    }


}
