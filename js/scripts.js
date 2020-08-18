function validateForm() {
    var field = document.forms["addToCart"]["product_size"].value;
        if (field == "" || field == null) {
            alert("Product size must be filled out");
            return false;
        }
}