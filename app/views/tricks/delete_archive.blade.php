<!-- Modal -->
<div class="modal fade" id="deleteArchiveModal" tabindex="-1" role="dialog" aria-labelledby="deleteArchiveModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">{{ trans('tricks.are_you_sure') }}</h4>
      </div>
      <div class="modal-body">
        {{ trans('tricks.are_you_sure_archive_text') }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('tricks.cancel') }}</button>
        <a href="{{$link}}" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> {{ trans('tricks.remove_trick_archive') }}</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
