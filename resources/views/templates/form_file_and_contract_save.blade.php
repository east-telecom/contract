

<form action="#" class="file-uploaded-div mb-5 js_file_form_and_save_contract" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="template_number" class="js_hidden_template_class" value="">
    <input type="hidden" name="number" class="js_hidden_number" />
    <input type="hidden" name="title" class="js_hidden_title" />
    <input type="hidden" name="data" class="js_hidden_data" />
    <input type="hidden" name="hidden_files" class="js_hidden_files" value="">
    <input type="file" id="inp-add-2" name="files[]" multiple>
    <button type="submit" class="btn btn-success mt-2 btn-block" name="btn"><i class="fas fa-check"></i>&nbsp; Сохраните документ</button>
</form>