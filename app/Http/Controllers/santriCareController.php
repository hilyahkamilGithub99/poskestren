<?php

namespace App\Http\Controllers;

use Log;
use Exception;
use App\Models\Obat;
use App\Models\User;
use App\Models\Santri;
use App\Models\Payment;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use App\Models\ObatPembayaran;
use App\Models\SetelahPembayaran;



class santriCareController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obat = Obat::get();
        
        $data = Obat::query(); // Use query() instead of find()
        $santri = Santri::get();
        $user = User::get();

        if(request('search')){
            $data->where('name', 'like', '%'.request('search').'%'); // Use where() on $data instead of creating a new query
        }
        $data = $data->get();
    
        $pembayaran = Pembayaran::get();
        return view('content.santricare', compact('obat', 'data','santri','user'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'total_payment' => 'required',
                'total_purchase' => 'required',
                'paid_amount' => 'required',
            ]);
    
            $pembayaran = Pembayaran::updateOrCreate(
                [ 'id' => $request->id ],
                [     
                    'santri_id2' => $request->santri_id2,
                    'weight' => $request->weight,
                    'blood_presure' => $request->blood_presure,
                    'pulse' => $request->pulse,
                    'body_temprature' => $request->body_temprature,
                    'respiratory' => $request->respiratory,
                    'complaints' => $request->complaints,
                    'physical_check' => $request->physical_check,
                    'treatment' => $request->treatment,
                    'diagnoses' => $request->diagnoses,
                    'therapy' => $request->therapy,
                    'recomendation' => $request->recomendation,
                    'santri_id' => $request->santri_id,
                    'total_payment' => $request->total_payment,
                    'total_purchase' => $request->total_purchase,
                    'paid_by' => $request->paid_by,
                    'paid_amount' => $request->paid_amount,
                ]
            );
            // dd($pembayaran);
    
            if ($pembayaran) {
                foreach (($request->obat_id ?? []) as $item) {
                    ObatPembayaran::create([
                        'pembayaran_id' => $pembayaran->id,
                        'obat_id' => $item,
                    ]);
                }
    
                return redirect()->back()->with([
                    'status' => true,
                    'message' => 'Success Paid!',
                ]);
            } else {
                throw new Exception('Failed to create or update payment.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'status' => false,
                'message' => 'Error: ' . $e->getMessage(),
            ]);
        }
    }
    
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function select2(Request $request){
        $query = $request->term['term'] ??'';
        $data = Santri::where('name', 'LIKE', "%$query%")->get();
        
        return response()->json($data);
    }

    public function selectObat(Request $request){
        $query = $request->term['term'] ??'';
        $data = Obat::where('name', 'LIKE', "%$query%")->get();
        
        return response()->json($data);
    }
    
}