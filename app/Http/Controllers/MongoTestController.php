<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use MongoDB\Client as Mongo;


class MongoTestController extends Controller
{
    function mongoConnect()
    {
        $mongo = new Mongo;
        $connection = $mongo->laravel_mongodb->user_information;
        $response =  $connection->find()->toArray();
        return view("index",["data"=>$response]);
    }
    public function get_data(Request $request)
    {
        $mongo = new Mongo;
        $connection = $mongo->laravel_mongodb->user_information;
        $response =  $connection->find()->toArray();


        if(count($response) != 0)
        {
            $data['status'] = "success";
            $data['list'] = '';
            foreach($response as $row)
            {
                $data['list'] .= ' <tr>
                <td>'. $row->fname .'</td>
                <td>'. $row->lname.'</td>
                <td>'. $row->mname.'</td>
                <td>'. $row->prefix.'</td>
                <td>'. $row->age.'</td>
                <td>';
                foreach($row->address as $list)
                {
                    $data['list'] .= $list .' '; 
                }
                $data['list'] .= '</td>';
                $data['list'] .= '<td>';
                foreach($row->favorite as $list1)
                {
                    $data['list'] .=  $list1->games .' | '. $list1->with .'<br>'; 
            
                }
                $data['list'] .= '</td>';
                $data['list'] .= '<td>
                    <button type="button" class="btn btn-primary btn-sm">UPDATE</button>
                    <button type="button" class="btn btn-danger btn-sm">DELETE</button>
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
}
