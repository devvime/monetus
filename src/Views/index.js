import page from "page";

import { login } from "./login/script.js";
import { logout } from "./dashboard/menu/script.js";
import { listUsers } from "./users/list/script.js";

logout()

page('/login', login);
page('/dashboard/users', listUsers);

// init routes
page({ click: false });