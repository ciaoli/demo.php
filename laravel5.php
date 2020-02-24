<?php

//Laravelの特徴
//フルスタックなPHPフレームワーク

//フルスタックとは、
//主にウェブ開発において、複数種類（ないしは「あらゆる」種類）の開発技術を習得しており、
//開発業務における一通りの需要に応えられるような技能・スキルのことである。 
//そのような技能を身につけた開発者は「フルスタックエンジニア」「フルスタック開発者」のように呼ばれることが多

//フレームワークとは、アプリケーションソフトを開発する際によく必要をされる汎用的な機能をまとめて提供し、
//アプリケーションの土台として機能するソフトウェアのことです。 
//元々は枠組み、下部構想、構造、組織という意味の英単語です。 アプリケーションのひな形であり、
//これを開発に利用することで、大幅な効率の向上が見込めます。


//ルーティング、コントローラ、ビュー、ORMなど基本的な機能

//ルート：URLとコントローラーのアクション対応ルール

//近代的なWebアプリで活用されるジョブキューやWebストレージなども積極的に統合している。
//MITライセンスの下でリリースされており、そのソースコードはGitHubにホスティングされている。

//このソフトウェアを誰でも無償で無制限に扱って良い。ただし、著作権表示および本許諾表示をソフトウェアのすべての複製または重要な部分に記載しなければならない。
//作者または著作権者は、ソフトウェアに関してなんら責任を負わない。

//コードが読みやすく、書きやすい
//学習コストの低さ
//強力なルーティングフィルター
//柔軟なオートローダー
//簡単なページネーション
//ビューをサポートするコンポーサー

//Blade


//表1：Laravelの主な機能
//項目	内容
//ルーティング 	URLと対応する処理を紐づけているのがルーティングです。
//このルーティング機能があるおかげで、.phpで終わるURLのようなphpファイ
//ルを連想するURLを避けることができ、処理をひとつのファイルやクラスにま
//とめることが可能となります。
//Blade	Laravelはテンプレートエンジンを内包しています。それがBladeです。
//ミドルウェア	URLに対応したある処理を行う際、その前後に処理を付加することができます。
//これをミドルウェアと言います。
//エラーハンドラ	例外やエラーが発生した際、そのパターンに応じて、例えば障害発生の画面を
//表示したりなどの処理を行うことができます。
//DI	システム開発を行っていくと、クラスのインスタンス同士がさまざまに依存し
//あうようになります。この依存度を極力下げて、実行時に外部から与えてもら
//えるようにした仕組みがDI（Dependency Injection: 依存性注入）です。
//Laravelは、このDIを実現する方法として、サービスコンテナというのを用い
//ています。
//バリデーション	
//システム開発を行う際、入力値のチェック、つまりバリデーションのコー
//ディングというのは、煩わしいものです。
//Laravelは、このバリデーションを設定のみで自動的に行ってくれる機能
//があります。

//データベース連携	Webシステムにおいて、データベースを使わないものは少ないでしょう。
//そのデータベースとPHPを連携させる場合、定型処理が含まれ、
//それなりに煩わしいものです。そういった定型処理を行う機能がLaravelには
//あります。
//認証の自動化	Webシステムでは、そのシステムへのログイン処理が含まれることが多々あり
//ます。
//また、そういったシステムでは、ログインしていないと使ってはいけない処理も
//含まれています。そういったログイン処理、ログインしているかどうかの
//チェック処理、つまりは認証を自動化してくれる機能がLaravelにはあります。

//php artisan list
//CakePHP（ケイクピーエイチピー）
//zend framework（ゼンドフレームワーク）
//laravel（ララベル）
//Symfony（シンフォニー）
//codeigniter（コードイグナイター）
//FuelPHP（ヒューエルピーエイチピー）
//Phalcon（ファルコン）

//Laravelは開発するのに便利だが、動作が速いとは言えない。