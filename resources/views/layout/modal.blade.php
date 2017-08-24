<!-- Modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Adding music</h4>
            </div>
            <div class="modal-body">
                <form name="formAddsong" class="form-horizontal">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name"
                                   placeholder="Type name of song" />
                            <span id="helpBlock2" class="help-block">Type name of song</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Link song</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="age" name="age"
                                   placeholder="http://">
                            <span id="helpBlock2" class="help-block">Link of song</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Image</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" name="email"
                                   placeholder="http://"/>
                            <span id="helpBlock2" class="help-block">Link image of song</span>
                        </div>
                    </div>
                    <label for="inputEmail3" class="col-sm-3 control-label">Type</label>
                    <select name="" id="">
                        <option>Pop</option>
                        <option>Rap</option>
                        <option>RnB</option>
                        <option>Balad</option>
                        <option>Country</option>
                    </select>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Lưu</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->