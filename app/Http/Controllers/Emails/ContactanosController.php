<?php

namespace App\Http\Controllers\Emails;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\Contactanos\ContactoMailable;
use Illuminate\Support\Facades\Mail;
use Session;


class ContactanosController extends Controller
{
    public function storeContacto(Request $request)
    {
        $this->validate($request,[
            'nombre'=>'required|regex:/[A-Z,a-z, ,á,é,í,ó,ú,ñ]+$/',
            'app'=>'required|regex:/[A-Z,a-z, ,á,é,í,ó,ú,ñ]+$/',
            'apm'=>'required|regex:/[A-Z,a-z, ,á,é,í,ó,ú,ñ]+$/',
            'cargo'=>'required|regex:/[A-Z,a-z, ,á,é,í,ó,ú,ñ]+$/',
            'empresa'=>'required|regex:/[A-Z,a-z, ,á,é,í,ó,ú,ñ]+$/',
            'email'=>'required|email',
            'telefono'=>'required|regex:/[0-9][10]$/',
            'ubicacion'=>'required',
            'info'=>'required',
        ]);
        $correo = new ContactoMailable($request);
        Mail::to("Jovanygerm@gmail.com")->send($correo);

        Session::flash('mensaje',"Solicitud enviada correctamente.");
        return back();
    }
}
