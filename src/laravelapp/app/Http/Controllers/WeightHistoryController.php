<?php

namespace App\Http\Controllers;

use App\Http\Requests\WeightHistory\StoreRequest;
use App\Http\Requests\WeightHistory\UpdateRequest;
use App\Models\WeightHistory;
use Illuminate\Http\Request;

class WeightHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 体重情報を取得する
        $weighthistories = WeightHistory::get();
        
        return $weighthistories;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        // モデル作成
        $wh = new WeightHistory();

        // リクエストパラーメータを取得
        $wh->day = $request->get('day');
        $wh->weight = $request->get('weight');
        $wh->calorie_intake = $request->get('calorie_intake');
        $wh->calorie_burned = $request->get('calorie_burned');
        $wh->memo = $request->get('memo');
        $wh->updated_by = $request->get('updated_by');

        // DBへ保存
        $ret = $wh->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
  
        // 更新IDを取得する
        $wh = WeightHistory::find($id);

        // リクエストパラーメータを取得
        $wh->day = $request->get('day');
        $wh->weight = $request->get('weight');
        $wh->calorie_intake = $request->get('calorie_intake');
        $wh->calorie_burned = $request->get('calorie_burned');
        $wh->memo = $request->get('memo');
        $wh->updated_by = $request->get('updated_by');

        // DBへ保存
        $ret = $wh->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // 更新IDを取得する
        $wh = WeightHistory::find($id);

        // DBへ保存
        $ret = $wh->delete();
    }
}
