<div class="block pull-r-l">
    <div class="block-header bg-body-light">
        <h3 class="block-title">
            <i class="fa fa-fw fa-pencil font-size-default mr-5"></i>M-PESA
        </h3>
        <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
        </div>
    </div>
    <div class="block-content">
        <form action="{{url('settings')}}" method="POST">
            <div class="d-none">
                @csrf
                <input type="hidden" name="option" value="mpesa" >
            </div>
            <div class="form-group mb-15">
                <div class="form-material floating">
                    <select class="form-control" id="material-select2" name="value[env]">
                        <option></option><!-- Empty value for demostrating material select box -->
                        <option value="sandbox">Sandbox</option>
                        <option value="live">Live</option>
                    </select>
                    <label for="material-select2">Set Environment</label>
                </div>
            </div>
            <div class="form-group mb-15">
                <div class="form-material floating">
                    <select class="form-control" id="material-select2" name="value[type]">
                        <option></option><!-- Empty value for demostrating material select box -->
                        <option value="1">Paybill</option>
                        <option value="2">Buy Goods</option>
                    </select>
                    <label for="material-select2">Identifier Type</label>
                </div>
            </div>
            <div class="form-group mb-15">
                <label for="side-overlay-profile-name">Shortcode</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="side-overlay-profile-name" name="value[shortcode]" placeholder="Shortcode" value="123456">
                </div>
            </div>
            <div class="form-group mb-15">
                <label for="side-overlay-profile-name">Key</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="side-overlay-profile-name" name="value[key]" placeholder="Shortcode" value="123456">
                </div>
            </div>
            <div class="form-group mb-15">
                <label for="side-overlay-profile-name">Secret</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="side-overlay-profile-name" name="value[secret]" placeholder="Shortcode" value="123456">
                </div>
            </div>
            <div class="form-group mb-15">
                <label for="side-overlay-profile-name">Username</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="side-overlay-profile-name" name="value[username]" placeholder="Shortcode" value="123456">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-6">
                    <button type="submit" class="btn btn-alt-primary btn-lg">Save now</button>
                </div>
            </div>
        </form>
    </div>
</div>