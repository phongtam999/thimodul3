<?php

namespace App\Http\Controllers;

use App\Models\ChiTieuCaNhan;
use Illuminate\Http\Request;

class ChiTieuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chitieucanhans = ChiTieuCaNhan::all();
        return view('chitieucanhan.index',compact('chitieucanhans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chitieucanhans = ChiTieuCaNhan::get();
        return view('chitieucanhan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'Danhmuc' => 'required',
            'Ngay' => 'required',
            'Sotien' => 'required|min:4'
        ], [
            'Danhmuc.required'=>'Không được để trống',
            'Ngay.required'=>'Không được để trống',
            'Sotien.required'=>'Không được để trống',
            'Sotien.min'=>'Không lớn hơn .min'


        ]);

        $chitieucanhan           = new ChiTieuCaNhan();
        $chitieucanhan->Danhmuc     = $request->Danhmuc;
        $chitieucanhan->Ngay      = $request->Ngay;
        $chitieucanhan->Sotien      = $request->Sotien;
        $chitieucanhan->Ghichu      = $request->Ghichu;
        $chitieucanhan->save();
        return redirect()->route('chitieucanhan.index');

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
        $chitieucanhan = ChiTieuCaNhan::find($id);
        return view('chitieucanhan.edit', compact('chitieucanhan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'Danhmuc' => 'required',
            'Ngay' => 'required',
            'Sotien' => 'required|min:4'
        ], [
            'Danhmuc.required'=>'Không được để trống',
            'Ngay.required'=>'Không được để trống',
            'Sotien.required'=>'Không được để trống',
            'Sotien.min'=>'Không lớn hơn .min'


        ]);


        $chitieucanhan = ChiTieuCaNhan::find($id);
        $chitieucanhan->Danhmuc     = $request->Danhmuc;
        $chitieucanhan->Ngay      = $request->Ngay;
        $chitieucanhan->Sotien      = $request->Sotien;
        $chitieucanhan->Ghichu      = $request->Ghichu;
        $chitieucanhan->save();
        return redirect()->route('chitieucanhan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(chitieucanhan $chitieucanhan )
    {
        $chitieucanhan->delete();
        return redirect()->route('chitieucanhan.index');
    }
}
