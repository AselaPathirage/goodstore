@extends('admin/layout')

@section('container')

<div class="row">
    <h1>Change Password</h1>
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">

                        <div class="login-form">
                            <form action="{{route('admin.conf')}}" method="post" onsubmit="return(validate())">
                                @csrf

                                <div class="form-group">
                                    <label>Current Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" id="password" placeholder="Current Password" required>
                                </div>
                                <div class="form-group">
                                    <label>New Password</label>
                                    <input class="au-input au-input--full" type="password" name="npassword" id="npassword" placeholder="New Password" required>
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input class="au-input au-input--full" type="password" name="cnpassword" id="cnpassword" placeholder="Confirm New Password" required>
                                </div>

                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Update</button>

                                <div class="alert alert-danger" role="alert">
                                    {{session('error')}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="{{asset('admin_assets/vendor/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/main.js')}}"></script>
    <script>
        function validate() {

            if (document.getElementById('npassword').value.length != 0) {
                if (document.getElementById('npassword').value.length < 8) {
                    alert("password must be longer than 8 characters");
                    document.getElementById('npassword').value = '';
                    document.getElementById('npassword').focus;
                    return false;
                }
            }
            if (document.getElementById('npassword').value != document.getElementById('cnpassword').value) {
                alert("password is not matching");
                document.getElementById('npassword').value = '';
                document.getElementById('cnpassword').value = '';
                document.getElementById('password').focus;
                return false;
            }

            return true;
        }
    </script>
</div>
@endsection