<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Todo;

class TodoController extends Controller
// Modelクラス
{
    private $todo;
    // TodoControllerのクラスプロパティ

    public function __construct(Todo $todo)
    // new Todo()という記述が複数回出てきているためTodoクラスのインスタンスを生成し、$todoに代入
    {
        $this->todo = $todo;
        // コンストラクタインジェクションで生成したTodoクラスのインスタンスをプロパティに代入 Todoクラスのインスタンスが使いまわせる
    }

     public function create()
    //  create() 作成画面
    {
        return view('todo.create');
        // 空の入力フォームを表示
    }

    public function index()
    { 
        $todos = $this->todo->all();
         return view('todo.index', ['todos' => $todos]);
    }

    public function store(TodoRequest $request) 
    // store関数 フォームから送信された新しいデータをdbに保存、収納
    {
        $inputs = $request->all();
        $this->todo->content = $request->input('content');
        // fill 大量のデータを一瞬で仕分け$inputsの連想配列を結合
        $this->todo->save();
        return redirect()->route('todo.index');
        // 処理が終わった後に「指定した名前のルート（ニックネーム）へ画面を切り替える
    }

    public function show($id)
{
    $todo = $this->todo->find($id);
    // IDカラム）が一致するデータを1件だけ取ってくる
    return view('todo.show', ['todo' => $todo]);
}

public function edit($id)
{
    // TODO: 編集対象のレコードの情報を持つTodoモデルのインスタンスを取得
    $todo = $this->todo->find($id);
    return view('todo.edit', ['todo' => $todo]);
}

public function update(TodoRequest $request, $id)
{
    $inputs = $request->all();
    // $inputs 連想配列
    $todo = $this->todo->find($id);
    // $idと一致する主キーを持つレコードをデータベースから検索し結果を代入
    $todo-> fill($inputs)->save();
    // 連想配列（$inputs）の内容を、$todo インスタンスの各項目に流し込み（fill）、それを保存（save）した
    return redirect()->route('todo.show', $todo->id);
}

public function delete($id)
{
    $todo = $this->todo->find($id);
    $todo->delete();
    return redirect()->route('todo.index');
}
}