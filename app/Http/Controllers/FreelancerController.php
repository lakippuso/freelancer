<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Freelancer;
use Illuminate\Http\Request;
use App\Http\Requests\FreelanceCategory;

class FreelancerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FreelanceCategory $request, $id)
    {
        $category = Category::findOrFail($request->category);
        $freelancer = Freelancer::where('user_id', $id)->first();
        $freelancer->category = $request->category;
        $freelancer->category_name = $category->category_name;
        $freelancer->save();
        return redirect()->route('freelancer.my.profile')->with('status','Category Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function viewAllFreelancers()
    {
        return view('category', [
            'nav_categories' => $this->getAllCategory(),
            'freelancers' => Freelancer::all()
        ]);
    }
    public function viewFreelancersCategory($id)
    {
        $category = Category::findOrFail($id);
        $freelancers = Freelancer::where('category', $id)->get();
        return view('category', [
            'category' => $category,
            'nav_categories' => $this->getAllCategory(),
            'freelancers' => $freelancers
        ]);
    }
    private function getAllCategory()
    {
        return Category::all();
    }
}
