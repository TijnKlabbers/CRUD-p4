const form = document.getElementById("form");
const username = document.getElementById("username");
const password = document.getElementById("password");

form.addEventListener("submit", (e) => {
  e.preventDefault();

  const resultaat = validateInputs();

  if (resultaat == "succes") {
    form.submit();
  }
});

const setError = (element, message) => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector(".error");

  errorDisplay.innerText = message;
  inputControl.classList.add("error");
  inputControl.classList.remove("success");
};

const setSuccess = (element) => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector(".error");

  errorDisplay.innerText = "";
  inputControl.classList.add("success");
  inputControl.classList.remove("error");
};

const validateInputs = () => {
  const usernameValue = username.value.trim();
  const passwordValue = password.value.trim();

  let errors = 0;

  if (usernameValue === "") {
    errors++;
    setError(username, "Username is required");
  } else {
    setSuccess(username);
  }

  if (passwordValue === "") {
    errors++;
    setError(password, "Password is required");
  } else if (passwordValue.length < 4) {
    errors++;
    setError(password, "Password must be at least 4 character.");
  } else {
    setSuccess(password);
  }

  if (!errors) {
    return "succes";
  }
};


