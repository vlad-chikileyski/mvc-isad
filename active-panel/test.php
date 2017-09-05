<?php
if (count($_FILES['userfile'])) {
    $path = 'img/'; // директория для загрузки
    $ext = array_pop(explode('.',$_FILES['userfile']['name'])); // расширение
    $new_name = time().'.'.$ext; // новое имя с расширением
    $full_path = $path.$new_name; // полный путь с новым именем и расширением

    if($_FILES['userfile']['error'] == 0){
        if(move_uploaded_file($_FILES['userfile']['tmp_name'], $full_path)){
            // Если файл успешно загружен, то вносим в БД (надеюсь, что вы знаете как)
            // Можно сохранить $full_path (полный путь) или просто имя файла - $new_name
        }
    }   
}
?>
<script src="jquery.js" type="text/javascript"></script>
<script src="jquery.form.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#form_id').submit(function() {
        $('#loading').show(); // Показываем анимацию загрузки
        $(this).ajaxSubmit({
            success: function() {
                $('#loading').hide(); // Скрываем анимацию загрузки
            }
        });
    });
});
</script>
<img src="loading.gif" id="loading" alt="" style="display: none;" />
<form id="upload" enctype="multipart/form-data" method="post" action="">
    <input type="file" name="userfile" />
    <input type="submit" name="upload" value="Upload file" />
</form>