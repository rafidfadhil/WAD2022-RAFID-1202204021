<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Showrooms;
use Illuminate\Support\Facades\Storage;

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
        $data = $request->all();


        $showroom->name = $data['name'];
        $showroom->brand = $data['brand'];
        $showroom->purchase_date = $data['purchase_date'];
        $showroom->description = $data['description'];
        if ($request->hasFile('image')) {
            $img = Storage::disk('public')->put('img', $request->file('image'));
            $showroom->image = $img;
        }
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
