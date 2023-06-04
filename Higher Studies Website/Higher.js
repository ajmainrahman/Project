// Search Funcation
function search() {
    var searchInput = document.getElementById("search-input").value;
    alert("Performing search for: " + searchInput);
    // Perform search operation based on the searchInput value
}

// Get the necessary elements
const bangladeshCGPAInput = document.getElementById('bangladesh-cgpa');
const calculateBtn = document.getElementById('calculate-btn');
const australiaGPAElement = document.getElementById('australia-gpa');
const germanyGPAElement = document.getElementById('germany-gpa');
const usaGPAElement = document.getElementById('usa-gpa');
const franceGPAElement = document.getElementById('france-gpa');
const canadaGPAElement = document.getElementById('canada-gpa');

// Function to calculate and display the converted GPAs
function calculateGPAs() {
    const bangladeshCGPA = parseFloat(bangladeshCGPAInput.value);

    const australiaGPA = (bangladeshCGPA * 3.7).toFixed(2);
    const germanyGPA = (bangladeshCGPA * 1.8).toFixed(2);
    const usaGPA = (bangladeshCGPA * 4.0).toFixed(2);
    const franceGPA = (bangladeshCGPA * 2.3).toFixed(2);
    const canadaGPA = (bangladeshCGPA * 2.5).toFixed(2);

    australiaGPAElement.textContent = australiaGPA;
    germanyGPAElement.textContent = germanyGPA;
    usaGPAElement.textContent = usaGPA;
    franceGPAElement.textContent = franceGPA;
    canadaGPAElement.textContent = canadaGPA;
}

// Add event listener to the calculate button
calculateBtn.addEventListener('click', calculateGPAs);
