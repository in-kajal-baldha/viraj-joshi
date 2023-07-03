<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\EnquireBottom;
use App\Http\Requests\EnquireRequest;
use App\Models\Enquire;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\Route;


class HomeController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        return view('frontend.home');


        // return view('admin.news.news_list', compact('table'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(EnquireRequest $request)
    {
        try {
        $params=[];
        $params['name'] = $request->name;
        $params['address'] = $request->address;
        $params['number'] = $request->number;
        $params['massage'] = $request->massage;

        $enquire = Enquire::create($params);

        if(!empty($enquire)){

            return redirect()->route('thank.you');

        }
        } catch (\Exception $e) {
            toastr()->error($e->getMessage());
            return redirect()->back();
        }
        //return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function thankYou(){
        return view('frontend.thank_you');
    }

    public function storeBottom(EnquireBottom $request)
    {
        try {
            $params=[];
            $params['name'] = $request->name1;
            $params['address'] = $request->address1;
            $params['number'] = $request->number1;
            $params['massage'] = $request->massage1;

            $enquire = Enquire::create($params);

            if(!empty($enquire)){

                return redirect()->route('thank.you');

            }
        } catch (\Exception $e) {
            toastr()->error($e->getMessage());
            return redirect()->back();
        }
        //return redirect()->back();

    }
}
