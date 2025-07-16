<!-- MODALS -->
    <div class="modal fade" id="signInModal" tabindex="-1" aria-labelledby="signInModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4">
                <div class="modal-header border-0">
                    <h5 class="modal-title w-100 text-center" id="signInModalLabel">Sign In</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-4 pb-4">
                    <form>
                        <div class="mb-3">
                            <label for="signInEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="signInEmail" placeholder="you@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="signInPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="signInPassword" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mt-3">Sign In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="signUpModal" tabindex="-1" aria-labelledby="signUpModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4">
                <div class="modal-header border-0">
                    <h5 class="modal-title w-100 text-center" id="signUpModalLabel">Create Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-4 pb-4">
                    <form>
                        <div class="mb-3">
                            <label for="signUpName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="signUpName" placeholder="John Doe">
                        </div>
                        <div class="mb-3">
                            <label for="signUpEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="signUpEmail" placeholder="you@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="signUpPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="signUpPassword" placeholder="Create a password">
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mt-3">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
