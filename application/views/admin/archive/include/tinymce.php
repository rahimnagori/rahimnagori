<script src="https://cdn.tiny.cloud/1/wnfamalcy2rutxy049cbmuvrrwymhdgs1k6ut0ql1ozgn6ji/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
  tinymce.init({
    menubar: false,
    branding: false,
    statusbar: false,
    selector: '.textarea',
    height: 200,
    plugins: [
      "advlist autolink lists link image charmap print preview anchor",
      "searchreplace visualblocks code fullscreen",
      "insertdatetime media table contextmenu paste textcolor"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | forecolor backcolor",
    setup: function (editor) {
      editor.on('change', function () {
        tinymce.triggerSave();
      });
    }
  });
</script>