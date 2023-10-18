// Get the form element
const form = document.querySelector('#login-form');

// Add event listener for form submission
form.addEventListener('submit', (event) => {
  // Prevent the default form submission behavior
  event.preventDefault();

  // Get the input values from the form
  const email = form.email.value;
  const password = form.password.value;
  const userType = form.userType.value;

  // Validate the input values
  if (!email || !password || !userType) {
    alert('Please fill in all the fields');
    return;
  }

  // Check if the user is a valid user
  const user = validUsers[userType];
  if (!user || email !== user.email || password !== user.password) {
    alert('Invalid email or password');
    return;
  }

  // Redirect the user to the dashboard page
  window.location.href = user.dashboardUrl;
});

// Get references to the HTML elements
const emailInput = document.getElementById('email');
const passwordInput = document.getElementById('password');
const signinButton = document.getElementById('signin-button');
const userSelect = document.getElementById('user-select');

// Define the list of valid users
const validUsers = {
  teacher: {
    email: 'teacher@example.com',
    password: 'teacher123',
    dashboardUrl: 'teacher-dashboard.php',
  },
  student: {
    email: 'student@example.com',
    password: 'student123',
    dashboardUrl: 'student-dashboard.php',
  },
  parent: {
    email: 'parent@example.com',
    password: 'parent123',
    dashboardUrl: 'parent-dashboard.php',
  },
};