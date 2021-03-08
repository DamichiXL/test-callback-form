<?php


namespace App\Http\Controllers;


use App\Http\Requests\CallbackRequest;
use App\Jobs\SendCallbackEmail;

class ApiController extends Controller
{
    public function callback(CallbackRequest $request){

        $this->dispatch(new SendCallbackEmail([
            "firstname" => $request->get("firstname"),
            "lastname" => $request->get("lastname"),
            "email" => $request->get("email"),
        ]));

        return response()->json(null, 200);
    }
}
