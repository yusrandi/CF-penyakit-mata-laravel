<?php

namespace App\Http\Controllers;

use App\Models\Basispengetahuan;
use App\Models\Penyakit;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

class RuleController extends Controller
{
    //

    public function index()
    {
        $basis = Basispengetahuan::orderby('penyakit_id')
            ->with(['penyakit', 'gejala'])
            // ->where('penyakit_id', 2)
            ->get();

        $allData = [];
        $penyakits = Penyakit::with('gejalas')->get();
        foreach ($penyakits as $keyP => $valueP) {
            $gejalas = $valueP->gejalas;
            array_push($allData, $valueP->penyakit_nama . ' Jumlah Gejala ' . count($gejalas));
            for ($a = 0; $a < count($gejalas); $a++) {
                for ($b = 0; $b < $a; $b++) {
                    array_push($allData, 'IF ' . $gejalas[$a]->gejala_kode . ' AND ' . $gejalas[$b]->gejala_kode);
                    for ($c = 0; $c < $b; $c++) {
                        array_push($allData, 'IF ' . $gejalas[$a]->gejala_kode . ' AND ' . $gejalas[$b]->gejala_kode . ' AND ' . $gejalas[$c]->gejala_kode);
                        for ($d = 0; $d < $c; $d++) {
                            array_push($allData, 'IF ' . $gejalas[$a]->gejala_kode . ' AND ' . $gejalas[$b]->gejala_kode . ' AND ' . $gejalas[$c]->gejala_kode . ' AND ' . $gejalas[$d]->gejala_kode);
                            for ($e = 0; $e < $d; $e++) {
                                array_push($allData, 'IF ' . $gejalas[$a]->gejala_kode . ' AND ' . $gejalas[$b]->gejala_kode . ' AND ' . $gejalas[$c]->gejala_kode . ' AND ' . $gejalas[$d]->gejala_kode . ' AND ' . $gejalas[$e]->gejala_kode);
                                for ($f = 0; $f < $e; $f++) {
                                    array_push($allData, 'IF ' . $gejalas[$a]->gejala_kode . ' AND ' . $gejalas[$b]->gejala_kode . ' AND ' . $gejalas[$c]->gejala_kode . ' AND ' . $gejalas[$d]->gejala_kode . ' AND ' . $gejalas[$e]->gejala_kode . ' AND ' . $gejalas[$f]->gejala_kode);
                                    for ($g = 0; $g < $f; $g++) {
                                        array_push($allData, 'IF ' . $gejalas[$a]->gejala_kode . ' AND ' . $gejalas[$b]->gejala_kode . ' AND ' . $gejalas[$c]->gejala_kode . ' AND ' . $gejalas[$d]->gejala_kode . ' AND ' . $gejalas[$e]->gejala_kode . ' AND ' . $gejalas[$f]->gejala_kode . ' AND ' . $gejalas[$g]->gejala_kode);
                                        for ($h = 0; $h < $g; $h++) {
                                            array_push($allData, 'IF ' . $gejalas[$a]->gejala_kode . ' AND ' . $gejalas[$b]->gejala_kode . ' AND ' . $gejalas[$c]->gejala_kode . ' AND ' . $gejalas[$d]->gejala_kode . ' AND ' . $gejalas[$e]->gejala_kode . ' AND ' . $gejalas[$f]->gejala_kode . ' AND ' . $gejalas[$g]->gejala_kode . ' AND ' . $gejalas[$h]->gejala_kode);
                                            for ($i = 0; $i < $h; $i++) {
                                                array_push($allData, 'IF ' . $gejalas[$a]->gejala_kode . ' AND ' . $gejalas[$b]->gejala_kode . ' AND ' . $gejalas[$c]->gejala_kode . ' AND ' . $gejalas[$d]->gejala_kode . ' AND ' . $gejalas[$e]->gejala_kode . ' AND ' . $gejalas[$f]->gejala_kode . ' AND ' . $gejalas[$g]->gejala_kode . ' AND ' . $gejalas[$h]->gejala_kode . ' AND ' . $gejalas[$i]->gejala_kode);
                                                for ($j = 0; $j < $i; $j++) {
                                                    array_push($allData, 'IF ' . $gejalas[$a]->gejala_kode . ' AND ' . $gejalas[$b]->gejala_kode . ' AND ' . $gejalas[$c]->gejala_kode . ' AND ' . $gejalas[$d]->gejala_kode . ' AND ' . $gejalas[$e]->gejala_kode . ' AND ' . $gejalas[$f]->gejala_kode . ' AND ' . $gejalas[$g]->gejala_kode . ' AND ' . $gejalas[$h]->gejala_kode . ' AND ' . $gejalas[$i]->gejala_kode . ' AND ' . $gejalas[$j]->gejala_kode);
                                                    for ($k = 0; $k < $j; $k++) {
                                                        array_push($allData, 'IF ' . $gejalas[$a]->gejala_kode . ' AND ' . $gejalas[$b]->gejala_kode . ' AND ' . $gejalas[$c]->gejala_kode . ' AND ' . $gejalas[$d]->gejala_kode . ' AND ' . $gejalas[$e]->gejala_kode . ' AND ' . $gejalas[$f]->gejala_kode . ' AND ' . $gejalas[$g]->gejala_kode . ' AND ' . $gejalas[$h]->gejala_kode . ' AND ' . $gejalas[$i]->gejala_kode . ' AND ' . $gejalas[$j]->gejala_kode . ' AND ' . $gejalas[$k]->gejala_kode);
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        // return $allData;
        return view('rule.index', [
            'data' => $allData
        ]);
    }
}
