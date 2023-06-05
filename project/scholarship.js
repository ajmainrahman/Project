// Get the button element
var button = document.querySelector('button');

// Add a click event listener to the button
button.addEventListener('click', function() {
  // Display an alert when the button is clicked
alert('Hello World!');
});

// Get all the links in the navigation menu
var links = document.querySelectorAll('nav a');

// Add a click event listener to each link
for (var i = 0; i < links.length; i++) {
    links[i].addEventListener('click', function(event) {
    // Prevent the default behavior of the link
    event.preventDefault();

    // Get the target section from the link's href attribute
    var target = this.getAttribute('href');

    // Scroll smoothly to the target section using the scrollIntoView method
    document.querySelector(target).scrollIntoView({
        behavior: 'smooth'
    });
});
}
function calculateCGPA() {
  var cgpa = parseFloat(document.getElementById('cgpa').value);
  var usGpa = (cgpa * 4) / 10;
  var ukGpa = (cgpa * 9.5) / 10;
  document.getElementById('result').innerHTML = "US GPA: " + usGpa.toFixed(2) + "<br>UK GPA: " + ukGpa.toFixed(2);
}