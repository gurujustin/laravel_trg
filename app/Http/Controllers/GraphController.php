<?php

namespace App\Http\Controllers;

use App\Models\Atom_juice_data;
use App\Models\Atom_juice_data_history;
use Carbon\Carbon;
use Illuminate\Http\Request;


class GraphController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $products;
    public function index()
    {
        //
        $products = Atom_juice_data::distinct()->get(['product']);
        $all = [];
        foreach($products as $product){
            $all[] = $product['product'];
        }
        // dd($all);

        return view('graph')->with('products',$all);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request)
    {
        //

        $products = Atom_juice_data::distinct()->get(['product']);
        $all = [];
        foreach($products as $product){
            $all[] = $product['product'];
        }

        $model = $request->input('model');
        $start_date = $request->input('checkin');
        $end_date = $request->input('checkout');
        $network = $request->input('network');
        $capacity = $request->input('capacity');

        $start_date = date('Y-m-d', date_create_from_format('d/m/Y', $start_date)->getTimestamp());
        $end_date = date('Y-m-d', date_create_from_format('d/m/Y', $end_date)->getTimestamp());

        $datas = Atom_juice_data::where('product',$model)
                                ->where('network',$network)
                                ->where('capacity',$capacity)
                                ->get();
        $capacities = Atom_juice_data::where('product', $model)
                                    ->distinct('capacity')
                                    ->pluck('capacity');

        // dd($datas);

        $graph_datas = [];
        $merchants = [];
        $temp = [];
        foreach($datas as $data){
            $product_id = $data['id'];

            $filter = Atom_juice_data_history::whereBetween('created_at',[$start_date, $end_date])
                                            ->where('atom_juice_data_id',$product_id)
                                            ->orderBy('created_at', 'ASC')
                                            ->get();

            $graph_data = [];
            for($i = 0; $i < count($filter);$i++){
                if(($i == 0 || $i == count($filter)-1 || $filter[$i]['working_price'] != $filter[$i]['old_working_price']) && $filter[$i]['working_price']!=0 ) {

                        $graph_data[] = ['x'=>$filter[$i]['created_at']->format('m/d/Y'),'y'=>(int)$filter[$i]['working_price']];

                }
            }
            if(count($graph_data)>1){
                $graph_datas[] = $graph_data;
                $temp[] = $data['merchant'];
            }

        }

        $conv = array(
            "rebuy" => "reBuy",
            "we-buy-any-phone-com" => "We Buy Any Phone",
            "gecko-mobile" => "Gecko Mobile",
            "goodbuytech" => "GoodbuyTech",
            "handtec" => "Handtec",
            "sell-my-cell" => "Sell My Cell",
            "recycle-kings" => "Recycle Kings",
            "the-ioutlet" => "The iOutlet",
            "uber-link" => "Uber Link",
            "we-buy-any-gadget" => "We Buy Any Gadget",
            "music-magpie" => "MusicMagpie",
            "mc-recycle" => "MC Recycle",
            "finitomobile" => "Finito Mobile"
        );
        foreach($temp as $row) {
            if(isset($conv[$row])) {
                array_push($merchants, $conv[$row]);
            } else {
                array_push($merchants, $row);
            }
        }
        // dd($merchants);
        if(!empty($graph_datas)){
            $variables = [
                'graph_datas' => $graph_datas,
                'product' => $model.' '.$request->input('capacity').'GB'.' ('.$network.')',
                'merchants' => $merchants,
                'products' => $all,
                'capacities' => $capacities
            ];
        } else {
            $error = "Sorry, don't exist the product in DB. Please input correct information.";
            $variables = ['error_msg'=>$error,
                        'products' => $all,
                        'capacities' => $capacities
                    ];
        }


        // dd($variables);
        return view('graph')->with($variables);
    }

    public function capacityFilter()
    {
        $val = $_GET['val'];
        $modelminus = str_replace('_', ' ', $val);
        $model = str_replace('*', '+', $modelminus);
        $capacities = Atom_juice_data::where('product', $model)
                                    ->distinct('capacity')
                                    ->pluck('capacity');
        return view('capacity', ['capacities' => $capacities]);

    }
}
