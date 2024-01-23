   let savedPassword;

        function changePassword() {
            const currentPassword = document.getElementById('currentPassword').value;
            const newPassword = document.getElementById('newPassword').value;
            const confirmPassword = document.getElementById('confirmPassword').value;

            if (newPassword === confirmPassword) {
                // Save the password (temporary)
                savedPassword = newPassword;
                alert('Password changed successfully!');
                // Reset form
                document.getElementById('passwordForm').reset();
            } else {
                alert('New password and confirm password do not match. Please try again.');
		
		document.getElementById('passwordForm').reset();
            }
        }