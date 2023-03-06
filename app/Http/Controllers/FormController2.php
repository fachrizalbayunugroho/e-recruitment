<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form10;
use App\Models\Form11;
use App\Models\Form12;
use App\Models\Form13;
use App\Models\Form14;

class FormController2 extends Controller
{
    public function form2_2()
    {
    return view('form.2_2');
    }
    public function form3_2()
    {
    return view('form.3_2');
    }
    public function form4_2()
    {
    return view('form.4_2');
    }
    public function form6_2()
    {
    return view('form.6_2');
    }
    public function form7_2()
    {
    return view('form.7_2');
    }
    
    public function add2_2(Request $request)
    {
        $hpr_dev = $request->hpr_actual - $request->hpr_plan;
        $ope_dev = $request->ope_actual - $request->ope_plan;
        $pdh_dev = $request->pdh_actual - $request->pdh_plan;
        $she_dev = $request->she_actual - $request->she_plan;
        $shb_dev = $request->shb_actual - $request->shb_plan;
        $model = new Form10([
        	'name' => $request->name,
            'hpr_plan' => $request->hpr_plan,
            'hpr_actual' => $request->hpr_actual,
            'hpr_dev' => $hpr_dev,
            'ope_plan' => $request->ope_plan,
            'ope_actual' => $request->ope_actual,
            'ope_dev' => $ope_dev,
            'pdh_plan' => $request->pdh_plan,
            'pdh_actual' => $request->pdh_actual,
            'pdh_dev' => $pdh_dev,
            'she_plan' => $request->she_plan,
            'she_actual' => $request->she_actual,
            'she_dev' => $she_dev,
            'shb_plan' => $request->shb_plan,
            'shb_actual' => $request->shb_actual,
            'shb_dev' => $shb_dev
        ]);
        $model->save();

        return redirect()->to('/dashboard2');
    }
    public function add3_2(Request $request)
    {
        $moo_dev = $request->moo_actual - $request->moo_plan;
        $rod_dev = $request->rod_actual - $request->rod_plan;
        $she_dev = $request->she_actual - $request->she_plan;
        $shm_dev = $request->shm_actual - $request->shm_plan;
        $sho_dev = $request->sho_actual - $request->sho_plan;
        $shs_dev = $request->shs_actual - $request->shs_plan;
        $sur_dev = $request->sur_actual - $request->sur_plan;
        $model = new Form11([
        	'name' => $request->name,
            'moo_plan' => $request->moo_plan,
            'moo_actual' => $request->moo_actual,
            'moo_dev' => $moo_dev,
            'rod_plan' => $request->rod_plan,
            'rod_actual' => $request->rod_actual,
            'rod_dev' => $rod_dev,
            'she_plan' => $request->she_plan,
            'she_actual' => $request->she_actual,
            'she_dev' => $she_dev,
            'shm_plan' => $request->shm_plan,
            'shm_actual' => $request->shm_actual,
            'shm_dev' => $shm_dev,
            'sho_plan' => $request->sho_plan,
            'sho_actual' => $request->sho_actual,
            'sho_dev' => $sho_dev,
            'shs_plan' => $request->shs_plan,
            'shs_actual' => $request->shs_actual,
            'shs_dev' => $shs_dev,
            'sur_plan' => $request->sur_plan,
            'sur_actual' => $request->sur_actual,
            'sur_dev' => $sur_dev
        ]);
        $model->save();

        return redirect()->to('/dashboard2');
    }
    public function add4_2(Request $request)
    {
        $pdh_dev = $request->pdh_actual - $request->pdh_plan;
        $sap_dev = $request->sap_actual - $request->sap_plan;
        $sec_dev = $request->sec_actual - $request->sec_plan;
        $sup_dev = $request->sup_actual - $request->sup_plan;
        $too_dev = $request->too_actual - $request->too_plan;
        $tra_dev = $request->tra_actual - $request->tra_plan;
        $trm_dev = $request->trm_actual - $request->trm_plan;
        $tyr_dev = $request->tyr_actual - $request->tyr_plan;
        $was_dev = $request->was_actual - $request->was_plan;
        $wel_dev = $request->wel_actual - $request->wel_plan;
        $whe_dev = $request->whe_actual - $request->whe_plan;
        $model = new Form12([
        	'name' => $request->name,
            'pdh_plan' => $request->pdh_plan,
            'pdh_actual' => $request->pdh_actual,
            'pdh_dev' => $pdh_dev,
            'sap_plan' => $request->sap_plan,
            'sap_actual' => $request->sap_actual,
            'sap_dev' => $sap_dev,
            'sec_plan' => $request->sec_plan,
            'sec_actual' => $request->sec_actual,
            'sec_dev' => $sec_dev,
            'sup_plan' => $request->sup_plan,
            'sup_actual' => $request->sup_actual,
            'sup_dev' => $sup_dev,
            'too_plan' => $request->too_plan,
            'too_actual' => $request->too_actual,
            'too_dev' => $too_dev,
            'tra_plan' => $request->tra_plan,
            'tra_actual' => $request->tra_actual,
            'tra_dev' => $tra_dev,
            'trm_plan' => $request->trm_plan,
            'trm_actual' => $request->trm_actual,
            'trm_dev' => $trm_dev,
            'tyr_plan' => $request->tyr_plan,
            'tyr_actual' => $request->tyr_actual,
            'tyr_dev' => $tyr_dev,
            'was_plan' => $request->was_plan,
            'was_actual' => $request->was_actual,
            'was_dev' => $was_dev,
            'wel_plan' => $request->wel_plan,
            'wel_actual' => $request->wel_actual,
            'wel_dev' => $wel_dev,
            'whe_plan' => $request->whe_plan,
            'whe_actual' => $request->whe_actual,
            'whe_dev' => $whe_dev
        ]);
        $model->save();

        return redirect()->to('/dashboard2');
    }
    public function add6_2(Request $request)
    {
        $ssh_dev = $request->ssh_actual - $request->ssh_plan;
        $moo_dev = $request->moo_actual - $request->moo_plan;
        $sch_dev = $request->sch_actual - $request->sch_plan;
        $pgl_dev = $request->pgl_actual - $request->pgl_plan;
        $prh_dev = $request->prh_actual - $request->prh_plan;
        $rod_dev = $request->rod_actual - $request->rod_plan;
        $sur_dev = $request->sur_actual - $request->sur_plan;
        $tpo_dev = $request->tpo_actual - $request->tpo_plan;
        $model = new Form13([
        	'name' => $request->name,
            'ssh_plan' => $request->ssh_plan,
            'ssh_actual' => $request->ssh_actual,
            'ssh_dev' => $ssh_dev,
            'moo_plan' => $request->moo_plan,
            'moo_actual' => $request->moo_actual,
            'moo_dev' => $moo_dev,
            'sch_plan' => $request->sch_plan,
            'sch_actual' => $request->sch_actual,
            'sch_dev' => $sch_dev,
            'pgl_plan' => $request->pgl_plan,
            'pgl_actual' => $request->pgl_actual,
            'pgl_dev' => $pgl_dev,
            'prh_plan' => $request->prh_plan,
            'prh_actual' => $request->prh_actual,
            'prh_dev' => $prh_dev,
            'rod_plan' => $request->rod_plan,
            'rod_actual' => $request->rod_actual,
            'rod_dev' => $rod_dev,
            'sur_plan' => $request->sur_plan,
            'sur_actual' => $request->sur_actual,
            'sur_dev' => $sur_dev,
            'tpo_plan' => $request->tpo_plan,
            'tpo_actual' => $request->tpo_actual,
            'tpo_dev' => $tpo_dev
        ]);
        $model->save();

        return redirect()->to('/dashboard2');
    }
    public function add7_2(Request $request)
    {
        $sch_dev = $request->sch_actual - $request->sch_plan;
        $spd_dev = $request->spd_actual - $request->spd_plan;
        $dph_dev = $request->dph_actual - $request->dph_plan;
        $pli_dev = $request->pli_actual - $request->pli_plan;
        $tym_dev = $request->tym_actual - $request->tym_plan;
        $fgl_dev = $request->fgl_actual - $request->fgl_plan;
        $wel_dev = $request->wel_actual - $request->wel_plan;
        $model = new Form14([
        	'name' => $request->name,
            'sch_plan' => $request->sch_plan,
            'sch_actual' => $request->sch_actual,
            'sch_dev' => $sch_dev,
            'spd_plan' => $request->spd_plan,
            'spd_actual' => $request->spd_actual,
            'spd_dev' => $spd_dev,
            'dph_plan' => $request->dph_plan,
            'dph_actual' => $request->dph_actual,
            'dph_dev' => $dph_dev,
            'pli_plan' => $request->pli_plan,
            'pli_actual' => $request->pli_actual,
            'pli_dev' => $pli_dev,
            'tym_plan' => $request->tym_plan,
            'tym_actual' => $request->tym_actual,
            'tym_dev' => $tym_dev,
            'fgl_plan' => $request->fgl_plan,
            'fgl_actual' => $request->fgl_actual,
            'fgl_dev' => $fgl_dev,
            'wel_plan' => $request->wel_plan,
            'wel_actual' => $request->wel_actual,
            'wel_dev' => $wel_dev
        ]);
        $model->save();

        return redirect()->to('/dashboard2');
    }
}