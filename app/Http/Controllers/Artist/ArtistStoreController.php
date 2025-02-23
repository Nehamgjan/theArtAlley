<?php

namespace App\Http\Controllers\Artist;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ArtistStoreController extends Controller
{
    public function index(){
        return view('artist.store.create');
    }
    
    public function manage(){
        $userid = Auth::user()->id;
        $stores = Store::where('user_id', $userid)->get();
        return view('artist.store.manage', compact('stores'));
    }

    public function store(Request $request){
        $validate_data = $request->validate([
            'store_name'=> 'unique:stores|max:50|min:2',
            'slug'=>'required|unique:stores',
            'details'=>'required'
        ]);

        Store::create([
            'store_name'=>$request->store_name,
            'slug'=>$request->slug,
            'details'=>$request->details,
            'user_id'=>Auth::user()->id
        ]);

        return redirect()->back()->with('success', 'Store Created Successfully');
    }

    public function showstore($id){
        $store_info = Store::find($id);
        return view('artist.store.edit', compact('store_info'));
    }

    public function updatestore(Request $request, $id){
        $store = Store::findOrFail($id);
        $validate_data = $request->validate([
            'store_name'=> 'unique:stores|max:50|min:2',
        ]);

        $store->update($validate_data);

        return redirect()->back()->with('success', 'Store Updated Successfully');
    }

    public function deletestore($id){
        Store::findOrFail($id)->delete();
        
        return redirect()->back()->with('success', 'Store Deleted Successfully');

    }
}
