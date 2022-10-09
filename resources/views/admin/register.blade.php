<form action="doregister" method='POST'>
                            @csrf
                            <div class="group-input">
                                <label for="username">UserName</label>
                                <input name='name' placeholder='Enter UserName' type="text" id="username">
                            </div>
                            <div class="group-input">
                                <label for="pass">Email</label>
                                <input name='email' placeholder='Enter Email' type="text" id="pass">
                            </div>
                            <div class="group-input">
                                <label for="con-pass">Password</label>
                                <input name='password' placeholder='Enter Password' type="text" id="con-pass">
                            </div>
                            <button type="submit" class="site-btn register-btn">REGISTER</button>
                        </form>