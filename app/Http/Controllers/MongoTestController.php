<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use MongoDB\Client as Mongo;
use App\Models\User_information;
use DB;

class MongoTestController extends Controller
{
    function mongoConnect(Request $request)
    {
        $response = collect(DB::connection('mongodb')
              ->collection('user_information')->get());

        return view("index",["data"=>$response]);
    }
    public function get_data(Request $request)
    {
        $response = collect(DB::connection('mongodb')
        ->collection('user_information')->get());

        if(count($response) != 0)
        {
            
            $data['status'] = "success";
            $data['list'] = '';
            $count = 0;
     
            foreach($response as $row)
            {
                
                $data['list'] .= ' <tr>
                <td>'. $row['fname'] .'</td>
                <td>'. $row['lname'].'</td>
                <td>'. $row['mname'].'</td>
                <td>'. $row['prefix'] .'</td>
                <td>'. $row['age'].'</td>
                <td>';
                foreach($row['address'] as $list)
                {
                    $data['list'] .= $list .' '; 
                }
                $data['list'] .= '</td>';
                $data['list'] .= '<td>';
                foreach($row['favorite'] as $list1)
                {
                    $data['list'] .=  $list1['games'] .' | '. $list1['with'] .'<br>'; 
            
                }
                $data['list'] .= '</td>';
                $data['list'] .= '<td>
                    <a class="btn btn-primary btn-sm">UPDATE</a>
                    <a onclick="delete_data(\''.url("/") .'/api/users/'.$row['_id'].'\')" class="btn btn-danger btn-sm">DELETE</a>
                </td></tr>';
            }
        }
        else
        {
            $data['message'] = "No Record Found.";
            $data['status'] = "error";
        }
        print_r(json_encode($data));
    }
    public function submit_data(Request $request)
    {

        $user = new User_information;
        $user->fname = $request->input('fname');
        $user->mname = $request->input('mname');
        $user->lname = $request->input('lname');
        $user->prefix = $request->input('prefix');
        $user->age = $request->input('age');
        $user->address = $request->input('address');
        $user->favorite = $request->input('favs');
        $user->save();
    }
    public function destroy($userId)
    {
        $user = User_information::find($userId);
        $user->delete();

        return response()->json(["result" => "ok"], 200);       
    }
    public function update(Request $request, $userId)
    {
        $post = Post::find($userId);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->slug = $request->slug;
        $post->save();

        return response()->json(["result" => "ok"], 201);       
    }
}
