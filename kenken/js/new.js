$(function(){
    // user_icon
    $( document ).on( "change", "[type=file]", function(){
        console.log(this);
        var wrap = $(this).parents('.file-wrap');
        var file = this.files[0];
        // ファイルの読み込み
        var reader = new FileReader();
        reader.readAsDataURL(file);
        $(reader).on("load",function(){
            var imgBase64Data = this.result;
            $( ".thumb_file",wrap ).attr( "src", imgBase64Data );
            $("[name='thumb']").val(imgBase64Data);

        });
    });
 
});