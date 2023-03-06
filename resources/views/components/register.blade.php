<div class="ms_register_popup">
    <div id="myModal" class="modal  centered-modal" role="dialog">
        <div class="modal-dialog register_dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">
                    <i class="fa_icon form_close"></i>
                </button>
                <div class="modal-body">
                    <div class="ms_register_img">
                        <img src="{{asset('clients/images/register_img.png')}}" alt="" class="img-fluid" />
                    </div>
                    <div class="ms_register_form">
                        <h2>créer un compte</h2>
                        <form action="{{route('register')}}" method="post">
                            @csrf
                        <div class="form-group">
                            <input type="text" placeholder="Enter Your Name" name="name" class="form-control">
                            <span class="form_icon">
                        <i class="fa_icon form-user" aria-hidden="true"></i>
                        </span>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Enter Your Email" name="phone" class="form-control">
                            <span class="form_icon">
                        <i class="fa_icon form-envelope" aria-hidden="true"></i>
                    </span>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Enter Password" name="password" class="form-control">
                            <span class="form_icon">
                    <i class="fa_icon form-lock" aria-hidden="true"></i>
                    </span>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Confirm Password" class="form-control">
                            <span class="form_icon">
                    <i class=" fa_icon form-lock" aria-hidden="true"></i>
                    </span>
                        </div>
                        <button type="submit"class="ms_btn">s'inscrire</button>
                        </form>
                        <p>vous avez un compte? <a href="#myModal1" data-toggle="modal" class="ms_modal hideCurrentModel">se connecter</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----Login Popup Start---->
    <div id="myModal1" class="modal  centered-modal" role="dialog">
        <div class="modal-dialog login_dialog">
         
            <!-- Modal content-->
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">
                    <i class="fa_icon form_close"></i>
                </button>
                <div class="modal-body">
                    <div class="ms_register_img">
                        <img src="{{asset('clients/images/register_img.png')}}" alt="" class="img-fluid" />
                    </div>
                    <div class="ms_register_form">
                        <h2>se connecter</h2>
                        <form action="{{route('login')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" placeholder="votre telephone" name="phone" class="form-control">
                            <span class="form_icon">
                        <i class="fa_icon form-envelope" aria-hidden="true"></i>
                    </span>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Enter Password" name="password" class="form-control">
                            <span class="form_icon">
                    <i class="fa_icon form-lock" aria-hidden="true"></i>
                    </span>
                        </div>
                        <div class="remember_checkbox">
                            <label>rester connecté
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                        </div>
                        <button type="submit" class="ms_btn" >connexion</button>
                        <div class="popup_forgot">
                            <a href="#">Mot de passe oublié ?</a>
                        </div>
                        </form>
                        <p>pas de compte? <a href="#myModal" data-toggle="modal" class="ms_modal1 hideCurrentModel">s'inscrire</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>