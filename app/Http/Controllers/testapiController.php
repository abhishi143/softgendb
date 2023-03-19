<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class testapiController extends Controller
{
    public function get_m_group_data(Request $request)
    {
        try{
            // $metadata = StoreMetadata::where('branch_id', $request->branch_id)->first();

            // \DB::disconnect('mysql');
            // \Config::set('database.connections.mysql.database', $metadata->dbName);
            // \Config::set('database.connections.mysql.host', $metadata->host);
            // \Config::set('database.connections.mysql.username', $metadata->username);
            // \Config::set('database.connections.mysql.password', $metadata->password);
            // \DB::reconnect();
            // $storename = $metadata->storeinfo;
                
                $data = DB::select('select * from m_group');
                return response()->json([
                    'message' => 'success!',
                    'list' => $data,
                    // 'store' => $storename,
                ],201);                
        }catch(Exception $e){
            return response()->json([
                'message' => 'Something went wrong!',
                'status' => 'false'
            ], 500);
        }
    }


}