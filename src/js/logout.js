const logoutButton = document.getElementById("logoutBtn");
logoutButton.addEventListener("click", () => {
  axios({
    method: "GET",
    url: "/api/v1/user/logout.php",
  })
    .then((response) => {
      if (response.status === 200) {
        location.href = "/";
      } else {
        alert(response.data.message);
      }
    })
    .catch((error) => {
      if (error.response) {
        alert(error.response.message);
      }
    });
});