// Get the necessary elements
const bangladeshCGPAInput = document.getElementById('bangladesh-cgpa');
const calculateBtn = document.getElementById('calculate-btn');
const convertedCGPAElements = document.querySelectorAll('.converted-cgpa');

// CGPA conversion rates for different countries
const conversionRates = {
    germany: 1.8,
    canada: 2.5,
    usa: 4.0,
    australia: 3.7,
    france: 2.3,
};

// Function to calculate and display the converted CGPA
function calculateCGPA() {
    const bangladeshCGPA = parseFloat(bangladeshCGPAInput.value);

    convertedCGPAElements.forEach((element) => {
        const country = element.parentNode.querySelector('.country').textContent.trim().toLowerCase();
        const convertedCGPA = (bangladeshCGPA * conversionRates[country]).toFixed(2);
        element.textContent = convertedCGPA;
    });
}

// Add event listener to the calculate button
calculateBtn.addEventListener('click', calculateCGPA);
