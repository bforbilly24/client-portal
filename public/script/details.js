$(".dropdown-toggle").dropdown();


// ADDING FUNCTION NAME PROFILE
// Take element from id fullname
const fullNameElement = document.getElementById("fullName");
const initialNameElement = document.getElementById("initialName");

// Take the text from the fullName element and remove the words "Hello,", "Mr.", and "Ms."
const fullName = fullNameElement.textContent
  .trim()
  .replace(/Hello, |Mr\. |Ms\. /g, "");

// Separate the words in the full name
const words = fullName.split(" ");

// Take initial only from two first word
const initials = words
  .slice(0, 2)
  .map((word) => word.charAt(0).toUpperCase())
  .join("");

// Set inisial pada elemen initialName
initialNameElement.textContent = initials;

// ADDING NEW FUNCTION FILTER
// Set "active" class on "All" button and remove "text-filter" class
document.querySelector(".btn[data-category='all']").classList.add("active");
document.querySelector(".btn[data-category='all']").classList.remove("text-filter");

function filterProjects(category) {
  console.log("Category:", category);

  const buttons = document.querySelectorAll(".btn");

  buttons.forEach((button) => {
    const buttonCategory = button.getAttribute("data-category");

    if (category === buttonCategory) {
      button.classList.add("active");
      button.classList.remove("text-filter");
    } else {
      button.classList.remove("active");
      button.classList.add("text-filter");
    }
  });

  const projects = document.querySelectorAll(".link-card");

  projects.forEach((project) => {
    const projectId = project.id;

    // SHOW ALL PROJECT IF CATEGORY IS "ALL" OR PROJECT RELATE WITH CATEGORY
    if (category === "all" || projectId === category) {
      project.style.display = "block";
    } else {
      project.style.display = "none";
    }
  });
}

// ADDING NEW FUNCTION CIRCLE PERCENTAGE RANGE
var containers = document.querySelectorAll(".percentage-svg");

containers.forEach(function (container) {
  var circle = container.querySelector(".circle");
  var length = circle.getTotalLength();

  var text = container.querySelector(".percentage");
  var percentage = parseInt(text.innerHTML);

  setPercentage(circle, length, percentage);
});

function setPercentage(circle, length, percentage) {
  // Ensure the percentage is non-negative
  percentage = Math.abs(percentage);

  var new_length = (length / 100) * percentage;

  circle.style["stroke-dashoffset"] = length - new_length;

  // Set the color based on the check
  circle.style.stroke = percentage >= 100 ? "#00FF00" : "#0368fb";
}
