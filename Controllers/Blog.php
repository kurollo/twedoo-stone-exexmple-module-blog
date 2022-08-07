<?php

namespace App\Modules\Blog\Controllers;

use App\Http\Controllers\Controller;

class Blog extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Blog constructor.
     */

    public function __construct()
    {
        //
    }

    /**+
     * @return Blog|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('Blog::blog.index');
    }
}
