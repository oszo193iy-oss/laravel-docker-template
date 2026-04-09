# Laravel Lesson レビュー②

## Todo編集機能

### @method('PUT')を記述した行に何が出力されているか
<input type="hidden" name="_method" value="PUT">
### findメソッドの引数に指定しているIDは何のIDか
データベースのidカラム
### findメソッドで実行しているSQLは何か
select * from
### findメソッドで取得できる値は何か
データベースの１行分のデータ
### saveメソッドは何を基準にINSERTとUPDATEを切り替えているのか
existsプロパティを基準にそのデータがすでにデータベースにあるか、それとも今生まれたばかりかを見分けて切り替えている
## Todo論理削除

### traitとclassの違いとは
traitはインスタンス化できないがclassはインスタンス化ができる
### traitを使用するメリットとは
複数のクラス間でコードを共通化・再利用できる
## その他

### TodoControllerクラスのコンストラクタはどのタイミングで実行されるか
そのコントローラーのインスタンスが最初に生成（インスタンス化）されるタイミング
### RequestクラスからFormRequestクラスに変更した理由
バリデーションロジックの分離、コードの可読性向上、および保守性の確保
### $errorsのhasメソッドの引数・返り値は何か
引数 $key(string)
返り値 bool
### $errorsのfirstメソッドの引数・返り値は何か
引数 $key (string|null) $format (string|null):
返り値 string
### フレームワークとは何か
目的達成や課題解決のための枠組みや骨組みや構造のこと
### MVCはどういったアーキテクチャか
Eloquentと呼ばれる機能
### ORMとは何か、またLaravelが使用しているORMは何か
ORMとはプログラムのオブジェクト指向言語。
Laravelが使用しているORMは、SQLを直接操作することなくデータベースとマッピングされたClassのメソッドを用いることでDBとやり取りを行うことができ
### composer.json, composer.lockとは何か
composer.json プロジェクトが動くために必要なライブラリをまとめたリスト
composer.lock PHPプロジェクトで依存ライブラリのバージョンを厳密に固定するファイル
### composerでインストールしたパッケージ（ライブラリ）はどのディレクトリに格納されるのか
プロジェクトのルートディレクトリにあるvendorディレクトリにすべて格納されます