<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use Illuminate\Http\Request;
use DB;


class ManufacturerController extends Controller
{
    //
    public function createManufacturer()
    {
        return view('admin.manufacture.createManufacturer');
    }

    public function storeManufacturer(Request $request)
    {
        // return $request->all();   way- 1

        $this->validate($request, [
            'manufacturerName' => 'required',
            'manufacturerDescription' => 'required'
        ]);

        //   Elequent type   way-2
        $manufacturer = new Manufacturer();
        $manufacturer->manufacturerName = $request->manufacturerName;
        $manufacturer->manufacturerDescription = $request->manufacturerDescription;
        $manufacturer->publicationStatus = $request->publicationStatus;
        $manufacturer->save();

        // return 'Category info save successfully';
        // return redirect('/category/add');
        return redirect()->back()->with('message', 'Manufacturer saved');


        /* Category::create($request->all());  // Faced used way- 3
       return 'Category info save successfully'; */


        //    query builder way
        // DB::table('categories')->insert([
        //      'categoryName' =>$request->categoryName,
        //      'categoryDescription' =>$request->categoryDescription,
        //      'publicationStatus' =>$request->publicationStatus,
        // ]);
        // return 'Category info save successfully';
    }

    public function manageManufacturer()
    {

        $manufacturers = Manufacturer::all();
        return view('admin.manufacture.manageManufacturer', ['manufacturers' => $manufacturers]);
    }


    public function editManufacturer($id)
    {
        $manufacturerByid = Manufacturer::where('id', $id)->first();
        return view('admin.manufacture.editManufacturer', ['manufacturerByid' => $manufacturerByid]);
    }


    public function updateManufacturer(Request $request)
    {
        /**  return$request->all(); */
        // dd($request->all());



        $manufacturer = Manufacturer::find($request->id);
        $manufacturer->manufacturerName = $request->manufacturerName;
        $manufacturer->manufacturerDescription = $request->manufacturerDescription;
        $manufacturer->publicationStatus = $request->publicationStatus;
        $manufacturer->save();
        return redirect('/manufacturer/manage')->with('message', 'manufacturer info updated.');
    }


    public function deleteManufacturer($id)
    {
        $manufacturer = Manufacturer::find($id);
        $manufacturer->delete();
        return redirect('/manufacturer/manage')->with('message', 'manufacturer info Deleted.');
    }
}