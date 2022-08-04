<!-- Delete Modal -->
<div class="modal fade modal-danger text-left" id="deleteModal" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="deleteModalMabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalMabel">Danger Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span class="js_message">Все данные будут безвозвратно удалены. <br/> Вы действительно хотите выключить его?</span>
                <span class="js_danger text-danger"></span>
            </div>
            <div class="modal-footer">
                <form id="js_modal_delete_form" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" name="saveBtn" class="btn btn-danger">Да</button>
                </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Но</button>
            </div>
        </div>
    </div>
</div>
