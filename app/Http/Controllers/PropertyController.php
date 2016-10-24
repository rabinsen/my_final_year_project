<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Property;

use Carbon\Carbon;
use App\Http\Requests;
use Auth;
use Image;
use App\ImageProperty;
use App\Review;

use Illuminate\Support\Facades\Input;


class PropertyController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth',['only' => 'create']);
//    }

    public function dashboard()
    {
        return view ('userDashboard');
    }

    public function upload()
    {
        return view('create');
    }



    public function store(Request $request)
    {
        $property = new Property();
        $picture = new ImageProperty();


//        $this->validate($request, [
//            //'category' => 'required',
//            'title' => 'required',
//            'price' => 'required',
//            //'type' => 'required',
////            'status' => 'required',
////            'readyToMove' => 'required',
////            'address' => 'required',
////            'city' => 'required',
////            'country' => 'required',
////            'mapLocation' => 'required',
////            'landArea' => 'required',
////            'houseArea' => 'required',
////            'plotted' => '',
////            'storey' => 'required',
////            'bedroom' => 'required',
////            'bathroom' => 'required',
////
////            'kitchen' => 'required',
////            'roadDistance' => '',
////            'description' => '',
//            'image' => 'required'
//        ]);
        $property->category= $request->category;
        $property->title = $request->title;
//        $property->price = $request->price;
//        $property->type = $request->type;
//        $property->status = $request->status;
//        $property->readyToMove = $request->readyToMove;
//        $property->address = $request->address;
//        $property->city = $request->city;
//        $property->country = $request->country;
//        $property->mapLocation = $request->mapLocation;
//        $property->landArea = $request->landArea;
//        $property->houseArea = $request->houseArea;
//        $property->plotted = $request->plotted;
//        $property->storey = $request->storey;
//        $property->bedroom = $request->bedroom;
//        $property->bathroom = $request->bathroom;
//        $property->kitchen = $request->kitchen;
//        $property->roadDistance = $request->roadDistance;
//        $property->description = $request->description;
//


        //return redirect()->route('showProperties')->with(['success' => 'Image Uploaded Successfully']);

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(370, 220)->save(public_path('/images/' . $filename));

            //$user = Auth::user();
            $picture->thumbnail = $filename;
            // $user->save();

        }
//        $property->images()->save($picture);

        if ($request->hasFile('slide1')) {
            $image1 = $request->file('slide1');
            $filename1 = time()+1 . '.' . $image1->getClientOriginalExtension();
            Image::make($image1)->resize(370, 220)->save(public_path('/images/' . $filename1));

            //$user = Auth::user();
            $picture->slide1 = $filename1;
            // $user->save();

        }

//        if ($request->hasFile('slide2')) {
//            $image2 = $request->file('slide2');
//            $filename2 = time()+2 . '.' . $image2->getClientOriginalExtension();
//            Image::make($image2)->resize(370, 220)->save(public_path('/images/' . $filename2));
//
//            //$user = Auth::user();
//            $picture->slide2 = $filename2;
//            // $user->save();
//
//        }
//        $property->categories()->save($category);
        Auth::user()->properties()->save($property);
        $property->images()->save($picture);

        return redirect()->route('showProperties');


    }

    public function show(){
     $properties = Property::latest()->paginate(6);
//        $categories = Category::all();
        return view('properties', compact('properties'));
    }

    public function detail($id){
        $details = Property::findOrFail($id);
        return view('propertyDetails', compact('details'));
    }

    public function showLatest(){
        $latestProperties = Property::latest()->paginate(6);
        return view('welcome', compact('latestProperties'));
    }

    public function review(Request $request){
        $review = new Review();

        $review->rating = $request->rating;
        $review->comments = $request->body;
        $user = Auth::user();
        $property = Property::all();

        

        $user->$property->reviews()->save($review);

//        $property = property();
//        $review->rating = $request->rating;
//        $review->comments = $request->body;
//        $review->user_id = $user->id;
//        $review->property_id = $property->id;
//        $review->save();



    }




}
