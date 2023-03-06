<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form1;
use App\Models\Form2;
use App\Models\Form3;
use App\Models\Form4;
use App\Models\Form5;
use App\Models\Form6;
use App\Models\Form7;
use App\Models\Form8;
use App\Models\Form9;
use App\Models\Form15;

class FormController extends Controller
{
    public function form1()
    {
    return view('form.1');
    }
    public function form2()
    {
    return view('form.2');
    }
    public function form3()
    {
    return view('form.3');
    }
    public function form4()
    {
    return view('form.4');
    }
    public function form5()
    {
    return view('form.5');
    }
    public function form6()
    {
    return view('form.6');
    }
    public function form7()
    {
    return view('form.7');
    }
    public function form8()
    {
    return view('form.8');
    }
    public function form9()
    {
    return view('form.9');
    }
    public function form10()
    {
    return view('form.10');
    }
    public function add1(Request $request)
    {
        $pm_dev = $request->pm_actual - $request->pm_plan;
        $dpm_dev = $request->dpm_actual - $request->dpm_plan;
        $model = new Form1([
        	'name' => $request->name,
            'pm_plan' => $request->pm_plan,
            'pm_actual' => $request->pm_actual,
            'pm_dev' => $pm_dev,
            'dpm_plan' => $request->dpm_plan,
            'dpm_actual' => $request->dpm_actual,
            'dpm_dev' => $dpm_dev
        ]);
        $model->save();

        return redirect()->to('/dashboard2');
    }
    public function add2(Request $request)
    {
        $acl_dev = $request->acl_actual - $request->acl_plan;
        $bla_dev = $request->bla_actual - $request->bla_plan;
        $dri_dev = $request->dri_actual - $request->dri_plan;
        $dum_dev = $request->dum_actual - $request->dum_plan;
        $gle_dev = $request->gle_actual - $request->gle_plan;
        $hbl_dev = $request->hbl_actual - $request->hbl_plan;
        $model = new Form2([
        	'name' => $request->name,
            'acl_plan' => $request->acl_plan,
            'acl_actual' => $request->acl_actual,
            'acl_dev' => $acl_dev,
            'bla_plan' => $request->bla_plan,
            'bla_actual' => $request->bla_actual,
            'bla_dev' => $bla_dev,
            'dri_plan' => $request->dri_plan,
            'dri_actual' => $request->dri_actual,
            'dri_dev' => $dri_dev,
            'dum_plan' => $request->dum_plan,
            'dum_actual' => $request->dum_actual,
            'dum_dev' => $dum_dev,
            'gle_plan' => $request->gle_plan,
            'gle_actual' => $request->gle_actual,
            'gle_dev' => $gle_dev,
            'hbl_plan' => $request->hbl_plan,
            'hbl_actual' => $request->hbl_actual,
            'hbl_dev' => $hbl_dev
        ]);
        $model->save();

        return redirect()->to('/dashboard2');
    }
    public function add3(Request $request)
    {
        $acl_dev = $request->acl_actual - $request->acl_plan;
        $ccr_dev = $request->ccr_actual - $request->ccr_plan;
        $dpr_dev = $request->dpr_actual - $request->dpr_plan;
        $edh_dev = $request->edh_actual - $request->edh_plan;
        $geo_dev = $request->geo_actual - $request->geo_plan;
        $int_dev = $request->int_actual - $request->int_plan;
        $jmp_dev = $request->jmp_actual - $request->jmp_plan;
        $mpo_dev = $request->mpo_actual - $request->mpo_plan;
        $model = new Form3([
        	'name' => $request->name,
            'acl_plan' => $request->acl_plan,
            'acl_actual' => $request->acl_actual,
            'acl_dev' => $acl_dev,
            'ccr_plan' => $request->ccr_plan,
            'ccr_actual' => $request->ccr_actual,
            'ccr_dev' => $ccr_dev,
            'dpr_plan' => $request->dpr_plan,
            'dpr_actual' => $request->dpr_actual,
            'dpr_dev' => $dpr_dev,
            'edh_plan' => $request->edh_plan,
            'edh_actual' => $request->edh_actual,
            'edh_dev' => $edh_dev,
            'geo_plan' => $request->geo_plan,
            'geo_actual' => $request->geo_actual,
            'geo_dev' => $geo_dev,
            'int_plan' => $request->int_plan,
            'int_actual' => $request->int_actual,
            'int_dev' => $int_dev,
            'jmp_plan' => $request->jmp_plan,
            'jmp_actual' => $request->jmp_actual,
            'jmp_dev' => $jmp_dev,
            'mpo_plan' => $request->mpo_plan,
            'mpo_actual' => $request->mpo_actual,
            'mpo_dev' => $mpo_dev            
        ]);
        $model->save();

        return redirect()->to('/dashboard2');
    }
    public function add4(Request $request)
    {
        $acl_dev = $request->acl_actual - $request->acl_plan;
        $ccr_dev = $request->ccr_actual - $request->ccr_plan;
        $dri_dev = $request->dri_actual - $request->dri_plan;
        $ele_dev = $request->ele_actual - $request->ele_plan;
        $gle_dev = $request->gle_actual - $request->gle_plan;
        $hel_dev = $request->hel_actual - $request->hel_plan;
        $ins_dev = $request->ins_actual - $request->ins_plan;
        $mek_dev = $request->mek_actual - $request->mek_plan;
        $mkm_dev = $request->mkm_actual - $request->mkm_plan;
        $oil_dev = $request->oil_actual - $request->oil_plan;
        $pla_dev = $request->pla_actual - $request->pla_plan;
        $model = new Form4([
        	'name' => $request->name,
        	'acl_plan' => $request->acl_plan,
            'acl_actual' => $request->acl_actual,
            'acl_dev' => $acl_dev,
            'ccr_plan' => $request->ccr_plan,
            'ccr_actual' => $request->ccr_actual,
            'ccr_dev' => $ccr_dev,
            'dri_plan' => $request->dri_plan,
            'dri_actual' => $request->dri_actual,
            'dri_dev' => $dri_dev,
            'ele_plan' => $request->ele_plan,
            'ele_actual' => $request->ele_actual,
            'ele_dev' => $ele_dev,
            'gle_plan' => $request->gle_plan,
            'gle_actual' => $request->gle_actual,
            'gle_dev' => $gle_dev,
            'hel_plan' => $request->hel_plan,
            'hel_actual' => $request->hel_actual,
            'hel_dev' => $hel_dev,
            'ins_plan' => $request->ins_plan,
            'ins_actual' => $request->ins_actual,
            'ins_dev' => $ins_dev,
            'mek_plan' => $request->mek_plan,
            'mek_actual' => $request->mek_actual,
            'mek_dev' => $mek_dev,
            'mkm_plan' => $request->mkm_plan,
            'mkm_actual' => $request->mkm_actual,
            'mkm_dev' => $mkm_dev,            
            'oil_plan' => $request->oil_plan,
            'oil_actual' => $request->oil_actual,
            'oil_dev' => $oil_dev,
            'pla_plan' => $request->pla_plan,
            'pla_actual' => $request->pla_actual,
            'pla_dev' => $pla_dev
        ]);
        $model->save();

        return redirect()->to('/dashboard2');
    }
    public function add5(Request $request)
    {
        $acl_dev = $request->acl_actual - $request->acl_plan;
        $dri_dev = $request->dri_actual - $request->dri_plan;
        $gle_dev = $request->gle_actual - $request->gle_plan;
        $hel_dev = $request->hel_actual - $request->hel_plan;
        $mpr_dev = $request->mpr_actual - $request->mpr_plan;
        $dph_dev = $request->dph_actual - $request->dph_plan;
        $sch_dev = $request->sch_actual - $request->sch_plan;
        $sto_dev = $request->sto_actual - $request->sto_plan;
        $model = new Form5([
        	'name' => $request->name,
        	'acl_plan' => $request->acl_plan,
            'acl_actual' => $request->acl_actual,
            'acl_dev' => $acl_dev,
            'dri_plan' => $request->dri_plan,
            'dri_actual' => $request->dri_actual,
            'dri_dev' => $dri_dev,
            'gle_plan' => $request->gle_plan,
            'gle_actual' => $request->gle_actual,
            'gle_dev' => $gle_dev,
            'hel_plan' => $request->hel_plan,
            'hel_actual' => $request->hel_actual,
            'hel_dev' => $hel_dev,
            'mpr_plan' => $request->mpr_plan,
            'mpr_actual' => $request->mpr_actual,
            'mpr_dev' => $mpr_dev,
            'dph_plan' => $request->dph_plan,
            'dph_actual' => $request->dph_actual,
            'dph_dev' => $dph_dev,
            'sch_plan' => $request->sch_plan,
            'sch_actual' => $request->sch_actual,
            'sch_dev' => $sch_dev,
            'sto_plan' => $request->sto_plan,
            'sto_actual' => $request->sto_actual,
            'sto_dev' => $sto_dev
        ]);
        $model->save();

        return redirect()->to('/dashboard2');
    }
    public function add6(Request $request)
    {
        $prod_dev = $request->prod_actual - $request->prod_plan;
        $dpr_dev = $request->dpr_actual - $request->dpr_plan;
        $edh_dev = $request->edh_actual - $request->edh_plan;
        $fodp_dev = $request->fodp_actual - $request->fodp_plan;
        $heo_dev = $request->heo_actual - $request->heo_plan;
        $ins_dev = $request->ins_actual - $request->ins_plan;
        $mpo_dev = $request->mpo_actual - $request->mpo_plan;
        $msh_dev = $request->msh_actual - $request->msh_plan;
        $model = new Form6([
        	'name' => $request->name,
            'prod_plan' => $request->prod_plan,
            'prod_actual' => $request->prod_actual,
            'prod_dev' => $prod_dev,
            'dpr_plan' => $request->dpr_plan,
            'dpr_actual' => $request->dpr_actual,
            'dpr_dev' => $dpr_dev,
            'edh_plan' => $request->edh_plan,
            'edh_actual' => $request->edh_actual,
            'edh_dev' => $edh_dev,
            'fodp_plan' => $request->fodp_plan,
            'fodp_actual' => $request->fodp_actual,
            'fodp_dev' => $fodp_dev,
            'heo_plan' => $request->heo_plan,
            'heo_actual' => $request->heo_actual,
            'heo_dev' => $heo_dev,
            'ins_plan' => $request->ins_plan,
            'ins_actual' => $request->ins_actual,
            'ins_dev' => $ins_dev,
            'mpo_plan' => $request->mpo_plan,
            'mpo_actual' => $request->mpo_actual,
            'mpo_dev' => $mpo_dev,
            'msh_plan' => $request->msh_plan,
            'msh_actual' => $request->msh_actual,
            'msh_dev' => $msh_dev
        ]);
        $model->save();

        return redirect()->to('/dashboard2');
    }
    public function add7(Request $request)
    {
        $apl_dev = $request->apl_actual - $request->apl_plan;
        $hpl_dev = $request->hpl_actual - $request->hpl_plan;
        $lgl_dev = $request->lgl_actual - $request->lgl_plan;
        $lsh_dev = $request->lsh_actual - $request->lsh_plan;
        $mec_dev = $request->mec_actual - $request->mec_plan;
        $mgl_dev = $request->mgl_actual - $request->mgl_plan;
        $meh_dev = $request->meh_actual - $request->meh_plan;
        $pla_dev = $request->pla_actual - $request->pla_plan;
        $model = new Form7([
        	'name' => $request->name,
            'apl_plan' => $request->apl_plan,
            'apl_actual' => $request->apl_actual,
            'apl_dev' => $apl_dev,
            'hpl_plan' => $request->hpl_plan,
            'hpl_actual' => $request->hpl_actual,
            'hpl_dev' => $hpl_dev,
            'lgl_plan' => $request->lgl_plan,
            'lgl_actual' => $request->lgl_actual,
            'lgl_dev' => $lgl_dev,
            'lsh_plan' => $request->lsh_plan,
            'lsh_actual' => $request->lsh_actual,
            'lsh_dev' => $lsh_dev,
            'mec_plan' => $request->mec_plan,
            'mec_actual' => $request->mec_actual,
            'mec_dev' => $mec_dev,
            'mgl_plan' => $request->mgl_plan,
            'mgl_actual' => $request->mgl_actual,
            'mgl_dev' => $mgl_dev,
            'meh_plan' => $request->meh_plan,
            'meh_actual' => $request->meh_actual,
            'meh_dev' => $meh_dev,
            'pla_plan' => $request->pla_plan,
            'pla_actual' => $request->pla_actual,
            'pla_dev' => $pla_dev
        ]);
        $model->save();

        return redirect()->to('/dashboard2');
    }
    public function add8(Request $request)
    {
        $off_dev = $request->off_actual - $request->off_plan;
        $ins_dev = $request->ins_actual - $request->ins_plan;
        $ito_dev = $request->ito_actual - $request->ito_plan;
        $model = new Form8([
        	'name' => $request->name,
            'off_plan' => $request->off_plan,
            'off_actual' => $request->off_actual,
            'off_dev' => $off_dev,
            'ins_plan' => $request->ins_plan,
            'ins_actual' => $request->ins_actual,
            'ins_dev' => $ins_dev,
            'ito_plan' => $request->ito_plan,
            'ito_actual' => $request->ito_actual,
            'ito_dev' => $ito_dev
        ]);
        $model->save();

        return redirect()->to('/dashboard2');
    }
    public function add9(Request $request)
    {
        $acl_dev = $request->acl_actual - $request->acl_plan;        
        $dri_dev = $request->dri_actual - $request->dri_plan;        
        $gle_dev = $request->gle_actual - $request->gle_plan;
        $hel_dev = $request->hel_actual - $request->hel_plan;
        $ope_dev = $request->ope_actual - $request->ope_plan;
        $sch_dev = $request->sch_actual - $request->sch_plan;
        $model = new Form9([
        	'name' => $request->name,
            'acl_plan' => $request->acl_plan,
            'acl_actual' => $request->acl_actual,
            'acl_dev' => $acl_dev,
            'dri_plan' => $request->dri_plan,
            'dri_actual' => $request->dri_actual,
            'dri_dev' => $dri_dev,            
            'gle_plan' => $request->gle_plan,
            'gle_actual' => $request->gle_actual,
            'gle_dev' => $gle_dev,
            'hel_plan' => $request->hel_plan,
            'hel_actual' => $request->hel_actual,
            'hel_dev' => $hel_dev,
            'ope_plan' => $request->ope_plan,
            'ope_actual' => $request->ope_actual,
            'ope_dev' => $ope_dev,
            'sch_plan' => $request->sch_plan,
            'sch_actual' => $request->sch_actual,
            'sch_dev' => $sch_dev
        ]);
        $model->save();

        return redirect()->to('/dashboard2');
    }
    public function add10(Request $request)
    {
        $dph_dev = $request->dph_actual - $request->dph_plan;
        $hsh_dev = $request->hsh_actual - $request->hsh_plan;
        $osh_dev = $request->osh_actual - $request->osh_plan;
        $off_dev = $request->off_actual - $request->off_plan;
        $ins_dev = $request->ins_actual - $request->ins_plan;
        $jun_dev = $request->jun_actual - $request->jun_plan;
        $par_dev = $request->par_actual - $request->par_plan;
        $adh_dev = $request->adh_actual - $request->adh_plan;
        $ado_dev = $request->ado_actual - $request->ado_plan;
        $hel_dev = $request->hel_actual - $request->hel_plan;
        $model = new Form15([
        	'name' => $request->name,
        	'dph_plan' => $request->dph_plan,
            'dph_actual' => $request->dph_actual,
            'dph_dev' => $dph_dev,
            'hsh_plan' => $request->hsh_plan,
            'hsh_actual' => $request->hsh_actual,
            'hsh_dev' => $hsh_dev,
            'osh_plan' => $request->osh_plan,
            'osh_actual' => $request->osh_actual,
            'osh_dev' => $osh_dev,
            'off_plan' => $request->off_plan,
            'off_actual' => $request->off_actual,
            'off_dev' => $off_dev,
            'ins_plan' => $request->ins_plan,
            'ins_actual' => $request->ins_actual,
            'ins_dev' => $ins_dev,
            'jun_plan' => $request->jun_plan,
            'jun_actual' => $request->jun_actual,
            'jun_dev' => $jun_dev,
            'par_plan' => $request->par_plan,
            'par_actual' => $request->par_actual,
            'par_dev' => $par_dev,
            'adh_plan' => $request->adh_plan,
            'adh_actual' => $request->adh_actual,
            'adh_dev' => $adh_dev,            
            'ado_plan' => $request->ado_plan,
            'ado_actual' => $request->ado_actual,
            'ado_dev' => $ado_dev,
            'hel_plan' => $request->hel_plan,
            'hel_actual' => $request->hel_actual,
            'hel_dev' => $hel_dev
        ]);
        $model->save();

        return redirect()->to('/dashboard2');
    }
}
