<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="post" id="login" action="">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Sing In</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="show-msg">
                 </div>
                    @csrf
                    <div class="form-group">
                        <label><span class="login-icon lnr lnr-smartphone"></span> Mobile</label>
                        <input type="text" class="form-control" maxlength="15" id="formGroupExampleInput" name="mobile"
                            placeholder="98XXXXXXXX">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2"><span class="login-icon lnr lnr-lock"></span>
                            Password</label>
                        <input type="password" name="password" minlength="3" class="form-control" maxlength="20"
                            id="formGroupExampleInput2">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn primary-btn">Sign In</button>
                </div>
            </div>
        </form>
    </div>
</div>
