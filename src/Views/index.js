import { Router } from "blots";

import { login } from "./pages/login/script.js";
import { logout } from "./pages/dashboard/menu/script.js";
import { listUsers } from "./pages/users/list/script.js";

logout();

const router = new Router();

router.add("/login", login);
router.add("/dashboard/users", listUsers);

router.resolve(false);
