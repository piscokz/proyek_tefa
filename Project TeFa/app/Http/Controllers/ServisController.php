<?php

namespace App\Http\Controllers;

use App\Models\Servis; 
use Illuminate\Http\Request;
use App\Models\Sparepart;
use Illuminate\Support\Facades\DB;

class ServisController extends Controller
{
    public function index()
    {
        $servis = Servis::paginate(10);
        return view('servis.index', compact('servis'));
    }

    public function create()
    {
        $spareparts = Sparepart::all();
        return view('servis.create', compact('spareparts'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            // Validate the incoming request data
            $request->validate([
                'id_pelanggan' => 'required|exists:pelanggans,id_pelanggan',
                'nomor_polisi' => 'required|string',
                'keluhan' => 'required|string',
                'kilometer_saat_ini' => 'required|integer',
                'harga_jasa' => 'required|numeric',
                'total_biaya' => 'required|numeric',
                'sparepart_id' => 'required|array',
                'sparepart_id.*' => 'exists:spareparts,id_sparepart', 
                'jumlah' => 'required|array',
                'jumlah.*' => 'integer|min:1', 
            ]);

            // Create a new service record
            $servis = Servis::create([
                'id_pelanggan' => $request->id_pelanggan,
                'nomor_polisi' => $request->nomor_polisi,
                'keluhan' => $request->keluhan,
                'kilometer_saat_ini' => $request->kilometer_saat_ini,
                'harga_jasa' => $request->harga_jasa,
                'total_biaya' => $request->total_biaya,
            ]);

            // Update the spare parts
            foreach ($request->sparepart_id as $index => $sparepart_id) {
                $sparepart = Sparepart::findOrFail($sparepart_id);
                $usedQuantity = $request->jumlah[$index];

                if ($sparepart->jumlah >= $usedQuantity) {
                    $sparepart->jumlah -= $usedQuantity;

                    if ($sparepart->jumlah <= 0) {
                        $sparepart->tanggal_keluar = now();
                    }

                    $sparepart->deskripsi = "{$sparepart->nama_sparepart} terpakai sebanyak {$usedQuantity}";
                    $sparepart->save();
                } else {
                    return redirect()->back()->withErrors(['error' => "Stok sparepart '{$sparepart->nama_sparepart}' tidak mencukupi untuk digunakan."]);
                }
            }

            DB::commit();
            return redirect()->route('servis.index')->with('success', 'Data berhasil diinput!');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage()]);
        }
    }

    public function show($id)
    {
        $servis = Servis::findOrFail($id);
        return view('servis.show', compact('servis'));
    }

    public function edit($id)
    {
        $servis = Servis::findOrFail($id);
        $spareparts = Sparepart::all();
        return view('servis.edit', compact('servis', 'spareparts'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_pelanggan' => 'required|exists:pelanggans,id_pelanggan',
            'nomor_polisi' => 'required|string',
            'keluhan' => 'required|string',
            'kilometer_saat_ini' => 'required|integer',
            'harga_jasa' => 'required|numeric',
            'total_biaya' => 'required|numeric',
        ]);

        $servis = Servis::findOrFail($id);
        $servis->update($request->all());

        return redirect()->route('servis.index')->with('success', 'Service berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $servis = Servis::findOrFail($id);
        $servis->delete();

        return redirect()->route('servis.index')->with('success', 'Service berhasil dihapus.');
    }
}