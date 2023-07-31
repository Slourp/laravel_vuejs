<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class IndexController extends Controller
{
    /**
     * Handle the incoming request and render the 'Index' component using Inertia.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Inertia\Response
     */
    public function index(): Response
    {
        // Inertia::render() method is used to render a given Inertia component.
        // The 'Index' component is rendered here, which corresponds to the 'Index.vue' file.
        // Inertia will automatically look for the 'Index.vue' file inside the 'resources/views' directory.
        return Inertia::render('Index/Index', ["message" => "C'est vraiment trop cool !"]);
    }

    public function show(): Response
    {
        return Inertia::render('Index/Show');
    }
}
