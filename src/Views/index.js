import { Router } from "blots";

import { login } from "./pages/login/login.js";
import { logout } from "./pages/dashboard/menu/menu.js";
import { listUsers } from "./pages/users/list/list.js";

logout();

const router = new Router();

router.add("/login", login);
router.add("/dashboard/users", listUsers);

router.resolve(false);
