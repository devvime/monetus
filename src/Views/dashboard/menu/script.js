import { api } from "../../helpers/api.js";
import Swal from "sweetalert2";

export function logout() {
  const logoutBtn = document.querySelector("#logout-btn");

  if (logoutBtn !== null) {
    logoutBtn.addEventListener("click", () => {
      api.post("/api/logout", {}).then((res) => {
        Swal.fire({
          icon: "success",
          title: "Success",
          text: "Logout successfully",
        }).then((e) => {
          location.href = "/login";
        });
      });
    });
  }
}
