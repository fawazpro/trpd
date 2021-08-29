<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$Pools = new \App\Models\Pools();
		$data = [
			// 'pools'=> $Pools->findAll(),
			'activePools' => $activePools = $Pools->where('status','active')->findAll(),
			'activePoolsCount' => count($activePools),
			'upcomingPools' => $upcomingPools = $Pools->where('status','upcoming')->findAll(),
			'upcomingPoolsCount' => count($upcomingPools),
			'endedPools' => $endedPools = $Pools->where(['status'=>'filled'])->orWhere(['status'=>'ended'])->findAll(),
			'endedPoolsCount' => count($endedPools),
			'date' => Date('d M, H:i e'),
		];
		$hdata = [
			'date' => Date('d M, H:i e'),
		];
		echo view('header', $hdata);
		echo view('home',$data);
		echo view('footer');
	}

	public function pages($id)
	{
		$Pools = new \App\Models\Pools();
		$data = [
			'pool'=> $Pools->where('name',$id)->find()[0],
			'date' => Date('d M, H:i e'),
		];
		$hdata = [
			'date' => Date('d M, H:i e'),
		];
		echo view('header', $hdata);
		echo view('page',$data);
		echo view('footer');
	}

	//--------------------------------------------------------------------

}
