<div class="row">    
        <div class="col-sm-12 panel-heading">
            <span style="color:#fff;" id="slt-lang"></span>
            </div>
            <div class="form-login col-sm-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                <div class="panel-title"><label for="" class="login-title">LOGIN</label></div>
                </div>
                
                <div class="panel-body">
                <form action="app/controller/LoginController.php?register" method="post" >
                    <div class="form-group">
                        <label for="fullname" class="fullname-title">FullName: </label>
                        <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" id="fname" name="fullname" class="form-control" placeholder="Full Name">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="uname" class="uname-title">UserName: </label>
                        <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" id="uname" name="username" class="form-control" placeholder="User Name">
                        </div> 
                    </div>
                
                    <div class="form-group">
                        <label for="passwd" class="passwd-title">Password: </label>
                        <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-lock"></i>
                        </span>
                        <input type="password" id="passwd" name="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fullname" class="fullname-title">FullName: </label>
                        <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" id="fname" name="fullname" class="form-control" placeholder="Full Name">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="uname" class="uname-title">Role: </label>
                        <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" id="uname" name="role" class="form-control" placeholder="User Name">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="fullname" class="fullname-title">Email: </label>
                        <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="text" id="fname" name="email" class="form-control" placeholder="Full Name">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="uname" class="uname-title">Phone: </label>
                        <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                        <input type="number" id="uname" name="phone" class="form-control" placeholder="User Name">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="uname" class="uname-title">Address: </label>
                        <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-home"></i></span>
                        <input type="text" id="uname" name="address" class="form-control" placeholder="User Name">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="fullname" class="fullname-title">Image: </label>
                        <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-picture-o"></i></span>
                        <input type="file" name="img" class="form-control" placeholder="Image">
                        </div> 
                    </div>
                    <input type="submit" id="login-btn" value="LOGIN" class="btn btn-primary">
                    <a href="/signup" class="btn btn-default" id="signup-btn">SignUp</a>
                </form>
                <span id="forgot_pass"> </span><a href="" id="reset_pass"> </a>
                <hr>
                <p id="other-login"></p>
                <button class="btn btn-primary"><i class="fa fa-facebook"></i> Facebook</button>
                <button class="btn btn-danger"><i class="fa fa-google"></i> Google</button>
                </div>
            </div>
        </div>
    </div>