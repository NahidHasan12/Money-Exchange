
<div class="modal fade" id="edit_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="brand_alert_sms">  </div>
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form class="brand_form" action="" method="post">

            <div class="modal-body">
            <div class="mb-3">
                <label for="username" class="form-label">User Name</label>
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">User Email</label>
                <input type="text" name="email" id="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Old Password</label>
                <input type="text" name="password" id="password" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">New Password</label>
                <input type="text" name="password" id="password" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Confirm Password</label>
                <input type="text" name="password" id="password" class="form-control">
            </div>

            <div class="mb-3">
                <label for="profile" class="form-label">User Profile</label>
                <input type="file" name="profile" id="profile" class="form-control">
            </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    </div>
</div>
