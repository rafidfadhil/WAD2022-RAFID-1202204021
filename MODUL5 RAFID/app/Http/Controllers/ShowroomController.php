<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Showrooms;
// use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule as ValidationRule;

class ShowroomController extends Controller
{
    //


    /**
     * Add Car
     * 
     * @param Request $request
     * @return response
     * 
     */
    public function addCar(Request $request)
    {
        $data = $request->all();
        $img = Storage::disk('public')->put('img', $request->file('image'));

        Showrooms::create([
            'id_user' => $data['id_user'],
            'name' => $data['name'],
            'brand' => $data['brand'],
            'purchase_date' => $data['purchase_date'],
            'description' => $data['description'],
            'image' => $img,
            'status' => $data['status'],
        ]);


        return redirect('/list')->with('success', 'Add Car Success');
    }

    /**
     * Show Car
     * 
     * @return response
     * 
     */
    public function showCar(Request $request)
    {
        $showroom = Showrooms::all();
        if (count($showroom)==0){
            return view('add');
        }
        return view('list')->with('showroom', $showroom);
    }

    /**
     * Car Detail
     * 
     * @param integer $id
     * @return response
     * 
     */
    public function carDetail(Request $request, $id)
    {
        $showroom = Showrooms::find($id);
        // dd($car);

        return view('detail', compact('showroom'));
    }


    /**
     * Edit Car
     * 
     * @param Request $request
     * @param integer $id
     * @return response
     * 
     */
    public function editCar(Request $request, $id)
    {
        $showroom = Showrooms::find($id);
        $data = $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'purchase_date' => 'required',
            'description' => 'required',
            'status' => 'required', ValidationRule::in(['Lunas', 'Belum-Lunas'])
        ]);
        if ($request->hasFile('image')) {
            $data = $request->validate([
                'image' => 'png,jpeg,jpg|max:2048',
            ]);
            $showroom->image = $request->file('image')->store('img');
            Storage::delete('img'.$showroom->image);
            $showroom->save();
        }


        $showroom->name = $data['name'];
        $showroom->brand = $data['brand'];
        $showroom->purchase_date = $data['purchase_date'];
        $showroom->description = $data['description'];
        $showroom->status = $data['status'];


        $showroom->save();

        return redirect('/list')->with('success', 'Edit Car Success');
    }

    /**
     * Delete Car
     * 
     * @param integer $id
     * @return response
     * 
     */
    public function deleteCar($id)
    {
        $showroom = Showrooms::find($id);

        // remove image from storage
        Storage::disk('public')->delete($showroom->image);

        $showroom->delete();

        return redirect()->back()->with('delete', 'Delete Car Success');
    }
}