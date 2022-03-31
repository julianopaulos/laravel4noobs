<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TestRequest;

class UserController extends Controller
{

    public function getMeProfile(){
        $username = "juliano";
        return view('users', compact('username'));
    }

    public function getProfile(string $username){
        $args = ['1', 'b' => '', 1, 2, 3];
        $whilezada = true;
        $chatters = ['juliano', 'jeff', 'gustavo', 'laura', 'ivan'];
        return view('users', compact(['username', 'args', 'whilezada', 'chatters']));
    }

    /*public function test(){
        #return response()->json(['name' => 'juliano']);
        return redirect(route('user-profile', ['username' => 'JULIANO']));
    }*/

    public function test(/*Request $request*/ TestRequest $request){

        /*
        //caso algumas dessas validacoes nao passe, sera redirecionada para outra tela, ou dara erro
        $this->validate($request, [
            'name' => 'required',
            'age' => 'required|numeric',
        ]);*/
        #dd($request->all());
    }
}
