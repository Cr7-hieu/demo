<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //phương thức GET
    public function index( )
    {   
       
    }

    /**
     * Show the form for creating a new resource.
     */
    //phương thức GET
    public function create()
    {
        echo 'thêm mới';
    }

    /**
     * Store a newly created resource in storage.
     */
    //phương thức POST
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    //phương thức GET
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    //phương thức GET
    public function edit(string $id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return 'Sửa chuyên mục:'.$id;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
