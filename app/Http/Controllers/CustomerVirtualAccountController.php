<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\CustomerVirtualAccount;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Mccarlosen\LaravelMpdf\Facades\LaravelMpdf;

class CustomerVirtualAccountController extends Controller
{
    public function index()
    {
        $customerVas = CustomerVirtualAccount::with('customer')->get();
        // dd($customerVas);
        return view('customer-va.index', compact('customerVas'));
    }
    public function printLot(Request $request)
	{
        // dd($request->checkboxid);
        if($request->checkboxid != null){
		// $customerProspects = CustomerProspect::where('status_id','2')->orWhere('status_id','1')->with('status','metodeBertemu')->orderBy('status_id')->get();
      
       
        $customerVas =  CustomerVirtualAccount::wherein('id',$request->checkboxid)->with('customer')->get();
        }
        else{
            $customerVas =  CustomerVirtualAccount::with('customer')->get();

        }
        $todayDate = Carbon::now()->format('Y-m-d-H-i');
    
        $text = 'https://www.dasarata.com/help';
        
        $qrcode=QrCode::size(80)->generate($text);
        $code = (string)$qrcode;
        // echo substr($code,38);


        // dd($code);
        $pdf = LaravelMpdf::loadview('customer-va.print', compact('code','customerVas'),[], [ 
        'format'=>[60,40], 
        'title' => $todayDate,
        'default_font_size'    => '12',
        'default_font'         => 'sans-serif',
        'margin_left'          => 0,
        'margin_right'         => 2,
        'margin_top'           => 5,
        'margin_bottom'        => 8,
        'margin_header'        => 0,
        'margin_footer'        => 0
        ]);
       
         
        
 
        return $pdf->stream($todayDate.'.pdf');
  
        
	}
}
