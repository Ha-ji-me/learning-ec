<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\SampleTestController;

class LifeCycleController extends Controller
{
    public function showService()
    {
        //サービスコンテナにサービスを登録
        app()->bind('lifeCycleTest', function() {
            return 'ライフサイクル登録テスト';
        });

        //サービスコンテナからサービスを取り出す
        $test = app()->make('lifeCycleTest');

        //サービスコンテナなしのパターン
        // $message = new MessageTestController();
        // $sample = new SampleTestController($message);
        // $sample->run();

        //サービスコンテナなしのパターン
        app()->bind('sample', SampleTestController::class);
        // $sample = app()->make('sample');
        // $sample->run();

        //サービスコンテナの中身を確認
        dd($test, app());
    }
}
