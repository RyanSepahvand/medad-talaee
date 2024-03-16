document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    // Get form values
    var fullName = document.getElementById('fullName').value;
    var email = document.getElementById('email').value;
    var grade = document.getElementById('grade').value;
    
    // Save data to localStorage
    var registrationData = {
        fullName: fullName,
        email: email,
        grade: grade
    };
    localStorage.setItem('registrationData', JSON.stringify(registrationData));
    
    // Redirect to another page
    window.location.href = 'registration_confirmation.html';
});
