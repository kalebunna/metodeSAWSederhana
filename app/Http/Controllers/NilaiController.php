<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorenilaiRequest;
use App\Http\Requests\UpdatenilaiRequest;
use App\Models\nilai;
use SebastianBergmann\Type\ObjectType;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    private $bobot = [
        "nilai_rata_rata" => 0.35,
        "nilai_matematika" => 0.35,
        "keterampilan" => 0.15,
        "perilaku" => 0.10,
        "kecepatan" => 0.05,
    ];
    public function index()
    {
        $datas = nilai::with('peserta')
            ->get();
        // dd($datas);
        return view('nilai/index', compact('datas'));
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
    public function store(StorenilaiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(nilai $nilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(nilai $nilai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatenilaiRequest $request, nilai $nilai)
    {
        $data = $request->all();
        // dd($nilai);
        $nilai->update($data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(nilai $nilai)
    {
    }

    function rangking()
    {
        $data = $this->normalisasi();
        $datas = $data->sortByDesc('nilaiAkhir');
        return view('rangking/index', compact('datas'));
    }

    function showNormalisasi()
    {
        dd($this->normalisasi());
    }

    public function normalisasi()
    {
        $max = $this->nilaiMax();
        $nilais = nilai::with('peserta')->get();
        $hasil = collect();
        foreach ($nilais as $nilai) {
            $temp = [
                "nama" => $nilai->peserta->name,
                "alamat" => $nilai->peserta->alamat,
                "sekolah" => $nilai->peserta->sekolah,
                "nilai_rata_rata" => $nilai->nilai_rata_rata / $max["nilai_rata_rata"],
                "nilai_matematika" => $nilai->nilai_matematika / $max["nilai_matematika"],
                "keterampilan" => $nilai->keterampilan / $max["keterampilan"],
                "perilaku" => $nilai->perilaku / $max["perilaku"],
                "kecepatan" =>   $max["kecepatan"] / $nilai->kecepatan
            ];
            $temp += [
                "nilaiAkhir" => (
                    ($temp['nilai_rata_rata'] * $this->bobot['nilai_rata_rata'])
                    +
                    ($temp['nilai_matematika'] * $this->bobot['nilai_matematika'])
                    +
                    ($temp['perilaku'] * $this->bobot['perilaku'])
                    +
                    ($temp['keterampilan'] * $this->bobot['keterampilan'])
                    +
                    ($temp['kecepatan'] * $this->bobot['kecepatan'])
                )
            ];
            // array_merge($temp, $nilaiakhir);
            $hasil->push($temp);
        }

        return $hasil;
    }

    private function nilaiMax()
    {
        $max = [
            "nilai_rata_rata" => nilai::where('nilai_rata_rata', '!=', "0")->max("nilai_rata_rata"),
            "nilai_matematika" => nilai::where('nilai_matematika', '!=', "0")->max("nilai_matematika"),
            "keterampilan" => nilai::where('keterampilan', '!=', "0")->max("keterampilan"),
            "perilaku" => nilai::where('perilaku', '!=', "0")->max("perilaku"),
            "kecepatan" => nilai::where('kecepatan', '!=', "0")->min("kecepatan")
        ];

        return $max;
    }
}
