<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cms;
use App\Images;
use Illuminate\Support\Facades\Input;

// Things to be done:

// * Change the layout to occupy -20% of width

// * Allow to upload (and add via edit) multiple pictures

// * Add delete function

// * Display such pictures in the Carousel

// * To display the list of images at the edit page, and allow user to delete particular images

// *  To send a mail with the information in the Forms (check if this actually works before continuing with it)

class HomeController extends Controller
{
    /**
     * Show the Real Estate page's Main.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cmss = Cms::paginate(12);
        $images = Images::all();
        return view('pages.home', compact('cmss','images'));

        // $cmss = Cms::all();
        // $images = Images::all();
        // return view('pages.home', compact('cmss','images'));
    }
}
