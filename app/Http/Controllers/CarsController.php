<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use \Illuminate\Http\Response;
use App\Http\Requests\CarValidationRequest;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autos = Car::all();
        return view ('cars.home', ['autos' => $autos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'image'=>'required|mimes:jpg,png,jpeg|max:5048',
            'model'=>'required',
            'production_year'=>'required|integer|min:0|max:2022',
            'price'=>'required',
            'description'=>'required'
        ]);

        //to upload image
    $imageName = time() . '_' . $request->model . '_' . $request->image->extension();//grab image info.
    $request->image->move(public_path('All_Images'), $imageName);//create image path inside public folder

        $auto = Car::create([
            'model'=>$request->input('model'),
            'production_year'=>$request->input('production_year'),
            'price'=>$request->input('price'),
            'description'=>$request->input('description'),
            'image_path'=>$imageName,
            'updated_at' => new \DateTime(),
            'created_at' => new \DateTime()
        ]);

        // $auto = new Car;
        // $auto->
        // $auto->model = $request->input('model');
        // $auto->production_year = $request->input('production_year');
        // $auto->price = $request->input('price');
        // $auto->description = $request->input('description');
        // $auto->updated_at = new \DateTime();
        // $auto->created_at = new \DateTime();
        // $auto->save();

        return redirect('/cars')->with('status', 'INSERTED');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $auto = Car::find($id);//->first()
        return view ('cars.edit')->with('auto', $auto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CarValidationRequest $request, $id)
    {
        $request->validated();

        //image update
    $imageName = time() . '_' . $request->model . '_' . $request->image->extension();//grab image info.
    $request->image->move(public_path('All_Images'), $imageName);//create image path inside public folder

        $auto = Car::where('id', $id)
        ->update([
            'model' => $request->input('model'),
            'production_year' => $request->input('production_year'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'image_path'=>$imageName,
            'updated_at' => new \DateTime(),
            'created_at' => new \DateTime()
        // $auto->updated_at = new \DateTime(),
        // $auto->created_at = new \DateTime(),
        ]);
        return redirect('/cars')->with('status', 'INSERTED');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $auto = Car::find($id);
        $auto->delete($id);

        return redirect('/cars');
    }

    //search function
    public function search()
    {
        $searched_model = $_GET['query'];
        $autos = Car::where('model', 'LIKE', '%'.$searched_model.'%')->get();

        return view ('cars/search')->with('autos', $autos);
    }
}
