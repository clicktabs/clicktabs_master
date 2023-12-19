<?php

namespace App\Http\Controllers;

use App\Models\hpctimesheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HpctimesheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dodd-forms.hpc-timesheet');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     // $request->validate([
        //     ''=>'required',
        //     ''=>'required',
        //     ''=>'required',
        //     ''=>'required'
        // ]);

        $query = DB::table('hpctimesheet')->insert([
            'hpcProvider_name'=>$request->input('hpcProvider_name'),
            'hpcindividual_name'=>$request->input('hpcindividual_name'),
            'hpcIndividul_MedicaidNo'=>$request->input('hpcIndividul_MedicaidNo'),
            'hpcProvider_signature'=>$request->input('hpcProvider_signature'),
            'TypeofService_1'=>$request->input('TypeofService_1'),
            'TypeofService_2'=>$request->input('TypeofService_2'),
            'TypeofService_3'=>$request->input('TypeofService_3'),
            'TypeofService_4'=>$request->input('TypeofService_4'),
            'TypeofService_5'=>$request->input('TypeofService_5'),
            'TypeofService_6'=>$request->input('TypeofService_6'),
            'TypeofService_7'=>$request->input('TypeofService_7'),
            'DateofService_1'=>$request->input('DateofService_1'),
            'DateofService_2'=>$request->input('DateofService_2'),
            'DateofService_3'=>$request->input('DateofService_3'),
            'DateofService_4'=>$request->input('DateofService_4'),
            'DateofService_5'=>$request->input('DateofService_5'),
            'DateofService_6'=>$request->input('DateofService_6'),
            'DateofService_7'=>$request->input('DateofService_7'),
            'PlaceofService_1'=>$request->input('PlaceofService_1'),
            'PlaceofService_2'=>$request->input('PlaceofService_2'),
            'PlaceofService_3'=>$request->input('PlaceofService_3'),
            'PlaceofService_4'=>$request->input('PlaceofService_4'),
            'PlaceofService_5'=>$request->input('PlaceofService_5'),
            'PlaceofService_6'=>$request->input('PlaceofService_6'),
            'PlaceofService_7'=>$request->input('PlaceofService_7'),
            'service_1'=>$request->input('service_1'),
            'service_2'=>$request->input('service_2'),
            'service_3'=>$request->input('service_3'),
            'service_4'=>$request->input('service_4'),
            'service_5'=>$request->input('service_5'),
            'service_6'=>$request->input('service_6'),
            'service_7'=>$request->input('service_7'),
            'service_8'=>$request->input('service_8'),
            'service_9'=>$request->input('service_9'),
            'service_10'=>$request->input('service_10'),
            'service_11'=>$request->input('service_11'),
            'service_12'=>$request->input('service_12'),
            'service_13'=>$request->input('service_13'),
            'service_14'=>$request->input('service_14'),
            'service_16'=>$request->input('service_16'),
            'service_17'=>$request->input('service_17'),
            'service_18'=>$request->input('service_18'),
            'service_19'=>$request->input('service_19'),
            'service_20'=>$request->input('service_20'),
            'service_21'=>$request->input('service_21'),
            'service_22'=>$request->input('service_22'),
            'service_23'=>$request->input('service_23'),
            'service_24'=>$request->input('service_24'),
            'service_25'=>$request->input('service_25'),
            'service_26'=>$request->input('service_26'),
            'service_27'=>$request->input('service_27'),
            'service_28'=>$request->input('service_28'),
            'service_29'=>$request->input('service_29'),
            'service_30'=>$request->input('service_30'),
            'service_31'=>$request->input('service_31'),
            'service_32'=>$request->input('service_32'),
            'service_33'=>$request->input('service_33'),
            'service_34'=>$request->input('service_34'),
            'service_35'=>$request->input('service_35'),
            'service_36'=>$request->input('service_36'),
            'service_37'=>$request->input('service_37'),
            'service_38'=>$request->input('service_38'),
            'service_39'=>$request->input('service_39'),
            'service_40'=>$request->input('service_40'),
            'service_41'=>$request->input('service_41'),
            'service_42'=>$request->input('service_42'),
            'service_43'=>$request->input('service_43'),
            'service_44'=>$request->input('service_44'),
            'service_45'=>$request->input('service_45'),
            'service_46'=>$request->input('service_46'),
            'service_47'=>$request->input('service_47'),
            'service_48'=>$request->input('service_48'),
            'service_49'=>$request->input('service_49'),
            'service_50'=>$request->input('service_50'),
            'service_51'=>$request->input('service_51'),
            'service_52'=>$request->input('service_52'),
            'service_53'=>$request->input('service_53'),
            'service_54'=>$request->input('service_54'),
            'service_55'=>$request->input('service_55'),
            'service_56'=>$request->input('service_56'),
            'service_57'=>$request->input('service_57'),
            'service_58'=>$request->input('service_58'),
            'service_59'=>$request->input('service_59'),
            'service_60'=>$request->input('service_60'),
            'service_61'=>$request->input('service_61'),
            'service_62'=>$request->input('service_62'),
            'service_63'=>$request->input('service_63'),
            'service_64'=>$request->input('service_64'),
            'service_65'=>$request->input('service_65'),
            'service_66'=>$request->input('service_66'),
            'service_67'=>$request->input('service_67'),
            'service_68'=>$request->input('service_68'),
            'service_69'=>$request->input('service_69'),
            'service_70'=>$request->input('service_70'),
            'service_71'=>$request->input('service_71'),
            'service_72'=>$request->input('service_72'),
            'service_73'=>$request->input('service_73'),
            'service_74'=>$request->input('service_74'),
            'service_75'=>$request->input('service_75'),
            'service_76'=>$request->input('service_76'),
            'service_77'=>$request->input('service_77'),
            'service_78'=>$request->input('service_78'),
            'service_79'=>$request->input('service_79'),
            'service_80'=>$request->input('service_80'),
            'service_81'=>$request->input('service_81'),
            'service_82'=>$request->input('service_82'),
            'service_83'=>$request->input('service_83'),
            'service_84'=>$request->input('service_84'),
            'service_85'=>$request->input('service_85'),
            'service_86'=>$request->input('service_86'),
            'service_87'=>$request->input('service_87'),
            'service_88'=>$request->input('service_88'),
            'service_89'=>$request->input('service_89'),
            'service_90'=>$request->input('service_90'),
            'service_91'=>$request->input('service_91'),
            'service_92'=>$request->input('service_92'),
            'service_93'=>$request->input('service_93'),
            'service_94'=>$request->input('service_94'),
            'service_95'=>$request->input('service_95'),
            'service_96'=>$request->input('service_96'),
            'service_97'=>$request->input('service_97'),
            'service_98'=>$request->input('service_98'),
            'service_99'=>$request->input('service_99'),
            'service_100'=>$request->input('service_100'),
            'service_101'=>$request->input('service_101'),
            'service_102'=>$request->input('service_102'),
            'service_103'=>$request->input('service_103'),
            'service_104'=>$request->input('service_104'),
            'service_105'=>$request->input('service_105'),
            'service_106'=>$request->input('service_106'),
            'service_107'=>$request->input('service_107'),
            'service_108'=>$request->input('service_108'),
            'service_109'=>$request->input('service_109'),
            'service_110'=>$request->input('service_110'),
            'service_111'=>$request->input('service_111'),
            'service_112'=>$request->input('service_112'),
            'service_113'=>$request->input('service_113'),
            'service_114'=>$request->input('service_114'),
            'service_115'=>$request->input('service_115'),
            'service_116'=>$request->input('service_116'),
            'service_117'=>$request->input('service_117'),
            'service_118'=>$request->input('service_118'),
            'service_119'=>$request->input('service_119'),
            'service_120'=>$request->input('service_120'),
            'service_121'=>$request->input('service_121'),
            'service_122'=>$request->input('service_122'),
            'service_123'=>$request->input('service_123'),
            'service_124'=>$request->input('service_124'),
            'service_125'=>$request->input('service_125'),
            'service_126'=>$request->input('service_126'),
            'service_127'=>$request->input('service_127'),
            'service_128'=>$request->input('service_128'),
            'service_129'=>$request->input('service_129'),
            'service_130'=>$request->input('service_130'),
            'service_131'=>$request->input('service_131'),
            'service_132'=>$request->input('service_132'),
            'service_133'=>$request->input('service_133'),
            'service_134'=>$request->input('service_134'),
            'service_135'=>$request->input('service_135'),
            'service_136'=>$request->input('service_136'),
            'service_137'=>$request->input('service_137'),
            'service_138'=>$request->input('service_138'),
            'service_139'=>$request->input('service_139'),
            'service_140'=>$request->input('service_140'),
            'service_141'=>$request->input('service_141'),
            'service_142'=>$request->input('service_142'),
            'service_143'=>$request->input('service_143'),
            'service_144'=>$request->input('service_144'),
            'service_145'=>$request->input('service_145'),
            'service_146'=>$request->input('service_146'),
            'service_147'=>$request->input('service_147'),
            'service_148'=>$request->input('service_148'),
            'service_149'=>$request->input('service_149'),
            'service_150'=>$request->input('service_150'),
            'service_151'=>$request->input('service_151'),
            'service_152'=>$request->input('service_152'),
            'service_153'=>$request->input('service_153'),
  ]);

  if($query){
      return back()->with('success', 'Data successfully inserted');
  }
  else{
      return back()->with('fail', 'something went wrong');
  }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hpctimesheet  $hpctimesheet
     * @return \Illuminate\Http\Response
     */
    public function show(hpctimesheet $hpctimesheet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hpctimesheet  $hpctimesheet
     * @return \Illuminate\Http\Response
     */
    public function edit(hpctimesheet $hpctimesheet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hpctimesheet  $hpctimesheet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hpctimesheet $hpctimesheet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hpctimesheet  $hpctimesheet
     * @return \Illuminate\Http\Response
     */
    public function destroy(hpctimesheet $hpctimesheet)
    {
        //
    }
}
