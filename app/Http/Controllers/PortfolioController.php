<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function admin(Request $request){
        if($request->Username == 'Quadmonk@123' && $request->password == 'Quadmonk@2022'){
            $request->session()->put('quadmonk', 'Admin');
            return redirect('portfolio');
        }
        else{
            return redirect('login')->with('fail','Wrong Credentials');
        }
    }

    public function portfolio(){
        $portfolios = Portfolio::all();
        return view('admin.portfolio',['portfolios' => $portfolios]);
    }

    public function addportfolio(Request $request){
        $portfolio = new Portfolio();
        $portfolio->Name = $request->name;
        $portfolio->Breif = $request->breif;
        $portfolio->Link = $request->link;
        $portfolio->Image = $request->file('image')->getClientOriginalName();
        $portfolio->save();

        $image = $request->file('image');
        $image->move(public_path('portfolioimg'), $image->getClientOriginalName());
        return redirect('portfolio')->with('success','Portfolio Added Successfully');
    }

    public function delete($id){
        $portfolio = Portfolio::find($id);
        unlink(public_path('portfolioimg/'.$portfolio->Image));
        $portfolio->delete();
        return redirect('portfolio')->with('success','Portfolio Deleted Successfully');
    }
}
