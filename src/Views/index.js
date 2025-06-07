import page from "page";

import { login } from "./login/script.js";
import { logout } from "./dashboard/menu/script.js";

logout()

page('/login', login);

// init routes
page({ click: false });