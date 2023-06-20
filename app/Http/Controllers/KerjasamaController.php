<?php

namespace App\Http\Controllers;

use App\Models\Kerjasama;
use Illuminate\Http\Request;

class KerjasamaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kerjasama::get()->sum('id');
       
        if($data){
            $getdata = Kerjasama::firstOrFail();           

            return view('kerjasama.edit')->with([
                'id' => $getdata->id,
                'ringkasanmou' => $getdata->ringkasanmou,
                'filemou' =>  $getdata->filemou,
                'nomormoa' => $getdata->nomormoa,
                'deskripsimoa' => $getdata->deskripsimoa,
                'tglmulaimoa' => $getdata->tglmulaimoa,
                'tglberakhirmoa' => $getdata->tglberakhirmoa,
                'filemoa' => $getdata->filemoa,
                'misiprogram' => $getdata->misiprogram,
                'targetprogram' => $getdata->targetprogram,
                'alasanmitra' => $getdata->alasanmitra,
                'prinsipkerjasama' => $getdata->prinsipkerjasama,
                'manfaatkerjasama' => $getdata->manfaatkerjasama,
                'tantanganpelaksanaan' => $getdata->tantanganpelaksanaan,
                'kepemilikanhakcipta' => $getdata->kepemilikanhakcipta,
                'mekanismeresipokal' => $getdata->mekanismeresipokal,
                'keberlanjutankerjasama' => $getdata->keberlanjutankerjasama,
                'hakdankewajiban' => $getdata->hakdankewajiban,
                'haktercantum' => $getdata->haktercantum,   
            ]);

        }else{
            return view('kerjasama.create');
        }

        //return view('kerjasama.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ringkasanmou'=> 'required|max:10000',   
            'filemou'=>'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
            'nomormoa'=> 'required',
            'deskripsimoa'=> 'required|max:10000', 
            'tglmulaimoa'=> 'required',
            'tglberakhirmoa'=> 'required',
            'filemoa'=>'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
            'misiprogram'=> 'required|max:10000', 
            'targetprogram'=> 'required|max:10000', 
            'alasanmitra'=> 'required|max:10000', 
            'prinsipkerjasama'=> 'required|max:10000', 
            'manfaatkerjasama'=> 'required|max:10000', 
            'tantanganpelaksanaan'=> 'required|max:10000', 
            'kepemilikanhakcipta'=> 'required|max:10000', 
            'mekanismeresipokal'=> 'required|max:10000', 
            'keberlanjutankerjasama'=> 'required|max:10000', 
            'hakdankewajiban'=> 'required|max:10000', 
            'haktercantum'=> 'required',           
        ]);

        if($validatedData){           
            //Move Uploaded File
            $filemou = time().'.'.$request->filemou->extension();  
            $filemoa = time().'.'.$request->filemoa->extension();  
          
      
            $request->filemoa->move(base_path('\public\Filemoa'), $filemoa);
            $request->filemou->move(base_path('\public\Filemou'), $filemou);

            $data = [
                'ringkasanmou' => $request->ringkasanmou,
                'filemou' =>  $filemou,
                'nomormoa' => $request->nomormoa,
                'deskripsimoa' => $request->deskripsimoa,
                'tglmulaimoa' => $request->tglmulaimoa,
                'tglberakhirmoa' => $request->tglberakhirmoa,
                'filemoa' => $filemoa,
                'misiprogram' => $request->misiprogram,
                'targetprogram' => $request->targetprogram,
                'alasanmitra' => $request->alasanmitra,
                'prinsipkerjasama' => $request->prinsipkerjasama,
                'manfaatkerjasama' => $request->manfaatkerjasama,
                'tantanganpelaksanaan' => $request->tantanganpelaksanaan,
                'kepemilikanhakcipta' => $request->kepemilikanhakcipta,
                'mekanismeresipokal' => $request->mekanismeresipokal,
                'keberlanjutankerjasama' => $request->keberlanjutankerjasama,
                'hakdankewajiban' => $request->hakdankewajiban,
                'haktercantum' => $request->haktercantum,          
            ];

            Kerjasama::create($data);

            return redirect('kerjasama')->with('success', "Berhasil di simpan !..");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Kerjasama $kerjasama)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kerjasama $kerjasama)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'ringkasanmou'=> 'required|max:10000',        
            'nomormoa'=> 'required',
            'deskripsimoa'=> 'required|max:10000', 
            'tglmulaimoa'=> 'required',
            'tglberakhirmoa'=> 'required',
            'misiprogram'=> 'required|max:10000', 
            'targetprogram'=> 'required|max:10000', 
            'alasanmitra'=> 'required|max:10000', 
            'prinsipkerjasama'=> 'required|max:10000', 
            'manfaatkerjasama'=> 'required|max:10000', 
            'tantanganpelaksanaan'=> 'required|max:10000', 
            'kepemilikanhakcipta'=> 'required|max:10000', 
            'mekanismeresipokal'=> 'required|max:10000', 
            'keberlanjutankerjasama'=> 'required|max:10000', 
            'hakdankewajiban'=> 'required|max:10000', 
            'haktercantum'=> 'required',           
        ]);

        if($request->filemou != null){
            $validatedData += [
                'filemou'=>'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
            ];           
        }  

        if($request->filemoa != null){
            $validatedData += [
                'filemoa'=>'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
            ];           
        }       

        if($validatedData){       
                   
            $data = [
                'ringkasanmou' => strip_tags($request->ringkasanmou),
                'nomormoa' => $request->nomormoa,
                'deskripsimoa' => strip_tags($request->deskripsimoa),
                'tglmulaimoa' => $request->tglmulaimoa,
                'tglberakhirmoa' => $request->tglberakhirmoa,
                'misiprogram' => strip_tags($request->misiprogram),
                'targetprogram' => strip_tags($request->targetprogram),
                'alasanmitra' => strip_tags($request->alasanmitra),
                'prinsipkerjasama' => strip_tags($request->prinsipkerjasama),
                'manfaatkerjasama' => strip_tags($request->manfaatkerjasama),
                'tantanganpelaksanaan' => strip_tags($request->tantanganpelaksanaan),
                'kepemilikanhakcipta' => strip_tags($request->kepemilikanhakcipta),
                'mekanismeresipokal' => strip_tags($request->mekanismeresipokal),
                'keberlanjutankerjasama' => strip_tags($request->keberlanjutankerjasama),
                'hakdankewajiban' => strip_tags($request->hakdankewajiban),
                'haktercantum' => $request->haktercantum,    
            ];

            if($request->filemou != null){
                $filemou = time().'.'.$request->filemou->extension();  
                $request->filemou->move(base_path('\public\Filemou'), $filemou);

                $data += [
                    'filemou' =>  $filemou,
                ];           
            }  
    
            if($request->filemoa != null){
                $filemoa = time().'.'.$request->filemoa->extension();
                $request->filemoa->move(base_path('\public\Filemoa'), $filemoa);

                $data += [
                    'filemoa' => $filemoa,
                ];           
            }   

            $kerjasama = Kerjasama::FindOrFail($id);
            $kerjasama->update($data);
            
            return redirect('kerjasama')->with('success', "Berhasil di Update !..");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kerjasama $kerjasama)
    {
        //
    }
}
