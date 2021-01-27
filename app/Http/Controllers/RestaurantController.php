<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Registration;
use Session; // for session class
use Crypt; // for encryption decryption
use Illuminate\Pagination\Paginator;


class RestaurantController extends Controller
{
    public function index(){
        return view('home');
    }
    public function list(){
        $data = Restaurant::Paginate(5);
        return view('list', ['data'=>$data]);
    }
    public function add(Request $req){
        $req->validate([
            'name'=> 'required',
            'email'=>'required',
            'address'=> 'required'
        ]);
        $restaurant = new Restaurant;
        $restaurant->name = $req->input('name');
        $restaurant->email = $req->input('email');
        $restaurant->address = $req->input('address');
        $restaurant->save();
        // Restaurant::create($req->all());
        $req->Session()->flash('status', "Restaurant Added Successfully");
        return redirect('list');
    }
    public function edit($id){
        $data = Restaurant::find($id);
        return view('edit', ['data'=> $data]);
    }

    public function update(Request $req){
        $restaurant = Restaurant::find($req->input('id'));
        $restaurant->name = $req->input('name');
        $restaurant->email = $req->input('email');
        $restaurant->address = $req->input('address');
        $restaurant->save();
        $req->session()->flash('status', 'Updated Successfully'); 
        return redirect('list');
    }

    public function delete($id){
        Restaurant::find($id)->delete();
        Session::flash('status', 'Deleted successfully.');
        return redirect('list');
    }

    public function register(Request $req){
        $req->validate([
            'name'=>'required| max: 50',
            'email'=>'required|max: 50',
            'password'=>'required|min:3',
            'phone_number'=>'numeric'

        ]);
        $user = new Registration;
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->password = Crypt::encrypt($req->input('password'));
        $user->phone_number = $req->input('phone_number');
        $user->save();
        $req->session()->put('user', $req->input('name'));
        return redirect('/');
    }

    public function login(Request $req){
        $user = Registration::where('email', $req->input('email'))->get();
        if(Crypt::decrypt($user[0]->password) == $req->input('password'))
        {
            $req->session()->put('user', $user[0]->name);
            return redirect('/');
        }
        else{
            return redirect('login');
        } 
    }

    public function logout(Request $request){
        $request->session()->forget('user');
        return redirect('login');
    }

    public function search(Request $request){
        $details = $request->input(('isSearched'));
        $result = Restaurant::where('name', 'LIKE', '%'.$details.'%')->get();
        if(count($result) > 0){
            return view('searchResult')->withDetails($result)->withQuery($details);
        }
        else{
            return view('searchResult')->withMessage('No details found. Try to search again!');
        }
    }
    public function show($id){
        $data = Restaurant::find($id);
        return view('show', ['data'=>$data]);
    }
}
