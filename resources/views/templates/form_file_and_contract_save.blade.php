

<form action="#" class="file-uploaded-div mb-5 js_file_form_and_save_contract" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="template_number" class="js_hidden_template_class" value="">
    <input type="hidden" name="number" class="js_hidden_number" />
    <input type="hidden" name="title" class="js_hidden_title" />
    <input type="hidden" name="data" class="js_hidden_data" />
    <input type="hidden" name="hidden_files" class="js_hidden_files" value="">
    <input type="file" id="inp-add-2" name="files[]" multiple>


    @if(isset($array_comments))
        <div class="div-chat m-auto mb-5">
            <p class="text-info text-center mb-1">Комментарий</p>
            @foreach($array_comments as $comment)
                <p class="mb-0 border border-bottom-dark p-1 pl-3">
                    <span class="text-primary">{{ $comment['jurist_or_employee'] }}</span>&nbsp;
                    <span class="text-bold">{{ $comment['name'] }}</span> :&nbsp;
                    <span class="">{{ $comment['text'] }}</span>
                </p>
            @endforeach
        </div>
    @endif

    <textarea class="form-control mt-3" name="comment" rows="2" placeholder="Комментарии"></textarea>

    <button type="submit" class="btn btn-success mt-3 btn-block" name="btn"><i class="fas fa-check"></i>&nbsp; Сохранить Документ</button>
</form>