document.getElementById("bookingForm").addEventListener("submit", function(event) {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    
    if (name.trim() === "" || email.trim() === "") {
        alert("Please fill in all required fields.");
        event.preventDefault(); // Stops form submission if fields are empty
    }
});