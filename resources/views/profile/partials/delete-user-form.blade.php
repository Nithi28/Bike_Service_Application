<section style="margin-bottom: 1.5rem;">
    <header style="background-color: #2E4EAD; color: #fff; padding: 10px;border-radius:5px;">
        <h2 style="font-size: 1.5rem; font-weight: 600;">
            Delete Account
        </h2>

        <p style="margin-top: 5px; font-weight: bold;">
            Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.
        </p>
    </header>

    <button style="background-color: #ff0000; color: #fff; padding: 0.5rem 1rem; border: none; cursor: pointer;margin-top: 15px; border-radius:5px;" onclick="openModal('confirm-user-deletion')">Delete Account</button>

    <div id="confirm-user-deletion" style="display: none;">
        <form method="post" action="{{ route('profile.destroy') }}" style="padding: 1.5rem;">
            @csrf
            @method('delete')

            <h2 style="font-size: 1.125rem; font-weight: 500; color: #333;">
                Are you sure you want to delete your account?
            </h2>

            <p style="font-size: 0.875rem; color: #666; margin-top: 0.25rem;">
                Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.
            </p>

            <div style="margin-top: 0.25rem;">
                <label for="password" style="display: none;">Password</label>
                <input
                    id="password"
                    name="password"
                    type="password"
                    style="margin-top: 0.25rem; display: block; width: 75%;"
                    placeholder="Password"
                />

                <!-- Input error message style can be added here -->
            </div>

            <div style="margin-top: 0.25rem; display: flex; justify-content: flex-end;">
                <button type="button" onclick="closeModal()" style="padding: 0.5rem 1rem; border: none; cursor: pointer; margin-left: 0.75rem; margin-top:15px;">Cancel</button>
                <button style="background-color: #ff0000; color: #fff; padding: 0.5rem 1rem; border: none; cursor: pointer; margin-left: 0.75rem;margin-top: 15px; ">Delete Account</button>
            </div>
        </form>
    </div>
</section>
<section>
<script>
    function openModal(modalId) {
        var modal = document.getElementById(modalId);
        modal.style.display = 'block';
    }

    function closeModal() {
        var modal = document.getElementById('confirm-user-deletion');
        modal.style.display = 'none';
    }
</script>
</section>