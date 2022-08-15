let main_photo = false;

$('input[name="main_photo"]').change(function (e) {
    main_photo = e.target.files[0];
});

// tinymce

 //tinymce.init({
 //     selector: 'textarea',
 //     plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
 //     toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
 //     toolbar_mode: 'floating',
 //     tinycomments_mode: 'embedded',
 //     tinycomments_author: 'Author name',
 //     language_url : 'assets/js/langs/ru.js',
 //     language: 'ru'
 //  });