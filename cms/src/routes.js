import React from "react";

const HeaderNavigation = React.lazy(() =>
  import("./views/site/HeaderNavigation")
);
const HeaderNavigationCreate = React.lazy(() =>
  import("./views/site/HeaderNavigationCreate")
);

const Dashboard = React.lazy(() => import("./views/dashboard/Dashboard"));

const Users = React.lazy(() => import("./views/users/Users"));
const User = React.lazy(() => import("./views/users/User"));

const routes = [
  { path: "/", exact: true, name: "Home" },

  {
    path: "/global-settings/header-navigation",
    exact: true,
    name: "Header Navigation",
    component: HeaderNavigation,
  },
  {
    path: "/global-settings/header-navigation/create",
    exact: true,
    name: "Header Navigation Create",
    component: HeaderNavigationCreate,
  },

  { path: "/dashboard", name: "Dashboard", component: Dashboard },

  { path: "/users", exact: true, name: "Users", component: Users },
  { path: "/users/create", exact: true, name: "Create User", component: User },
  { path: "/users/:id", exact: true, name: "Update User", component: User },
];

export default routes;
