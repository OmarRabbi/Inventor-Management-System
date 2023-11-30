<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Product;
use App\Models\User;

class ProductController extends Controller
{
    public function register(){
        return view('Products.register');
    }
    public function submitRegister(Request $request){
        $data = $request->validate([
            'name' => "required",
            'email' => "required",
            'password' => "required",
        ]);
        $existingEmail = User::where('email', $request->input('email'))->first();
        $existingUsername = User::where('name', $request->input('name'))->first();

        if ($existingEmail) {
            return redirect(route('user.register'))->with('email_info', 'Email already exists');
        }

        if ($existingUsername) {
            return redirect(route('user.register'))->with('name_info', 'Username already taken');
        }
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        $user->save();
        return back()->with('registration_success','Registration Successfull');
    }
    public function logIn(){
        return view('Products.login');
    }
    public function submitLogIn(Request $request){
        $user = $request->validate([
            'email' => "required",
            'password' => "required",
        ]);
        if (Auth::attempt($user)){
            return redirect(route('product.index'));
        }
        else
           return back()->with('error','Invalid Email or Password');
    }
    public function logout(){
        Auth::logout();
        return redirect(route('user.login'));
    }
    public function index(){
        $products = Product::all();
        return view('Products.index',['products'=>$products]);
    }
    public function create(){
        return view('Products.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => "required",
            'quantity' => "required|numeric",
            'price' => "required|decimal:0,2",
        ]);
        $newProduct = Product::create($data);
        return redirect(route('product.index'))->with('add_success', "Product Added Successfully");;
    }
    public function edit(Product $product){
        return view('Products.edit',['product'=>$product]);
    }
    public function update(Product $product, Request $request){
        $data = $request->validate([
            'name' => "required",
            'quantity' => "required|numeric",
            'price' => "required|decimal:0,2",
        ]);
        $product->update($data);
        return redirect(route('product.index'))->with('update_success', "Product Update Successfully");
    }
    public function destroy(Product $product){
        $product->delete();
        return redirect(route('product.index'))->with('delete', "Product Deleted Successfully");
    }
}