function Submit(e) {
    const name = document.getElementById('name').value.trim();
    const review = document.getElementById('review').value.trim();
    
    if (!name || !review) {
        alert("Please fill out all fields!");
        e.preventDefault(); // Prevent form submission
        return false;
    }
    
    alert("Review Added Successfully");
}
