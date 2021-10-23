<div class="modal fade" id="createPostModal" tabindex="-1" role="dialog" aria-labelledby="createPostModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="createPostModalLabel"><i class="fas fa-plus-circle"></i> Create Post</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            {!! Form::open(["url" => "/dashboard", 'method' => 'post']) !!}
            @include('partials._form')
            <div class="form-group">
                <button class="btn btn-primary" id="actionBtn" onclick="btnload()"><i class="fas fa-check"></i> Create Post</button>
            </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>