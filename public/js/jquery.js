$(function(){
    //画像ライブプレビュー
    $('.js-img-input').change(function(e){
        //ファイルオブジェクトを取得する
        var file = e.target.files[0];
        var reader = new FileReader();

        //画像でない場合は処理終了
        if(file.type.indexOf('image') < 0){
            alert('画像ファイルを指定してください。');
            return false;
        }

        //アップロードした画像を設定する
        reader.onload = (function(file){
            return function(e){
                $('.js-prof-img').attr("src", e.target.result);
                $('.js-prof-img').attr("title", file.name);
            };
        })(file);
        reader.readAsDataURL(file);

    });

    //文字数カウント
    $('.js-show-count').text(function (){
        //プロフィールを編集する際に自己紹介部分のデフォルト文字数を記載
        var defaltCount = $('.js-input-count').text().length
        $(this).text(defaltCount);
        // プロフィールの自己紹介部分文字数のカウント
        $('.js-keyup-count').keyup(function () {
            var count = $(this).val().length;
            $('.js-show-count').text(count);
        })
    })

});
